<!DOCTYPE html>
<html style="font-size: 16px;" lang="it">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta name="keywords" content="Fondazione vita serena, C​ampo estivo di Olivone">
      <meta name="description" content="">
      <title>Disponibilità</title>
      <link rel="stylesheet" href="{{ URL::asset('css/Campo-estivo/Admin/Disponibilita.css') }}" />
      <link rel="stylesheet" href="{{ URL::asset('css/nicepage.css') }}" />
      <script class="u-script" type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
      <script class="u-script" type="text/javascript" src="{{ URL::asset('js/nicepage.js') }}"></script>
      <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
      <script type="application/ld+json">{
         "@context": "http://schema.org",
         "@type": "Organization",
         "name": ""
           }
      </script>
      <meta name="theme-color" content="#478ac9">
      <meta property="og:title" content="Disponibilità">
      <meta property="og:type" content="website">
      <!-- style for calendar-->
      <style>
         .switch {
         position: relative;
         display: inline-block;
         width: 60px;
         height: 34px;
         }

         /* Hide default HTML checkbox */
         .switch input {
         opacity: 0;
         width: 0;
         height: 0;
         }

         /* The slider */
         .slider {
         position: absolute;
         cursor: pointer;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background-color: #ccc;
         -webkit-transition: .4s;
         transition: .4s;
         }

         .slider:before {
         position: absolute;
         content: "";
         height: 26px;
         width: 26px;
         left: 4px;
         bottom: 4px;
         background-color: white;
         -webkit-transition: .4s;
         transition: .4s;
         }

         input:checked + .slider {
         background-color: #2196F3;
         }

         input:focus + .slider {
         box-shadow: 0 0 1px #2196F3;
         }

         input:checked + .slider:before {
         -webkit-transform: translateX(26px);
         -ms-transform: translateX(26px);
         transform: translateX(26px);
         }

         /* Rounded sliders */
         .slider.round {
         border-radius: 34px;
         }

         .slider.round:before {
         border-radius: 50%;
         }

      </style>
   </head>
   <body class="u-body u-xl-mode" data-lang="it">
      <section class="u-clearfix u-valign-middle u-section-1" id="sec-456f">
         <div class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-list u-list-1">
            <div class="u-repeater u-repeater-1">
               <div class="u-container-style u-list-item u-repeater-item" data-href="{{route('HomeCampo')}}">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                     <p class="u-align-center u-custom-item u-text u-text-1">
                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="{{route('ScegliRuolo')}}"><span class="u-file-icon u-icon u-icon-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><img style="width:37px; height:37px;" src="{{URL::asset('storage/images/69524.png')}}" alt=""></span>
                        <br>Home
                        </a>
                     </p>
                  </div>
               </div>
               <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                     <p class="u-align-center u-custom-item u-text u-text-default u-text-2">
                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="{{route('Esplora')}}"><span class="u-file-icon u-icon u-icon-2"><img style="width:37px; height:37px;" src="{{URL::asset('storage/images/32441.png')}}" alt=""></span>&nbsp; <br>Esplora<br>
                        </a>
                     </p>
                  </div>
               </div>
               <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                     <p class="u-align-center u-custom-item u-text u-text-default u-text-3">
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
         <h1 class="u-align-center u-text u-text-default u-text-palette-2-base u-text-4"><span style="font-weight: 700;"></span>Campo estivo di Olivone
         </h1>
         <img class="u-align-left u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-contain u-image-default u-image-1" src="{{URL::asset('storage/images/centro-diurno-vita-serena-1.png')}}" alt="" data-image-width="332" data-image-height="291">
         <div class="u-hidden-md u-hidden-sm u-hidden-xs u-list u-list-2">
            <div class="u-repeater u-repeater-2">
               <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-4">
                     <a href="{{route('Home')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-4">Home sito</a>
                  </div>
               </div>
               <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-5">
                     <a href="{{route('Su-di-noi')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-5">Chi siamo<br>
                     </a>
                  </div>
               </div>
               <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-6">
                     <a href="{{route('Contatti')}}" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-6">Contatti<br>
                     </a>
                  </div>
               </div>
               <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-7">
                     <a href="https://www.centridiurni.ch/centro-diurno-vita-serena/" class="u-active-none u-border-2 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-button-style u-custom-item u-hover-none u-none u-btn-7" target="_blank">Centro diurno<br>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <style>
         .circle {
            height: 25px;
            width: 25px;
            background-color: #555;
            border-radius: 50%;
         }
         </style>
      <div class="u-align-left u-form u-form-1" style="margin-left:70%; margin-right:5%;">
         <div class="u-align-left u-form u-form-1">
         <form action="{{route('checkCalendar')}}" method="POST" style="padding: 10px;"> @csrf
               <div class="u-form-checkbox u-form-group u-form-group-1">
                  &nbsp;<input type="checkbox" id="checkbox-371c" name="cooking" value="cucina" style="width:20px;height:20px;">
                  <label for="checkbox-371c" class="u-label">Cucina</label>
                  &nbsp;<div class="circle" style="background-color:#FF0000;"></div>
               </div>

               <div class="u-form-checkbox u-form-group u-form-group-2">
                  &nbsp;<input type="checkbox" id="checkbox-70c8" name="hospitality" value="accoglienza" style="width:20px;height:20px;">
                  <label for="checkbox-70c8" class="u-label">Accoglienza</label>
                  &nbsp;<div class="circle" style="background-color:#00FF00;"></div>
               </div>

               <div class="u-form-checkbox u-form-group u-form-group-3">
                  &nbsp;<input type="checkbox" id="checkbox-f15f" name="washing" value="lavanderia" style="width:20px;height:20px;">
                  <label for="checkbox-f15f" class="u-label" value="dwdwn">Lavanderia</label>
                  &nbsp;<div class="circle" style="background-color:#00FFFF;"></div>
               </div>

               <div class="u-form-checkbox u-form-group u-form-group-4">
                  &nbsp;<input type="checkbox" id="checkbox-4f0d" name="cafeteria" value="refettorio" style="width:20px;height:20px;">
                  <label for="checkbox-4f0d" class="u-label">Refettorio<br>
                  </label>
                  &nbsp;<div class="circle" style="background-color:#FF00FF;"></div>
               </div>

               <div class="u-form-checkbox u-form-group u-form-group-5">
                  &nbsp;<input type="checkbox" id="checkbox-fc93" name="infirmary" value="Infermieri" style="width:20px;height:20px;">
                  <label for="checkbox-fc93" class="u-label">Infermieri</label>
                  &nbsp;<div class="circle" style="background-color:#0000FF;"></div>
               </div><br>
               <div class="u-form-checkbox u-form-group u-form-group-5">
                  <label for="eventsSw" class="switch">
                     <input type="checkbox" name="events" id="eventsSw" value="events">
                     <span class="slider round"></span>
                  </label>&nbsp;<span>Mostra eventi</span>
                  &nbsp;<div class="circle" style="background-color:#F18F49;"></div>
               </div>

               <br>
               <br>
                  <label for="name-1bfb" class="u-label">Nome</label>
                  <input type="text" placeholder="Cerca" id="name-1bfb" name="cerca" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
               <div class="u-align-right u-form-group u-form-submit u-label-none">
                  <input type="submit" value="Cerca" class="u-btn u-btn-submit u-button-style">
               </div>
            </form>
         </div>
      </div>
      <section class="u-clearfix u-section-2" id="sec-3a61">
         <div class="container">
            <div id="calendar"></div>
         </div>
         <script>
         $(document).ready(function() {

            $.ajaxSetup({
               headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
            });
            //show calendar
            var calendar = $('#calendar').fullCalendar({
               editable: true,
               header: {
                  left: 'prev,next today',
                  center: 'title',
                  right: 'month,agendaWeek,agendaDay'
               },
               events: '/Campo-estivo/Admin/Disponibilita',
               selectable: true,
               selectHelper: true,
                  
               select: function(start, end, allDay) {
                  var title = prompt('Titolo evento:');
                  if (title) {
                     var start = $.fullCalendar.formatDate(start, 'YYYY-MM-DD HH:mm:ss');
                     var end = $.fullCalendar.formatDate(end, 'YYYY-MM-DD HH:mm:ss');
                     //add event
                     $.ajax({
                           url: "/Campo-estivo/Admin/Disponibilita/action",
                           type: "POST",
                           data: {
                              title: title,
                              start: start,
                              end: end,
                              type: 'add',
                              isEvent: true,

                           },
                           success: function(data) {
                              calendar.fullCalendar('refetchEvents');
                           }
                     })
                  }
               },

               editable: true,
               //update event -> resize
               eventResize: function(event, delta) {
                  var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                  var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                  var title = event.title;
                  var id = event.id;
                     $.ajax({
                        url: "/Campo-estivo/Admin/Disponibilita/action",
                        type: "POST",
                        data: {
                           title: title,
                           start: start,
                           end: end,
                           id: id,
                           type: 'update'
                        },
                        success: function(response) {
                           calendar.fullCalendar('refetchEvents');
                        }
                  })
               },
               //update event -> delete
               eventDrop: function(event, delta) {
                  var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                  var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                  var title = event.title;
                  var id = event.id;
                  $.ajax({
                     url: "/Campo-estivo/Admin/Disponibilita/action",
                     type: "POST",
                        data: {
                           title: title,
                           start: start,
                           end: end,
                           id: id,
                           type: 'update'
                        },
                        success: function(response) {
                           calendar.fullCalendar('refetchEvents');
                        }
                  })
               },
               //confirm elimination

               eventClick: function(event) {
                  if (confirm("Vuoi eliminare l'evento?")) {
                     var id = event.id;
                     $.ajax({
                        url: "/Campo-estivo/Admin/Disponibilita/action",
                        type: "POST",
                        data: {
                              id: id,
                              type: "delete"
                        },
                           
                        success: function(response) {
                           calendar.fullCalendar('refetchEvents');
                        }
                     })
                  }
               }
            });
         });
      </script>
      </section>
      <br><br><br><br>
      <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3607">
         <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Fondazione Vita Serena<br>©2023
            </p>
         </div>
      </footer>
      <section class="u-backlink u-clearfix u-grey-80">
         <a class="u-link" href="https://github.com/MicheaColautti" target="_blank">
         <span>Michea Colatti</span>
         </a>
         <p>
            <span>Developer</span>
         </p>
         <br><br>
      </section>
   </body>
</html>