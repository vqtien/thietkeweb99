<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
function checkRouteName($array){
	foreach($array as $name){
		if(strpos(Route::currentRouteName(), $name) !== false){
			return true;
		}
	}
	return false;
}

if (! function_exists('make_permalink'))
{
	function make_permalink($str)
	{
		$text 		= clean_text($str);
		$patterns 	= array ('/ {2,}/', '/ /','/-{2,}/');
		$replace 	= array (' ','-', '-');
		$string 	= preg_replace($patterns, $replace, $text);
		return strtolower($string);
	}
}

if (! function_exists('make_slug'))
{
	function make_slug($str)
	{
		$text 		= clean_text($str);
		$patterns 	= array ('/ {2,}/', '/-{2,}/');
		$replace 	= array (' ', '-');
		$string 	= preg_replace($patterns, $replace, $text);
		return strtolower($string);
	}
}

if (! function_exists('clean_text'))
{
	function clean_text($string = '')
	{
		$patterns = array (
			'/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/',
           		'/(ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ)/',
           		'/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/',
           		'/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/',
           		'/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/',
           		'/(ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ)/',
           		'/(đ|Đ)/',
           		'/æ/',
           		'/ç/i',
           		'/ñ/i',
           		'/%/i',
           		'/[^\x00-\x7F]+/',
           		'/[^\w_ \-]+/i',
           		'/^\-|\-$/i',
           		'/-+$/',
           		'/ {2,}/'
           	);
		$replace = array ('a', 'i', 'u', 'e', 'o', 'y', 'd', 'ae', 'c', 'n', ' ', ' ', ' ', ' ', '', ' ');
		$string = preg_replace($patterns, $replace, $string);
		
	    return $string;
	}
}

function image_path($image_path, $size = ""){
	$image_domain 	= config()->get('app.image_url');
	$result 	= "{$image_domain}/uploads/images/";
	if ($size != "")
		$result .= $size . "/" . $image_path;
	else
		$result .= $image_path;
	
	return $result;
}

function price_format($number)
{
	return number_format($number, 0, ',', '.');
}

function time_format($time)
{
	$date = date_create($time);
 	return $date->format('d/m/Y');
}