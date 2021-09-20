 @include('header')
<!--// Main Banner \\-->

<!--// Main Banner \\-->

<!--// Main Content \\-->
<div class="sportsmagazine-main-content">

    <!--// Main Section \\-->
    <div class="sportsmagazine-main-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <!--// Widget Trending News \\-->
                    <div class="widget widget_trending_news">
                        <div class="sportsmagazine-fancy-title">
                            <h2>Schedules</h2>
                        </div>
                        <!-- Nav tabs -->

                        {{-- <ul class="nav-tabs" role="tablist">
                            <li role="presentation" class="schedules_tab active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">IPL 2021</a></li>
                            <li role="presentation" class="schedules_tab"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">T20 World Cup</a></li>
                            <li role="presentation" class="schedules_tab"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Football</a></li>
                        </ul> --}}
                        <div class="main_shdl">
                            <a href="{{url('schedule')}}" class="ticket-buy-btn btn_shdl">Full Schedules</a>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content on_ho">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <!--// Main Section \\-->
                                <div class="sportsmagazine-fixture sportsmagazine-fixture-list sportsmagazine-fixture-mini-list">
                                    <ul class="row">
                                        @foreach( $schedule_data as $data)
                                        <li class="col-md-12">
                                            <div class="sportsmagazine-fixture-wrap">
                                                <div class="sportsmagazine-teams-match">
                                                    <div class="sportsmagazine-first-team">
                                                        <figure><img src="{{$data->teama->team_logo}}" alt=""></figure>
                                                        <div class="sportsmagazine-first-team-info">
                                                            <h6 style="font-size: 16px;"><a href="fixture-detail.html">{{$data->teama->team_name}}</a></h6>
                                                            {{-- <span>Bepop Institute</span> --}}
                                                            <span class="view_all"><a href="#">View Matchs</a> <i class="fa fa-chevron-right"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="sportsmagazine-match-view">
                                                        <span>VS</span>
                                                    </div>
                                                    <div class="sportsmagazine-second-team">
                                                        <figure><img src="{{$data->teamb->team_logo}}" alt=""></figure>
                                                        <div class="sportsmagazine-second-team-info">
                                                            <h6 style="font-size: 16px;"><a href="fixture-detail.html">{{$data->teamb->team_name}}</a></h6>
                                                            {{-- <span>Marine College</span> --}}
                                                            <span class="view_all"><a href="#">View Matchs</a> <i class="fa fa-chevron-right"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sportsmagazine-buy-ticket">
                                                    <div class="sportsmagazine-buy-ticket-text">
                                                        <time datetime="{{$data->created}}" class="dt"><a href="#">{{date('d F Y | H:i', strtotime($data->created));}}</a></time>
                                                        <h5><a href="#">{{$data->countries->name}}</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                       @endforeach

                                    </ul>
                                </div>
                                <!--// Main Section \\-->
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="widget_popular_news">
                                    <ul>
                                        <li class="widget-injuries">
                                            <div class="popular_news_text">
                                                <small>Injuries</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="popular_news_text">
                                                <small>The Team</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="widget_popular_news">
                                    <ul>
                                        <li class="widget-theleague">
                                            <div class="popular_news_text">
                                                <small>The League</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="popular_news_text">
                                                <small>The Team</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li class="widget-injuries">
                                            <div class="popular_news_text">
                                                <small>Injuries</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Widget Trending News \\-->
                </div>
                <div class="col-md-12">

                    <div class="sportsmagazine-fixture-slider" style="display: none;">

                        <div class="sportsmagazine-fixture-slider-layer">
                            <time datetime="2008-02-14 20:00">August 23, 2016</time>
                            <ul class="sportsmagazine-bgcolor">
                                <li class="first-child">ARS <span>03</span></li>
                                <li>CHL <span>02</span></li>
                            </ul>
                        </div>
                        <div class="sportsmagazine-fixture-slider-layer">
                            <time datetime="2008-02-14 20:00">August 25, 2016</time>
                            <ul class="sportsmagazine-bgcolor">
                                <li class="first-child">BRC <span>05</span></li>
                                <li>RM <span>02</span></li>
                            </ul>
                        </div>
                        <div class="sportsmagazine-fixture-slider-layer">
                            <time datetime="2008-02-14 20:00">August 28, 2016</time>
                            <ul class="sportsmagazine-bgcolor">
                                <li class="first-child">CIT <span>03</span></li>
                                <li>KIN <span>03</span></li>
                            </ul>
                        </div>
                        <div class="sportsmagazine-fixture-slider-layer">
                            <time datetime="2008-02-14 20:00">August 31, 2016</time>
                            <ul class="sportsmagazine-bgcolor">
                                <li class="first-child">ST <span>00</span></li>
                                <li>FRA <span>01</span></li>
                            </ul>
                        </div>
                        <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                            <time datetime="2008-02-14 20:00">September 03, 2016</time>
                            <ul class="sportsmagazine-bgcolor">
                                <li class="first-child"><small>SPA</small> VS <span>RM</span></li>
                                <li>Full Booked</li>
                            </ul>
                        </div>
                        <div class="sportsmagazine-fixture-slider-layer">
                            <time datetime="2008-02-14 20:00">September 05, 2016</time>
                            <ul class="sportsmagazine-bgcolor">
                                <li class="first-child">ARS <span>03</span></li>
                                <li>CHL <span>02</span></li>
                            </ul>
                        </div>
                        <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                            <time datetime="2008-02-14 20:00">December 31, 2016</time>
                            <ul class="sportsmagazine-bgcolor">
                                <li class="first-child"><small>SPA</small> VS <span>RM</span></li>
                                <li>Full Booked</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!--// Content \\-->
                <div class="col-md-8">

                    <!--// Fancy Title \\-->
                    <div class="sportsmagazine-fancy-title">
                        <h2>Recent Stories</h2>
                    </div>
                    <!--// Fancy Title \\-->
                    <!--// Featured Slider \\-->

                   
                    <div class="sportsmagazine-featured-slider">
                        @if(!empty($recent_stories_data->article_type_id))
                        @foreach($articles_latest_data as $data)
                        @if($recent_stories_data->article_type_id==$data->article_type_id)
                        <div class="sportsmagazine-featured-slider-layer">
                            <img src="https://admin.matchtimings.com/assets/article/{{$data->image}}" alt="{{$data->image}}">
                            <span class="sportsmagazine-black-transparent"></span>
                            <div class="sportsmagazine-featured-caption">
                                <h2><a href="{{url('details/'.$data->article_id)}}">{{$data->heading1}}</a></h2>
                                <span class="sportsmagazine-color">{{date('d F Y | H:i:s', strtotime($data->created));}} / {{$data->published_by}}</span>
                            </div>
                        </div>
                        @endif
                        @endforeach
                       @endif

                    </div>
                    <!--// Featured Slider \\-->
                </div>
                <!--// Content \\-->

                <!--// SideBaar \\-->
                <aside class="col-md-4">

                    <!--// Widget TeamRanking \\-->
                    <div class="widget widget_team_ranking">
                        <div class="sportsmagazine-fancy-title">
                            <h2>Score Boards</h2>
                        </div>
                        <div class="ranking-title-table">
                            <ul class="ranking-title-row">
                                <li>Team Rank</li>
                                <li>M</li>
                                <li>W</li>
                                <li>PTS</li>
                            </ul>
                        </div>
                        <div class="ranking-content-table">
                            <ul class="ranking-content-row">
                                <li>1</li>
                                <li> <img src="{{url('assets/extra-images/ranking-widget-flag-1.png')}}" alt="">
                                    <div class="ranking-logo"><span>L.A Pirates</span> <small>Bebop Institute</small> </div>
                                </li>
                                <li>08</li>
                                <li>08</li>
                                <li>16</li>
                            </ul>
                        </div>
                        <div class="ranking-content-table">
                            <ul class="ranking-content-row">
                                <li>2</li>
                                <li> <img src="{{url('assets/extra-images/ranking-widget-flag-2.png')}}" alt="">
                                    <div class="ranking-logo"><span>Ocean Kings</span> <small>Icarus College</small> </div>
                                </li>
                                <li>08</li>
                                <li>07</li>
                                <li>14</li>
                            </ul>
                        </div>
                        <div class="ranking-content-table">
                            <ul class="ranking-content-row">
                                <li>3</li>
                                <li> <img src="{{url('assets/extra-images/ranking-widget-flag-3.png')}}" alt="">
                                    <div class="ranking-logo"><span>Red Wings</span> <small>Marine College</small> </div>
                                </li>
                                <li>07</li>
                                <li>07</li>
                                <li>14</li>
                            </ul>
                        </div>
                        <div class="ranking-content-table">
                            <ul class="ranking-content-row">
                                <li>4</li>
                                <li> <img src="{{url('assets/extra-images/ranking-widget-flag-4.png')}}" alt="">
                                    <div class="ranking-logo"><span>Lucky Clovers</span> <small>Elric Bros School</small> </div>
                                </li>
                                <li>07</li>
                                <li>06</li>
                                <li>12</li>
                            </ul>
                        </div>
                        <div class="ranking-content-table">
                            <ul class="ranking-content-row">
                                <li>5</li>
                                <li> <img src="{{url('assets/extra-images/ranking-widget-flag-5.png')}}" alt="">
                                    <div class="ranking-logo"><span>Draconians</span> <small>Atlantic School</small> </div>
                                </li>
                                <li>06</li>
                                <li>05</li>
                                <li>10</li>
                            </ul>
                        </div>
                        <div class="ranking-content-table">
                            <ul class="ranking-content-row">
                                <li>6</li>
                                <li> <img src="{{url('assets/extra-images/ranking-widget-flag-6.png')}}" alt="">
                                    <div class="ranking-logo"><span>Bloody Wave</span> <small>Marine College</small> </div>
                                </li>
                                <li>06</li>
                                <li>04</li>
                                <li>08</li>
                            </ul>
                        </div>
                        <div class="ranking-content-table">
                            <ul class="ranking-content-row">
                                <li>7</li>
                                <li> <img src="{{url('assets/extra-images/ranking-widget-flag-7.png')}}" alt="">
                                    <div class="ranking-logo"><span>Ocean Kings</span> <small>St. Patrick’s Institute</small> </div>
                                </li>
                                <li>06</li>
                                <li>04</li>
                                <li>08</li>
                            </ul>
                        </div>
                        <div class="ranking-content-table">
                            <ul class="ranking-content-row">
                                <li>8</li>
                                <li> <img src="{{url('assets/extra-images/ranking-widget-flag-2.png')}}" alt="">
                                    <div class="ranking-logo"><span>Sharks</span> <small>Icarus College</small> </div>
                                </li>
                                <li>06</li>
                                <li>02</li>
                                <li>04</li>
                            </ul>
                        </div>
                    </div>
                    <!--// Widget TeamRanking \\-->

                </aside>
                <!--// SideBaar \\-->

                <!--// Content \\-->
                <div class="col-md-8">
                    <div class="widget widget_trending_news">
                        <div class="sportsmagazine-classic-heading">
                            <h2>Coming Up</h2>
                        </div>
                        <ul class="nav-tabs" role="tablist">
                            <li role="presentation" class="schedules_tab active"><a href="#cricket" aria-controls="home" role="tab" data-toggle="tab">Cricket</a></li>
                            <li role="presentation" class="schedules_tab"><a href="#football" aria-controls="profile" role="tab" data-toggle="tab">Football</a></li>
                            <li role="presentation" class="schedules_tab"><a href="#tennis" aria-controls="messages" role="tab" data-toggle="tab">Tennis</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content on_ho">
                            <div role="tabpanel" class="tab-pane active" id="cricket">
                                <!--// Main Section \\-->
                                <div class="sportsmagazine-match-fixture">
                                    <table class="sportsmagazine-client-detail">
                                        <tbody>
                                            <tr>
                                                <td>December 09, 2017</td>
                                                <td>
                                                    <figure><img src="assets/extra-images/player-stats-img1.jpg" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>Ocean Kings</h6>
                                                        <span>St. Patrick’s Institute</span>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="{{url('assets/extra-images/player-stats-img2.jpg')}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>Bloody Wave</h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>December 11, 2017</td>
                                                <td>
                                                    <figure><img src="{{url('assets/extra-images/player-stats-img3.jpg')}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>L.A Pirates</h6>
                                                        <span>Bebop Institute</span>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="assets/extra-images/player-stats-img4.jpg" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>Ocean Kings</h6>
                                                        <span>Icarus College</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>December 12, 2017</td>
                                                <td>
                                                    <figure><img src="{{url('assets/extra-images/player-stats-img5.jpg')}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>Red Wings</h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="{{url('assets/extra-images/player-stats-img6.jpg')}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>Lucky Clovers</h6>
                                                        <span>Elric Bros School</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>December 15, 2017</td>
                                                <td>
                                                    <figure><img src="{{url('assets/extra-images/fixture-classic-img6.png')}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>Draconians</h6>
                                                        <span>Atlantic School</span>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="{{url('assets/extra-images/player-stats-img1.jpg')}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>Ocean Kings</h6>
                                                        <span>St. Patrick’s Institute</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>December 17, 2017</td>
                                                <td>
                                                    <figure><img src="{{url('assets/extra-images/player-stats-img2.jpg')}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>Bloody Wave</h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="{{url('assets/extra-images/player-stats-img3.jpg')}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>L.A Pirates</h6>
                                                        <span>Bebop Institute</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>December 17, 2017</td>
                                                <td>
                                                    <figure><img src="{{url('assets/extra-images/player-stats-img4.jpg')}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>Ocean Kings</h6>
                                                        <span>Icarus College</span>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="{{url('assets/extra-images/player-stats-img5.jpg')}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>Red Wings</h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>December 22, 2017</td>
                                                <td>
                                                    <figure><img src="{{url('assets/extra-images/player-stats-img1.jpg')}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>Ocean Kings</h6>
                                                        <span>St. Patrick’s Institute</span>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="{{url('assets/extra-images/player-stats-img2.jpg')}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6>Bloody Wave</h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--// Main Section \\-->
                            </div>
                            <div role="tabpanel" class="tab-pane" id="football">
                                <div class="widget_popular_news">
                                    <ul>
                                        <li class="widget-injuries">
                                            <div class="popular_news_text">
                                                <small>Injuries</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="popular_news_text">
                                                <small>The Team</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tennis">
                                <div class="widget_popular_news">
                                    <ul>
                                        <li class="widget-theleague">
                                            <div class="popular_news_text">
                                                <small>The League</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="popular_news_text">
                                                <small>The Team</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                        <li class="widget-injuries">
                                            <div class="popular_news_text">
                                                <small>Injuries</small>
                                                <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!--// Content \\-->

                <!--// SideBaar \\-->
                <aside class="col-md-4">

                    <!--// Widget TeamRanking \\-->
                    <div class="widget widget_team_ranking">
                        <div class="sportsmagazine-fancy-title">
                            <h2>Advertisement Corner</h2>
                        </div>
                        <div class="widget widget_add">
                            <img src="{{url('assets/extra-images/add.jpg')}}" alt="">
                        </div>
                    </div>
                    <!--// Widget TeamRanking \\-->

                </aside>
                <!--// SideBaar \\-->

                <div class="col-md-12">
                    @foreach($article_type as $type_data)
                    @if($type_data->article_type_name!='Recent News')
                    <div class="sportsmagazine-fancy-title">
                        <h2>{{$type_data->article_type_name}}</h2>
                    </div>
                    <div class="multiple-items">
                        <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                            <ul class="row">
                        
                              @foreach($articles_data as $data)
                              @if($type_data->article_type_id==$data->article_type_id)

                                <li class="col-md-4 sportsmagazine-the-team">
                                    <figure>
                                        <a href="{{url('details/'.$data->article_id)}}"><img src="https://admin.matchtimings.com/assets/article/{{$data->image}}" alt="{{$data->image}}"></a>
                                        <figcaption>
                                            {{-- <span><small>The Team</small></span> --}}
                                            {{-- <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a> --}}
                                        </figcaption>
                                    </figure>
                                    <section>
                                        <h2><a href="{{url('details/'.$data->article_id)}}">{{$data->heading1}}</a></h2>
                                        <p>{{substr($data->summary_outline_description,0,157)}}</p>
                                    </section>
                                    <div class="sportsmagazine-blog-grid-options">
                                        <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><span><strong>Published By  </strong></span>{{$data->published_by}}</a>
                                        {{-- <ul>
                                            <li><i class="fa fa-thumbs-o-up"></i> <a href="404.html">320</a></li>
                                            <li><i class="fa fa-eye"></i> <a href="404.html">840</a></li>
                                            <li><i class="fa fa-share-alt"></i> <a href="404.html">89</a></li>
                                        </ul> --}}
                                    </div>
                                </li>
                                @endif
                              @endforeach




                            </ul>
                        </div>
                    </div>
                    @endif
                @endforeach
                </div>
                
                <div class="container padding-top">
                    <div class="row">

                        <!-- content Column Left -->
                        <div class="col-lg-6 col-xl-7">
                            <!-- Recent Post -->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4>{{$article_type1->article_type_name}}</h4>
                                </div>
                           @foreach($articles_data as $data)
                           @if($type_data->article_type_id==$data->article_type_id)
                                <!-- Post Item -->
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-hover">
                                                <img src="https://admin.matchtimings.com/assets/article/{{$data->image}}" alt="{{$data->image}}" class="img-responsive">
                                                <div class="overlay"><a href="#">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="{{url('details/'.$data->article_id)}}">{{$data->heading1}}</a></h5>
                                            <span class="data-info">{{date('d F Y | H:i:s', strtotime($data->created));}} </span>
                                            <p>{{substr($data->summary_outline_description,0,157)}}...<a href="{{url('details/'.$data->article_id)}}">Read More [+]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Post Item -->
                                    @endif
                                @endforeach

                             
                            </div>
                            <!-- End Recent Post -->
                        </div>
                        <!-- End content Left -->

                        <!-- content Sidebar Center -->
                        <aside class="col-sm-6 col-lg-5 col-xl-3">
                            <!-- Locations -->
                            <div class="panel-box">
                                <div class="titles no-margin">
                                    <h4>Locations</h4>
                                </div>
                                <!-- Locations Carousel -->
                                <ul class="single-carousel">
                                    <li>
                                        <img src="{{url('assets/images/1.jpg')}}" alt="" class="img-responsive">
                                        <div class="info-single-carousel">
                                            <h4>Saint Petersburg</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cillum dolore
                                                eu fugiat nulla sit amet, consectetur adipisicing elit, pariatur.</p>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Locations Carousel -->
                            </div>
                            <!-- End Locations -->
                        </aside>
                        <!-- End content Sidebar Center -->

                      
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Main Section \\-->


</div>
<!--// Main Content \\-->
@include('footer')