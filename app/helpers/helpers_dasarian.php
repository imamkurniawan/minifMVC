<?php
/**
* getCountOfMonth()
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

/**
* validasiDataDasarian()
* fungsi untuk melakukan validsi data hujan dasarian yang dikirim oleh pengamat
* input -> year, month, dasarian, data (format data hujan yang dikirimkan)
* menggunakan fungsi getCountDaysOfMonth() untuk ekstraksi jumlah hari
* output -> hasil validasi (true atau false)
* true jika dicetak menghasilkan string ('1') sedangkan false ('')
*/
function validasiDataDasarian($year="",$month="",$das="",$data="")
{
	$day = getCountDaysOfMonth($year, $month);
	if($das == 3)
	{
		$jml_hari = $day['das_3'];
	}
	elseif($das == 1 | $das == 2)
	{
		$jml_hari = 10;
	}
	else
	{
		$val = "Error month";
	}
	$arr_data = explode(" ",$data);
	//print_r($arr_data);
	$count = count($arr_data);
	if($jml_hari == $count-1)
	{
		$val = true;
	}
	else
	{
		$val = false;
	}
	return $val;
}

$val = validasiDataDasarian(2021,02,3,'092020b - - - - - - - 10.45');
if ($val == true)
{
	echo "<script> alert('Benar') </script>";
}
else 
{
	echo "<script> alert('Salah') </script>";
}