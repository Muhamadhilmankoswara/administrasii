<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
 
	<a href="/surat"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($surat_masuk as $p)
	<form action="/surat/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $p->kode_agenda }}"> <br/>
		Isi Ringkas Surat <input type="text" name="isi" required="required" value="{{ $p->isi_ringkassurat }}"> <br/>
		Asal Surat <input type="text" name="asal" required="required" value="{{ $p->asal_surat }}"> <br/>
		Tanggal Surat <input type="date" required="required" name="tanggal" value="{{ $p->Tgl_surat }}"></input> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>