@extends('layout/main')
@section('title', 'Go BlueBird')

@section('container')
      <div class="container">
        <div class="jumbotron">
          <div class="row justify-content-center">
            <div class="col-8">
              <div class="card">
                <div class="card-header"><strong>Driver Sedang menuju ke tempat anda silahkan tunggu</strong></div>
                  <div class="card-body">
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
                            <tr>
                            <td>{{ $request->jemput }}</td>
                            <td>{{ $request->tujuan }}</td>
                            <td>{{ $request->metode }}</td>
                            <td>Rp 15.000</td>
                            <td>{{ $request->pesan }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- google map  -->
                    <div class="map-holder">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2988673283967!2d107.62834001431776!3d-6.974022670225844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6285c5b7da517%3A0x864485f26a388f95!2sTelkom%20University!5e0!3m2!1sid!2sid!4v1587997456428!5m2!1sid!2sid" width="645" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                  </div>      
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
