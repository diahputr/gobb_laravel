@extends('layout/main')
@section('title', 'Go BlueBird')

@section('container')
  <div class="container">
  <div class="jumbotron">
    <div class="row justify-content-center">
        <div class="col-8">
        <div class="card">
            <div class="card-header"><strong>Hallo, mau kemana hari ini ?</strong></div>
              <div class="card-body">
                <form method="post" action="create">
                @csrf
                  <div class="form-group">
                    <input type="text" class="form-control" id="jemput" placeholder="Alamat Penjemputan" name="jemput">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="tujuan" placeholder="Alamat Tujuan" name="tujuan">
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="metode" id="cash" value="cash" checked>
                    <label class="form-check-label" for="cash">
                      Cash
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="metode" id="gopay" value="gopay">
                    <label class="form-check-label" for="gopay">
                      GoPay
                    </label>
                  </div>
                  
                      <!-- google map  -->
                    <div class="map-holder">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2988673283967!2d107.62834001431776!3d-6.974022670225844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6285c5b7da517%3A0x864485f26a388f95!2sTelkom%20University!5e0!3m2!1sid!2sid!4v1587997456428!5m2!1sid!2sid" width="640" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    
                  <div class="form-group mt-3">
                    <label for="pesan">Pesan untuk Driver</label>
                    <textarea cols="30" rows="5" class="form-control" id="pesan" name="pesan"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Berangkat</button>
                </form>
              </div>      
          </div>
        </div>
    </div>
  </div>
  </div>
@endsection
