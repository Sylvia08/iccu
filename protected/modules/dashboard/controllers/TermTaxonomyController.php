<?php

class TermTaxonomyController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column_short';
	public $defaultAction = 'admin';
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'rights', // perform access control for CRUD operations
		);
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TermTaxonomy;
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['TermTaxonomy']))
		{
			$model->attributes=$_POST['TermTaxonomy'];
			$model->setAttribute('term_id', Terms::model()->find('name=:name', array(':name'=>$_POST['TermTaxonomy']['term']))->term_id);
			if($model->save()){
			    Yii::app()->user->setFlash('success', "Category created!");
			
    			if (Yii::app()->request->isAjaxRequest)
                {
                    echo CJSON::encode(array(
                        'status'=>'success', 
                        'div'=>"Category successfully added"
                    ));
                    exit;               
                }
                else
                    $this->redirect(array('admin'));
			}
		}

		if (Yii::app()->request->isAjaxRequest)
        {
            echo CJSON::encode(array(
                'status'=>'failure', 
                'div'=>$this->renderPartial('_ajaxform', array('model'=>$model), true)));
            exit;               
        }
        else
            $this->render('create',array('model'=>$model,));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['TermTaxonomy']))
		{
			$model->attributes=$_POST['TermTaxonomy'];
			if($model->save()){
			    Yii::app()->user->setFlash('success', "Category updated!");
			
                if (Yii::app()->request->isAjaxRequest)
                {
                 echo CJSON::encode(array(
                   'status'=>'success',
                   'div'=>"Category successfully updated"
                 ));
                 exit;
                }
                else
				    $this->redirect(array('admin'));
			}
		}
        
		if (Yii::app()->request->isAjaxRequest)
		{
		 echo CJSON::encode(array(
		   'status'=>'failure',
		   'div'=>$this->renderPartial('_ajaxform', array('model'=>$model), true)));
		 exit;
		}
		else
    		$this->render('update',array(
    			'model'=>$model,
    		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();
			Yii::app()->user->setFlash('success', "Category deleted!");
			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TermTaxonomy('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TermTaxonomy']))
			$model->attributes=$_GET['TermTaxonomy'];
		Yii::app()->user->setFlash('info', '<p>
		  You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
		  or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
		  </p>');
		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=TermTaxonomy::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='term-taxonomy-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
