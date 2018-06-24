<link rel="shortcut icon"  href="../images/logo.jpg"/>

<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";  
  disp_setting+="scrollbars=yes,width=1300, height=540, left=30, top=50"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>PT PRIMAJASA</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 1200px; font-size:50px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body><table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<center><a href="javascript:Clickheretoprint()">Print/Cetak Tiket</a><a href="../index.php"><center>Home</a></center><br><br>
<div id="print_content" style="width:1350;">
	<img src="../images/primajasa.jpg">
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>
<strong><font color="#000000" size="5">Silahkan Print/Cetak Tiket Pemesanan Anda</font></strong><br>
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>
<strong><font color="#000000" size="5">Rincian Pemesanan Tiket Anda</font></strong><br>
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>

<?php
include('../inc/koneksi.php');
$id=$_GET['id'];

$result = "SELECT * FROM tb_user WHERE no_pesan='$id'" or die(mysqli_error());
$print = mysqli_query($con, $result);
while($row = mysqli_fetch_array($print))
	{
		echo '<font color=#"000000" size="3">Nomor Transaksi: '.$row['no_pesan'].'<br><br>';
		echo 'Nama Lengkap: '.$row['nama'].'<br><br>';
		echo 'Alamat: '.$row['alamat'].'<br><br>';
		echo 'No Hp: '.$row['kontak'].'<br><br>';
    echo 'Jadwal Keberangkatan: '.$row['id_jadwal'].'<br><br>';
		echo 'Tanggal Keberangkatan: '.$row['tgl_keb'].'<br><br>';
		echo 'Harga: '.$row['harga'].'<br><br>';
		echo 'Nomor Kursi: '.$row['seat'].'<br><br>';
		
	}
	
?>

<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>
<strong><font color="#000000" size="4">Pembayaran Dapat Melalui Transfer Ke Rekening Berikut		
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table><br>
<table width="708" border="2" cellpadding="3" cellspacing="5 " bgcolor="#00FF00">
<tr bgcolor="#000000">
<td><center><font color="#FFFFFF">Daftar Nama Bank</font></center></td>
  <td><center><font color="#FFFFFF">BRI </font></center></td>
  <td><center><font color="#FFFFFF">BRI</font></center></td>
  <td><center><font color="#FFFFFF">BCA</font></center></td>
</tr>
<tr bgcolor="#000000">
<td><center><font color="#FFFFFF">No Rekening</font></center></td>
  <td><center><font color="#FFFFFF"> 49234924724293</font></center></td>
  <td><center><font color="#FFFFFF"> 32847827343273</font></center></td>
  <td><center><font color="#FFFFFF"> 89478293747382</font></center></td>
</tr>
<tr bgcolor="#000000">
<td><center><font color="#FFFFFF">Atas Nama</font></center></td>
  <td><center><font color="#FFFFFF">Akbar Pambudi Utomo</font></center></td>
  <td><center><font color="#FFFFFF">Julham Ramadhana</font></center></td>
  <td><center><font color="#FFFFFF">Muhammad Adam</font></center></td>
</tr>
</table><br>

<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>
<strong><font color="#000000" size="5">Batas Waktu Pembayaran Selama 2 Jam, Lebih Dari Itu Maka Tiket Yang Anda Pesan Maka Akan Batal</font></strong><br></div><br>
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>
<strong><font color="#000000" size="5">Terima Kasih Telah Melakukan Pemesanan Tiket   
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>