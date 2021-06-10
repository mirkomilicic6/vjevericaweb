 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Kontaktirajte nas</h2>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-about">
            <h3>
              Lokalna agencija za razvoj Vjeverica d.o.o.
          </h3>
            <p>LAR Vjeverica d.o.o. Drenovci mjesto je na kojem poduzetnici dobivaju sve informacije vezane uz početak i razvoj poslovanja svog poduzeća ili obrta, a s ciljem poticanja malog i srednjeg poduzetništva te konkurentnosti gospodarstva.</p>
            <div class="social-links">
              <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
              <a href="https://hr-hr.facebook.com/lar.vjeverica" class="facebook"><i class="icofont-facebook"></i></a>
              <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
              <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="info">
            <div>
              <i class="ri-map-pin-line"></i>
              <p>Vladimira Nazora 8<br>Drenovci</p>
            </div>
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

        <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
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
