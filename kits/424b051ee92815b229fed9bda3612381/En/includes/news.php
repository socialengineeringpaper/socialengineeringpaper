<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
<script type="text/javascript">
function loadtab1(getFile){
  $.ajax({
    url: getFile,
    beforeSend: function () {
      $(".con1") .html("<img src='style/img/load.gif' alt='انتظر جارى التحميل ..' />");
    },
    success: function (data){
      $(".con1") .html(data);
    }
  });
}
$(document).ready(function(){
loadtab1("includes/news_mostview.php");
$(".tabs1 > li") .click(function(){
  var i =  $(".tabs1 > li").index(this);

  if(i == 0){
     loadtab1("includes/news_mostview.php");
  }else if (i == 1){
      loadtab1("includes/news_mostcomm.php");
  }

$(".tabs1 > li") .removeAttr("class");
$(this) .addClass("active");

return false;
});

});
</script>
</head>
<body>
<ul class="tabs1">
<li class="active"><a href="#">الأكثر قراءة</a></li>
<li><a href="#">الأكثر تعليقا</a></li>
<div class="clear"></div>
</ul>
<div class="con1"></div>
</body>
</html>
