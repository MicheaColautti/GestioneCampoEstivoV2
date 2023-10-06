<!DOCTYPE html>
<html style="font-size: 16px;" lang="it">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />
        <meta name="keywords" content="Fondazione vita serena, Informazioni sul campo, La Storia" />
        <meta name="description" content="" />
        <title>Gestione alloggi</title>
        <link rel="stylesheet" href="{{ URL::asset('css/Campo-estivo/Admin/ModificaCampo.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/Campo-estivo/Admin/Alloggi.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/nicepage.css') }}" />
        <script class="u-script" type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script class="u-script" type="text/javascript" src="{{ URL::asset('js/nicepage.js') }}"></script>
        <meta name="generator" content="Nicepage 4.18.5, nicepage.com" />
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" />
        <meta name="theme-color" content="#478ac9" />
        <meta property="og:title" content="ModificaCampo" />
        <meta property="og:type" content="website" />
    </head>
    <body class="u-body u-xl-mode" data-lang="it">
        <section class="u-clearfix u-section-1" id="sec-ff76" style="bottom: 0px; padding: 20px;">
            <div style="display: block;">
                <h1 style="text-align: center;" class="u-text-palette-2-base u-text-4"><span style="font-weight: 700;"></span>Campo estivo di Olivone</h1>
                <h2 style="text-align: center;" class="u-text-4">Informazioni sul campo</h2>
                <div class="u-align-right u-list u-list-1" style="position: absolute; top: 8px; right: 16px; font-size: 18px;">
                    <div class="u-repeater u-repeater-1">
                        <div class="u-container-style u-list-item u-repeater-item" data-href="{{route('HomeCampo')}}">
                            <div class="u-container-style u-list-item u-repeater-item">
                                <div class="u-container-layout u-container-layout-2">
                                    <p class="u-align-center u-custom-item u-text u-text-default u-text-2">
                                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="{{route('HomeCampo')}}">
                                            <span class="u-file-icon u-icon u-icon-2"><img style="width: 37px; height: 37px;" src="{{URL::asset('storage/images/69524.png')}}" alt="" /></span>&nbsp; <br />
                                            Home<br />
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="u-container-style u-list-item u-repeater-item">
                                <div class="u-container-layout u-container-layout-2">
                                    <p class="u-align-center u-custom-item u-text u-text-default u-text-2">
                                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="{{route('Esplora')}}">
                                            <span class="u-file-icon u-icon u-icon-2"><img style="width: 37px; height: 37px;" src="{{URL::asset('storage/images/32441.png')}}" alt="" /></span>&nbsp; <br />
                                            Esplora<br />
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="u-container-style u-list-item u-repeater-item">
                                <div class="u-container-layout u-container-layout-2">
                                    <p class="u-align-center u-custom-item u-text u-text-default u-text-2">
                                        <a
                                            class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"
                                            ref="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        >
                                            <span class="u-file-icon u-icon u-icon-2"><img style="width: 37px; height: 37px;" src="{{URL::asset('storage/images/992680.png')}}" alt="" /></span><br />
                                            Logout
                                        </a>
                                    </p>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <div class="u-container-style u-list-item u-repeater-item">
                                <div class="u-container-layout u-container-layout-2">
                                    <p class="u-align-center u-custom-item u-text u-text-default u-text-2">
                                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="{{route('NuovoCampo')}}">
                                            <span class="u-file-icon u-icon u-icon-2"><img style="width: 37px; height: 37px;" src="{{URL::asset('storage/images/1828919.png')}}" alt="" /></span>&nbsp; <br />
                                            Nuovo campo<br />
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-right u-list u-list-2">
                        <div class="u-repeater u-repeater-2">
                            <div class="u-container-style u-list-item u-repeater-item">
                                <div class="u-container-layout u-similar-container u-container-layout-5">
                                    <p class="u-align-center u-custom-item u-text u-text-default u-text-5">
                                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-5" href="{{route('Edizioni-precedenti')}}">
                                            <span class="u-icon"></span>&nbsp; <span class="u-file-icon u-icon u-icon-7"><img style="width: 37px; height: 37px;" src="{{URL::asset('storage/images/6619116.png')}}" alt="" /></span>&nbsp;
                                            <br />
                                            Edizioni precedenti<br />
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="u-align-center u-clearfix u-white u-section-1" id="sec-b4b9" style="top: -190px; left: 2%;">
            <div class="u-clearfix u-sheet u-sheet-1" style="right:25%; display: inline-block;">
                <div id="carousel-5989" data-interval="5000" data-u-ride="carousel" class="u-carousel u-slider u-slider-1">
                    <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                        <li data-u-target="#carousel-5989" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0" style="width: 10px; height: 10px;"></li>
                        <li data-u-target="#carousel-5989" class="u-grey-30 u-shape-circle" data-u-slide-to="1" style="width: 10px; height: 10px;"></li>
                        <li data-u-target="#carousel-5989" class="u-grey-30 u-shape-circle" data-u-slide-to="2" style="width: 10px; height: 10px;"></li>
                    </ol>


                    <div class="u-carousel-inner" role="listbox">
                        <div class="u-active u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h3 class="u-align-center u-text u-text-default u-text-1">Blocco 1 - Ospiti donne</h3>
                                <div class="u-border-4 u-border-grey-75 u-container-align-center u-container-style u-group u-radius-10 u-shape-round u-group-1" style="padding: 20px;">
                                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                                        <div class="u-clearfix u-gutter-28 u-layout-wrap u-opacity u-opacity-50 u-layout-wrap-1">
                                            <div class="u-gutter-0 u-layout">
                                                <div class="u-layout-col">
                                                    <div class="u-size-30">
                                                        <div class="u-layout-row">
                                                            <div class="u-align-center u-container-style u-layout-cell u-size-15 u-layout-cell-1">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-3" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-1"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-2">
                                                                        212<br />
                                                                        2 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '1.212') }}"><input type="submit" value="Dettagli" name="212"></button></a>
                                                                </div>
                                                            </div>
                                                            <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-15 u-layout-cell-2">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-4" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-2"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-2">
                                                                        213<br />
                                                                        2 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '1.213') }}"><input type="submit" value="Dettagli" name="213"></input></a>

                                                                </div>
                                                            </div>
                                                            <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-15 u-layout-cell-3">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-5" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-3"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-4">
                                                                        214<br />
                                                                        3 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '1.214') }}"><input type="submit" value="Dettagli" name="214" /></a>
                                                                </div>
                                                            </div>
                                                            <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-15 u-layout-cell-4">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-6" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-4"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-5">
                                                                        215<br />
                                                                        2 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '1.215') }}"><input type="submit" value="Dettagli" name="215" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="u-size-30">
                                                        <div class="u-layout-row">
                                                            <div class="u-align-center u-container-style u-layout-cell u-size-15 u-layout-cell-5">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-7" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-5"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-8">
                                                                        220<br />
                                                                        3 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '1.220') }}"><input type="submit" value="Dettagli" name="220" /></a>
                                                                </div>
                                                            </div>

                                                            <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-15 u-layout-cell-6">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-8" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-6"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-8">
                                                                        219<br />
                                                                        3 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '1.219') }}"><input type="submit" value="Dettagli" name="219" /></a>
                                                                </div>
                                                            </div>

                                                            <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-15 u-layout-cell-7">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-9" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-7"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-8">
                                                                        218<br />
                                                                        3 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '1.218') }}"><input type="submit" value="Dettagli" name="218" /></a>
                                                                </div>
                                                            </div>
                                                            <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-15 u-layout-cell-8">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-10" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-8"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-9">
                                                                        217<br />
                                                                        3 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '1.217') }}"><input type="submit" value="Dettagli" name="217" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
                            <div class="u-container-layout u-valign-middle u-container-layout-11">
                                <h3 class="u-align-center u-text u-text-default u-text-10">Blocco 2 - Volontari donne<br /></h3>
                                <div class="u-border-4 u-border-grey-75 u-container-align-center u-container-style u-group u-radius-10 u-shape-round u-group-2" style="padding: 20px;">
                                    <div class="u-container-layout u-valign-middle u-container-layout-12">
                                        <div class="u-clearfix u-gutter-28 u-layout-wrap u-opacity u-opacity-50 u-layout-wrap-2">
                                            <div class="u-gutter-0 u-layout">
                                                <div class="u-layout-col">
                                                    <div class="u-size-30">
                                                        <div class="u-layout-row">
                                                            <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-10">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-14" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-10"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-12">
                                                                        5<br />
                                                                        4 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '2.5') }}"><input type="submit" value="Dettagli"name="5" /></a>

                                                                </div>
                                                            </div>

                                                            <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-10">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-14" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-10"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-12">
                                                                        3<br />
                                                                        2 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '2.3') }}"><input type="submit" value="Dettagli" name="3" /></a>

                                                                </div>
                                                            </div>
                                                            <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-11">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-15" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-11"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-13">
                                                                        13<br />
                                                                        2 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '2.13') }}"><input type="submit" value="Dettagli" name="13" /></a>

                                                                </div>
                                                            </div>
                                                            <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-12">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-16" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-12"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-14">
                                                                        15<br />
                                                                        8 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '2.15') }}"><input type="submit" value="Dettagli" name="15" /></a>

                                                                </div>
                                                            </div>
                                                            <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-13">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-17" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-13"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-15">
                                                                        16<br />
                                                                        8 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '2.16') }}"><input type="submit" value="Dettagli" name="16" /></a>

                                                                </div>
                                                            </div>
                                                            <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-14">
                                                                <div class="u-border-2 u-border-grey-75 u-container-layout u-valign-bottom u-container-layout-18" style="padding: 5px;">
                                                                    <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-14"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                                    <p class="u-align-center u-text u-text-16">
                                                                        17<br />
                                                                        7 posti
                                                                    </p>
                                                                    <a href="{{ route('viewRoomData', '2.17') }}"><input type="submit" value="Dettagli" name="17" /></a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-carousel-item u-container-align-center u-container-style u-slide">
                            <div class="u-container-layout u-valign-middle u-container-layout-19">
                                <h3 class="u-align-center u-text u-text-default u-text-17">Blocco 3 - Volontari e ospiti uomini</h3>
                                <div class="u-border-4 u-border-grey-75 u-container-align-center u-container-style u-group u-radius-10 u-shape-round u-group-3" style="padding: 20px;">
                                    <div class="u-container-layout u-valign-middle u-container-layout-20">
                                        <p class="u-align-center u-text u-text-18"><b>Sezione volontari (maschi)</b></p>
                                        <div class="u-clearfix u-gutter-28 u-layout-wrap u-opacity u-opacity-50 u-layout-wrap-3">
                                            <div class="u-gutter-0 u-layout">
                                                <div class="u-layout-row">
                                                    <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-15">
                                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-21" style="padding: 5px;">
                                                            <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-15"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                            <p class="u-align-center u-text u-text-19">
                                                                123<br />
                                                                8 posti
                                                            </p>
                                                            <a href="{{ route('viewRoomData', '3.123') }}"><input type="submit" value="Dettagli" name="123" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-16">
                                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-22" style="padding: 5px;">
                                                            <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-16"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                            <p class="u-align-center u-text u-text-20">
                                                                122<br />
                                                                8 posti
                                                            </p>
                                                            <a href="{{ route('viewRoomData', '3.122') }}"><input type="submit" value="Dettagli" name="122" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-17">
                                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-23" style="padding: 5px;">
                                                            <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-17"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                            <p class="u-align-center u-text u-text-21">
                                                                121<br />
                                                                8 posti
                                                            </p>
                                                            <a href="{{ route('viewRoomData', '3.121') }}"><input type="submit" value="Dettagli" name="121" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-18">
                                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-24" style="padding: 5px;">
                                                            <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-18"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                            <p class="u-align-center u-text u-text-22">
                                                                101<br />
                                                                2 posti
                                                            </p>
                                                            <a href="{{ route('viewRoomData', '3.101') }}"><input type="submit" value="Dettagli" name="101" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-19">
                                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-25" style="padding: 5px;">
                                                            <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-19"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                            <p class="u-align-center u-text u-text-23">
                                                                103<br />
                                                                2 posti
                                                            </p>
                                                            <a href="{{ route('viewRoomData', '3.103') }}"><input type="submit" value="Dettagli" name="103" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-20">
                                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-26" style="padding: 5px;">
                                                            <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-20"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                            <p class="u-align-center u-text u-text-24">
                                                                104<br />
                                                                4 posti
                                                            </p>
                                                            <a href="{{ route('viewRoomData', '3.104') }}"><input type="submit" value="Dettagli" name="104" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="u-align-center u-text u-text-25"><b>Sezione ospiti (maschi)</b></p>
                                        <div class="u-clearfix u-gutter-28 u-layout-wrap u-opacity u-opacity-50 u-layout-wrap-4">
                                            <div class="u-gutter-0 u-layout">
                                                <div class="u-layout-row">
                                                    <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-21">
                                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-27" style="padding: 5px;">
                                                            <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-21"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                            <p class="u-align-center u-text u-text-26">
                                                                107<br />
                                                                2 posti
                                                            </p>
                                                            <a href="{{ route('viewRoomData', '3.107') }}"><input type="submit" value="Dettagli" name="107" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-22">
                                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-28" style="padding: 5px;">
                                                            <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-22"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                            <p class="u-align-center u-text u-text-27">
                                                                111<br />
                                                                3 posti
                                                            </p>
                                                            <a href="{{ route('viewRoomData', '3.111') }}"><input type="submit" value="Dettagli" name="111" /></a><br />
                                                        </div>
                                                    </div>
                                                    <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-23">
                                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-29" style="padding: 5px;">
                                                            <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-23"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                            <p class="u-align-center u-text u-text-28">
                                                                112<br />
                                                                3 posti
                                                            </p>
                                                            <a href="{{ route('viewRoomData', '3.112') }}"><input type="submit" value="Dettagli" name="112" /></a><br />
                                                        </div>
                                                    </div>
                                                    <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-24">
                                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-30" style="padding: 5px;">
                                                            <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-24"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                            <p class="u-align-center u-text u-text-29">
                                                                113<br />
                                                                3 posti
                                                            </p>
                                                            <a href="{{ route('viewRoomData', '3.113') }}"><input type="submit" value="Dettagli" name="113" /></a><br />
                                                        </div>
                                                    </div>
                                                    <div class="cell-temp-clone u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-25">
                                                        <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-31" style="padding: 5px;">
                                                            <span class="u-align-center u-file-icon u-flip-horizontal u-icon u-icon-25"><img src="{{URL::asset('storage/images/3009905.png')}}" alt="" /></span>
                                                            <p class="u-align-center u-text u-text-30">
                                                                114<br />
                                                                4 posti
                                                            </p>
                                                            <a href="{{ route('viewRoomData', '3.114') }}"><input type="submit" value="Dettagli" name="114" /></a><br />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-spacing-10 u-carousel-control-1" href="#carousel-5989" role="button" data-u-slide="prev">
                        <span aria-hidden="true">
                            <svg viewBox="0 0 451.847 451.847">
                                <path
                                    d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"
                                ></path>
                            </svg>
                        </span>
                        <span class="sr-only">
                            <svg viewBox="0 0 451.847 451.847">
                                <path
                                    d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"
                                ></path>
                            </svg>
                        </span>
                    </a>
                    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-spacing-10 u-carousel-control-2" href="#carousel-5989" role="button" data-u-slide="next">
                        <span aria-hidden="true">
                            <svg viewBox="0 0 451.846 451.847">
                                <path
                                    d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"
                                ></path>
                            </svg>
                        </span>
                        <span class="sr-only">
                            <svg viewBox="0 0 451.846 451.847">
                                <path
                                    d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"
                                ></path>
                            </svg>
                        </span>
                    </a>

                </div>
            </div>
            <style data-mode="XXL">
                @media (max-width: 0px) {
                    .u-section-1 {
                        background-image: none;
                    }
                    .u-section-1 .u-sheet-1 {
                        min-height: 579px;
                    }
                    .u-section-1 .u-slider-1 {
                        min-height: 480px;
                        width: 763px;
                        margin-top: 50px;
                        margin-bottom: 50px;
                        margin-left: auto;
                        margin-right: auto;
                    }
                    .u-section-1 .u-carousel-indicators-1 {
                        position: absolute;
                        bottom: 10px;
                        width: auto;
                        height: auto;
                    }
                    .u-section-1 .u-container-layout-1 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                        padding-left: 80px;
                        padding-right: 80px;
                    }
                    .u-block-09df-18 {
                        width: 83px;
                        height: 83px;
                        background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJtYW4iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiBzdHlsZT0id2lkdGg6IDI1NnB4OyBoZWlnaHQ6IDI1NnB4OyI+CjxyZWN0IGZpbGw9IiNDNkQ4RTEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2Ii8+CjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xNzIuNiw5My40YzExLjYtNDQuNy0xMS4yLTQ4LjYtMTEuNy00OC4xYy0yMi40LTMxLjMtOTAuMy0xNi44LTc3LjQsNDguMWMtMTMuMy0yLjQtMS44LDMxLjYsMy43LDMyLjEKCWMwLDAsMCwwLDAsMGMwLjIsMCwwLjMsMCwwLjUtMC4xYzE0LjQsNDkuNyw2Mi43LDUwLjIsODAuNywwQzE3Mi4zLDEyNy4zLDE4Ni41LDkzLjMsMTcyLjYsOTMuNHoiLz4KPHBhdGggZmlsbD0iIzdGOTZBNiIgZD0iTTIwNS40LDE3Ny45Yy0yNC02LjEtNDMuNS0xOS44LTQzLjUtMTkuOGwtMjAuNiw2NC44bC04LTIyLjhjMTkuNy0yNy41LTMwLjMtMjcuNS0xMC42LDBsLTgsMjIuOEw5NCwxNTguMQoJYzAsMC0xOS41LDEzLjctNDMuNSwxOS44QzMyLjcsMTgyLjUsMzAsMjU2LDMwLDI1NmgxOTZDMjI2LDI1NiwyMjMuMywxODIuNSwyMDUuNCwxNzcuOXoiLz4KPC9zdmc+Cg==");
                        background-position: 50% 50%;
                        margin-top: 0;
                        margin-bottom: 0;
                        margin-left: auto;
                        margin-right: auto;
                    }
                    .u-block-09df-15 {
                        margin-top: 20px;
                        margin-left: 0;
                        margin-right: 0;
                        margin-bottom: 0;
                        font-size: 1.25rem;
                    }
                    .u-block-09df-16 {
                        font-weight: 700;
                        margin-top: 35px;
                        margin-left: auto;
                        margin-right: auto;
                        margin-bottom: 0;
                    }
                    .u-block-09df-17 {
                        font-size: 1rem;
                        font-weight: 400;
                        margin-top: 15px;
                        margin-left: auto;
                        margin-right: auto;
                        margin-bottom: 0;
                    }
                    .u-section-1 .u-container-layout-11 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                        padding-left: 80px;
                        padding-right: 80px;
                    }
                    .u-block-09df-21 {
                        width: 83px;
                        height: 83px;
                        background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJtYW4iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAyNTYgMjU2IiBzdHlsZT0id2lkdGg6IDI1NnB4OyBoZWlnaHQ6IDI1NnB4OyI+CjxyZWN0IGZpbGw9IiNDNkQ4RTEiIHdpZHRoPSIyNTYiIGhlaWdodD0iMjU2Ii8+CjxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xNzIuNiw5My40YzExLjYtNDQuNy0xMS4yLTQ4LjYtMTEuNy00OC4xYy0yMi40LTMxLjMtOTAuMy0xNi44LTc3LjQsNDguMWMtMTMuMy0yLjQtMS44LDMxLjYsMy43LDMyLjEKCWMwLDAsMCwwLDAsMGMwLjIsMCwwLjMsMCwwLjUtMC4xYzE0LjQsNDkuNyw2Mi43LDUwLjIsODAuNywwQzE3Mi4zLDEyNy4zLDE4Ni41LDkzLjMsMTcyLjYsOTMuNHoiLz4KPHBhdGggZmlsbD0iIzdGOTZBNiIgZD0iTTIwNS40LDE3Ny45Yy0yNC02LjEtNDMuNS0xOS44LTQzLjUtMTkuOGwtMjAuNiw2NC44bC04LTIyLjhjMTkuNy0yNy41LTMwLjMtMjcuNS0xMC42LDBsLTgsMjIuOEw5NCwxNTguMQoJYzAsMC0xOS41LDEzLjctNDMuNSwxOS44QzMyLjcsMTgyLjUsMzAsMjU2LDMwLDI1NmgxOTZDMjI2LDI1NiwyMjMuMywxODIuNSwyMDUuNCwxNzcuOXoiLz4KPC9zdmc+Cg==");
                        background-position: 50% 50%;
                        margin-top: 0;
                        margin-bottom: 0;
                        margin-left: auto;
                        margin-right: auto;
                    }
                    .u-block-09df-22 {
                        margin-top: 20px;
                        margin-left: 0;
                        margin-right: 0;
                        margin-bottom: 0;
                        font-size: 1.25rem;
                    }
                    .u-block-09df-23 {
                        font-weight: 700;
                        margin-top: 35px;
                        margin-left: auto;
                        margin-right: auto;
                        margin-bottom: 0;
                    }
                    .u-block-09df-24 {
                        font-size: 1rem;
                        font-weight: 400;
                        margin-top: 15px;
                        margin-left: auto;
                        margin-right: auto;
                        margin-bottom: 0;
                    }
                    .u-section-1 .u-carousel-control-1 {
                        width: 43px;
                        height: 43px;
                        background-image: none;
                    }
                    .u-section-1 .u-carousel-control-2 {
                        width: 43px;
                        height: 43px;
                        background-image: none;
                        left: auto;
                        position: absolute;
                        right: 0;
                    }
                }
            </style>
                <div style="display:inline">
                <?php if(isset($toPrint)):?>
                    <table class="center u-table-alt-palette-1-light-3 u-table-body">
                    <h5 class="center u-table-alt-palette-1-light-3 u-table-body">Occupanti</h2>

                        <colgroup>
                            <col width="33%">
                            <col width="33%">
                            <col width="33%">
                        </colgroup>
                        <tr>
                            <th class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-table-cell">Nome</th>
                            <th class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-table-cell">Cognome</th>
                            <th class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-table-cell">Data di nascita</th>
                        </tr>
                        <?php print($toPrint);
                            print("Posti disponibili: ".$available);?>
                    </table>

                    <table class="center u-table-alt-palette-1-light-3 u-table-body">
                    <h5 class="center u-table-alt-palette-1-light-3 u-table-body">Da assegnare</h2>

                        <colgroup>
                            <col width="33%">
                            <col width="33%">
                            <col width="33%">
                        </colgroup>
                        <tr>
                            <th class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-table-cell">Nome</th>
                            <th class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-table-cell">Cognome</th>
                            <th class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-table-cell">Data di nascita</th>
                        </tr>
                        <?php print($toPrint);
                            print("Posti disponibili: ".$available);?>
                    </table>
                <?php endif;?>
                </div>

        </section>
        <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3607">
            <div class="u-clearfix u-sheet u-sheet-1">
                <p class="u-small-text u-text u-text-variant u-text-1">
                    Fondazione Vita Serena<br />
                    ©2023
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
            <br />
            <br />
        </section>
    </body>
</html>
