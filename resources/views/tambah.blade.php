<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/surat"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/surat/store" method="post">
    <tr>
        <td>Kode Agenda</td>
        <td><input type="text" name="kode" required="required"></td>
    </tr>
		{{ csrf_field() }}
		Kode Agenda <input type="text" name="kode" required="required"> <br/>
		Isi Ringkas Surat <input type="text" name="isi" required="required"> <br/>
		Asal Surat <input type="text" name="asal" required="required"> <br/>
		Tanggal Surat <input type="date" name="tanggal" required="required"></input> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>