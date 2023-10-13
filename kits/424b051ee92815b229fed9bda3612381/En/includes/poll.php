<?php
    $id = (isset($_GET['id'])) ? intval($_GET['id']) : 1;

$query1 = $mysqli->query("SELECT * FROM `polls` ORDER by poll_id desc limit 1");
$rows1 = $query1->fetch_array(MYSQL_ASSOC);

$poll_id = $rows1['poll_id'];
$title = $rows1['title'];
$time = $rows1['time'];

    if(!$query1){
        exit('not found');
    }
    
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="js/awcore.polls.js"></script>
    <!-- delete this if you have the jquery ui -->
    <script type="text/javascript" src="js/backgroundColor.js"></script>
</head>
<body>


<div id="<?php echo $poll_id;?>" class="polls">
<h3><?php echo $title;?></h3>

<?

$query5 = $mysqli->query("SELECT * FROM  poll_votes WHERE poll_id='$poll_id'");
$total = $query5->num_rows;


if($total == '0') {
echo"";
}
else{

function percent($num90, $total90) {


$con1 = $num90 *100;
$con2 = $con1 / $total90;
$con = number_format($con2, 0);
echo $con;
/*
$con1 =  $num90 / $total90;
$con2 = $con1 * 100;
$con = number_format($con2, 0);
echo $con;
return ($userx['totalmsg'] = $con);
*/
}

}




$query2 = $mysqli->query("SELECT * FROM `poll_votes` where `poll_id` = '$poll_id' and `ip` = '{$_SERVER["REMOTE_ADDR"]}'");
$num2 = $query2->num_rows;

$query3 = $mysqli->query("SELECT * FROM  poll_options WHERE poll_id='$poll_id' ORDER BY id ASC");
$num3 = $query3->num_rows;
?>
<form <?php if($num2){ echo 'class="closed"';}?> method="post" action="vote.php">
<?
while ($rows3 = $query3->fetch_array(MYSQL_ASSOC)){

$id_options         = $rows3 ['id'];
$poll_id_options    = $rows3 ['poll_id'];
$title_options      = $rows3 ['title'];


$query4 = $mysqli->query("SELECT * FROM  poll_votes WHERE poll_id='$poll_id' and option_id='$id_options' ORDER BY id ASC");
$num4 = $query4->num_rows;


?>

<p id="option_<?php echo $id_options;?>" class="rounded dark_shadow">
<span class="option rounded dark_shadow" style="width:<? if($total == '0') {echo "0";} else{ echo percent($num4, $total);}?>%" title="<? if($total == '0') {echo "0";} else{ echo percent($num4, $total);}?>"></span>
<input name="vote" type="radio" id="<?php echo $id_options; ?>" value="<?php echo $id_options; ?>" />
<label for="<?php echo $id_options;?>"><?php echo $title_options;?></label>
<em><? if($total == '0') {echo "0";} else{ echo $num4; ?> صوت - <? echo percent($num4, $total); ?> <? } ?> %</em>
</p>
<?
}
?>
</form>
</div>
<div class="loadpoll"></div>
<h4>عدد الأصوات : <? echo $total; ?></h4>
</body>
</html>