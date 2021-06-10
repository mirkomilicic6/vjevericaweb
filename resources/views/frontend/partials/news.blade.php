  <!-- ======= News Section ======= -->
  <section id="more-services" class="more-services">
    <div class="container">
        <div class="section-title">
            <h2>Najnovije</h2>
        </div>

      <div class="row">
          @foreach ($latestPosts as $post)
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
                @if($post->category_id===4)
                <img class="card-img" src="{{ asset('external/img/natjecaj.jpg') }}" width="522" height="377" alt="Bologna">
                @elseif(empty($post->image))
                <img class="card-img" src="{{ asset('external/img/logo.png') }}" width="522" height="377">
                @else
                <img class="card-img" src="{{ Voyager::image( $post->image ) }}" width="522" height="377" alt="Bologna">
                @endif
                <div class="card-body">
                  <h4 class="card-title">{{ $post->title }}</h4>
                  <small class="text-muted cat">
                    <i class="far fa-calendar-alt"></i> {{ $post->created_at->format('d/m/Y') }}
                    <i class="fa fa-list-alt"></i> {{ $post->category->name }}
                  </small>
                  <p class="card-text">{!! $post->body !!}</p>
                  <a href="{{ route('news.show', $post->slug) }}" class="read-more">Pročitaj više</a>
                </div>

              </div>
            {{-- <div class="card" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ Voyager::image( $post->image ) }}" alt="" width="522" height="377">
              <div class="card-body">
                  <p>{{ $post->created_at->format('d/m/Y') }}.         {{ $post->category->name }}</p>

                <h5 class="card-title"><a href="">{{ $post->title }}</a></h5>
                <p class="card-text">{!! $post->body !!}</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Pročitaj više o ovoj temi</a></div>
              </div>
            </div> --}}
        </div>
          @endforeach





    </div>
  </section><!-- End News Section -->

  <style>
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
