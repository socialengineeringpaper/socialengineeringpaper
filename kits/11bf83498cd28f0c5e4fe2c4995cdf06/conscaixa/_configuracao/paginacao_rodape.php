<style>
.tableTitleRodape {
	font-size: 9pt;
	text-align: center;
	text-transform: uppercase;	
	<?php
		if ($origem == "portal"){
			echo "color: #FFFFFF;";
		}
	?>	
	font-family:Arial, Helvetica, sans-serif;
}
</style>
<?php
$pg = $_GET["pg"];

$link_tipo = "";
$link_id_noticia = "";

if ($tipo != ""){
	$link_tipo = "&tipo=$tipo";
}
if ($id_noticia != ""){
	$link_id_noticia = "&id_noticia=$id_noticia";
}

if (($pg  == 0)&&($pg != $pages)){
	$pagina = $pg + 1;
	$total = $pages + 1;
	$proxima = $pg + 1;
	echo "<!-- table Footer -->
        	<tr>
          		<td colspan='13' class='tableTitleRodape'>
					<span style='display:block;height:25px;padding-left:20px;float:left;width:75px;'></span> 
					<span style='display:block;height:25px;padding-right:20px;float:right;width:75px;'>
						<a href=\"$PHP_SELF?pg=$proxima$link_tipo$link_id_noticia\">proximo</a>
					</span>
				   <span style='display:block;height:25px;padding-right:20px;margin:0px 100px 0px 100px;'>P&aacute;gina $pagina de $total</span>
				 </td>
        	</tr>";	
}
elseif (($pg == $pages)&&($pages != 0)){
	$pagina = $pg + 1;
	$total = $pages + 1;
	$anterior = $pg - 1;	
	echo "<!-- table Footer -->
        	<tr>
          		<td colspan='13' class='tableTitleRodape'>
					<span style='display:block;height:25px;padding-left:20px;float:left;width:75px;'>
						<a href=\"$PHP_SELF?pg=$anterior$link_tipo$link_id_noticia\">anterior</a>
					</span> 
					<span style='display:block;height:25px;padding-right:20px;float:right;width:75px;'>						
					</span>
				   <span style='display:block;height:25px;padding-right:20px;margin:0px 100px 0px 100px;'>P&aacute;gina $pagina de $total</span>
				 </td>
        	</tr>";			
}
elseif ($pg < $pages){
	$pagina = $pg + 1;
	$total = $pages + 1;
	$anterior = $pg - 1;
	$proxima = $pg + 1;	
	echo "<!-- table Footer -->
        	<tr>
          		<td colspan='13' class='tableTitleRodape'>
					<span style='display:block;height:25px;padding-left:20px;float:left;width:75px;'>
						<a href=\"$PHP_SELF?pg=$anterior$link_tipo$link_id_noticia\">anterior</a>
					</span> 
					<span style='display:block;height:25px;padding-right:20px;float:right;width:75px;'>
						<a href=\"$PHP_SELF?pg=$proxima$link_tipo$link_id_noticia\">proximo</a>					
					</span>
				   <span style='display:block;height:25px;padding-right:20px;margin:0px 100px 0px 100px;'>P&aacute;gina $pagina de $total</span>
				 </td>
        	</tr>";			
}
else{
	$pagina = $pg + 1;
	$total = $pages + 1;									
	echo "<!-- table Footer -->
        	<tr>
          		<td colspan='13' class='tableTitleRodape'>
					<span style='display:block;height:25px;padding-left:20px;float:left;width:75px;'></span> 
					<span style='display:block;height:25px;padding-right:20px;float:right;width:75px;'></span>
				   <span style='display:block;height:25px;padding-right:20px;margin:0px 100px 0px 100px;'>P&aacute;gina $pagina de $total</span>
				 </td>
        	</tr>";	
}
			
?>