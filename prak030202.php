<?php
function hitungDenda($tglHarusKembali,$tglKembali){

    $date1 = explode("-", $tglHarusKembali);
    $day1 = $date1[2];
    $month1 = $date1[1];
    $year1 = $date1[0];

    $date2 = explode("-", $tglKembali);
    $day2 = $date2[2];
    $month2 = $date2[1];
    $year2 = $date2[0];

    $jd1 = GregorianToJD($month1,$day1,$year1);
    $jd2 = GregorianToJD($month2,$day2,$year2);
    
	$selisihHari = $jd2 - $jd1;

    $denda = $selisihHari * 3000;

    return $denda;
}

echo ("Besarnya denda adalah : Rp.".hitungDenda("2021-01-03", "2021-01-05"));
?>