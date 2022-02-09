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
                            <li><a href="{{url('/')}}">Home </a></li>
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

                  

                        <div class="widget widget_trending_news">
                                <div class="sportsmagazine-fancy-title"><h2>Top Trending News</h2></div>
                                <!-- Nav tabs -->
                                {{-- <ul class="nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Newset</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Most Commented</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Populer</a></li>
                                </ul> --}}
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
                    <p>{!!$sports_data1->description!!}</p>
                     <blockquote>Sed gravida, urna quis tempus sollicitudin, tellus urna suscipit nisl, id rhoncus ligula elit condi Suspendisse lacinia, risus et porta dignissim, elit tellus iaculis tellus, eget efficitur elit magna ellus tempor consectetur magna.
                     <span></span>
                 </blockquote>
                 </div>
            </div>
          <div class="sportsmagazine-fancy-title"><h2>{{$name}}</h2></div>
                     
          <ul class="">
                             
            @foreach($sports_data2 as $data)
            <li class="" ><h4 style="display: none;"><a href="#">{{$data->sport_name}}</a></h4>

                <ul class="">
                   
                    <li class="">
                        @foreach($data->league as $leag)
                        <div class="popular_news_text">


                            <h4><a href="{{url('/league/'.$leag->league_id.'/'.str_replace(' ', '-', $data->sport_name).'/'.str_replace(' ', '-', $leag->league_name))}}">{{$leag->league_name}}</a></h4>
                            <ul class="">
                                @foreach($leag->event as $events)
                                <li  style="overflow:hidden;padding:10px;"><a  style="color: white;" >{{$events->event_name}}</a>

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