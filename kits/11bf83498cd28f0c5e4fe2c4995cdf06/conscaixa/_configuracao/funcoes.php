<?
function Request($chave) {
   if (isset($_POST[$chave]))
      return $_POST[$chave];
   else if (isset($_GET[$chave]))
      return $_GET[$chave];
   else
      return '';
}
function diaDaSemana($data) {
  $dia=substr($data,0,2);
  $mes=substr($data,2,2);
  $ano=substr($data,4,4);
  $dataconv=getdate(mktime(0, 0, 0, $mes, $dia, $ano));
  $dataretorno=$dataconv['wday']+1;
  return $dataretorno;
}
function DiasMes($data) {
  $dia=substr($data,0,2);
  $mes=substr($data,2,2);
  $ano=substr($data,4,4);
  $dataconv=date('t',mktime(0, 0, 0, $mes, $dia, $ano));
  $dataretorno=$dataconv;
  return $dataretorno;
}
function MesPass($data) {
  $dia=substr($data,0,2);
  $mes=substr($data,2,2);
  $ano=substr($data,4,4);
  $dataconv=date('m',mktime(0, 0, 0, $mes-1, $dia, $ano));
  return $dataconv;
}
function MesProx($data) {
  $dia=substr($data,0,2);
  $mes=substr($data,2,2);
  $ano=substr($data,4,4);
  $dataconv=date('m',mktime(0, 0, 0, $mes+1, $dia, $ano));
  return $dataconv;
}
function AnoProx($data) {
  $dia=substr($data,0,2);
  $mes=substr($data,2,2);
  $ano=substr($data,4,4);
  $dataconv=date('Y',mktime(0, 0, 0, $mes+1, $dia, $ano));
  return $dataconv;
}
function AnoPass($data) {
  $dia=substr($data,0,2);
  $mes=substr($data,2,2);
  $ano=substr($data,4,4);
  $dataconv=date('Y',mktime(0, 0, 0, $mes-1, $dia, $ano));
  return $dataconv;
}
function getNomeMes($mes) {

  switch ($mes) {
    case 1:
        $dataconv='Janeiro';
        break;
    case 2:
        $dataconv='Fevereiro';
        break;
    case 3:
        $dataconv='Março';
        break;
    case 4:
        $dataconv='Abril';
        break;
    case 5:
        $dataconv='Maio';
        break;
    case 6:
        $dataconv='Junho';
        break;
    case 7:
        $dataconv='Julho';
        break;
    case 8:
        $dataconv='Agosto';
        break;
    case 9:
        $dataconv='Setembro';
        break;
    case 10:
        $dataconv='Outubro';
        break;
    case 11:
        $dataconv='Novembro';
        break;
    case 12:
        $dataconv='Dezembro';
        break;
    }
  return $dataconv;

}
function escreveDiaBranco($label) {
 	printf("<TD WIDTH=\"20\" ALIGN=\"CENTER\" VALIGN=\"TOP\">".$label."</TD>\r\n");
}
function escreveDiaMes($label) {
	printf("<TD onMouseOver=\"mOvr(this,'#CCCCCC');\" onMouseOut=\"mOut(this,'#FFFFFF');\" WIDTH=\"20\" ALIGN=\"CENTER\" VALIGN=\"TOP\"><A HREF=\"javascript:SetDateValue(".$label.");\"><B>".$label."</B></A></TD>\r\n");
}
function escreveDomingo($label) {
	printf("<TD onMouseOver=\"mOvr(this,'#CCCCCC');\" onMouseOut=\"mOut(this,'#FFFFFF');\" WIDTH=\"20\" ALIGN=\"CENTER\" VALIGN=\"TOP\"><A HREF=\"javascript:SetDateValue(".$label.");\"><B><font color=\"0000FF\">".$label."</B></font></A></TD>\r\n");
}

?>
