function confirmasi() {
var msg;
msg= "Operasi ini akan menghapus data yang dipilih \n Yakin akan melanjukan ? \n Klik OK untuk Menghapus dan CANCEL untuk membatalkan" ;
var agree=confirm(msg);
if (agree)
return true ;
else
return false ;
}
