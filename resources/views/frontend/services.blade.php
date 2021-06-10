@extends('layouts.main')
<br><br><br><br>
@section('content')
      <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Ulaganje u budućnost</h2>
        <p></p>
      </div>
      <br><br>
      {{-- <div class="row">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fas fa-business-time"></i></div>
            <h4 class="title"><a href="">Poduzetništvo</a></h4>
            <p class="description">Lokalna agencija za razvoj VJEVERICA d.o.o. Drenovci je mjesto na kojem poduzetnici dobivaju sve informacije vezane uz početak i razvoj poslovanja svog poduzeća ili obrta, a s ciljem poticanja razvoja malog i srednjeg poduzetništva te konkurentnosti gospodarstva.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="fas fa-tractor"></i></div>
            <h4 class="title"><a href="">Poljoprivreda i ruralni razvoj</a></h4>
            <p class="description">Budući da područje djelovanja agencije čini ruralni prostor, glavni prioritet Lokalne agencije za razvoj Vjeverica d.o.o. Drenovci je poticati razvoj konkurentnog poljoprivrednog poslovanja i sveobuhvatnog ruralnog razvoja s ciljem unaprjeđenja kvalitete života stanovnika ruralnog područja.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="fas fa-male"></i><i class="fas fa-female"></i></div>
            <h4 class="title"><a href="">Učinkoviti ljudski potencijali</a></h4>
            <p class="description">Jedan od prioriteta prema kojima je Lokalna agencija za razvoj VJEVERICA d.o.o. Drenovci usmjerena jest poticanje rasta zapošljavanja i jačanje socijalne kohezije.</p>
          </div>
        </div>


      </div> --}}

      {{--  --}}
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{ asset('external/img/usluge1.jpeg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Poduzetništvo</h5>
      <p class="card-text">Lokalna agencija za razvoj VJEVERICA d.o.o. Drenovci je mjesto na kojem poduzetnici dobivaju sve informacije vezane uz početak i razvoj poslovanja svog poduzeća ili obrta, a s ciljem poticanja razvoja malog i srednjeg poduzetništva te konkurentnosti gospodarstva.</p>
      <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#poduzetnistvo">
        Aktivnosti
      </button>
      </small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('external/img/usluge2.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Poljoprivreda i ruralni razvoj</h5>
      <p class="card-text">Budući da područje djelovanja agencije čini ruralni prostor, glavni prioritet Lokalne agencije za razvoj Vjeverica d.o.o. Drenovci je poticati razvoj konkurentnog poljoprivrednog poslovanja i sveobuhvatnog ruralnog razvoja s ciljem unaprjeđenja kvalitete života stanovnika ruralnog područja.</p>
      <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#poljoprivreda">
        Aktivnosti
      </button></small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('external/img/usluge3.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Učinkoviti ljudski potencijali</h5>
      <p class="card-text">Jedan od prioriteta prema kojima je Lokalna agencija za razvoj VJEVERICA d.o.o. Drenovci usmjerena jest poticanje rasta zapošljavanja i jačanje socijalne kohezije.</p>
      <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ljudskipotencijali">
        Aktivnosti
      </button></small></p></small></p>
    </div>
  </div>
</div>
<br><br><br>
      {{--  --}}
      <div class="section-title" data-aos="fade-up">
        <h2>PRAVO NA PRISTUP INFORMACIJAMA</h2>
        <p></p>
    </div>
    <p>Pravo na pristup informacijama i ponovnu uporabu informacija ostvaruje se na temelju Zakona o pravu na pristup informacijama (Narodne novine, broj 25/13 i 85/15), podnošenjem zahtjeva službeniku za informiranje Lokalne agencije za razvoj VJEVERICA d.o.o Drenovci., i to na sljedeći način:</p>
    <ul>
        <li>pismeno ili osobno na adrese: Lokalna agencija za razvoj VJEVERICA d.o.o., Vladimira Nazora 8, 32257 Drenovci ili Josipa Jurja Strossmayera 1, 32270 Županja (soba br. 3)</li>
        <li>usmeno putem telefona/faksa na broj: +385 (0)32 830 477</li>
        <li>elektroničkom poštom službeniku za informiranje na adresu e-pošte: info@lar-v.com ili damjanovic.katarina@gmail.com</li>
    </ul>


</div>{{-- CONTAINER END DIV --}}
  </section><!-- End Services Section -->
<br>




  <!-- Modal poduzetnistvo -->
<div class="modal fade" id="poduzetnistvo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Aktivnosti vezane za poduzetništvo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Aktivnosti VJEVERICE su usmjerene na sljedeća područja:</p>
            <ul>
                <li>edukacija i trening poduzetnika</li>
                <li>informiranje i savjetovanje poduzetnika o programima poticanja</li>
                <li>izrada poslovnih planova i investicijskih studija</li>
                <li>praćenje natječaja za financiranje projekata vezanih za malo i srednje poduzetništvo raspisanih od strane Ministarstava RH i ESI fondova, te savjetnička podrška, priprema i implementacija istih</li>
                <li>razvoj potporne poduzetničke infrastrukture</li>
                <li>unaprjeđenje financijskih instrumenata za razvoj malog i srednjeg poduzetništva</li>
            </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal poljporivreda -->
<div class="modal fade" id="poljoprivreda" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Aktivnosti vezane za poljprivredu i ruralni razvoj</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Aktivnosti VJEVERICE su usmjerene na sljedeća područja:</p>
            <ul>
                <li>priprema projektnih prijedloga – nacionalni i EU fondovi</li>
                <li>savjetovanje vezano uz Program ruralnog razvoja 2014.-2020. ESI fondova</li>
                <li>izrada i provedba programa edukacije</li>
                <li>poticanje razvoja poduzetništva u poljoprivredi (izrada planova ulaganja, gospodarskih programa, priprema natječajne dokumentacije)</li>
                <li>poticanje organizacijskog i interesnog povezivanja proizvođača (zadruge/klasteri)</li>
            </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal ljudski potencijali -->
<div class="modal fade" id="ljudskipotencijali" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Aktivnosti vezane za ljudske potencijale</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Aktivnosti VJEVERICE su usmjerene na sljedeća područja:</p>
            <ul>
                <li>visoka zapošljivost i mobilnost radne snage</li>
                <li>socijalno uključivanje</li>
                <li>obrazovanje i cjeloživotno učenje</li>
                <li>dobro upravljanje</li>
            </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
        </div>
      </div>
    </div>
  </div>
@endsection


