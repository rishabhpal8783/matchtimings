@include('header')
        <!--// Header \\-->






		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content sportsmagazine-main-contentminus">
            
            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section sportsmagazine-thumb sportsmagazine-fixture-thumb">
                <span class="thumb-transparent"></span>

                <div class="container">
                    <div class="row">
					
						
					

                     <!---   <div class="col-md-4">
                            <div class="sportsmagazine-thumb-team-one">
                                <figure><img src="extra-images/thumb-team-oneimg.png" alt=""></figure>
                                
                            </div>
                        </div>--->
                        <div class="col-md-12">
                            <div class="sportmagazine-score-counter">
                                <h4>
                                <span>{{$name}}</span></h4>

                                  
                           <ul class="sportsmagazine-breadcrumb" style="margin-top:20px;">
                            <li><a >Home </a></li>
                           <li><a > {{$type}}</a></li>
						   <li><a >{{$name}} </a></li>
						   

                        </ul>
                                </div>
								
                            </div>
                        </div>
                        
                            
                    </div>
                </div>
            </div>
            <div class="sportsmagazine-main-content sportsmagazine-main-contentminus">
            
                <!--// Main Section \\-->
             
               
    
    
    
               
    
            <!--// Main Section \\-->

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
				
					<div class="row">
						
						
                <aside class="col-md-3">

                <div class="widget widget_popular_news">
                                <div class="sportsmagazine-fancy-title"><h2> Links</h2></div>
                                
                                <ul class="">
                             
                        @foreach($sports_data1 as $data)
                        <li class=""><h4 style="display: none;"><a href="#">{{$data->sport_name}}</a></h4>

                            <ul class="">
                               
                                <li class="">
                                    @foreach($data->league as $leag)
                                
                                    @if($leag->league_name==$name)
                                    <div class="popular_news_text">


                                        <h4><a href="{{url('/league/'.$leag->league_id.'/'.str_replace(' ', '-', $data->sport_name).'/'.str_replace(' ', '-', $leag->league_name))}}">{{$leag->league_name}}</a></h4>
                                        <ul class="">
                                            @foreach($leag->event as $events)
                                            <li><a href="{{url('/event/'.$events->event_id.'/'.str_replace(' ', '-', $data->sport_name).'/'.str_replace(' ', '-', $leag->league_name).'/'.str_replace(' ', '-', $events->event_name))}}">{{$events->event_name}}</a></li>
                                            @endforeach
                                        </ul>
                                     
                                    </div>@endif
                                    @endforeach
                                   
                                </li>
                             
                            </ul>
                        </li>
                        @endforeach
                      </ul>
                            </div>

                        <!--// Widget series \\-->
                        <div class="widget widget_popular_news">
                                <div class="sportsmagazine-fancy-title"><h2>Recent Series</h2></div>
                                
                                <ul>
                                    @foreach ($sports as $item)

                                    <li>
                                        <span style="padding-top:0px">{{$item->season_id}}</span>
                                        <div class="popular_news_text">
                                           
                                            <a href="{{url('/schedule/'.$item->season_id.'/'.str_replace(' ', '-', $item->season_name.'/Latest-Schedule-match-list-venue-dates-team-list'))}}">{{$item->season_name}}</a>
                                            <time datetime="{{$item->created}}" class="dt"><a href="#">{{date('d F Y | H:i', strtotime($item->created));}}</a></time>
                                        </div>
                                    </li>
                                    @endforeach
                                   
                                 

                                </ul>
                            </div>
                            <!--// Widget Popular News \\-->

                
                
                         <!--// Widget TeamRanking \\-->
                 
                    <!--// Widget series \\-->
                    <div class="widget widget_next_match">
                                <div class="sportsmagazine-fancy-title"><h2>Next Match</h2></div>
                                <div class="widget_next_match_title">
                                    <h5>Championship Quarter Finals</h5>
                                    <span>Saturday, May 17th, 2017</span>
                                </div>
                                <ul>
                                    <li>
                                        <img src="extra-images/widget-next-match-logo-1.png" alt="">
                                        <h6><a href="fixture-detail.html">Basketball</a></h6>
                                        <small>Sports And Magazine</small>
                                    </li>
                                    <li>
                                        <div class="widget_next_match_option">
                                            <h6>09:00 pm</h6>
                                            <small>Madison Stadium</small>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="extra-images/widget-next-match-logo-2.png" alt="">
                                        <h6><a href="fixture-detail.html">Combine</a></h6>
                                        <small>ST Paddy's Institute</small>
                                    </li>
                                </ul>
                                <div class="widget_match_countdown">
                                    <h6>Game Countdown</h6>
                                    <div id="sportsmagazine-countdown" class="is-countdown"><span class="countdown-row countdown-show3"><span class="countdown-section"><span class="countdown-amount">0</span><span class="countdown-period">Hours</span></span><span class="countdown-section"><span class="countdown-amount">0</span><span class="countdown-period">Minutes</span></span><span class="countdown-section"><span class="countdown-amount">0</span><span class="countdown-period">Seconds</span></span></span></div>
                                </div>
                               
                            </div>    

                        <div class="widget widget_trending_news">
                                <div class="sportsmagazine-fancy-title"><h2>Top Trending News</h2></div>
                                <!-- Nav tabs -->
                                <ul class="nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Newset</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Most Commented</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Populer</a></li>
                                </ul>
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

                                  
                
                </aside> 
               
					 <div class="col-md-6">
					 
						 <div class="widget widget_trending_news">
                            <div class="sportsmagazine-fancy-title"><h2>Team Details</h2></div>
                    
                                        <div class="widget_popular_news">
                                             <div class="sportsmagazine-rich-editor">
                                <p> {!!$League->description!!}    </p>
                                <blockquote>Sed gravida, urna quis tempus sollicitudin, tellus urna suscipit nisl, id rhoncus ligula elit condi Suspendisse lacinia, risus et porta dignissim, elit tellus iaculis tellus, eget efficitur elit magna ellus tempor consectetur magna.
                                <span></span>
                                </blockquote>
                                <p>Sed gravida, urna quis tempus sollicitudin, tellus urna suscipit nisl, id rhoncus ligula elit condimentum  ti odio. Suspendisse lacinia risus et porta dignissim, elit tellus iaculis tellus, eget efficitur elit magna eu orci. Phasellus tempor consesactetur magna, at efficit est malesuada ac. Phasellus non ipsum diam. Suspendisse potenti.</p>
                                
                         
                                    </div>
                              </div>

                        <div class="sportsmagazine-fancy-title"><h2>Squad</h2></div>
                        <div class="sportsmagazine-player sportsmagazine-player-list">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure><a href="player-detail.html"><img src="extra-images/player-list-img1.jpg" alt=""><i class="fa fa-link"></i></a></figure>
                                        <div class="sportsmagazine-player-list-text">
                                            <a href="player-detail.html" class="sportsmagazine-forword-btn">Forword</a>
                                            <h5><a href="player-detail.html">Darren Layfield</a></h5>
                                         
                                            <ul class="sportsmagazine-player-social">
                                                <li><a href="https://www.facebook.com/" class="icon-facebook2"></a></li>
                                                <li><a href="https://plus.google.com/" class="icon-google-plus2"></a></li>
                                                <li><a href="https://pk.linkedin.com/" class=" icon-linkedin"></a></li>
                                                <li><a href="https://twitter.com/login" class="icon-social62"></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="player-detail.html"><img src="extra-images/player-list-img2.jpg" alt=""><i class="fa fa-link"></i></a></figure>
                                        <div class="sportsmagazine-player-list-text">
                                            <a href="player-detail.html" class="sportsmagazine-forword-btn">Forword</a>
                                            <h5><a href="player-detail.html">Sarena jullie</a></h5>
                                         
                                            <ul class="sportsmagazine-player-social">
                                                <li><a href="https://www.facebook.com/" class="icon-facebook2"></a></li>
                                                <li><a href="https://plus.google.com/" class="icon-google-plus2"></a></li>
                                                <li><a href="https://pk.linkedin.com/" class=" icon-linkedin"></a></li>
                                                <li><a href="https://twitter.com/login" class="icon-social62"></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="player-detail.html"><img src="extra-images/player-list-img3.jpg" alt=""><i class="fa fa-link"></i></a></figure>
                                        <div class="sportsmagazine-player-list-text">
                                            <a href="player-detail.html" class="sportsmagazine-forword-btn">Forword</a>
                                            <h5><a href="player-detail.html">Chris Morris</a></h5>
                                            <ul class="sportsmagazine-player-social">
                                                <li><a href="https://www.facebook.com/" class="icon-facebook2"></a></li>
                                                <li><a href="https://plus.google.com/" class="icon-google-plus2"></a></li>
                                                <li><a href="https://pk.linkedin.com/" class=" icon-linkedin"></a></li>
                                                <li><a href="https://twitter.com/login" class="icon-social62"></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="player-detail.html"><img src="extra-images/player-list-img4.jpg" alt=""><i class="fa fa-link"></i></a></figure>
                                        <div class="sportsmagazine-player-list-text">
                                            <a href="player-detail.html" class="sportsmagazine-forword-btn">Forword</a>
                                            <h5><a href="player-detail.html">Sophie james</a></h5>
                                            <ul class="sportsmagazine-player-social">
                                                <li><a href="https://www.facebook.com/" class="icon-facebook2"></a></li>
                                                <li><a href="https://plus.google.com/" class="icon-google-plus2"></a></li>
                                                <li><a href="https://pk.linkedin.com/" class=" icon-linkedin"></a></li>
                                                <li><a href="https://twitter.com/login" class="icon-social62"></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="player-detail.html"><img src="extra-images/player-list-img5.jpg" alt=""><i class="fa fa-link"></i></a></figure>
                                        <div class="sportsmagazine-player-list-text">
                                            <a href="player-detail.html" class="sportsmagazine-forword-btn">Forword</a>
                                            <h5><a href="player-detail.html">Brad Haddin</a></h5>
                                            <ul class="sportsmagazine-player-social">
                                                <li><a href="https://www.facebook.com/" class="icon-facebook2"></a></li>
                                                <li><a href="https://plus.google.com/" class="icon-google-plus2"></a></li>
                                                <li><a href="https://pk.linkedin.com/" class=" icon-linkedin"></a></li>
                                                <li><a href="https://twitter.com/login" class="icon-social62"></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="player-detail.html"><img src="extra-images/player-list-img1.jpg" alt=""><i class="fa fa-link"></i></a></figure>
                                        <div class="sportsmagazine-player-list-text">
                                            <a href="player-detail.html" class="sportsmagazine-forword-btn">Forword</a>
                                            <h5><a href="player-detail.html">Darren Layfield</a></h5>
                                            <ul class="sportsmagazine-player-social">
                                                <li><a href="https://www.facebook.com/" class="icon-facebook2"></a></li>
                                                <li><a href="https://plus.google.com/" class="icon-google-plus2"></a></li>
                                                <li><a href="https://pk.linkedin.com/" class=" icon-linkedin"></a></li>
                                                <li><a href="https://twitter.com/login" class="icon-social62"></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
							<div class="sportsmagazine-pagination">
                              <ul class="page-numbers">
                                 <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-left"></i></span></a></li>
                                 <li><span class="page-numbers current">1</span></li>
                                 <li><a class="page-numbers" href="404.html">2</a></li>
                                 <li><a class="page-numbers" href="404.html">3</a></li>
                                 <li><a class="page-numbers" href="404.html">4</a></li>
                                 <li><a class="next page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-right"></i></span></a></li>
                              </ul>
                            </div>
					
						   <!-- <div class="sportsmagazine-prenxt-post">
                                <ul>
                                    <li>
                                        <div class="sportsmagazine-prev-post">
                                            <figure><a href="404.html"><img src="extra-images/post-img1.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-prev-artical">
                                                <h3><a href="404.html">The team is starting a new power breakfast regimen</a></h3>
                                                <a href="404.html" class="sportsmagazine-post-arrow"><i class="fa fa-angle-double-left"></i> Previous Post</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-next-post">
                                            <figure><a href="404.html"><img src="extra-images/post-img2.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-next-artical">
                                                <h3><a href="404.html">The team is starting a new power breakfast regimen</a></h3>
                                                <a href="404.html" class="sportsmagazine-post-arrow">Next Post <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                      
                        </div>
                        
