<?php

/**
 * This is the model class for table "comments".
 *
 * The followings are the available columns in table 'comments':
 * @property string $comment_ID
 * @property string $comment_post_ID
 * @property string $comment_author
 * @property string $comment_author_email
 * @property string $comment_author_url
 * @property string $comment_author_IP
 * @property string $comment_date
 * @property string $comment_date_gmt
 * @property string $comment_content
 * @property integer $comment_karma
 * @property string $comment_approved
 * @property string $comment_agent
 * @property string $comment_type
 * @property string $comment_parent
 * @property string $user_id
 */
class Comments extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comments the static model class
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
		return 'comments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comment_author, comment_content', 'required'),
			array('comment_karma', 'numerical', 'integerOnly'=>true),
			array('comment_post_ID, comment_approved, comment_type, comment_parent, user_id', 'length', 'max'=>20),
			array('comment_author_email, comment_author_IP', 'length', 'max'=>100),
			array('comment_author_url', 'length', 'max'=>200),
			array('comment_agent', 'length', 'max'=>255),
			array('comment_date, comment_date_gmt', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('comment_ID, comment_post_ID, comment_author, comment_author_email, comment_author_url, comment_author_IP, comment_date, comment_date_gmt, comment_content, comment_karma, comment_approved, comment_agent, comment_type, comment_parent, user_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'comment_ID' => 'Comment',
			'comment_post_ID' => 'Comment Post',
			'comment_author' => 'Comment Author',
			'comment_author_email' => 'Comment Author Email',
			'comment_author_url' => 'Comment Author Url',
			'comment_author_IP' => 'Comment Author Ip',
			'comment_date' => 'Comment Date',
			'comment_date_gmt' => 'Comment Date Gmt',
			'comment_content' => 'Comment Content',
			'comment_karma' => 'Comment Karma',
			'comment_approved' => 'Comment Approved',
			'comment_agent' => 'Comment Agent',
			'comment_type' => 'Comment Type',
			'comment_parent' => 'Comment Parent',
			'user_id' => 'User',
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

		$criteria->compare('comment_ID',$this->comment_ID,true);
		$criteria->compare('comment_post_ID',$this->comment_post_ID,true);
		$criteria->compare('comment_author',$this->comment_author,true);
		$criteria->compare('comment_author_email',$this->comment_author_email,true);
		$criteria->compare('comment_author_url',$this->comment_author_url,true);
		$criteria->compare('comment_author_IP',$this->comment_author_IP,true);
		$criteria->compare('comment_date',$this->comment_date,true);
		$criteria->compare('comment_date_gmt',$this->comment_date_gmt,true);
		$criteria->compare('comment_content',$this->comment_content,true);
		$criteria->compare('comment_karma',$this->comment_karma);
		$criteria->compare('comment_approved',$this->comment_approved,true);
		$criteria->compare('comment_agent',$this->comment_agent,true);
		$criteria->compare('comment_type',$this->comment_type,true);
		$criteria->compare('comment_parent',$this->comment_parent,true);
		$criteria->compare('user_id',$this->user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}