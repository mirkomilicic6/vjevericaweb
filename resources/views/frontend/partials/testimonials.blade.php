 <!-- ======= Testimonials Section ======= -->
 <section id="testimonials" class="testimonials section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Recenzije korisnika</h2>
        <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p>
      </div>

      <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">
        @foreach ($testimonials as $testimonial)
        <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{ Voyager::image( $testimonial->photo ) }}" class="testimonial-img" alt="">
              <h3>{{ $testimonial->name }}</h3>
              <h4>{{ $testimonial->job }}</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {!! $testimonial->body !!}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        @endforeach


      </div>

    </div>
  </section><!-- End Testimonials Section -->
