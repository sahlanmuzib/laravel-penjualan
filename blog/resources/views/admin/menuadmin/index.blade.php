@extends ('admin.master_ad')
@section('content')


<a href="{{('/create')}}"><input type="submit" class="btn btn-primary" value="Buat Baru"></a>
<table class="table table-stripped">
    <tr>
    	<th> ID </th>
        <th> Gambar </th>
        <th> Deskripsi </th>
        <th> Harga </th>
        <TH> Keterangan</TH>
        
    </tr>


@foreach($semua_item as $item)
@include ('koneksi')
<tr>
        <td>{{ $loop->iteration}}</td>
        <!-- <td><a href="{{ url('show/' . $item->id)}}"> {{ $item->title }} </a> </td> -->
        <td><img id="zoom" src="{{ $item->gambar}}" height="50px" width="50px" data-zoom-image="{{$item->gambar}}"></td>
        <td>{{ $item->deskripsi}}</td>
        <td>{{ $item->harga}}</td>
        <td><a href="{{('#')}}"><input type="submit" class="btn btn-primary" value="Detail Gambar"></a>
        <a href="{{('#')}}"><input type="submit" class="btn btn-primary" value="Edit"></a>
    <a href="{{('#')}}"><input type="submit" class="btn btn-primary" value="Delete"></a></td>
</tr>
@endforeach
</table>


@endsection


