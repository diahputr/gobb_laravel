@extends('layout/main')
@section('title', 'INVOICE')

@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">INVOICE</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    ORDER
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $order->jemput }}</li>
                    <li class="list-group-item">{{ $order->tujuan }}</li>
                    <li class="list-group-item">{{ $order->metode }}</li>
                    <li class="list-group-item">{{ $order->harga }}</li>
                    <li class="list-group-item">{{ $order->pesan }}</li>
                </ul>
            </div>
        </div>
    </div>
  </div>
@endsection
