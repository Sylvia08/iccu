<div class="row-fluid">
    <div class="span8">
        <h1>Dashboard</h1>
        <div class="row-fluid">
            <div class="span2">
                <a href="<?php echo Yii::app()->createUrl('/dashboard/posts/create');?>" class="thumbnail iconwraper" rel="tooltip" data-title="Creat a new post">
                    <?php echo CHtml::image(Yii::app()->controller->module->registerImage('icon-48-article-add.png'), "");?>
                    Add New Post
                </a>
            </div>
            <div class="span2">
                <a href="<?php echo Yii::app()->createUrl('/dashboard/posts/admin');?>" class="thumbnail iconwraper" rel="tooltip" data-title="Manage all posts in the system">
                    <?php echo CHtml::image(Yii::app()->controller->module->registerImage('icon-48-article.png'), "");?>
                    Post Manager
                </a>
            </div>
            <div class="span2">
                <a href="<?php echo Yii::app()->createUrl('/dashboard/termtaxonomy/admin');?>" class="thumbnail iconwraper" rel="tooltip" data-title="Manage categories">
                    <?php echo CHtml::image(Yii::app()->controller->module->registerImage('icon-48-category.png'), "");?>
                    Category Manager
                </a>
            </div>
            <div class="span2">
                <a href="<?php echo Yii::app()->createUrl('/user/admin');?>" class="thumbnail iconwraper" rel="tooltip" data-title="Manage users and permissions">
                    <?php echo CHtml::image(Yii::app()->controller->module->registerImage('icon-48-user.png'), "");?>
                    User Manager
                </a>
            </div>
            <div class="span2">
                <a href="<?php echo Yii::app()->createUrl('/dashboard/menuadjacency/admin');?>" class="thumbnail iconwraper" rel="tooltip" data-title="Manage menus">
                    <?php echo CHtml::image(Yii::app()->controller->module->registerImage('icon-48-menumgr.png'), "");?>
                    Menu Manager
                </a>
            </div>
            <div class="span2">
                <a href="<?php echo Yii::app()->createUrl('/user/profile');?>" class="thumbnail iconwraper" rel="tooltip" data-title="Update Admin's profile">
                    <?php echo CHtml::image(Yii::app()->controller->module->registerImage('icon-48-user-profile.png'), "");?>
                    Edit Profile
                </a>
            </div>
        </div>    
        <div class="row-fluid">
            <div class="span2">
                <a href="#" class="thumbnail iconwraper underconstruction" rel="tooltip" data-title="This section is under construction">
                    <?php echo CHtml::image(Yii::app()->controller->module->registerImage('icon-48-themes.png'), "");?>
                    Template Manager
                </a>
            </div>
            <div class="span2">
                <a href="#" class="thumbnail iconwraper underconstruction" rel="tooltip" data-title="This section is under construction">
                    <?php echo CHtml::image(Yii::app()->controller->module->registerImage('icon-48-module.png'), "");?>
                    Module Manager
                </a>
            </div>
            <div class="span2">
                <a href="#" class="thumbnail iconwraper underconstruction" rel="tooltip" data-title="This section is under construction">
                    <?php echo CHtml::image(Yii::app()->controller->module->registerImage('icon-48-extension.png'), "");?>
                    Extension Manager
                </a>
            </div>
            <div class="span2">
                <a href="#" class="thumbnail iconwraper underconstruction" rel="tooltip" data-title="This section is under construction">
                    <?php echo CHtml::image(Yii::app()->controller->module->registerImage('icon-48-language.png'), "");?>
                    Language Manager
                </a>
            </div>
            <div class="span2">
                <a href="#" class="thumbnail iconwraper underconstruction" rel="tooltip" data-title="This section is under construction">
                    <?php echo CHtml::image(Yii::app()->controller->module->registerImage('icon-48-config.png'), "");?>
                    Global configuration
                </a>
            </div>
            <div class="span2">
                <a href="<?php echo Yii::app()->createUrl('/p3media');?>" class="thumbnail iconwraper" rel="tooltip" data-title="Media Manager">
                    <?php echo CHtml::image(Yii::app()->controller->module->registerImage('icon-48-media.png'), "");?>
                    Media Manager
                </a>
            </div>
        </div>    
    </div>
</div>
