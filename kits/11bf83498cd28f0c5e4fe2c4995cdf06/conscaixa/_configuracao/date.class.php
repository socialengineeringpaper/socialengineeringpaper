<?

class xdate {

   var $value;

   function IsDate() {

      list ($day, $month, $year) = split ('[/.-]', $this->value);
      if (!checkdate ($month, $day, $year))
         return (false);
      return (true);
   }


   function xdate($value) {

      $this->value = $value;
      if (!$this->IsDate())
         return (false);

      list ($day, $month, $year) = split ('[/.-]', $this->value);
      $day = '0'.$day;
      $day = substr($day,strlen($day)-2,2);
      $month = '0'.$month;
      $month = substr($month,strlen($month)-2,2);
      $year = '0000'.$year;
      $year = substr($year,strlen($year)-4,4);
      $this->value = $day.'/'.$month.'/'.$year;
      return (true);
   }


   function AddDays($days) {

      if (!$this->IsDate())
         return (false);

      list ($day, $month, $year) = split ('[/.-]', $this->value);
      return (strftime("%d/%m/%Y",mktime(0, 0, 0, $month, $day+$days, $year)));

   }

   function AddMonths($months) {

      if (!$this->IsDate())
         return (false);
      list ($day, $month, $year) = split ('[/.-]', $this->value);

      // soma mês com dia 1º
      $d1 = new xdate(strftime("%d/%m/%Y",mktime(0, 0 ,0, $month+$months, 1, $year)));

      // transforma em xdate
      list ($day2, $month, $year) = split ('[/.-]', $d1->value);
      $d2 = new xdate(strftime("%d/%m/%Y",mktime(0, 0 ,0, $month, $day, $year)));

      // se mês com dia 1º diferente de mês com xdate,
      // diminui 1 dia até chegar em uma data válida
      while ($d2->Month() != $d1->Month())
         $d2->value = $d2->AddDays(-1);

      return ($d2->value);
 }

  function AddYears($years) {
      if (!$this->IsDate())
         return (false);
      list ($day, $month, $year) = split ('[/.-]', $this->value);
      return (strftime("%d/%m/%Y",mktime(0, 0, 0, $month, $day, $year+$years)));
   }

   function Year() {
      if (!$this->IsDate())
         return (false);
      list ($day, $month, $year) = split ('[/.-]', $this->value);
      return ($year);
   }

   function Month() {

      if (!$this->IsDate())
         return (false);
      list ($day, $month, $year) = split ('[/.-]', $this->value);
      return ($month);
   }

   function Day() {

      if (!$this->IsDate())
         return (false);
      list ($day, $month, $year) = split ('[/.-]', $this->value);
      return ($day);
   }

   function FirstDayOfMonth() {

      if (!$this->IsDate())
         return (false);
      list ($day, $month, $year) = split ('[/.-]', $this->value);
      return ('01/'.$this->Month().'/'.$this->Year());
   }

   function LastDayOfMonth() {

      if (!$this->IsDate())
         return (false);
      $d = new xdate($this->value);
      $d->value = $d->FirstDayOfMonth();
      $d->value = $d->AddMonths(1);
      return($d->AddDays(-1));
   }


   function WeekDay() {
       if (!$this->IsDate())
         return (false);
      list ($day, $month, $year) = split ('[/.-]', $this->value);
      return(strftime("%w",mktime(0, 0, 0, $month, $day, $year)));
   }

   function WeekDayName() {
      if (!$this->IsDate())
         return (false);

      switch($this->WeekDay()) {
      case 0:
         return('Domingo');
         break;
      case 1:
         return('Segunda');
         break;
      case 2:
         return('Terça');
         break;
      case 3:
         return('Quarta');
         break;
      case 4:
         return('Quinta');
         break;
      case 5:
         return('Sexta');
         break;
      case 6:
         return('Sábado');
         break;
      }
   }

   function MonthName() {

      if (!$this->IsDate())
         return (false);

      switch($this->Month()) {
      case '01':
         return('Janeiro');
         break;
      case '02':
         return('Fevereiro');
         break;
      case '03':
         return('Março');
         break;
      case '04':
         return('Abril');
         break;
      case '05':
         return('Maio');
         break;
      case '06':
         return('Junho');
         break;
      case '07':
         return('Julho');
         break;
      case '08':
         return('Agosto');
         break;
      case '09':
         return('Setembro');
         break;
      case '10':
         return('Outubro');
         break;
      case '11':
         return('Novembro');
         break;
      case '12':
         return('Dezembro');
         break;
      }
   }
   
   function DaysBetweenDates($d) {

      // Funciona para data maior que 01/01/1970
      if (!$this->IsDate())
         return (false);
      $d = new xdate($d);
      if (!$d->IsDate())
         return (false);
      list ($day, $month, $year) = split ('[/.-]', $this->value);
      list ($dday, $dmonth, $dyear) = split ('[/.-]', $d->value);
      return ((mktime(0, 0, 0, $month, $day, $year) - mktime(0, 0, 0, $dmonth, $dday, $dyear))/86400);

   }

}

?>
