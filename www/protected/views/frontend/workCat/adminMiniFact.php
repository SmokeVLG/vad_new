<?php
$this->breadcrumbs=array(
	'Виды работ'=>array('admin'),
	'Список',
);

$this->menu=array(
	array('label'=>'Добавить', 'url'=>array('create')),
);

?>

<h1>Список видов работ</h1>
      <div class="row">     
                   
            <?php
                    // получения моделей из базы данных
                    $modelsWorkCat = WorkCat::model()->findAll();
                    // format models as $key=>$value with listData
                    $listWorkCat = CHtml::listData($modelsWorkCat, 'id', 'name');  
                    $indexWorkCat = "";
                    echo CHtml::dropDownList('WidID_WorkCat', $indexWorkCat, $listWorkCat, 
                        array('class'=>'typeWorks', 'empty' => 'Выберите класс работ') );
             ?>      
     </div>  
     <div class="row">     
              <?php
                    // получения моделей из базы данных
                    $modelsWorkWork = WorkWork::model()->findAll();
                      // format models as $key=>$value with listData
                    $listWorkWork = CHtml::listData($modelsWorkWork, 'id', 'name'); 
                    $indexWorkWork="";
                    echo CHtml::dropDownList('WidID_WorkWork', $indexWorkWork, $listWorkWork, 
                       array('class'=>'typeWorks', 'empty' => 'Выберите работу') );                 
              ?>
          
     </div> 
     <div class="row buttons">
         <button id="BtnID_WorkCat" onclick="MyFunc();">Добавить работу</button>
     </div>   
  <?php
// обработка кнопки добавления работа в наряд
$cs=Yii::app()->clientScript;  
$cs->registerScriptFile(Yii::app()->baseUrl . '/js/jquery/jquery-1.6.2.min.js', CClientScript::POS_HEAD);
$cs->registerScriptFile(Yii::app()->baseUrl . '/js/jquery/jquery-ui-1.8.16.custom.min.js', CClientScript::POS_HEAD);  
$cs->registerCssFile(Yii::app()->baseUrl . '/css/start/jquery-ui-1.8.16.custom.css');
// 1) обработка выбора организации, после выбора отфильтровать список дорог
Yii::app()->clientScript->registerScript('forgroads', 'js:
    $(
        function()
            {
                $("#WidID_WorkCat").bind
                    (
                        "change keyup", function ()
                            {
                                loadWork(this);
                            }
                    );
                                        
             }
     );
   

    function getTime(btnString) 
    {
        var now = new Date();
        alert(btnString + " нажата в " + now.getHours() + ":" + now.getMinutes());
    }

    function MyFunc() 
    {
        var e = document.getElementById("WidID_WorkWork");
        var text = e.options[e.selectedIndex].text;
        
        var text2 = $("#WorksFact_rf_idWorkCat").val(); 
       
        $("#WorksFact_rf_idWorkCat").val(text2+"; "+text);


        $("#frmHidden2").dialog("close");         
    }
    
    function loadWork(select)
    {
        var workSelect = $("#WidID_WorkWork");        
        workSelect.attr("disabled", "disabled"); // делаем список дорог не активным
        // послыаем AJAX запрос, который вернёт список дорог для выбранной организации
        $.getJSON("'.Yii::app()->createUrl('workcat/getwork', array()).'",
            {action:"getwork", wrg:select.value}, 
            
            function(list){

            workSelect.html(""); // очищаем список городов

            $.each(list, function(i) {
                workSelect.append("<option value=\"" + this.id + "\">" + this.name + "</option>");
            });

            workSelect.removeAttr("disabled");
           
        });
    }
    
', CClientScript::POS_HEAD);
?>  