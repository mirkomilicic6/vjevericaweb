
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
{{--         <h1 class="text-light"><a href="index.html"><span>Vesperr</span></a></h1>
 --}}        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/"><img src="{{ asset('external/img/logo.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Početna</a></li>
          <li><a href="/about">O nama</a></li>
          <li><a href="/news">Vijesti</a></li>
          <li><a href="{{ route('frontend.services') }}">Usluge</a></li>
          <li class="drop-down"><a href="#portfolio">Projekti</a>
            <ul>
              <li class="drop-down"><a href="{{ route('projektiUprovedbi') }}">Projekti u provedbi</a>
                <ul>
                      @foreach ($projektiUprovedbiNav as $navbar)
                        <li><a href="{{ route('projektiUprovedbi.show', $navbar) }}">{{ $navbar->title }}</a></li>
                    @endforeach
                    <li><a href="{{ route('projektiUprovedbi') }}">Više projekata</a></li>
                </ul>
              </li>

              <li class="drop-down"><a href="{{ route('provedeniProjekti') }}">Provedeni projekti</a>
                <ul>
                      @foreach ($provedeniProjektiNav as $nav)
                        <li><a href="{{ route('provedeniProjekti.show', $nav) }}">{{ $nav->title }}</a></li>
                    @endforeach
                    <li><a href="{{ route('projektiUprovedbi') }}">Više projekata</a></li>
                </ul>
              </li>
            </ul>
          <li><a href="/natjecaji">Natječaji</a></li>
          <li><a href="{{ route('frontend.contact') }}">Kontakt</a></li>


          <li class="get-started"><a href="/admin">Prijava</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
