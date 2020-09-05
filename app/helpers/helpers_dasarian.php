<?php
/**
* Fungsi untuk mengambil jumlah hari pada 1 bulan
* Input => tahun dan bulan
* Output berupa Array => jml_hari, tgl_terakhir, dan das_3 (Jumlah hari dasarian 3)
*/
function getCountDaysOfMonth($year="",$month="")
{
	if($month == 02)
	{
		if (fmod($year,4) == 0)
		{
			return ['jml_hari'=>29, 'tgl_terakhir'=>29, 'das_3'=>9];
		}
		else
		{
			return ['jml_hari'=>28, 'tgl_terakhir'=>28, 'das_3'=>8];
		}
	}
	elseif($month == 04 | $month == 06 | $month == 09 | $month == 11)
	{
		return ['jml_hari'=>30, 'tgl_terakhir'=>30, 'das_3'=>10];
	}
	elseif($month == 01 | $month == 03 | $month == 05 | $month == 07 | $month == 08 | $month == 10 | $month == 12)
	{
		return ['jml_hari'=>31, 'tgl_terakhir'=>31, 'das_3'=>11];
	}
	else
	{
		echo "Error, make sure input number";
	}
}
$year = date('Y');
$month = date('m');

$day = getCountDaysOfMonth($year,08);
print_r($day);