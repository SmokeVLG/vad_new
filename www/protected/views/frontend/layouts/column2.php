<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Дорожные работы',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,                    
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
            
            	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Строительство',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu2,                    
			'htmlOptions'=>array('class'=>'operations'),
                    
		));
		$this->endWidget();
	?>
            
            <?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'ГСМ',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu3,                    
			'htmlOptions'=>array('class'=>'operations'),
                    
		));
		$this->endWidget();
	?>
            
                      <?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Ямочный ремонт',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu4,                    
			'htmlOptions'=>array('class'=>'operations'),
                    
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>