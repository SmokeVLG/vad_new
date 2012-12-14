<?php
//
// читабельная распечатка данных массива
// arr - сам массив, alias - выводимое имя
function print_arr($arr, $alias="")
{
	if ($alias != "") echo "<br />".$alias."<br />";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo "<br/>";	
}

//
// не дожидаясь вывода скрипта, выведем сообщение
function ob_echo($msg)
{
	echo $msg.'<br>';
	ob_flush();
	flush();
}

// логирование
// если $type_load = true, то проверять есть ли такой уже и удалять
function logf($filename, $data, $type_load=false)
{
	if ($type_load AND is_file($filename)) unlink($filename);
	
	$data .= chr(13);
	if (!$handle = fopen($filename, 'a+')) {
         echo "Не могу создать файл ($cashname)";
         exit;
    }
    if (fwrite($handle, $data) === FALSE) {
        echo "Не могу произвести запись в файл ($filename)";
        exit;
    }    
    fclose($handle);
}

// вернуть последнюю строку файла
function readlastline($file)
{
	$fp = file($file);
	$fp_imp = explode(chr(13), $fp[0]);
	$t = $fp_imp[sizeof($fp_imp)-1];
	if (empty($t)) $t = $fp_imp[sizeof($fp_imp)-2];	
	return $t;
}

// шифруемся разными браузерами
//
function getBrowser($fileName)
{
	$handle = fopen($fileName, 'r');		
	$buffer = array();
	$i = 0;
	while (!feof($handle)) {
	    $buffer[$i] = fgets($handle);
	    $i++;
	}
	fclose($handle);
	return array_rand($buffer);	
}

// загрузка контента
function getCurl($lcURL)
{	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $lcURL); // Указываем откуда спарсить содержимое в наш объект.
	curl_setopt($ch, CURLOPT_HEADER, 0); //Включать или не включать header
	//curl_setopt($ch, CURLOPT_USERAGENT, getBrowser('/home/c/cl52419/public_html/lib/user-agent.txt')); // Прикинемся браузером.
	//curl_setopt($ch, CURLOPT_USERAGENT, getBrowser(dirname(__FILE__).'/user-agent.txt')); // Прикинемся браузером.
	curl_setopt($ch, CURLOPT_TIMEOUT,   300);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);		
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Возвращать трансфер или печатать напрямую
	$reply = curl_exec($ch);
	curl_close($ch);
	
	return $reply;
}

function rdate($date=0,$format='')
{
        // в качестве даты понимает unix timestamp и date или datetime из mysql
        // формат - обычный формат date() с одним исключением
        // \P (латиниская) - русское название месяца в именительном падеже
        // \p (латиниская) - русское название месяца в родительном падеже

        if (!$date) $date=time();
        if (preg_match('!(\d{4})-(\d{2})-(\d{2})( (\d{2}):(\d{2}):(\d{2}))?!',$date,$m))
        {
        if (isset($m[4])) $date=mktime($m[5],$m[6],$m[7],$m[2],$m[3],$m[1]);
        else $date=mktime(0,0,0,$m[2],$m[3],$m[1]);
        }
        if(!$format)
        {
        $format='d.m.y H:i';
        if (!isset($m[4])) $format='d.m.y';
        }
        $rmon=array('январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь');
        $format=str_replace('\P',' '.$rmon[date('n',$date)-1].' ',$format);
        $rmon=array('января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря');
        $format=str_replace('\p',' '.$rmon[date('n',$date)-1].' ',$format);
        return date($format,$date);
}

function mdate($date=0)
{
    if (!$date) $date=time();
    if (preg_match('%(\d{2})-(\d{2})-(\d{4})((\d{2}):(\d{2}):(\d{2}))?%',$date,$m))
    {
        if (isset($m[4])) $date=mktime($m[5],$m[6],$m[7],$m[2],$m[1],$m[3]);
        else $date=mktime(0,0,0,$m[2],$m[1],$m[3]);
    }
    return date('Y-m-d',$date);
}

function fdate($date=0)
{
    if (!$date) return;
    if (preg_match('%(\d{4})-(\d{2})-(\d{2})((\d{2}):(\d{2}):(\d{2}))?%',$date,$m))
    {
        if (isset($m[4])) $date=mktime($m[5],$m[6],$m[7],$m[2],$m[3],$m[1]);
        else $date=mktime(0,0,0,$m[2],$m[3],$m[1]);
    }
    return date('d-m-Y',$date);
}