@extends('layout/main')
@section('title', 'Go BlueBird')

@section('container')
  <div class="container">
    <div class="jumbotron">
      <img src="{{ url('/images/11.jpg') }}" alt="image description" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-bgfit="cover" data-no-retina>>
      <h1 class="display-4">GO-JEK & BLUE BIRD MEMPERKENALKAN GO-BLUEBIRD</h1>
      <p class="lead">GO-JEK bekerjasama dengan Blue Bird memberikan pengalaman berkendara yang aman, praktis dan terpercaya untuk Anda.</p>
      <hr class="my-4">
      <p>GO-JEK Indonesia dan Blue Bird menghadirkan Kolaborasi Anak Bangsa dengan meluncurkan GO-BLUEBIRD, penyediaan layanan pemesanan taksi Blue Bird melalui platform aplikasi GO-JEK. Kolaborasi ini akan memudahkan mobilitas pelanggan Blue Bird maupun pengguna aplikasi GO-JEK, terutama di lima wilayah di Indonesia: Jabodetabek, Surabaya, Bandung, Medan, dan Semarang.</p>
      <a href="{{ url('/order/create') }}" class="btn btn-primary my-3">ORDER NOW</a>
    </div>
  </div>
@endsection
