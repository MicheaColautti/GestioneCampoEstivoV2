<!DOCTYPE html>
<html style="font-size: 16px;" lang="it">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Fondazione vita serena, C​ampo estivo di Olivone">
    <meta name="description" content="">
    <title>Iscrizione campo Vol</title>
    <link rel="stylesheet" href="{{ URL::asset('css/Campo-estivo/Iscrizione-campo-Vol.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/nicepage.css') }}" />
    <script class="u-script" type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script class="u-script" type="text/javascript" src="{{ URL::asset('js/nicepage.js') }}"></script>
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": ""
      }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Iscrizione campo Vol">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="it">
    <section class="u-align-left u-clearfix u-valign-top-md u-section-1" id="sec-02e6">
      <div class="u-align-center-md u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-xl u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <p class="u-align-center u-custom-item u-text u-text-1">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="{{route('HomeCampo')}}">
                  <span class="u-file-icon u-icon u-icon-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                    <img style="width:37px; height:37px;" src="{{URL::asset('storage/images/69524.png')}}" alt="">
                  </span>
                  <br>Home </a>
              </p>
            </div>
          </div>
          <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item">
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
      <img class="u-align-left u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-contain u-image-default u-image-1" src="{{URL::asset('storage/images/centro-diurno-vita-serena-1.png')}}" alt="" data-image-width="332" data-image-height="291">
      <div class="u-hidden-xs u-list u-list-2">
        <div class="u-repeater u-repeater-2">
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
              <a href="{{route('Home')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-3">Home sito</a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
              <a href="{{route('Su-di-noi')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-4">Chi siamo <br>
              </a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-5">
              <a href="{{route('Contatti')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-5">Contatti <br>
              </a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-6">
              <a href="https://www.centridiurni.ch/centro-diurno-vita-serena/" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-6" target="_blank">Centro diurno <br>
              </a>
            </div>
          </div>
        </div>
      </div>
      <h1 class="u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-default-lg u-text-default-xl u-text-3">Iscrizione al campo per l'ospite</h1>
      <h2 class="u-text u-text-default u-text-4">Raccolta dati anagrafici</h2>
      <div class="u-align-left u-form u-form-1">
        <form action="{{route('QueryAllDataVol')}}" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;">@csrf
          <div class="u-form-group u-form-name u-label-top">
            <label for="name-6797" class="u-label">Nome</label>
            <input type="text" id="name-6797" name="nameTxt" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
          </div>
          <div class="u-form-group u-label-top">
            <label for="text-ce3a" class="u-label">Cognome</label>
            <input type="text" placeholder="" id="text-ce3a" name="lastNameTxt" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="required">
          </div>
          <div class="u-form-date u-form-group u-label-top u-form-group-3">
            <label for="date-f894" class="u-label"> Data di nascita</label>
            <input type="date" placeholder="MM/DD/YYYY" id="date-f894" name="bornDate" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
          </div>
          <div class="u-form-group u-label-top">
            <label for="text-9148" class="u-label">Via</label>
            <input type="text" placeholder="" id="text-9148" name="viaTxt" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="required">
          </div>
          <div class="u-form-group u-label-top u-form-group-5">
            <label for="text-62ef" class="u-label">CAP</label>
            <input type="text" placeholder="" id="text-62ef" name="CAP" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="required">
          </div>
          <div class="u-form-group u-label-top u-form-group-6">
            <label for="text-d5e8" class="u-label">Nazione</label>
            <input type="text" placeholder="" id="text-d5e8" name="nazione" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="required">
          </div>
          <div class="u-form-group u-form-phone u-label-top">
            <label for="text-3fc9" class="u-label">Numero telefono</label>
            <input type="tel" id="text-3fc9" name="phoneNumber" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[0-9]{4}-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}" required="required" placeholder="0041-12-345-67-89">
          </div>
          
          </div>
      <h2 class="u-align-center u-text u-text-palette-2-base u-text-5">I seguenti campi sono obbligatori per i minorenni. <br>Raccomandati per i maggiorenni <br>
      </h2>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-fadd">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Persona di riferimento <br>
        </h2>
        <div class="u-align-left u-form u-form-1">
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-6797" class="u-label">Nome</label>
              <input type="text" id="name-6797" name="nameRef" class="u-border-1 u-border-grey-30 u-input u-input-rectangle">
            </div>
            <div class="u-form-group u-label-top">
              <label for="text-ce3a" class="u-label">Cognome</label>
              <input type="text" placeholder="" id="text-ce3a" name="lastNameRef" class="u-border-1 u-border-grey-30 u-input u-input-rectangle">
            </div>
            <div class="u-form-date u-form-group u-label-top u-form-group-3">
              <label for="date-f894" class="u-label"> Data di nascita</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-f894" name="borndateRef" class="u-border-1 u-border-grey-30 u-input u-input-rectangle">
            </div>
            <div class="u-form-group u-label-top">
              <label for="text-9148" class="u-label">Via</label>
              <input type="text" placeholder="" id="text-9148" name="viaRef" class="u-border-1 u-border-grey-30 u-input u-input-rectangle">
            </div>
            <div class="u-form-group u-label-top u-form-group-5">
              <label for="text-62ef" class="u-label">CAP</label>
              <input type="text" placeholder="" id="text-62ef" name="capRef" class="u-border-1 u-border-grey-30 u-input u-input-rectangle">
            </div>
            <div class="u-form-group u-label-top u-form-group-6">
              <label for="text-d5e8" class="u-label">Nazione</label>
              <input type="text" placeholder="" id="text-d5e8" name="nazioneRef" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" >
            </div>
            <div class="u-form-group u-form-phone u-label-top">
              <label for="text-3fc9" class="u-label">Numero telefono</label>
              <input type="tel" id="text-3fc9" name="phoneRef" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[0-9]{4}-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="0041-12-345-67-89">
            </div>
            <div class="u-form-group u-form-phone u-label-top u-form-group-8">
              <label for="text-e443" class="u-label">Telefono madre</label>
              <input type="tel" id="text-e443" name="phoneMom" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[0-9]{4}-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="0041-12-345-67-89">
            </div>
            <div class="u-form-group u-form-phone u-label-top u-form-group-9">
              <label for="phone-5acc" class="u-label">Telefono padre</label>
              <input type="tel" id="phone-5acc" name="phoneDad" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[0-9]{4}-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="0041-12-345-67-89">
            </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="sec-9549">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Dati medici - base</h2>
        <div class="u-align-left u-form u-form-1">
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-6797" class="u-label">Medico curante</label>
              <input type="text" id="name-6797" name="docTxt" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" >
            </div>
            <div class="u-form-group u-label-top">
              <label for="text-ce3a" class="u-label">Numero medico</label>
              <input type="text" id="text-ce3a" name="phoneDoc" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[0-9]{4}-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="0041-12-345-67-89">
            </div>

            </div>
        </div>
      </div>
    </section>
   
    <section class="u-align-center u-clearfix u-section-5" id="sec-1b37">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Vidimazione informazioni</h2>
        <div class="u-form u-form-1">
            <div class="u-form-group u-label-top">
              <label for="email-9216" class="u-label">Luogo</label>
              <input type="text" id="email-9216" name="luogoCompila" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
            </div>
            <div class="u-form-date u-form-group u-label-top u-form-group-2">
              <label for="date-e1b0" class="u-label">Data</label>
              <input type="date" placeholder="GG/MM/YYYY" id="date-e1b0" name="dataComplia" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-message u-label-top">
              <label for="message-9216" class="u-label">Firma</label>
              <textarea rows="4" cols="50" id="message-9216" name="signature" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
            </div>
            <div class="u-align-left u-form-group u-form-submit u-label-top">
            <input href="{{route('UserPage')}}" type="submit" value="Invia iscrizionee"  class="u-btn u-btn-submit u-button-style">
            </div>
          </form>
        </div>
      </div>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3607">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Fondazione Vita Serena <br>©2023 </p>
      </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://github.com/MicheaColautti" target="_blank">
        <span>Michea Colatti</span>
      </a>
      <p>
        <span>Developer</span>
      </p>
      <br>
      <br>
    </section>
  </body>
</html>