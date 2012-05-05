<?php $this->pageTitle=Yii::app()->name; 
	$baseUrl = Utils::getBaseUrl();?>
<div id="slider_content" >
	<div id="slider" style="padding:20px 0 20px 80px;float:left">
		<?php
		        $this->widget('ext.slider.slider', array(
		            'container'=>'slideshow',
		            'width'=>950, 
		            'height'=>260, 
		            'timeout'=>5000,
		            'infos'=>true,
		            'constrainImage'=>true,
		            'images'=>array('01.jpg','02.jpg','03.jpg'),
		            'alts'=>array('First description','Second description','Third description','Four description'),
		            //'defaultUrl'=>Yii::app()->request->hostInfo
		            )
		        );
		        ?>
	</div>
	<div class="for_btn" ><h3>For Community</h3></div>
	<div class="for_btn" style="margin: 25px 0 0 980px;" ><h3>For Clinicians</h3></div>
</div>
<div style="clear:both"></div>
<div class="intro">
	<h1>About ICCMU</h1>
	<span>The Intensive Care Coordination and Monitoring Unit (ICCMU) is a NSW Ministry of Health 
department with responsibility for adult intensive care units (ICU). Our primary function 
is to improve the care of patients through knowledge management and research & quality projects.</span>
<br/><a href="#">Read More</a>
</div>
<div class="intro">
	<h1>News</h1>
	<p>Apr 17th,2012 <br/>
	Sydney: NIV 2 Day Workshop <br/>
	-Mayohealthcare
	</p>
	<p>
	
	</p>
	<p id="readmore1">
	<a href="#">Read More</a>
	</p>
	<p>Apr 17th,2012 <br/>
	NSW: ICU Humidification Seminar- 1 Day 2 Day Workshop <br/>
	(Fisher & Parker)
	</p>
	<p>
	</p>
	<p id="readmore1">
	<a href="#">Read More</a>
	</p>
</div>
<style>
.infoSlider{
	display:none;
}

</style>