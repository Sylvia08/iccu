<?php
/**
* Class Utils
*/

class Utils
{
	public static function getBaseUrl() {
		return Yii::app()->request->baseUrl;
	}
	public static function getPostStatus()
	{
		return array(
			0=>'Draft',
			1=>'Publish',
			2=>'Pending',	
		);
	}
}