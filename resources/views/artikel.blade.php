@extends('layouts.member')
@section('content')
    <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
             <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{$informasi->image()}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h1>{{$informasi->nama_game}}</h1>
              <h2>{{$informasi->keterangan}}</h2>
              <div class="form-group">
                <label>Pengertian Role</label></label>
                <h3>{{ $informasi->pengertian }}</h3>
              </div>
            </div>
          </div>

         

        </div>
      </div>

    </section><!-- End About Section -->

  </main><
@endsection