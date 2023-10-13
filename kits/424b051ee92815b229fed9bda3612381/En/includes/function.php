<?php

//$string = strip_tags(htmlspecialchars(trim(stripslashes(mysql_real_escape_string($string)))));

//creat image
/*
function percent($num90, $total90) {

$con1 = $num90 / $total90;
$con2 = $con1 * 100;
$con = number_format($con2, 0);
return ($userx['totalmsg'] = $con);
}
*/

function montharabic($time){
@$date = date('F', $time);

if($date == 'January'){
echo str_replace('January', 'يناير', $date);
}
else if($date == 'February'){
echo str_replace('February', 'فبراير', $date);
}
else if($date == 'March'){
echo str_replace('March', 'مارس', $date);
}
else if($date == 'April'){
echo str_replace('April', 'ابريل', $date);
}
else if($date == 'May'){
echo str_replace('May', 'مايو', $date);
}
else if($date == 'June'){
echo str_replace('June', 'يونيو', $date);
}
else if($date == 'July'){
echo str_replace('July', 'يوليو', $date);
}
else if($date == 'August'){
echo str_replace('August', 'أغسطس', $date);
}
else if($date == 'September'){
echo str_replace('September', 'سبتمتبر', $date);
}
else if($date == 'October'){
echo str_replace('October', 'اكتوبر', $date);
}
else if($date == 'November'){
echo str_replace('November', 'نوفمبر', $date);
}
else if($date == 'December'){
echo str_replace('December', 'ديسمبر', $date);
}

};

function timeBetween($start,$end){
      $time_comment = $end - $start;

      if($time_comment <= 60){
        return 'أقل من دقيقة';
      }
      if(60 < $time_comment && $time_comment <= 3600){
        return round($time_comment/60,0).'دقيقة ';
      }
      if(3600 < $time_comment && $time_comment <= 86400){
        return round($time_comment/3600,0).' ساعة ';
      }
      if(86400 < $time_comment && $time_comment <= 604800){
        return round($time_comment/86400,0).' يوم ';
      }
      if(604800 < $time_comment && $time_comment <= 2592000){
        return round($time_comment/604800,0).' اسابيع ';
      }
      if(2592000 < $time_comment && $time_comment <= 29030400){
        return round($time_comment/2592000,0).' شهر ';
      }
      if($time_comment > 29030400){
        return date('M d y at h:i A',$start);
      }
    }


function create_image($path, $save, $width, $height){

$info = getimagesize($path);
$size = array($info[0], $info[1]);

if($info['mime'] == 'image/png'){
$src = imagecreatefrompng($path);
}else if($info['mime'] == 'image/jpeg'){
$src = imagecreatefromjpeg($path);
}else if($info['mime'] == 'image/gif'){
$src = imagecreatefromgif($path);
}else{
return false;
}

$thumb = imagecreatetruecolor($width, $height);

$src_aspect = $size[0] / $size[1];
$thumb_aspect = $width / $height;

if($src_aspect < $thumb_aspect){
$new_size = array($width, $height);
$src_pos = array(0, 0);
}else if($src_aspect > $thumb_aspect) {
$new_size = array($width, $height);
$src_pos = array(0, 0);
}else{
$new_size = array($width, $height);
$src_pos = array(0, 0);
}

$new_size[0] = max($new_size[0], 1);
$new_size[1] = max($new_size[1], 1);

imagecopyresampled($thumb, $src, 0, 0, $src_pos[0], $src_pos[1], $new_size[0], $new_size[1], $size[0], $size[1]);


if($save == false){
return imagepng($thumb);
}else{
return imagepng($thumb, $save);
}

} 
//end image


//creat thumbnail
function create_thumbnail($path, $save, $width, $height){

$info = getimagesize($path);
$size = array($info[0], $info[1]);

if($info['mime'] == 'image/png'){
$src = imagecreatefrompng($path);
}else if($info['mime'] == 'image/jpeg'){
$src = imagecreatefromjpeg($path);
}else if($info['mime'] == 'image/gif'){
$src = imagecreatefromgif($path);
}else{
return false;
}

$thumb = imagecreatetruecolor($width, $height);

$src_aspect = $size[0] / $size[1];
$thumb_aspect = $width / $height;

if($src_aspect < $thumb_aspect){
$scale = $width / $size[0];
$new_size = array($width, $width / $src_aspect);
$src_pos = array(0, ($size[1] * $scale - $height) / $scale / 2);
}else if($src_aspect > $thumb_aspect) {
$scale = $width / $size[1];
$new_size = array($height * $src_aspect, $height);
$src_pos = array(($size[0] * $scale - $width) / $scale / 2, 0);
}else{
$new_size = array($width, $height);
$src_pos = array(0, 0);
}

$new_size[0] = max($new_size[0], 1);
$new_size[1] = max($new_size[1], 1);

imagecopyresampled($thumb, $src, 0, 0, $src_pos[0], $src_pos[1], $new_size[0], $new_size[1], $size[0], $size[1]);


if($save == false){
return imagepng($thumb);
}else{
return imagepng($thumb, $save);
}

} // end function


function make_it_safe($string)
{
$string = stripslashes(htmlspecialchars($string));
return $string;
}
?>