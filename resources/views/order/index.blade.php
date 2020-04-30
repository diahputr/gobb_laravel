@extends('layout/main')
@section('title', 'INVOICE')

@section('container')
  <div class="container">
    <div class="jumbotron">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-3">ORDER_HISTORY</h1>
                    <table class="table mt-3">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Alamat Penjemputan</th>
                            <th scope="col">Alamat Tujuan</th>
                            <th scope="col">Metode Pembayaran</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Pesan</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        @foreach( $orders as $ord )
                            <tr>
                            <td>{{ $ord->jemput }}</td>
                            <td>{{ $ord->tujuan }}</td>
                            <td>{{ $ord->metode }}</td>
                            <td>Rp {{ $ord->harga }}</td>
                            <td>{{ $ord->pesan }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
