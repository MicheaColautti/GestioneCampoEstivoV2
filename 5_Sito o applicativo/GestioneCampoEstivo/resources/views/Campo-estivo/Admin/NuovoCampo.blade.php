<!DOCTYPE html>
<html style="font-size: 16px;" lang="it"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Fondazione vita serena, Iscrizione al campo per l&amp;apos;ospite, Nuovo campo">
    <meta name="description" content="">
    <title>NuovoCampo</title>
    <link rel="stylesheet" href="{{ URL::asset('css/Campo-estivo/Admin/NuovoCampo.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/nicepage.css') }}" />
    <script class="u-script" type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script class="u-script" type="text/javascript" src="{{ URL::asset('js/nicepage.js') }}"></script>
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="NuovoCampo">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="it">
    <section class="u-align-left u-clearfix u-section-1" id="sec-1cd6">
      <div class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <p class="u-align-center u-custom-item u-text u-text-1">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="{{route('HomeCampo')}}"><span class="u-file-icon u-icon u-icon-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img style="width:37px; height:37px;" src="{{URL::asset('storage/images/69524.png')}}" alt=""></span>
                  <br>Home
                </a>
              </p>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <p class="u-align-center u-custom-item u-text u-text-default u-text-2">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-7" 
                  ref="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <span class="u-file-icon u-icon u-icon-3">
                    <img style="width:37px; height:37px;" src="{{URL::asset('storage/images/992680.png')}}" alt="">
                  </span>&nbsp; <br>Sign Out 
                </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      @csrf
                  </form>
              </p>
            </div>
          </div>
        </div>
      </div>
      <img class="u-align-left u-hidden-sm u-hidden-xs u-image u-image-contain u-image-default u-image-1" src="{{URL::asset('storage/images/centro-diurno-vita-serena-1.png')}}" alt="" data-image-width="332" data-image-height="291">
      <div class="u-hidden-sm u-hidden-xs u-list u-list-2">
        <div class="u-repeater u-repeater-2">
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-top-xs u-container-layout-3">
              <a href="{{route('Home')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-3">Home sito</a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-top-xs u-container-layout-4">
              <a href="{{route('Su-di-noi')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-4">Chi siamo<br>
              </a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-top-xs u-container-layout-5">
              <a href="{{route('Contatti')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-5">Contatti<br>
              </a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-top-xs u-container-layout-6">
              <a href="https://www.centridiurni.ch/centro-diurno-vita-serena/" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-6" target="_blank">Centro diurno<br>
              </a>
            </div>
          </div>
        </div>
      </div>
      <h1 class="u-align-center u-hidden-xs u-text u-text-default-lg u-text-default-xl u-text-3">Nuovo campo</h1>
      <div class="u-align-left u-form u-form-1">
        <form action="#" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;" source="email" name="form">
          <div class="u-form-group u-form-name u-label-top">
            <label for="name-6797" class="u-label">Titolo campo</label>
            <input type="text" id="name-6797" name="titoloTxt" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
          </div>
          <div class="u-form-group u-label-top">
            <label for="text-ce3a" class="u-label">Edizione</label>
            <input type="text" placeholder="" id="text-ce3a" name="editionTxt" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="required">
          </div>
          <div class="u-form-group u-form-textarea u-form-group-3">
            <label for="textarea-6dfe" class="u-label">News</label>
            <textarea rows="4" cols="50" id="textarea-6dfe" name="newsTxt" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
          </div>
          <div class="u-form-group u-form-partition-factor-2 u-form-textarea u-form-group-4">
            <label for="textarea-c8f8" class="u-label">Informazioni</label>
            <textarea rows="4" cols="50" id="textarea-c8f8" name="infoTxt" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
          </div>
          <div class="u-form-checkbox u-form-group u-form-partition-factor-2 u-form-group-5">
            <input type="checkbox" id="checkbox-4c21" name="checkbox-2" value="lastYearInfo">
            <label for="checkbox-4c21" class="u-label"> Copia informazioni anno passato</label>
          </div>
          <div class="u-form-group u-form-partition-factor-2 u-form-textarea u-form-group-6">
            <label for="textarea-2a02" class="u-label">Disposizioni staff</label>
            <textarea rows="4" cols="50" id="textarea-2a02" name="dispTxt" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
          </div>
          <div class="u-form-checkbox u-form-group u-form-partition-factor-2 u-form-group-7">
            <input type="checkbox" id="checkbox-eb97" name="checkbox-1" value="lastYearStaff">
            <label for="checkbox-eb97" class="u-label"> Copia informazioni anno passato</label>
          </div>
          <div class="u-align-left u-form-group u-form-submit u-label-top">
            <a href="#" class="u-btn u-btn-submit u-button-style">Procedi</a>
            <input type="submit" value="submit" class="u-btn u-btn-submit u-button-style">
          </div>
          
          
          
        </form>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3607"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Fondazione Vita Serena<br>©2023
        </p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://github.com/MicheaColautti" target="_blank">
        <span>Michea Colatti</span>
      </a>
      <p>
        <span>Developer</span>
      </p>
      <br><br>
    </section>
  
</body></html>