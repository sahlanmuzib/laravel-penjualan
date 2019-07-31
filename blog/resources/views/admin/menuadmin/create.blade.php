@extends ('admin.master_ad')
@section('content')

<form class="" action="simpan.blade.php" method="post">
	
        <label>Masukan Nama Item : </label> 
        <input type="text" name="item" placeholder="masukan nama item">
    <br>
        <label>Masukan Harga : </label> 
        <input type="text" name="harga" placeholder="IDR"> 
    <br>
		<label>Masukan Deskripsi : </label> 
        <input type="text" name="deskripsi" placeholder="IDR"> 
    <br>
        <!-- <form action="" method="post" enctype="multipart/form-data"> -->
		Pilih File : <input type="file" name="gambar" class> 
	<br>
    {{ csrf_field() }}
		<input type="submit" name="" value="Input">
		<!-- <input type="submit" value="Upload"> -->
</form>

@endsection


