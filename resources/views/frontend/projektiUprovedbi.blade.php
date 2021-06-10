@extends('layouts.main')
<br><br><br><br>

@section('content')
      <!-- ======= News Section ======= -->
  <section id="more-services" class="more-services">
    <div class="container">
        <div class="section-title">
            <h2>Projekti u provedbi</h2>
        </div>
      <div class="row">
          @forelse ($projektiUprovedbi as $post)
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
                <img class="card-img" src="{{ Voyager::image( $post->image ) }}" width="522" height="377" alt="Bologna">
                <div class="card-body">
                  <h4 class="card-title">{{ $post->title }}</h4>
                  <small class="text-muted cat">
                    <i class="far fa-calendar-alt"></i> <b>{{ $post->created_at->format('d/m/Y') }}</b>
                    <i class="fa fa-list-alt"></i> <b>{{ $post->category->name }}</b>
                  </small>
                  <p class="card-text">{!! $post->body !!}</p>
                  <a href="{{ route('projektiUprovedbi.show', $post->slug) }}" class="read-more">Pročitaj više</a>
                </div>

              </div>

        </div>
        @empty
        <p>Trenutno nema projekata u provedbi.</p>
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
