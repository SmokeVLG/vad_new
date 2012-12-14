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
		<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
			'items'=>array(
				array('label'=>'Главная', 'url'=>array('/site/index')),
				array('label'=>'Помощь', 'url'=>array('/site/page', 'view'=>'about')),
                            
                                                                         
                            
                            
                            array('label'=>'Редактирование', 'url'=>array('/site/indexEdit'), 'items'=>array(
                                
                                
                               array('label'=>'Дорожные работы(План)', 'url'=>array('worksPlan/admin'),
                             ),
                                
                                array('label'=>'Дорожные работы(Факт)', 'url'=>array('worksFact/admin'),
                             ),
                                   array('label'=>'ГСМ', 'url'=>array('worksGsm/admin'),
                             ),
                                   array('label'=>'ГСМ(ВКУ)', 'url'=>array('workVKU/admin'),
                             ),
                                  array('label'=>'ГСМ(Камышин)', 'url'=>array('workKalach/admin'),
                             ),
                             
                            )),
                            
                                array('label'=>'Мониторинги', 'url'=>array('/site/indexMonitoring'), 'items'=>array(
                                    array('label'=>'Мониторинг по районам(План)', 'url'=>array('site/monitoringplan')),  
                                    array('label'=>'Мониторинг по районам(Факт)', 'url'=>array('site/monitoringfact')),  
                                    array('label'=>'Мониторинг работ по дорогам(План)', 'url'=>array('site/monitoringdrsu')),  
                                    array('label'=>'Мониторинг работ по дорогам(Факт)', 'url'=>array('site/IndexInfoMonDrsu')),                                    
                                    array('label'=>'Мониторинг ГСМ', 'url'=>array('site/monitoringgsm')),                           
                                    
                            )),
                                   array('label'=>'Справочники', 'url'=>array('/site/indexSpravochniki'), 'items'=>array(
                                        array('label'=>'Округи', 'url'=>array('area/admin')),  
                                        array('label'=>'Объекты обслуживания', 'url'=>array('serviceobject/admin')),  
                                        array('label'=>'Организации', 'url'=>array('org/admin')),  
                                        array('label'=>'Дороги', 'url'=>array('roads/admin')),
                                        array('label'=>'Виды работ', 'url'=>array('workCat/admin')),
                            )),
                            
                          
                            
                            
                             array('label'=>'Информация', 'url'=>array('/site/indexInfo'), 'items'=>array(
                         
                                 array('label'=>'Информация по всем ДРСУ', 'url'=>array('/site/indexInfo'),'items'=>array
                                        (

                                            array('label'=>'Инфо по дорожным работам за период по всем ДРСУ(План)', 'url'=>array('site/indexInfoDRPP')),  
                                         array('label'=>'Инфо по дорожным работам за период по всем ДРСУ(Факт)', 'url'=>array('site/indexInfoDRPF')),
                                         array('label'=>'Инфо по  Я.Р. за период по всем ДРСУ (Факт)', 'url'=>array('site/indexInfoYRPF')),
                                         array('label'=>'Инфо по  Я.Р. за период по всем ДРСУ (План)', 'url'=>array('site/indexInfoYRPP')),
                                         array('label'=>'Инфо по  Я.Р. за период по всем ДРСУ сумма (Факт)', 'url'=>array('site/indexInfoYRPFS')),
                                          array('label'=>'Инфо по  Я.Р. за период по районам сумма (Факт)', 'url'=>array('site/indexInfoYRPFSR')),
                                         array('label'=>'Инфо по  ГСМ', 'url'=>array('site/indexInfoGSM')),
                                        ),
                                        ),
                        
                                  array('label'=>'Информация по отдельному ДРСУ', 'url'=>array('/site/indexInfo'),'items'=>array
                                        (

                                              array('label'=>'Инфо по дорожным работам за период по району(План)', 'url'=>array('site/indexInfoDRPPR')),  
                                         array('label'=>'Инфо по дорожным работам за период по району(Факт)', 'url'=>array('site/indexInfoDRPFR')),
                                         array('label'=>'Инфо по  Я.Р. за период по району(Факт)', 'url'=>array('site/indexInfoYRPFR')),
                                         array('label'=>'Инфо по  Я.Р. за период по району(План)', 'url'=>array('site/indexInfoYRPPR')),                               
                                        ),
                                  )
                        
                                        
                        
                        )),  
                            
                                                        
                            
				//array('label'=>'Контакты', 'url'=>array('/site/contact')),
				//array('label'=>'Личный кабинет', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
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