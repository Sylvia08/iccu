<?php

/**
 * This is the model class for table "posts".
 *
 * The followings are the available columns in table 'posts':
 * @property string $ID
 * @property string $post_author
 * @property string $post_date
 * @property string $post_date_gmt
 * @property string $post_content
 * @property string $post_title
 * @property string $post_excerpt
 * @property string $post_status
 * @property string $comment_status
 * @property string $ping_status
 * @property string $post_password
 * @property string $post_name
 * @property string $to_ping
 * @property string $pinged
 * @property string $post_modified
 * @property string $post_modified_gmt
 * @property string $post_content_filtered
 * @property string $post_parent
 * @property string $guid
 * @property integer $menu_order
 * @property string $post_type
 * @property string $post_mime_type
 * @property string $comment_count
 */
class Posts extends CActiveRecord
{
    public function behaviors(){
        return array( 'CAdvancedArBehavior' => array(
            'class' => 'application.extensions.CAdvancedArBehavior'));
    }
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Posts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'posts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('post_author,post_content, post_title, post_excerpt,post_status', 'required'),
			//array('menu_order', 'numerical', 'integerOnly'=>true),
			array('post_author, post_status', 'length', 'max'=>20),
			array('post_name', 'length', 'max'=>200),
			array('post_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, author, post_date, category, post_title, post_status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
           'author'=>array(self::BELONGS_TO, 'User', 'post_author'),
           'comments'=>array(self::HAS_MANY, 'Comments', 'comment_post_ID'),
           'taxonomies'=>array(self::MANY_MANY, 'TermTaxonomy', 'term_relationships(object_id, term_taxonomy_id)')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'post_author' => 'Post Author',
			'post_date' => 'Post Date',
			'post_date_gmt' => 'Post Date Gmt',
			'post_content' => 'Content',
			'post_title' => 'Title',
			'post_excerpt' => 'Excerpt',
			'post_status' => 'Status',
			'comment_status' => 'Comment Status',
			'ping_status' => 'Ping Status',
			'post_password' => 'Post Password',
			'post_name' => 'Post Name',
			'to_ping' => 'To Ping',
			'pinged' => 'Pinged',
			'post_modified' => 'Post Modified',
			'post_modified_gmt' => 'Post Modified Gmt',
			'post_content_filtered' => 'Post Content Filtered',
			'post_parent' => 'Post Parent',
			'guid' => 'Guid',
			'menu_order' => 'Menu Order',
			'post_type' => 'Post Type',
			'post_mime_type' => 'Post Mime Type',
			'comment_count' => 'Comment Count',
		    'taxonomies' => 'Category',
		    'author' => 'Author',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$criteria->with = array('author', 'taxonomies');
		
		$criteria->compare('ID',$this->ID,true);
		$criteria->compare('post_author',$this->post_author,true);
		$criteria->compare('post_date',$this->post_date,true);
		$criteria->compare('post_date_gmt',$this->post_date_gmt,true);
		$criteria->compare('post_content',$this->post_content,true);
		$criteria->compare('post_title',$this->post_title,true);
		$criteria->compare('post_excerpt',$this->post_excerpt,true);
		$criteria->compare('post_status',$this->post_status,true);
		$criteria->compare('comment_status',$this->comment_status,true);
		$criteria->compare('ping_status',$this->ping_status,true);
		$criteria->compare('post_password',$this->post_password,true);
		$criteria->compare('post_name',$this->post_name,true);
		$criteria->compare('to_ping',$this->to_ping,true);
		$criteria->compare('pinged',$this->pinged,true);
		$criteria->compare('post_modified',$this->post_modified,true);
		$criteria->compare('post_modified_gmt',$this->post_modified_gmt,true);
		$criteria->compare('post_content_filtered',$this->post_content_filtered,true);
		$criteria->compare('post_parent',$this->post_parent,true);
		$criteria->compare('guid',$this->guid,true);
		$criteria->compare('menu_order',$this->menu_order);
		$criteria->compare('post_type',$this->post_type,true);
		$criteria->compare('post_mime_type',$this->post_mime_type,true);
		$criteria->compare('comment_count',$this->comment_count,true);
        $criteria->compare('category', $this->category, true);
        $criteria->compare('author', $this->author, true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		    'sort'=>array(
		        'defaultOrder' => 'post_date DESC',
    		    'attributes'=>array(
    		        'author'=>array(
    		            'asc'=>'author.username',
    		            'desc'=>'author.username DESC',
  		            ),
    		      //TODO: sort by category
//        		        'category'=>array(
//        		            'asc'=>'category',
//        		            'desc'=>'category DESC',
//        		        ),
		            '*',
    		    )
		    )
		));
	}
	
	public function getAuthor()
	{
	    return User::model()->findByPk($this->post_author)->username;
	}
	
	public function getCategory()
	{
	    //TODO: rewrite
	    return $this->taxonomies[0]->taxonomy;
	}
}