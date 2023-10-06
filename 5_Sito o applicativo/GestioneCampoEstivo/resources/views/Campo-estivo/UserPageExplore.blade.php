<!DOCTYPE html>
<html style="font-size: 16px;" lang="it">

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<meta name="keywords" content="Fondazione vita serena, Campo estivo di Olivone, Dati personali:">
		<meta name="description" content="">
		<title>UserPageExplore</title>
		<link rel="stylesheet" href="{{ URL::asset('css/Campo-estivo/UserPage.css') }}" />
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
		<meta property="og:title" content="UserPage">
		<meta property="og:type" content="website">
	</head>

	<body class="u-body u-xl-mode" data-lang="it">
		<section class="u-clearfix u-section-1" id="sec-1569">
			<div class="u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1">
							<a href="{{route('Home')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-1">Home sito</a>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
							<a href="{{route('Su-di-noi')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-2">Chi siamo <br>
							</a>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
							<a href="{{route('Contatti')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-3">Contatti <br>
							</a>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
							<a href="https://www.centridiurni.ch/centro-diurno-vita-serena/" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-4" target="_blank">Centro diurno <br>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="u-align-right u-layout-horizontal u-list u-list-2">
				<div class="u-repeater u-repeater-2">
					<div class="u-container-style u-list-item u-repeater-item" data-href="{{route('HomeCampo')}}">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
							<p class="u-align-center u-custom-item u-text u-text-1">
								<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-5" href="{{route('HomeCampo')}}">
									<span class="u-file-icon u-icon u-icon-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
										<img style="width:37px; height:37px;" src="{{URL::asset('storage/images/69524.png')}}" alt="">
									</span>
									<br>Home </a>
							</p>
						</div>
					</div>

					<?php
					session_start();

					$userId = Auth::user()->id;
					$userRoleArray = DB::select(
						"select type,userState,userMansion from person where regUserId =" .
							"'" .
							$userId .
							"'"
					);
					if ($userRoleArray != null) {
						$realArray = (array) $userRoleArray[0];
						$realArray = array_values($realArray);
						$_SESSION["role"] = $realArray[0];
						$_SESSION["state"] = $realArray[1];
						$_SESSION["mansion"] = $realArray[2];
					}
					?>
					<?php if (isset($_SESSION["state"]) && $_SESSION["state"] == "approved"): ?>

					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
							<p class="u-align-center u-custom-item u-text u-text-default u-text-2">
								<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-6" href="{{route('Esplora')}}">
									<span class="u-file-icon u-icon u-icon-2">
										<img style="width:37px; height:37px;" src="{{URL::asset('storage/images/32441.png')}}" alt="">
									</span>&nbsp; <br>Esplora <br>
								</a>
							</p>
						</div>
						<?php endif; ?>
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
							<p class="u-align-center u-custom-item u-text u-text-default u-text-2">
								<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-6" href="{{route('UserPage')}}">
									<span class="u-file-icon u-icon u-icon-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
										<img style="width:37px; height:37px;" src="{{URL::asset('storage/images/838383.png')}}" alt="">
										<!--NB: public/stoarge/images. NOT /app...-->
									</span>&ensp;User page </a>
						</div>
					</div>
				</div>
			</div>
			<h1 class="u-align-center u-text u-text-default u-text-palette-2-base u-text-4">
				<span style="font-weight: 700;"></span>Campo estivo di Olivone
			</h1>
			<h2 class="u-text u-text-default u-text-5">Dati dell'utente</h2>
			<div class="u-table u-table-responsive u-table-1">
				<br>

				<form action="{{route('editOtherData')}}" method='POST'> @csrf

					<table>
						<colgroup>
							<col width="50%">
							<col width="50%">
						</colgroup>
						<?php 
							if (!isset($toPrint)) {
								$toPrint = (new App\Http\Controllers\EsploraController)->openPage(Session::get("editId"),"otherUser");
							}
								print $toPrint;
							?>
						</table>

						<?php if ($_SESSION["role"] == "admin") {
							if (empty(Session::get("editing"))) {
								print '<div class="u-align-left u-form-group u-form-submit u-label-top">
									<input type="submit" value="Modifica dati"class="u-btn u-btn-submit u-button-style" onclick="" />
									</div>';
							} else {
								print '<div class="u-align-left u-form-group u-form-submit u-label-top">
									<input type="submit" value="Salva dati" class="u-btn u-btn-submit u-button-style" onclick="" />
									</div>';
							}
						} ?>

			<?php

				print("<br><br><h2>Dati generali</h2><br>");
				$generalData = (new App\Http\Controllers\UserPageExploreController)->generalData(Session::get("editId"));
				print($generalData);
				print("<br><br><h2>Dati medici</h2><br>");

				if(($_SESSION["role"] == "volunteer") && ($_SESSION["state"] == "approved") && ($_SESSION["mansion"] =="infirmary")){
					$medData = (new App\Http\Controllers\UserPageExploreController)->medicalData(Session::get("editId"));
					print($medData);

				}else{
					print("Non hai il permesso di visualizzare questi dati");
				}
			?>
			</div>
			</form>

			

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