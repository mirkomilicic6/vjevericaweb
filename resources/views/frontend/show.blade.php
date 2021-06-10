@extends('layouts.main')
<br><br><br><br><br>

@section('content')
     <!-- ======= Portfolio Details Section ======= -->
     <section id="portfolio-details" class="portfolio-details">
        <div class="container">

          <div class="row">

            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="portfolio-title">{{ $post->title }}</h2>
                </div>

              <div class="owl-carousel portfolio-details-carousel">
                @if(empty($post->image))
                <img class="card-img" src="{{ asset('external/img/logo.png') }}" style="width: 70%;">
                @else
                <img src="{{ Voyager::image( $post->image ) }}" class="card-img" style="width: 70%; display: block; margin-left: auto; margin-right: auto;">
                @endif
              </div>
            </div>

            <div class="col-lg-4 portfolio-info">
              <h3>Podaci o projektu</h3>
              <ul>
                <li><strong>Kategorija</strong>: {{ $post->category->name }}</li>
                <li><strong>Datum objave</strong>: {{ $post->created_at->format('d/m/Y') }}</li>
                <li><strong>Datum provođenja</strong>: 01.05.2018. - 01.11.2019.</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>

              <p>
                <h3>Podijeli objavu:</h3>
                {!!Share::currentPage()
                    ->facebook()
                    ->twitter()
                    ->linkedin('Extra linkedin summary can be passed here')
                    ->whatsapp();
                !!}

              </p>


            </div>

          </div>
          <br><br>
          <div class="row">
              <div class="col-md-12">
                {!! $post->body !!}
              </div>
          </div>

        </div>
      </section><!-- End Portfolio Details Section -->
@endsection
<style>
    #social-links li{
        display: inline-block;
        margin-right: 10px;
        font-size: 30px;
    }
.owl-carousel .owl-item img {
    width: 70%;
}
.card-img{
    width: 70%;
}
</style>
