<?php
include ("includes/config.php");

if ($_SERVER["REQUEST_METHOD"] <> "POST")
 die("Error Not Found");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?
$name      =IsSet($_POST['name'])      ? make_it_safe($_POST['name'])      :Null;
$id_news   =IsSet($_POST['id_news'])   ? make_it_safe($_POST['id_news'])   :Null;
$mail      =IsSet($_POST['mail'])      ? make_it_safe($_POST['mail'])      :Null;
$comment   =IsSet($_POST['comment'])   ? make_it_safe($_POST['comment'])   :Null;
$totalcomm = mb_strlen($comment, 'utf-8');

$select = $mysqli->query("SELECT * FROM news where id='$id_news' limit 1");
$num = $select->num_rows;
$rows = $select->fetch_array(MYSQL_ASSOC);
$comments_num         = $rows ['comments'];


if($name == ""){
?>
<div class='msgno'>Please enter your name</div>
<script type="text/javascript">
$("#name").focus();
</script>
<?
}
else if($mail == ""){
?>
<div class='msgno'>Please enter your email</div>
<script type="text/javascript">
$("#mail").focus();
</script>
<?
}
else if(!preg_match("#^[\w.-]{1,}+@[\w.-]+\.(|aero|biz|com|coop|edu|info|int|net|org|mil|museum|name|pro|gov|ad|ae|af|ci|ck|cl|cm|cn|co|cr|cu|cv|cx|cy|cz|de|dk|dj|dm|do|dz|ec|ee|eg|eh|er|es|et|fi|fj|fk|fm|fo|fr|fx|ga|gd|ge|gf|gg|gh|gi|gl|gn|gp|gq|gr|gs|gt|gu|gy|hk|hm|hn|hr|ht|hu|id|ie|in|io|iq|ir|is|it|je|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mh|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|mx|mw|my|mz|na|nc|nf|ne|ng|ni|nl|no|np|nr|nu|nz|om|pe|pa|pf|ph|pk|pl|pm|pn|pq|pr|pt|py|pw|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|sv|sy|sz|tc|td|tf|th|tj|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zr|zm|zw|)$#", $mail)){
?>
<div class='msgno'>Sorry This e-mail is not valid</div>
<script type="text/javascript">
$("#mail").focus();
</script>
<?
}
else if($comment == ""){
?>
<div class='msgno'>Please enter your comment</div>
<script type="text/javascript">
$("#comment").focus();
</script>
<?
}
else if ($totalcomm < 5){
?>
<div class='msgno'>Can not be a suspension less than 5 characters</div>
<script type="text/javascript">
$("#comment").focus();
</script>
<?
}
else if(!$id_news){
?>
<div class='msgno'>There is an error news Unknown</div>
<?
}
else {
$insert = $mysqli->query("INSERT INTO comment (id, names, usermail, comment, show_index, id_news) VALUE ('', '$name', '$mail', '$comment', '2', '$id_news')");

$comments_num2 = $comments_num+1;
$updatecomm = $mysqli->query("Update news Set comments='$comments_num2' WHERE id='$id_news' ");

if($insert){
?>
<div class="msgok">
Added comment will be reviewed by the administration and displayed in the case
<br />
Thank you for your comment A <? echo $name; ?>
</div>
<script type="text/javascript">
$("#add_comment").hide();
</script>
<?
}else{
?>
<div class='msgno'>There's a mistake</div>
<?
}
}
?>
</body>
</html>
