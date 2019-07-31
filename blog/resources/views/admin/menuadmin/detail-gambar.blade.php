@foreach($semua_item as $item)
@include ('koneksi')
  <div class="containter">
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
    <h1 class="text-xs-center">Detail Image</h1>
    <img id="zoom" src="{{ $item->gambar}}" height="50px" width="50px" data-zoom-image="{{$item->gambar}}">
    </div>
   </div>
  </div>
@endforeach

  <!-- jQuery -->
  <script src="zoom/js/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="zoom/js/bootstrap.js"></script>
  <script src="zoom/js/jquery.elevateZoom-3.0.8.min.js"></script>
  <script type="text/javascript">
   //script untuk menampilkan image zoom
   $("#zoom").elevateZoom({
     zoomType : "lens",
     lensShape : "round",
     lensSize    : 200 
   });
  </script>
