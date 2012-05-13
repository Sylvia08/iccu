<?php

class PostsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column3';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'rights', // perform access control for CRUD operations
		);
	}

	public function allowedActions()
	{
	    return '*';
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
	    $post = $this->loadModel($id);
	    $category = $post->taxonomies[0];
	    $this->breadcrumbs=$this->createBreadcrumbs($category, $post->post_title);
		$this->render('view',array(
			'model'=>$post,
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($category)
	{
	    $use_news_layout=false;
    	$criteria=new CDbCriteria(array(
    	    'condition'=>'post_status='.Posts::STATUS_PUBLISHED,
    	    'with'=>array('taxonomies'=>array('together'=>true, 'jointype'=>'INNER JOIN')),
    	));
    	 
    	if($category){
    	    $taxonomy = TermTaxonomy::getItemByName($category);
    	    if(!$taxonomy)
    	        throw new CHttpException(404,'The requested page does not exist.');
    	    //TODO: let admin choose layout
    	    if(strpos(strtolower($category), 'news')!==false){
    	        $use_news_layout=true;
    	        $this->layout='//layouts/news';
    	        $criteria->order='post_date DESC';
    	    }
    	    $this->breadcrumbs=$this->createBreadcrumbs($taxonomy);
    	    $criteria->addSearchCondition('taxonomies.term_taxonomy_id', $taxonomy->term_taxonomy_id);
    	    
   	        $subCategories = new CActiveDataProvider('TermTaxonomy', array(
   	            'pagination'=>array('pageSize'=>10),
   	            'criteria'=>new CDbCriteria(array('condition'=>'parent='.$taxonomy->term_taxonomy_id,
   	                  'order'=>'feature_order'
   	              ))
   	        ));
    	}
    	else{
    	    throw new CHttpException(404,'The requested page does not exist.');
    	}
    	$dataProvider=new CActiveDataProvider('Posts', array(
    	   'pagination'=>array(
    	     'pageSize'=>Yii::app()->params['postsPerPage']?Yii::app()->params['postsPerPage']:5,
    	   ),
    	   'criteria'=>$criteria,
    	));
        
		$this->render('index',array(
		    'category'=>$taxonomy,
			'dataProvider'=>$dataProvider,
		    'subCategories'=>$subCategories,
		    'use_news_layout'=>$use_news_layout 
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Posts::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
    
	private function createBreadcrumbs($category=null, $post_title=null)
	{
	    $brc = array();
        if($post_title && $category){
            $brc = $category->getUpwardBranch();
            $brc[] = $post_title;
        }
        else if(!$post_title && $category){
            if($category->getParent)
                $brc = $category->getParent->getUpwardBranch();
            $brc[] = ucwords($category->taxonomy);
        }
        else if($post_title) 
            $brc[] = $post_title;
        return $brc;	    
	}
}
