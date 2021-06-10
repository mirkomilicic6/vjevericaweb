@extends('layouts.main')
<br><br><br><br>
@section('content')
     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2>Naše lokacije</h2>
          </div>
<br><br>
          <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 400px;">
                    <div class="card-img-top" src="..."> <iframe width="400" height="300" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ0fTm-NgKXEcRhScxN1j7t0E&key=AIzaSyCJB4Z_D_-WJGfXRc9KwJf33jFf7kyAAHI"></iframe>

                    <div class="card-body">
                      <h5 class="card-title">Ured Drenovci</h5>
                      <div class="card-text">
                        <div class="info">
                            <div>
                              <i class="ri-map-pin-line"></i>
                              <p>Vladimira Nazora 8<br>Drenovci</p>
                            </div>
                            <div>
                              <i class="ri-mail-send-line"></i>
                              <p>info@lar-v.com</p>
                            </div>

                            <div>
                              <i class="ri-phone-line"></i>
                              <p>+385 (0)32 830-477</p>
                            </div>

                          </div>
                      </div>
                    </div>
                  </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 400px;">
                    <div class="card-img-top" src="..."> <iframe width="400" height="300" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/search?q=45.07256090128544%2C%2018.69399337294335&key=AIzaSyCJB4Z_D_-WJGfXRc9KwJf33jFf7kyAAHI"></iframe>

                    <div class="card-body">
                      <h5 class="card-title">Ured Županja</h5>
                      <div class="card-text">
                        <div class="info">
                            <div>
                              <i class="ri-map-pin-line"></i>
                              <p>J.J. Strossmayera 1<br>Županja</p>
                            </div>

                            <div>
                              <i class="ri-mail-send-line"></i>
                              <p>info@lar-v.com</p>
                            </div>

                            <div>
                              <i class="ri-phone-line"></i>
                              <p>+385 (0)32 830-477</p>
                            </div>

                          </div>
                      </div>
                    </div>
                  </div>
                  </div>
            </div>
        </div><hr>

        <div class="section-title" data-aos="fade-up">
            <h2>Kontaktirajte nas</h2>
          </div>
          <div class="row">

            <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="300">
              <form action="{{ asset('external/forms/contact.php') }}" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Vaše ime" data-rule="minlen:4" data-msg="Molimo unesite minimalno 4 znaka" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Vaša email adresa" data-rule="email" data-msg="Unesite valjanu e-mail adresu" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Predmet" data-rule="minlen:4" data-msg="Molimo unesite minimalno 8 znakova" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Poruka"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Učitavanje</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Vaša poruka je poslana. Zahvaljujemo Vam na upitu!</div>
                </div>
                <div class="text-center"><button type="submit">Pošalji poruku</button></div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->

@endsection


