    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2>Vjeverica tim</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
          </div>

          <div class="row">
            @foreach ($team as $tim)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="{{ Voyager::image( $tim->photo ) }}" class="img-fluid" width="255" height="255" alt="">
                    <div class="social">
                      <a href=""><i class="icofont-twitter"></i></a>
                      <a href=""><i class="icofont-facebook"></i></a>
                      <a href=""><i class="icofont-instagram"></i></a>
                      <a href=""><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>{{ $tim->name }}</h4>
                    <span>{!! $tim->job !!}</span>
                  </div>
                </div>
              </div>
            @endforeach




          </div>

        </div>
      </section><!-- End Team Section -->
