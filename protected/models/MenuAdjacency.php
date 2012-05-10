<?php

/**
 * This is the model class for table "menu_adjacency".
 *
 * The followings are the available columns in table 'menu_adjacency':
 * @property integer $id
 * @property integer $parent_id
 * @property string $title
 * @property integer $position
 * @property string $tooltip
 * @property string $url
 * @property integer $visible
 * @property string $task
 * @property string $options
 */
class MenuAdjacency extends CActiveRecord
{
    private static $_items=array();
    
	/**
	 * Returns the static model of the specified AR class.
	 * @return MenuAdjacency the static model class
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
		return 'menu_adjacency';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, position, visible', 'required'),
			array('parent_id, position, visible', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>125),
			array('tooltip, options', 'length', 'max'=>100),
			array('url', 'length', 'max'=>255),
			array('task', 'length', 'max'=>164),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, parent_id, title, position, tooltip, url, visible, task, options', 'safe', 'on'=>'search'),
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
		  'parent'=>array(self::BELONGS_TO, 'MenuAdjacency', 'parent_id'),
		  'children'=>array(self::HAS_MANY, 'MenuAdjacency', 'parent_id', 'order'=>'position ASC')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'parent_id' => 'Parent',
			'title' => 'Title',
			'position' => 'Position',
			'tooltip' => 'Tooltip',
			'url' => 'Url',
			'visible' => 'Visible',
			'task' => 'Task',
			'options' => 'Options',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('position',$this->position);
		$criteria->compare('tooltip',$this->tooltip,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('visible',$this->visible);
		$criteria->compare('task',$this->task,true);
		$criteria->compare('options',$this->options,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	/**
	 * Returns the items.
	 * An empty array is returned if the item type does not exist.
	 */
	public static function items($exception = null)
	{
    	self::$_items = array();
    	if(isset($exception))
        	$models=self::model()->findAllByAttributes(
                 array(),
                 $condition = 'title != :exception',
                 $params = array(':exception' => $exception)
            );
    	else
    	    $models=self::model()->findAll();
    	foreach($models as $model)
    	    self::$_items[$model->id]=$model->title;
	 return self::$_items;
	}
	
	public function getListed() {
    	$subitems = array();
    	if($this->children) foreach($this->children as $child) {
    	    $subitems[] = $child->getListed();
    	}
    	$returnarray = array('label' => $this->title, 'url' => $this->url);
    	if($subitems != array())
    	    $returnarray = array_merge($returnarray, array('items' => $subitems));
    	return $returnarray;
	}
	
	public static function getTree() {
	   $roots = self::model()->findAllByAttributes(array(),
	              $condition = 'parent_id IS NULL and visible = 1'       
	            );
	   foreach($roots as $item){
	       $subitems = array();
	       $node = array('label' => Yii::app()->format->raw($item->title), 'url' => Yii::app()->request->BaseUrl.$item->url);
    	   if($item->children) 
	           foreach($item->children as $child) {
    	           $subitems[] = $child->getListed();
    	       }
  	       
           if($subitems != array())
    	       $returnarray[] = array_merge($node, array('items' => $subitems));
           else
               $returnarray[] = $node;
	   }
       return $returnarray;
	}
}