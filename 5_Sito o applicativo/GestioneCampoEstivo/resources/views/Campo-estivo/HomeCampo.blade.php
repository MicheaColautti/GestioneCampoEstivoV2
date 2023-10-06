<!DOCTYPE html>
<html style="font-size: 16px;" lang="it">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta name="keywords" content="Campo estivo Olivone">
      <meta name="description" content="">
      <title>HomeCampo</title>
      <link rel="stylesheet" href="{{ URL::asset('css/Campo-estivo/HomeCampo.css') }}" />
      <link rel="stylesheet" href="{{ URL::asset('css/nicepage.css') }}" />
      <script class="u-script" type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
      <script class="u-script" type="text/javascript" src="{{ URL::asset('js/nicepage.js') }}"></script>
      <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
      <meta name="theme-color" content="#478ac9">
      <meta property="og:title" content="HomeCampo">
      <meta property="og:type" content="website">
   </head>
   <body class="u-body u-xl-mode" data-lang="it">
      <section class="u-clearfix u-section-1" id="sec-dc9f">
         <img style="margin-bottom: 30px; margin-left:200px" class="u-align-left u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-contain u-image-default u-image-1" src="{{URL::asset('storage/images/centro-diurno-vita-serena-1.png')}}" alt="" data-image-width="332" data-image-height="291">
         <div class="u-align-center-sm u-align-center-xs u-layout-horizontal u-list u-list-1">
            <div class="u-align-center-md u-align-center-sm u-align-center-xs u-repeater u-repeater-1">
               <?php
                  session_start();
                  if (Auth::user() != null) {
                  	$userId = Auth::user()->id;
                  	//campo arbitrario, controllo che non ci sia gia iscritti
                  	$userType = DB::select(
                  		"select type from person where regUserId =" . "'" . $userId . "'"
                  	);
                  	if (empty($userType)) {
                  		$canRegister = true;
                  	} else {
                  		$realArray = (array) $userType[0];
                  		$realArray = array_values($realArray);
                  
                  		if ($realArray[0] == "admin") {
                  			$canRegister = false;
                           Session::put("role","admin");
                  		} else {
                  			$canRegister = false;
                  		}
                  	}
                  }
                  ?>
               <div class="u-align-center-md u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                     <p class="u-align-center-lg u-align-center-xl u-custom-item u-text u-text-default u-text-2">
                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="{{route('register')}}">
                        <span class="u-file-icon u-icon u-icon-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" data-href="Sign-Up.html">
                        <img style="width:37px; height:37px;" src="{{URL::asset('storage/images/5654864.png')}}" alt="">
                        </span>
                        <br>Sign Up </a>
                     </p>
                  </div>
               </div>
               <div class="u-align-center-md u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-3">
                     <p class="u-align-center-lg u-align-center-xl u-custom-item u-text u-text-default u-text-3"></p>
                     <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3" href="{{route('login')}}">
                     <span class="u-file-icon u-icon u-icon-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                     <img style="width:37px; height:37px;" src="{{URL::asset('storage/images/7078010.png')}}" alt="">
                     </span>
                     <br>Sign In </a>
                  </div>
               </div>
               <div class="u-align-center-md u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-3">
                     <p class="u-align-center-lg u-align-center-xl u-custom-item u-text u-text-default u-text-3"></p>
                     <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3" href="{{route('UserPage')}}">
                        <span class="u-file-icon u-icon u-icon-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                           <img style="width:37px; height:37px;" src="{{URL::asset('storage/images/838383.png')}}" alt="">
                           <!--NB: public/stoarge/images. NOT /app...-->
                        </span>
                        <br>User page 
                     </a>
                  </div>
               </div>
            </div>
            <?php if (isset($canRegister) && $canRegister): ?>
            <div class="u-align-center-md u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item">
               <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                  <p class="u-align-center-lg u-align-center-xl u-custom-item u-text u-text-1">
                     <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="{{route('ScegliRuolo')}}">
                     <span class="u-file-icon u-icon u-icon-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                     <img style="width:37px; height:37px;" src="{{URL::asset('storage/images/997118.png')}}" alt="">
                     </span>
                     <br>Iscriviti al campo </a>
                  </p>
               </div>
            </div>
            <?php endif; ?>
         </div>
         <h1 class="u-align-center u-text u-text-default u-text-palette-2-base u-text-4"><span style="font-weight: 700;"></span>Campo estivo di Olivone </h1>
         <div class="u-hidden-sm u-hidden-xs u-list u-list-2" style="margin-bottom: 30px; margin-left:200px">
            <div class="u-repeater u-repeater-2">
               <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                     <a href="{{route('Home')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-4">Home sito</a>
                  </div>
               </div>
               <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-5">
                     <a href="{{route('Su-di-noi')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-5">Chi siamo <br>
                     </a>
                  </div>
               </div>
               <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-6">
                     <a href="{{route('Contatti')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-6">Contatti <br>
                     </a>
                  </div>
               </div>
               <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-7">
                     <a href="https://www.centridiurni.ch/centro-diurno-vita-serena/" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-7" target="_blank">Centro diurno <br>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="u-align-left u-clearfix u-section-2" id="sec-1c3d">
         <div class="u-clearfix u-sheet u-sheet-1">
            <?php
               (new App\Http\Controllers\HomePageController)->setCampId();
               
               ?>
            <div style="display: inline-block;">
               <h1 style="text-align: left; display: inline-block;" >
                  <form action="{{route('editCamp', 'title')}}" method="GET"> @csrf
                     <?php 
                        $title = (new App\Http\Controllers\HomePageController)->getTitle(); 
                        print($title);
                        if(Session::get("role")=="admin"){

                           if(Session::get("editHome")=="edit"){
                              print('<br><input type="submit" value="Salva titolo" class="u-btn u-btn-submit u-button-style" style="font-size: 20px; width: 190px; text-align:center; padding:10px">');

                           }else{
                              print('<br><input type="submit" value="Modifica titolo" class="u-btn u-btn-submit u-button-style" style="font-size: 20px; width: 190px; text-align:center; padding:10px">');
                           }
                        }
                        ?>
                  </form>
                  <br>
               
				</h1>
               <figure style="display: inline-block; width=120px;text-align: center;">
                  <img src="{{URL::asset('storage/images/1103449-36d1cfe4.png')}}" alt="" style="width: 120px;">
                  <figcaption style="text-align:center" class="u-text-palette-1-dark-1">SCARICA LA BROCHURE!</figcaption>
               </figure>
            </div>
            <br>

			<form action="{{route('editCamp', 'edition')}}" method="GET"> @csrf
               <?php 
                	$edition = (new App\Http\Controllers\HomePageController)->getEdition(); 
                	print($edition);
                   if(Session::get("role")=="admin"){

                     if(Session::get("editEdition")=="edit"){
                        print('<br><input type="submit" value="Salva edizione" class="u-btn u-btn-submit u-button-style" style="font-size: 20px; width: 190px; text-align:center; padding:10px">');
                     }else{
                        print('<br><input type="submit" value="Modifica edizione" class="u-btn u-btn-submit u-button-style" style="font-size: 20px; width: 190px; text-align:center; padding:10px">');
                     }
                  }
                ?>
            </form>
            

               <br><br><br>
               <h2 style="text-align: left;">News</h2>
			   <form action="{{route('editCamp', 'news')}}" method="GET">@csrf 
					<?php 

						$news = (new App\Http\Controllers\HomePageController)->getNews(); 
						print($news);
                  if(Session::get("role")=="admin"){

                     if(Session::get("editNews")=="edit"){
                        print('<br><input type="submit" value="Salva news" class="u-btn u-btn-submit u-button-style" style="font-size: 20px; width: 190px; text-align:center; padding:10px">');

                     }else{
                        print('<br><input type="submit" value="Modifica news" class="u-btn u-btn-submit u-button-style" style="font-size: 20px; width: 190px; text-align:center; padding:10px">');
                     }
                  }
					?>
				</form>
           	
            
			<br>
            <form action="{{route('editCamp', 'infos')}}" method="GET">
               @csrf 
               <br><br><br>
               <h2 style="text-align: left;">Informazioni</h2>
               <?php 
                  //Session::forget("editInfos");

                  $info = (new App\Http\Controllers\HomePageController)->getInfo(); 
                  print($info);
                  if(Session::get("role")=="admin"){
                     if(Session::get("editInfos")=="edit"){
                        print('<br><input type="submit" value="Salva informazioni" class="u-btn u-btn-submit u-button-style" style="font-size: 20px; width: 220px; text-align:center; padding:10px">');

                     }else{
                        print('<br><input type="submit" value="Modifica informazioni" class="u-btn u-btn-submit u-button-style" style="font-size: 20px; width: 220px; text-align:center; padding:10px">');
                     }
                  }
                  ?>
            </form>
           <br><br><br>
            <h2 style="text-align: left;">Storia del campo</h2>
               <span style="font-size: 1.5rem; font-weight: 700;">
               <?php 
                  $history = (new App\Http\Controllers\HomePageController)->getHistory(); 
                  print($history);
                  ?>
            </span>
            </h1>
         </div>
      </section>
      <section class="u-align-left u-clearfix u-section-3" id="sec-4850">
         <div class="u-clearfix u-sheet u-sheet-1">
            <div class="fr-view u-clearfix u-rich-text u-text u-text-1">
               <h1 id="isPasted">
                  <span style="font-weight: 700; font-size: 1.875rem;">Direttive per il personale</span>
               </h1>
                  <?php 
                    $directive = (new App\Http\Controllers\HomePageController)->getDirective(); 
                     print($directive);
                  ?>
                  <br>

               <br><br><br><br>
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