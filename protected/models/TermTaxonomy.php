<?php

/**
 * This is the model class for table "term_taxonomy".
 *
 * The followings are the available columns in table 'term_taxonomy':
 * @property string $term_taxonomy_id
 * @property string $term_id
 * @property string $taxonomy
 * @property string $description
 * @property string $parent
 * @property string $count
 */
class TermTaxonomy extends CActiveRecord
{
    private static $_items=array();
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TermTaxonomy the static model class
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
		return 'term_taxonomy';
	}
    
	public function allowedActions()
	{
	    return '*'; 
	}
	
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('taxonomy', 'required'),
		    array('description', 'safe'),
			array('taxonomy', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('term_taxonomy_id, term_id, taxonomy, description, parent, count', 'safe', 'on'=>'search'),
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
		    'terms'=>array(self::BELONGS_TO, 'Terms', 'term_id'),
		    'parent'=>array(self::BELONGS_TO, 'TermTaxonomy', 'parent'), 
		    'posts'=>array(self::MANY_MANY, 'Posts', 'term_relationships(object_id, term_taxonomy_id)')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'term_taxonomy_id' => 'Term Taxonomy',
			'term_id' => 'Term',
			'taxonomy' => 'Taxonomy',
			'description' => 'Description',
			'parent' => 'Parent',
			'count' => 'Count',
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

		$criteria->compare('term_taxonomy_id',$this->term_taxonomy_id,true);
		$criteria->compare('term_id',$this->term_id,true);
		$criteria->compare('taxonomy',$this->taxonomy,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('parent',$this->parent,true);
		$criteria->compare('count',$this->count,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		    'sort'=>array('defaultOrder' => 'term_taxonomy_id DESC')
		));
	}
	
	/**
	 * Returns the items for the specified type.
	 * @param string item type (e.g. 'category', 'post').
	 * @return array item names indexed by item code. The items are order by their position values.
	 * An empty array is returned if the item type does not exist.
	 */
	public static function items($type)
	{
    	self::$_items = array();
    	$models=self::model()->with(array(
    	    'terms'=>array(
    	        // we don't want to select terms
        	    'select'=>false,
        	    // but want to get only taxonomies are category
        	    'joinType'=>'INNER JOIN',
        	    'condition'=>'terms.name="'.$type.'"',
    	    ),
    	))->findAll();
    	foreach($models as $model)
    	    self::$_items[$model->term_taxonomy_id]=$model->taxonomy;
    	return self::$_items;
	}
	
}