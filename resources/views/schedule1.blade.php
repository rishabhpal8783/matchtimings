@include('header')

<!--// Main Content \\-->
<div class="sportsmagazine-main-content">
    <div class="container">
        <div class="row">
            <div class="top_add">
                <img src="{{url('assets/images/add-top.PNG')}}" width="100%">
            </div>
        </div>
    </div>

    <!--// Main Section \\-->
    <div class="sportsmagazine-main-section sportsmagazine-blogmodren-full">
        <div class="container">
            <div class="row">
                 <aside class="col-md-3">

                    
                        <!--// Widget series \\-->
                        <div class="widget widget_popular_news">
                                <div class="sportsmagazine-fancy-title"><h2>Recent Series</h2></div>
                                <ul>
                                    
                                    <li>
                                        <span style="padding-top:0px">01</span>
                                        <div class="popular_news_text">
                                           
                                            <a href="#">Big BAsh League</a>
                                            <time datetime="2008-02-14 20:00">Dec 05, 2021 - Jan 28, 2022</time>
                                        </div>
                                    </li>
                                    <li>
                                        <span style="padding-top:0px">02</span>
                                        <div class="popular_news_text">
                                           
                                            <a href="#">South Africa VS India</a>
                                            <time datetime="2008-02-14 20:00">Dec 26, 2021 - Jan 08, 2022</time>
                                        </div>
                                    </li>
                                    <li>
                                        <span style="padding-top:0px">03</span>
                                        <div class="popular_news_text">
                                           
                                            <a href="#">Big BAsh League</a>
                                            <time datetime="2008-02-14 20:00">Dec 05, 2021 - Jan 28, 2022</time>
                                        </div>
                                    </li>
                                    <li>
                                        <span style="padding-top:0px">04</span>
                                        <div class="popular_news_text">
                                           
                                            <a href="#">Big BAsh League</a>
                                            <time datetime="2008-02-14 20:00">Dec 05, 2021 - Jan 28, 2022</time>
                                        </div>
                                    </li>
                                 

                                </ul>
                            </div>
                            
                    {{-- <div class="widget widget_trending_news">
                                <div class="sportsmagazine-fancy-title"><h2>Top Trending News</h2></div>
                                <!-- Nav tabs -->
                              
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="widget_popular_news">
                                            <ul>
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
                                                <li class="widget-theleague">
                                                    <div class="popular_news_text">
                                                        <small>The League</small>
                                                        <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                                        <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus.</p>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                        </div>
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

                                           --}}
                
                </aside> 

                <div class="col-md-6">
                    <!--// Widget Trending News \\-->
                    <div class="widget widget_trending_news">
                        <div class="sportsmagazine-fancy-title">
                            <h2>Full Schedules</h2>
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
                                                            <h6><a href="{{url('/match/'.str_replace(' ', '-', $data->teama->team_name))}}">{{$data->teama->team_name}}</a></h6>
                                                            {{-- <span>Bepop Institute</span> --}}
                                                            <span class="view_all"><a href="{{url('/match/'.str_replace(' ', '-', $data->teama->team_name))}}">View Matchs</a> <i class="fa fa-chevron-right"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="sportsmagazine-match-view">
                                                        <span>VS</span>
                                                    </div>
                                                    <div class="sportsmagazine-second-team">
                                                        <figure><img src="{{$data->teamb->team_logo}}" alt=""></figure>
                                                        <div class="sportsmagazine-second-team-info">
                                                            <h6><a href="{{url('/match/'.str_replace(' ', '-', $data->teamb->team_name))}}">{{$data->teamb->team_name}}</a></h6>
                                                            {{-- <span>Marine College</span> --}}
                                                            <span class="view_all"><a href="{{url('/match/'.str_replace(' ', '-', $data->teamb->team_name))}}">View Matchs</a> <i class="fa fa-chevron-right"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sportsmagazine-buy-ticket">
                                                    <div class="sportsmagazine-buy-ticket-text">
                                                        <time datetime="{{$data->created}}" class="dt"><a href="{{url('/match/'.str_replace(' ', '-', $data->created))}}">{{date('d F Y | H:i', strtotime($data->created));}}</a></time>
                                                        <h5><a href="{{url('/match/'.str_replace(' ', '-', $data->countries->name))}}">{{$data->countries->name}}</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                      
                                       @endforeach

                                    </ul>
                                </div>
                                <!--// Main Section \\-->
                            </div>
                           
                         
                        </div>
                    </div>
                    <!--// Widget Trending News \\-->
                    <!--// Pagination \\-->

                    <!--// Pagination \\-->
                </div>

                <!--// SideBar \\-->
                <aside class="col-md-3">
                   

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

                     <!--// Widget Upcoming Matches \\-->
                     
                    <!--// Widget Upcoming Matches \\-->

                    <!--// Widget Cetagories \\-->
                
                    <!--// Widget Cetagories \\-->

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

                    <!--// Widget Flicker Images \\-->
                    <div class="sportsmagazine-widget-heading">
                        <h2>Flicker Images</h2>
                    </div>
                    <div class="widget widget_gallery">
                        <ul>
                            <li>
                                <a data-fancybox-group="group" href="{{url('assets/extra-images/flicker-image-1.jpg')}}" class="fancybox"><img src="{{url('assets/extra-images/flicker-image-1.jpg')}}" alt=""><i class="fa fa-angle-double-right"></i></a>
                            </li>
                            <li>
                                <a data-fancybox-group="group" href="{{url('assets/extra-images/flicker-image-2.jpg')}}" class="fancybox"><img src="assets/extra-images/flicker-image-2.jpg" alt=""><i class="fa fa-angle-double-right"></i></a>
                            </li>
                            <li>
                                <a data-fancybox-group="group" href="{{url('assets/extra-images/flicker-image-3.jpg')}}" class="fancybox"><img src="{{url('assets/extra-images/flicker-image-3.jpg')}}" alt=""><i class="fa fa-angle-double-right"></i></a>
                            </li>
                          
                           
                           
                        </ul>
                    </div>
                    <!--// Widget Flicker Images \\-->

                </aside>
                <!--// SideBar \\-->
                <!-- <div class="col-md-12">

                            <div class="sportsmagazine-fixture-slider">
                                
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
                        </div> -->
                <div class="container padding-top">
                    <div class="row">

                        <!-- content Column Left -->
                        <div class="col-lg-6 col-xl-7">
                            <!-- Recent Post -->
                            <div class="panel-box">

                                <div class="titles">
                                    <h4>Recent News</h4>
                                </div>

                                <!-- Post Item -->
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-hover">
                                                <img src="{{url('assets/images/1.jpg')}}" alt="" class="img-responsive">
                                                <div class="overlay"><a href="single-news.html">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="single-news.html">Group Stage Breakdown</a></h5>
                                            <span class="data-info">January 3, 2014  / <i class="fa fa-comments"></i><a href="#">0</a></span>
                                            <p>While familiar with fellow European nation France, Hareide admits that South American side Peru.<a href="single-news.html">Read More [+]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Post Item -->

                                <!-- Post Item -->
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-hover">
                                                <img src="{{url('assets/images/1.jpg')}}" alt="" class="img-responsive">
                                                <div class="overlay"><a href="single-news.html">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="single-news.html">Russia 2018’s potential classic match-ups</a></h5>
                                            <span class="data-info">January 9, 2014  / <i class="fa fa-comments"></i><a href="#">5</a></span>
                                            <p>Our goal is very clear, it didn’t change after the draw. We should qualify for the knockout stage.<a href="single-news.html">Read More [+]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Post Item -->
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

                        <!-- content Sidebar Right -->
                        {{-- <aside class="col-sm-6 col-lg-3 col-xl-2">
                            <!-- Diary -->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4><i class="fa fa-calendar"></i>Diary</h4>
                                </div>

                                <!-- List Diary -->
                                <ul class="list-diary">
                                    <!-- Item List Diary -->
                                    <li>
                                        <h6>GROUP A <span>14 JUN 2018 - 18:00</span></h6>
                                        <ul class="club-logo">
                                            <li>
                                                <img src="assets/images/rusia.png" alt="">
                                                <span>RUSSIA</span>
                                            </li>
                                            <li>
                                                <img src="assets/images/arabia.png" alt="">
                                                <span>SAUDI ARABIA</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Item List Diary -->

                                    <!-- Item List Diary -->
                                    <li>
                                        <h6>GROUP E <span>22 JUN 2018 - 15:00</span></h6>
                                        <ul class="club-logo">
                                            <li>
                                                <img src="assets/images/bra.png" alt="">
                                                <span>BRAZIL</span>
                                            </li>
                                            <li>
                                                <img src="assets/images/costa-rica.png" alt="">
                                                <span>COSTA RICA</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Item List Diary -->

                                    <!-- Item List Diary -->
                                    <li>
                                        <h6>GROUP H <span>19 JUN 2018 - 15:00</span></h6>
                                        <ul class="club-logo">
                                            <li>
                                                <img src="assets/images/colombia.png" alt="">
                                                <span>COLOMBIA</span>
                                            </li>
                                            <li>
                                                <img src="assets/images/japan.png" alt="">
                                                <span>JAPAN</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Item List Diary -->

                                    <!-- Item List Diary -->
                                    <li>
                                        <h6>GROUP C <span>16 JUN 2018 - 15:00</span></h6>
                                        <ul class="club-logo">
                                            <li>
                                                <img src="assets/images/fra.png" alt="">
                                                <span>FRANCE</span>
                                            </li>
                                            <li>
                                                <img src="assets/images/aus.png" alt="">
                                                <span>AUSTRALIA</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Item List Diary -->
                                </ul>
                                <!-- End List Diary -->
                            </div>
                            <!-- End Diary -->

                        </aside> --}}
                        <!-- End content Sidebar Right -->

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
<!--// Main Content \\-->
@include('footer')