<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Matchtimings</title>

    <!-- Css Files -->
    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/slick-slider.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/fancybox.css')}}" rel="stylesheet">
    <link href="{{url('style.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/color.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/responsive.css')}}" rel="stylesheet">
    <!-- <link href="assets/css/main.css" rel="stylesheet"> -->

</head>

<body>

    <!--// Main Wrapper \\-->
    <div class="sportsmagazine-main-wrapper">
        <!--// Add hare Start \\-->
        <div class="container">
            <div class="row">
                <div class="top_add">
                    <img src="{{url('assets/images/add-top.PNG')}}" width="100%">
                </div>
            </div>
        </div>

        <!--// Add hare End\\-->

        <!--// Header \\-->
        <header id="sportsmagazine-header" class="sportsmagazine-header-one">

            <!--// TopStrip \\-->
            <div class="sportsmagazine-topstrip">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-12">
                            <ul class="sportsmagazine-user-section">
                                <li>
                                    </i> <a href="404.html">Today's Fixtures</a></li>
                                <li><a href="404.html">ICC T20 World Cup</a></li>
                                <li>
                                    </i> <a href="404.html">IND vs AUS</a></li>
                                <li><a href="404.html">RSA vs ENG</a></li>
                                <li>
                                    </i> <a href="404.html">La Liga League</a></li>
                                <li><a href="404.html">Levante vs Sevilla</a></li>
                                <li><a href="404.html">Espanyol vs Leganes</a></li>
                                <li><a href="404.html">Point Table</a></li>
                                <li><a href="404.html">Results</a></li>

                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainSection \\-->
            <div class="sportsmagazine-main-header">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-2">
                            <a href="index.html" class="sportsmagazine-logo"><img src="assets/images/mt_logo.png" alt=""></a>
                        </aside>
                        <div class="col-md-10">
                            <div class="sportsmagazine-right-section">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                      </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="{{url('/')}}">Home</a></li>
                                            @foreach($sports_data as $data)
                                            <li class="sportsmagazine-megamenu-li"><a href="#">{{$data->sport_name}}</a>

                                                <ul class="sportsmagazine-megamenu">
                                                   
                                                    <li class="row mega_innr">
                                                        @foreach($data->league as $leag)
                                                        <div class="col-md-4">
                                                            <h4>{{$leag->league_name}}</h4>
                                                            <ul class="sportsmagazine-megalist">
                                                                @foreach($leag->event as $events)
                                                                <li><a href="#">{{$events->event_name}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div> @endforeach
                                                    </li>
                                                   
                                                </ul>
                                            </li>
                                            @endforeach
                                          </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainSection \\-->

        </header>
        <!--// Header \\-->