@include('header')

		<div class="sportsmagazine-main-content sportsmagazine-main-contentminus">
            
            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section sportsmagazine-thumb sportsmagazine-fixture-thumb">
                <span class="thumb-transparent"></span>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sportmagazine-score-counter">
                                <h4>
                                <span>{{$name}}</span></h4>

                                  
                           <ul class="sportsmagazine-breadcrumb" style="margin-top:20px;">
                            <li><a href="{{url('/')}}">Home </a></li>
                           <li><a href="{{url('/sport/'.$League->sport_id.'/'.$type)}}"> {{$type}}</a></li>
						   <li><a >{{$name}} </a></li>
						   

                        </ul>
                                </div>
								
                            </div>
                        </div>
                        
                            
                    </div>
                </div>
            </div>
            <div class="sportsmagazine-main-content sportsmagazine-main-contentminus">

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

                        <div class="widget widget_trending_news">
                                <div class="sportsmagazine-fancy-title"><h2>Top Trending News</h2></div>
                                <!-- Nav tabs -->
                               
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="widget_popular_news">
                                            <ul>
                                                @foreach($articles_latest_data as $data)
                                               
                                    <li>
                                     
                                        <div class="popular_news_text">
                                          
                                            <h5><a href="{{url('details/'.str_replace(' ', '-', $data->Artic->article_type_name).'/'.$data->article_id)}}">{{$data->heading2}}</a><h5>
                                                            <p class="data-info">{{date('d F Y | H:i:s', strtotime($data->created));}} </p>

                                        </div>
                                    </li>
                                
                                    @endforeach
                                            
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                                  
                
                </aside> 
               
					 <div class="col-md-6">
					 
						 <div class="widget widget_trending_news">
                            <div class="sportsmagazine-fancy-title"><h2>{{$name}}</h2></div>
                    
                                        <div class="widget_popular_news">
                                             <div class="sportsmagazine-rich-editor">
                                <p> {!!$League->description!!}    </p>
                                <blockquote>Sed gravida, urna quis tempus sollicitudin, tellus urna suscipit nisl, id rhoncus ligula elit condi Suspendisse lacinia, risus et porta dignissim, elit tellus iaculis tellus, eget efficitur elit magna ellus tempor consectetur magna.
                                <span></span>
                                </blockquote>
                                <p>Sed gravida, urna quis tempus sollicitudin, tellus urna suscipit nisl, id rhoncus ligula elit condimentum  ti odio. Suspendisse lacinia risus et porta dignissim, elit tellus iaculis tellus, eget efficitur elit magna eu orci. Phasellus tempor consesactetur magna, at efficit est malesuada ac. Phasellus non ipsum diam. Suspendisse potenti.</p>
                                
                         
                                    </div>
                              </div>

                        <div class="sportsmagazine-fancy-title"><h2>{{$type}}</h2></div>
                        <div class="sportsmagazine-player sportsmagazine-player-list">
                            <ul class="">
                             
                                @foreach($sports_data1 as $data)
                                <li class=""><h4 style="display: none;"><a href="#">{{$data->sport_name}}</a></h4>
        
                                    <ul class="">
                                       
                                        <li class="">
                                            @foreach($data->league as $leag)
                                        
                                            @if($leag->league_name==$name)
                                            <div class="popular_news_text">
        
        
                                                <h4 ><a style="display: none;" href="{{url('/league/'.$leag->league_id.'/'.str_replace(' ', '-', $data->sport_name).'/'.str_replace(' ', '-', $leag->league_name))}}">{{$leag->league_name}}</a></h4>
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
                            </div></br>
                            <div class=" widget_add">
                                <img src="{{url('assets/extra-images/add.jpg')}}" alt="">
                            </div>
                        </div>

                
                
                      
                 </aside>    


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->
        @include('footer')