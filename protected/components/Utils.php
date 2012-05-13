<?php
/**
* Class Utils
*/

class Utils
{
	public static function getBaseUrl() {
		return Yii::app()->request->baseUrl;
	}
	
	/* Truncate HTML, close opened tags
	 *
	* @param int, maxlength of the string
	* @param string, html
	* @return $html
	*/
	public static function html_truncate($maxLength, $html){

        $printedLength = 0;
        $position = 0;
        $tags = array();

        ob_start();

        while ($printedLength < $maxLength && preg_match('{</?([a-z]+)[^>]*>|&#?[a-zA-Z0-9]+;}', $html, $match, PREG_OFFSET_CAPTURE, $position)){

            list($tag, $tagPosition) = $match[0];

            // Print text leading up to the tag.
            $str = substr($html, $position, $tagPosition - $position);
            if ($printedLength + strlen($str) > $maxLength){
                print(substr($str, 0, $maxLength - $printedLength));
                $printedLength = $maxLength;
                break;
            }

            print($str);
            $printedLength += strlen($str);

            if ($tag[0] == '&'){
                // Handle the entity.
                print($tag);
                $printedLength++;
            }
            else{
                // Handle the tag.
                $tagName = $match[1][0];
                if ($tag[1] == '/'){
                    // This is a closing tag.

                    $openingTag = array_pop($tags);
                    assert($openingTag == $tagName); // check that tags are properly nested.

                    print($tag);
                }
                else if ($tag[strlen($tag) - 2] == '/'){
                    // Self-closing tag.
                    print($tag);
                }
                else{
                    // Opening tag.
                    print($tag);
                    $tags[] = $tagName;
                }
            }

            // Continue after the tag.
            $position = $tagPosition + strlen($tag);
        }

        // Print any remaining text.
        if ($printedLength < $maxLength && $position < strlen($html))
            print(substr($html, $position, $maxLength - $printedLength));

        // Close any open tags.
        while (!empty($tags))
             printf('</%s>', array_pop($tags));

        $bufferOuput = ob_get_contents();
        ob_end_clean();         
        $html = $bufferOuput;   

        return $html;   

    }
}