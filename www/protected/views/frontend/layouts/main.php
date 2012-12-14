<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>
        
        <?php Yii::app()->clientScript->registerScriptFile('js/fa/obf.dax.fullajax.js'); ?>
        <?php Yii::app()->clientScript->registerScriptFile('js/fa/obf.fullajax.js'); ?>
        <?php Yii::app()->clientScript->registerScriptFile('js/fa/obf.hax.fullajax.js'); ?>
        <?php Yii::app()->clientScript->registerScriptFile('js/fa/obf.upload.fullajax.js'); ?>
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	
        
        <div id="mb_mainmenu">
		<?php 
                               
                 
            $this->widget('application.extensions.mbmenu.MbMenu', array(
                'items'=>array(
          // Важно: необходимо определить url-адрес как 'controller/action',
          // а не просто как 'controller' даже если используется действие по умолчанию.
        array('label'=>'Главная', 'url'=>array('/site/index')),
          // элемент меню 'Товары' будет выбран независимо от того, каково значение параметра тега
          array('label'=>'Важное', 'url'=>array('/site/indexVazhn'), 'items'=>array(
              array('label'=>'Положение', 'url'=>'http://www.volgoavtodor.ru/index.php/zakupki/polozhenie-o-zakupkakh'),              
          )),
                    
          array('label'=>'Ввести','url'=>array('/site/indexVvesti'),
              'items'=>array(
             
                    
                    array('label'=>'Дорожные работы', 'url'=>array('/site/indexDR'), 'items'=>array(
                        array('label'=>'Наряды(План)', 'url'=>array('worksPlan/admin')),  
                        array('label'=>'Наряды(Факт)', 'url'=>array('worksFact/admin')),  
                        array('label'=>'Добавить Наряд(План)', 'url'=>array('worksPlan/create'),'items'=>array
                              (
                                   
                                array('label'=>'Данные по Я.Р.(План)', 'url'=>array('WorksYamremPlan/admin')),                        
                                array('label'=>'Ввести(Ям. рем. План)', 'url'=>array('WorksYamremPlan/create')),                            
                               ),
                            ),
                        
                            array('label'=>'Добавить Наряд(Факт)', 'url'=>array('worksFact/create'),'items'=>array
                              (
                                    
                                array('label'=>'Данные по Я.Р.(Факт)', 'url'=>array('WorksYamremFact/admin')),                          
                                array('label'=>'Ввести(Ям. рем. Факт)', 'url'=>array('WorksYamremFact/create')),                                
                               ),
                            )
                        
                        
                        
                        
                        ),  
                                        
                              
                        
                        
                        ),       
                    array('label'=>'Строительство', 'url'=>array('/site/indexBuild'), 'items'=>array(
                        array('label'=>'Наряды(План)', 'url'=>array('worksBuildPlan/admin')),              
                        array('label'=>'Добавить Наряд(План)', 'url'=>array('worksBuildPlan/create')),             
                        array('label'=>'Наряды(Факт)', 'url'=>array('worksBuildFact/admin')),              
                        array('label'=>'Добавить Наряд(Факт)', 'url'=>array('worksBuildFact/create')),  

                    )),    

                    array('label'=>'ГСМ', 'url'=>array('/site/indexGSM'), 'items'=>array(
                        array('label'=>'Данные по ГСМ', 'url'=>array('WorksGsm/admin')),  
                        
                                             
                        array('label'=>'Ввести ГСМ', 'url'=>array('WorksGsm/create')),
                       
                        
                    )),

//            
            
            )),        
                  
          array('label'=>'Мониторинг', 'url'=>array('/site/indexMonitor'), 'items'=>array(
             
              array('label'=>'Наряды(План)', 'url'=>array('worksPlan/admin')),  
              array('label'=>'Наряды(Факт)', 'url'=>array('worksFact/admin')), 
              array('label'=>'Наряды(Строительство)', 'url'=>array('worksBuildPlan/admin')), 
              array('label'=>'Данные по ГСМ', 'url'=>array('WorksGsm/admin')),  
              array('label'=>'Данные по Я.Р.(План)', 'url'=>array('WorksYamremPlan/admin')),  
              array('label'=>'Данные по Я.Р.(Факт)', 'url'=>array('WorksYamremFact/admin')),  
              
          )),          
               array('label'=>'Информация', 'url'=>array('/site/indexInfo'), 'items'=>array(
              array('label'=>'Инфо по состоянию (План)', 'url'=>array('site/indexInfoPlan')),  
              array('label'=>'Инфо по состоянию (Факт)', 'url'=>array('site/indexInfoFact')), 
               
              
          )),          
                    
              
          array('label'=>'Личный кабинет', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
	  array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
  )); 
                
                ?>
	</div><!-- mainmenu -->
        
        
        
        
        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		ОГУП Волгоградавтодор &copy;<?php echo date('Y'); ?><br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>