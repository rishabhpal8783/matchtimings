@include('header')
        <!--// Header \\-->

		<!--// Main Content \\-->
	
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

                            <li><a>Home </a></li>
                            <li><a > {{$uname}}</a></li>
                             <li><a> {{$type}}</a></li>
                          
						   <li><a>{{$name}}</a></li>
						

                        </ul>
                                </div>
								
                            </div>
                        </div>
                        
                            
                    </div>
                </div>
            </div>
            <div class="sportsmagazine-main-content sportsmagazine-main-contentminus">
            
                <!--// Main Section \\-->
              
               
                <div class="collapse navbar-collapse" id="">
                    
                            <ul class="">
                             
                                @foreach($sports_data1 as $data)
                                <li class="" ><h4 style="display: none;"><a href="#">{{$data->sport_name}}</a></h4>
                                    <ul class="">
                                        <li class="">
                                            @foreach($data->league as $leag)
                                            <div class="">
                                                <h4 style="display: none;" ><a href="{{url('/league/'.$leag->league_id.'/'.str_replace(' ', '-', $data->sport_name).'/'.str_replace(' ', '-', $leag->league_name))}}">{{$leag->league_name}}</a></h4>
                                                <ul class="">
                                                    @foreach($leag->event as $events)
                                                    <li><a href="{{url('/event/'.$events->event_id.'/'.str_replace(' ', '-', $data->sport_name).'/'.str_replace(' ', '-', $leag->league_name).'/'.str_replace(' ', '-', $events->event_name))}}">{{$events->event_name}}</a>
                                                        <ul class="">
                                                            @foreach($events->sesions as $event)
                                                            <li><a href="{{url('/schedule/'.$event->season_id.'/'.str_replace(' ', '-', $event->season_name.'/Latest-Schedule-match-list-venue-dates-team-list'))}}">{{$event->season_name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    
                                                    </li>
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
            <!--// Main Section \\-->

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
				
					<div class="row">
						
						
                <aside class="col-md-3">

                    
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
                   

                        <div class="widget widget_trending_news">
                                <div class="sportsmagazine-fancy-title"><h2>Top Trending News</h2></div>
                                <!-- Nav tabs -->
                              
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
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
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                                  
                
                </aside> 
                     
					 <div class="col-md-6">
					 
						 <div class="widget widget_trending_news">
                        <div class="sportsmagazine-classic-heading">
                            <h2>About The Team </h2>
                        </div>
                        <ul class="nav-tabs" role="tablist">
                                    <li role="presentation" ><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Team Details</a></li>
                                    <li role="presentation" ><a href="#squad" aria-controls="squad" role="tab" data-toggle="tab">Squad</a></li>
                                    <li role="presentation" class="active"><a href="#match" aria-controls="match" role="tab" data-toggle="tab">Recent Matches</a></li>
                                </ul>
                   <div class="tab-content" style="padding-top:20px;">
                                    <div role="tabpanel" class="tab-pane " id="details">
                                        <div class="widget_popular_news">
                                             <div class="sportsmagazine-rich-editor">
                               
                                <div class="sportsmagazine-post-tags">
                                  <div class="sportsmagazine-tags">
                                    <p>{!!$Events->description!!}</p>
                                  </div>
                                  <div class="sportsmagazine-blog-social">
                                    
                                   
                                  </div>
                               </div>
                            </div>
                       </div>
                                    </div>
                               <div role="tabpanel" class="tab-pane " id="squad">
                                <div class="sportsmagazine-player sportsmagazine-player-list">
                                <ul class="row">
                                
                                    @foreach ($Players as $item)
                                        
                                   
                                    <li class="col-md-6">
                                        <figure><a href="player-detail.html"><img src="extra-images/player-list-img1.jpg" alt=""><i class="fa fa-link"></i></a></figure>
                                        <div class="sportsmagazine-player-list-text">
                                           
                                            <h5><a href="{{url('/player/'.$item->player_id.'/'.str_replace(' ', '-', $item->player_name))}}">{{$item->player_name}}</a></h5>
                                            <p>{{$item->description}}</p>
                                            <ul class="sportsmagazine-player-social">
                                                <li><a href="https://www.facebook.com/" class="icon-facebook2"></a></li>
                                                <li><a href="https://plus.google.com/" class="icon-google-plus2"></a></li>
                                                <li><a href="https://pk.linkedin.com/" class=" icon-linkedin"></a></li>
                                                <li><a href="https://twitter.com/login" class="icon-social62"></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
							</div>
                                    <div role="tabpanel" class="tab-pane active" id="match">
                                        <div class="widget_popular_news">
                                     <table class="sportsmagazine-client-detail">
                                        <tbody>
                                                                      
                                        
                                   



                                            <tr>
                                                <td><time datetime="2020-10-04 03:49:42" class="dt"><a href="#">04 October 2020 | 03:49</a></time></td>
                                                <td>
                                                    <figure><img src="" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Mumbai-Indians">Mumbai Indians</a></h6>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="https://admin.matchtimings.com/assets/team_logo/d5c0d6814a32b4dd92b1f5a1064b15f8.jpg" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Chennai-Super-Kings">Chennai Super Kings</a></h6>
                                                    </div>
                                                </td>
                                            </tr>
                                                                             
                                            
                                                                      
                                                                  
                                        
                                   



                                            <tr>
                                                <td><time datetime="2020-10-04 04:20:17" class="dt"><a href="#">04 October 2020 | 04:20</a></time></td>
                                                <td>
                                                    <figure><img src="https://admin.matchtimings.com/assets/team_logo/d5c0d6814a32b4dd92b1f5a1064b15f8.jpg" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Chennai-Super-Kings">Chennai Super Kings</a></h6>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Mumbai-Indians">Mumbai Indians</a></h6>
                                                    </div>
                                                </td>
                                            </tr>
                                                                             
                                            
                                                                      
                                                                  
                                        
                                   



                                            <tr>
                                                <td><time datetime="2020-10-04 04:20:46" class="dt"><a href="#">04 October 2020 | 04:20</a></time></td>
                                                <td>
                                                    <figure><img src="" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Kolkata-Knight-Riders">Kolkata Knight Riders</a></h6>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="https://www.admin.matchtimings.com/assets/team_logo/95e2b962fe54f296e8c4566b5dcd8a93.jpg" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Delhi-Capitals">Delhi Capitals</a></h6>
                                                    </div>
                                                </td>
                                            </tr>
                                                                             
                                            
                                                                      
                                                                  
                                        
                                   



                                            <tr>
                                                <td><time datetime="2020-10-04 04:21:25" class="dt"><a href="#">04 October 2020 | 04:21</a></time></td>
                                                <td>
                                                    <figure><img src="" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Kings-XI-Punjab">Kings XI Punjab</a></h6>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Sunrisers-Hyderabad">Sunrisers Hyderabad</a></h6>
                                                    </div>
                                                </td>
                                            </tr>
                                                                             
                                            
                                                                      
                                                                  
                                        
                                   



                                            <tr>
                                                <td><time datetime="2020-10-04 04:26:18" class="dt"><a href="#">04 October 2020 | 04:26</a></time></td>
                                                <td>
                                                    <figure><img src="https://www.admin.matchtimings.com/assets/team_logo/95e2b962fe54f296e8c4566b5dcd8a93.jpg" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Delhi-Capitals">Delhi Capitals</a></h6>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Mumbai-Indians">Mumbai Indians</a></h6>
                                                    </div>
                                                </td>
                                            </tr>
                                                                             
                                            
                                                                      
                                                                  
                                        
                                   



                                            <tr>
                                                <td><time datetime="2020-10-04 04:26:49" class="dt"><a href="#">04 October 2020 | 04:26</a></time></td>
                                                <td>
                                                    <figure><img src="" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Rajasthan-Royals">Rajasthan Royals</a></h6>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Sunrisers-Hyderabad">Sunrisers Hyderabad</a></h6>
                                                    </div>
                                                </td>
                                            </tr>
                                                                             
                                            
                                                                      
                                                                  
                                        
                                   



                                            <tr>
                                                <td><time datetime="2020-10-04 04:27:25" class="dt"><a href="#">04 October 2020 | 04:27</a></time></td>
                                                <td>
                                                    <figure><img src="https://admin.matchtimings.com/assets/team_logo/d5c0d6814a32b4dd92b1f5a1064b15f8.jpg" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Chennai-Super-Kings">Chennai Super Kings</a></h6>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="https://matchtimings.com/public/match-details/Kings-XI-Punjab">Kings XI Punjab</a></h6>
                                                    </div>
                                                </td>
                                            </tr>
                                                 
                                
                            </tbody>
                        </table>   </div>
                                    </div>
                                </div>
                    </div>
                          <div class="sportsmagazine-section-heading"><h2>Team Gallery</h2></div>
                            <div class="sportsmagazine-gallery sportsmagazine-fixture-gallery">
                                <ul>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/fixture-gallery-img1.jpg" class="fancybox"><img src="extra-images/fixture-gallery-img1.jpg" alt=""><i class="icon-signs23"></i></a>
                                            <span>12 Photos</span>
                                            <figcaption>
                                                <h6><a href="gallery.html">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">May 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/fixture-gallery-img2.jpg" class="fancybox"><img src="extra-images/fixture-gallery-img2.jpg" alt=""><i class="icon-signs23"></i></a>
                                            <span>11 Photos</span>
                                            <figcaption>
                                                <h6><a href="gallery.html">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">Feb 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/fixture-gallery-img3.jpg" class="fancybox"><img src="extra-images/fixture-gallery-img3.jpg" alt=""><i class="icon-signs23"></i></a>
                                            <span>7 Photos</span>
                                            <figcaption>
                                                <h6><a href="gallery.html">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">May 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/fixture-gallery-img4.jpg" class="fancybox"><img src="extra-images/fixture-gallery-img4.jpg" alt=""><i class="icon-signs23"></i></a>
                                            <span>4 Photos</span>
                                            <figcaption>
                                                <h6><a href="gallery.html">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">Feb 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/fixture-gallery-img5.jpg" class="fancybox"><img src="extra-images/fixture-gallery-img5.jpg" alt=""><i class="icon-signs23"></i></a>
                                            <span>13 Photos</span>
                                            <figcaption>
                                                <h6><a href="gallery.html">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">May 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a data-fancybox-group="group" href="extra-images/fixture-gallery-img6.jpg" class="fancybox"><img src="extra-images/fixture-gallery-img6.jpg" alt=""><i class="icon-signs23"></i></a>
                                            <span>6 Photos</span>
                                            <figcaption>
                                                <h6><a href="gallery.html">The Champion Final will be played</a></h6>
                                                <time datetime="2008-02-14 20:00">Feb 17th, 2017</time>
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                       


					   <div class="sportsmagazine-fancy-title"><h2>Recent News</h2></div>

						   <div class="sportsmagazine-prenxt-post">
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