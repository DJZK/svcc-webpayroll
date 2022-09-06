<?php


function calculateValidPayrollDate($dt) {
// Get the day of week.
$timestamp = $dt->getTimestamp();
$dw = date( 'N', $timestamp);   // 1=Monday, 7=Sunday

// If day of week is Sat or Sun, then return Fri.
$days_to_subsract = $dw - 5;
     if ( $days_to_subsract > 0 ) {
         $interval = 'P' . $days_to_subsract . 'D';
         $d = $dt->sub( new DateInterval($interval) );
         return $d->format('Y-m-d');
     }
     else {
         return $dt->format('Y-m-d');
     }
 }
 
 function getLastDayOfMonth($dt) {
     return $dt->modify('last day of this month');
 }
 
# Generate payout date for 2019.
# -----------------------------------
 $year = date("Y");
 $month = date("m");
 $dt = new DateTime();


 $dt->setDate($year, $month, 15);
 $dateObj   = DateTime::createFromFormat('!m', $month);

 

    // Get the middle of the month date. (Get the first cutoff of the month)
    $mid_month = calculateValidPayrollDate($dt);

    // Get the last day of the month date. (Get the last cutoff of the month)
    $last_day_of_month = calculateValidPayrollDate( getLastDayOfMonth($dt) );
    //              echo "$mid_month | $last_day_of_month\n<br>";
    //  if (date('d') < 16){

         $mid_month;

    //  }else{
  
         $last_day_of_month;

    //  }

//  for($m=1; $m<=12; $m++) {
//      // Get the middle of the month date.
//      $dt->setDate($year, $m, 15);
//      $mid_month = getValidBusinessDate($dt);
 
//      // Get the last day of the month date.
//      $last_day_of_month = getValidBusinessDate( getLastDayOfMonth($dt) );
 
//      echo "$mid_month | $last_day_of_month\n<br>";
//  }