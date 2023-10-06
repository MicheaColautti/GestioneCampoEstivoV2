<!DOCTYPE html>
<html style="font-size: 16px;" lang="it">
		<?php
			Session::forget("editId");
			Session::forget("editing");


			$userId = Auth::user()->id;
			$userRoleArray = DB::select(
				"select type,userState from person where regUserId =" . "'" . $userId . "'"
			);
			if ($userRoleArray != null) {
				$realArray = (array) $userRoleArray[0];
				$realArray = array_values($realArray);
				$_SESSION["role"] = $realArray[0];
				if ($_SESSION["role"] != "admin") {
					$_SESSION["state"] = $realArray[1];
				}
			}
			?>
				<?php if (
				(isset($_SESSION["state"]) && $_SESSION["state"] == "approved") ||
				(isset($_SESSION["role"]) && $_SESSION["role"] == "admin")
			): 
		?>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<meta name="keywords" content="Fondazione vita serena">
		<meta name="description" content="">
		<title>Esplora</title>
		<link rel="stylesheet" href="{{URL::asset('css/Campo-estivo/Esplora.css') }}" />
		<link rel="stylesheet" href="{{URL::asset('css/nicepage.css') }}" />
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
		<meta property="og:title" content="Esplora">
		<meta property="og:type" content="website">
	</head>

	<body class="u-body u-xl-mode" data-lang="it">
		<section class="u-clearfix u-section-1" id="sec-17a0">
			<img class="u-align-left u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-contain u-image-default u-image-1" src="{{URL::asset('storage/images/centro-diurno-vita-serena-1.png')}}" alt="" data-image-width="332" data-image-height="291">
			<div class="u-align-center-md u-align-center-sm u-align-center-xs u-layout-horizontal u-list u-list-1">

				<div class="u-repeater u-repeater-1">
				<?php session_start(); ?>
					<?php if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin"): ?>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
							<p class="u-align-center u-custom-item u-text u-text-default u-text-2">
								<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="{{route('Disponibilita')}}">
									<span class="u-file-icon u-icon u-icon-2">
										<img style="width:37px; height:37px;" src="{{URL::asset('storage/images/2886665.png')}}" alt="">
									</span>&nbsp; <br>Visualizza disponibilità <br>
								</a>
							</p>
						</div>
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
							<p class="u-align-center u-custom-item u-text u-text-default u-text-2">
								<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="{{route('Alloggi')}}">
									<span class="u-file-icon u-icon u-icon-2">
										<img style="width:37px; height:37px;" src="{{URL::asset('storage/images/838382.png')}}" alt="">
									</span>&nbsp; <br>Gestione aloggi <br>
								</a>
							</p>
						</div>

					</div> <?php endif; ?>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
							<p class="u-align-center u-custom-item u-text u-text-default u-text-2">
								<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"  href="{{route('HomeCampo')}}">
									<span class="u-file-icon u-icon u-icon-2">
										<img style="width:37px; height:37px;" src="{{URL::asset('storage/images/69524.png')}}" alt="">
									</span>
									<br>Home 
								</a>
							</p>
						</div>
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
							<p class="u-align-center u-custom-item u-text u-text-default u-text-3">
								<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-7" ref="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<span class="u-file-icon u-icon u-icon-3">
										<img style="width:37px; height:37px;" src="{{URL::asset('storage/images/992680.png')}}" alt="">
									</span>&nbsp; <br>Sign Out </a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf </form>
							</p>
						</div>
					</div>
				</div>
			</div>
			<h1 class="u-align-center u-text u-text-default u-text-palette-2-base u-text-4"><span style="font-weight: 700;"></span>Campo estivo di Olivone </h1>
			<div class="u-hidden-xs u-list u-list-2">
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

			<div class="u-form u-form-1">

				<form action="{{route('searchUser')}}" method="POST"> @csrf


					<div class="u-form-group u-form-name u-label-top">
						<label for="name-1e43" class="u-form-control-hidden u-label"></label>
						<input type="text" placeholder="Ricerca nome o cognome" name="userName" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white">
					</div>

					<!--Tipo utente-->
					<div class="u-form-group u-form-partition-factor-2 u-form-select u-label-top u-form-group-2">
						<label for="select-05ce" class="u-label">Tipo account</label>
						<div class="u-form-select-wrapper">
							<select id="select-05ce" name="userType[]" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" size="5" multiple="multiple">
								<option value="guest">Ospite</option>
								<option value="volunteer">Volontario</option>
								<option value="nurse">Infermiere</option>
								<option value="admin">Amministratore</option>
								<option value="reference">Riferimento</option>

							</select>
						</div>
					</div>

					<!--Stato utente-->
					<div class="u-form-group u-form-partition-factor-2 u-form-select u-label-top u-form-group-3">
						<label for="select-37fe" class="u-label">Stato</label>
						<div class="u-form-select-wrapper">
							<select id="select-37fe" name="userState[]" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" size="5" multiple="multiple">
								<option value="approved">Attivo</option>
								<option value="suspended">Sospeso</option>
							</select>
						</div>
					</div>

					<!--Mansione utente-->
					<div class="u-form-group u-form-select u-label-top u-form-group-4">
						<label for="select-0fed" class="u-label">Mansione</label>
						<div class="u-form-select-wrapper">
							<select id="select-0fed" name="userMansion[]" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" size="5" multiple="multiple">
								<option value="cooking">Cucina</option>
								<option value="hospitality">Accoglienza</option>
								<option value="washing">Lavanderia</option>
								<option value="cafeteria">Refettorio</option>
								<option value="infirmary">Infermieria</option>
							</select>
						</div>
					</div>
					<div class="u-align-left u-form-group u-form-submit u-label-top">
						<input type="submit" value="submit" class="u-btn u-btn-submit u-button-style">
					</div>
				</form>


			</div>
		</section>
		<section class="u-clearfix u-section-2" id="sec-ce96">
			<div class="u-clearfix u-sheet u-valign-top u-sheet-1">
				<h2 class="u-text u-text-default u-text-1">Utenti del campo</h2>
				<div class="u-table u-table-responsive u-table-1">
					<table class="u-table-entity" style="text-align: center">
						<colgroup>
							<col width="8%">
							<col width="12%">
							<col width="12%">
							<col width="12%">
							<col width="29%">
							<col width="12%">
							<col width="12%">
						</colgroup>
						<thead class="u-table-header u-table-header-1">
							<tr style="height: 45px;">
								
								<th class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-table-cell">
									<a style="color:<?php echo(Session::get("colorId"));?>" href="{{ route('orderBy', 'id') }}">Id
									<?php if(!empty(Session::get("colorId"))){
										if(Session::get("order")==" ASC"){
											echo("<b>"."🠉"."</b>");
										}else{
											echo("<b>"."🠋"."</b>");
										}
									}
									
									?></a></th>
								<th class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-table-cell">
									<a style="color:<?php echo(Session::get("colorName"));?>" href="{{ route('orderBy', 'name') }}">Nome
									<?php if(!empty(Session::get("colorName"))){
										if(Session::get("order")==" ASC"){
											echo("<b>"."🠉"."</b>");
										}else{
											echo("<b>"."🠋"."</b>");
										}
									}
									
									?></a></th>

								<th class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-table-cell">
									<a style="color:<?php echo(Session::get("colorLastName"));?>" href="{{ route('orderBy', 'lastname') }}">Cognome
									<?php if(!empty(Session::get("colorLastName"))){
										if(Session::get("order")==" ASC"){
											echo("<b>"."🠉"."</b>");
										}else{
											echo("<b>"."🠋"."</b>");
										}
									}	
									?></a></th>

								<th class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-table-cell">
									<a style="color:<?php echo(Session::get("colorBornDate"));?>" href="{{ route('orderBy', 'born_date') }}">Data di Nascita
									<?php if(!empty(Session::get("colorBornDate"))){
										if(Session::get("order")==" ASC"){
											echo("<b>"."🠉"."</b>");
										}else{
											echo("<b>"."🠋"."</b>");
										}
									}	
									?></a></th>

								<th class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-table-cell">
									<a style="color:<?php echo(Session::get("colorType"));?>" href="{{ route('orderBy', 'type') }}">Ruolo
									<?php if(!empty(Session::get("colorType"))){
										if(Session::get("order")==" ASC"){
											echo("<b>"."🠉"."</b>");
										}else{
											echo("<b>"."🠋"."</b>");
										}									
									}
									?></a></th>

								<th class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-table-cell">
									<a style="color:<?php echo(Session::get("colorUserState"));?>" href="{{ route('orderBy', 'userState') }}">Stato
									<?php if(!empty(Session::get("colorUserState"))){
										if(Session::get("order")==" ASC"){
											echo("<b>"."🠉"."</b>");
										}else{
											echo("<b>"."🠋"."</b>");
										}									
									}
									?></a></th>

								<th class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-table-cell">
									<a style="color:<?php echo(Session::get("colorMansion"));?>" href="{{ route('orderBy', 'userMansion') }}">Mansione
									<?php if(!empty(Session::get("colorMansion"))){
										if(Session::get("order")==" ASC"){
											echo("<b>"."🠉"."</b>");
										}else{
											echo("<b>"."🠋"."</b>");
										}									
									}
									?></a></th>
							</tr>
							<script>
							function changeColor(id){
								
								var x = document.getElementsByClassName("tableH");
								console.log(x);
								for (var i = 0; i < x.length; i++) {
									x[i].style.color = "red";
								}
								document.getElementById(id).style.color = "red";
							}
							</script>
						</thead>
						<tbody class="u-table-alt-palette-1-light-3 u-table-body">

						<?php 
							$query="select id,name,lastname,born_date,type,userState,userMansion from person";

							if (!isset($searchedUser)) {
								Session::put("query",$query);

								$results = DB::select($query);
								$obj=new App\Http\Controllers\EsploraController;
								$results=$obj->returnData($results);

								foreach ($results as $el) {
									$realArray = (array) $el;
									$realArray = array_values($realArray);
									print '<tr style="height: 65px;">';
									for ($i = 0; $i < count($realArray); $i++) {
										//send user
										print "<td class=u-table-cell><a style='color: black'; href=".route("openPage",['index' => $realArray[0], 'tok' => 'tok']).">".
											$realArray[$i] .
											"</a></td>";
									}
									print "</tr>";
								}
							} else {
								foreach ($searchedUser as $el) {

									$realArray = (array) $el;
									$realArray = array_values($realArray);
									print '<tr style="height: 65px;">';
									for ($i = 0; $i < count($realArray); $i++) {
										//send user

										print "<td class=u-table-cell><a style='color: black'; href=".route("openPage",['index' => $realArray[0], 'tok' => 'tok']).">".
											$realArray[$i] .
											"</a></td>";
									}
									
									print "</tr>";
								}
							} 
						?>
							</tr>
						</tbody>
					</table>
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
	<?php endif; ?>

</html>