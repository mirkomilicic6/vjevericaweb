@extends('layouts.main')
<br><br><br><br>

@section('content')
      <!-- ======= News Section ======= -->
  <section id="more-services" class="more-services">
    <div class="container">
        <div class="section-title">
            <h2>Natječaji</h2>
        </div>
      <div class="row">
          @forelse ($natjecaji as $post)
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">

                @if(empty($post->image))
                <img class="card-img" src="{{ asset('external/img/natjecaj.jpg') }}" width="350" height="200">
                @else
                <img class="card-img" src="{{ Voyager::image( $post->image ) }}" width="522" height="377" alt="Bologna">
                @endif

                <div class="card-body">
                  <h4 class="card-title">{{ $post->title }}</h4>
                  <small class="text-muted cat">
                    <i class="far fa-calendar-alt"></i> {{ $post->created_at->format('d/m/Y') }}
                    <i class="fa fa-list-alt"></i> {{ $post->category->name }}
                  </small>
                  <br>
                 {{--  <p class="card-text">{!! $post->body !!}</p> --}}
                  <a href="{{ route('natjecaji.show', $post->slug) }}" class="read-more">Pročitaj više</a>
                </div>

              </div>

        </div>
        @empty
        <p>Trenutno nema aktivnih natječaja.</p>
        @endforelse





    </div>
  </section><!-- End News Section -->

  <style>
      .more-services .card {
          padding: 20px 20px 20px 20px;
      }
      body {
  padding: 2rem 0rem;
}

.card-img {
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;
}

.card-title {
  margin-bottom: 0.3rem;
}

.cat {
  display: inline-block;
  margin-bottom: 1rem;
}

.fa-users {
  margin-left: 1rem;
}

.card-footer {
  font-size: 0.8rem;
}
  </style>

@endsection
