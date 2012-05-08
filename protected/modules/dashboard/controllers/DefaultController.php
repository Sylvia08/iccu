<?php

class DefaultController extends Controller
{   
    public $layout='//layouts/admin';
    /**
     * Initializes the controller.
     */
    public function init()
    {
        // Register the scripts.
        $this->module->registerScripts();
    }
    
    public function filters()
    {
        return array("rights");
    }
    
	public function actionIndex()
	{
		$this->render('index');
	}
}