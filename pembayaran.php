<?php
include("koneksi.php");
if (isset($_POST ['simpan'])){ 
	$query_tambah_bayar="insert into pembayaran (qty,harga) values
	(' ".$_POST['qty']." '
	' ".$_POST['harga']." ')";
	$proses_bayar=mysqli_query($rumah,$query_tambah_bayar);
if($proses_bayar){
	echo 'Tambah data berhasil';
}else{
	echo mysqli_error($rumah);
}

}



?>

<!---name isi sesuai field di phpmyadmin--->
<form method="POST" action=""><!---name harus sama dengan database--->
<table>
	<tr>
		<td> Qty </td>
		<td><input name="qty" type="number"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input name="harga" type="number"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
</table>
</form>




<a href="inputbarang.php"><h2>Back</h2></a>