</div>
                        <aside class="col-md-3">

                        <!--// Widget TeamRanking \\-->
                        <div class="widget widget_team_ranking">
                            <div class="sportsmagazine-fancy-title">
                                <h2>Advertisement Corner</h2>
                            </div>
                            <div class=" widget_add">
                                <img src="{{url('assets/extra-images/add.jpg')}}" alt="">
                            </div>
                        </div>
                        <!--// Widget TeamRanking \\-->
                        <div class="widget widget_popular_news">
                                <div class="sportsmagazine-fancy-title"><h2>Popular News</h2></div>
                                <ul>
                                    <li>
                                        <span>01</span>
                                        <div class="popular_news_text">
                                            <small>The Team</small>
                                            <a href="blog-detail.html">Basketball Stadium will a max capacity for 5000 fans</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li class="widget-injuries">
                                        <span>02</span>
                                        <div class="popular_news_text">
                                            <small>Injuries</small>
                                            <a href="blog-detail.html">The Clovers defense must reinvent itself without</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li class="widget-theleague">
                                        <span>03</span>
                                        <div class="popular_news_text">
                                            <small>The League</small>
                                            <a href="blog-detail.html">Take look to the brand new helmets for next season</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li>
                                        <span>04</span>
                                        <div class="popular_news_text">
                                            <small>The Team</small>
                                            <a href="blog-detail.html">The Basketball women division started training</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li>
                                        <span>05</span>
                                        <div class="popular_news_text">
                                            <small>The Team</small>
                                            <a href="blog-detail.html">Basketball Stadium will  a max capacity for 5000 fans</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--// Widget Popular News \\-->

                
                
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
                                    <div classsportsmagazine-fancy-title="ranking-logo"><span>Red Wings</span> <small>Marine College</small> </div>
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


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->
        @include('footer')