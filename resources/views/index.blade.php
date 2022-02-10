@include('header')
<div class="sportsmagazine-main-content">
        <div class="container" >
            <div class="row">

                <aside class="col-md-3">

                        <div class="widget widget_popular_news">
                                <div class="sportsmagazine-fancy-title"><h2>Recent Series</h2></div>
                                <ul>
                                    @foreach ($sports_data1 as $item)
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
                            @foreach($article_type as $type_data)
                                                @if($type_data->article_type_name =='Featured News')
                                <div class="sportsmagazine-fancy-title"> <h4 style="    color: aliceblue;">{{$type_data->article_type_name}}</h4></div>
                              
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="widget_popular_news">
                                            <ul>
                                                @foreach($articles_data as $data)
                                                @if($type_data->article_type_id==$data->article_type_id)
                                                <li class="widget-theleague">
                                                    <div class="popular_news_text">
                                                   
                                                        <h5><a href="{{url('details/'.str_replace(' ', '-', $type_data->article_type_name).'/'.$data->article_id)}}">{{$data->heading2}}</a><h5>
                                                            <p class="data-info">{{date('d F Y | H:i:s', strtotime($data->created));}} </p>

                                                            {{-- <span class="sportsmagazine-color">{{$data->published_by}} </span>                                                       --}}
                                                    </div>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                </aside> 
                 <div class="col-md-6">
                
                    @foreach($article_type as $type_data)
                    @if($type_data->article_type_name =='Featured News')
                 
                            <div class="sportsmagazine-fancy-title"><h2>{{$type_data->article_type_name}}</h2></div> <!--// Fancy Title \\-->
                            <!--// Featured Slider \\-->
                            <div class="sportsmagazine-featured-slider">
                               
                                   
                                @foreach($articles_data as $data)
                                @if($type_data->article_type_id==$data->article_type_id)
                                <div class="sportsmagazine-featured-slider-layer">
                                    <img src="https://admin.matchtimings.com/assets/article/{{$data->image}}" alt="{{$data->image}}">
                                    <span class="sportsmagazine-black-transparent"></span>
                                    <div class="sportsmagazine-featured-caption">
                                        <h5><a href="{{url('details/'.str_replace(' ', '-', $type_data->article_type_name).'/'.$data->article_id)}}">{{$data->heading2}}</a><h5>
                                        <span class="sportsmagazine-color">{{$data->published_by}} </span>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                            </div>
                            @endif
                            @endforeach
                           
                            <!--// Featured Slider \\-->

                            <div class="widget widget_trending_news">
                                <div class="sportsmagazine-fancy-title">
                                      {{-- <h2 class="inline">{{$userdata}}</h2>   --}}
                                    @foreach ($userdata1 as $userdata)
                                  <h2 class="inline">{{$userdata->season_name}}</h2>
                                <a href="{{url('/schedule/'.str_replace(' ', '-', $userdata->sport_name).'/'.str_replace(' ', '-',$userdata->event_name).'/'.str_replace(' ', '-',$userdata->season_name.'/Latest-Schedule-match-list-venue-dates-team-list'))}}"  class="schedule-btn inline">Full Schedules</a>
                                </div>
                                @endforeach
                                <div class="main_shdl">     
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
                                                                    <h6 style="font-size: 16px;"><a href="{{url('/match-details/'.str_replace(' ', '-', $data->teama->team_name))}}">{{$data->teama->team_name}}</a></h6>
                                                                    {{-- <span>Bepop Institute</span> --}}
                                                                 
                                                                    <span class="view_all"><a href="{{url('/match/'.$data->teama->team_id.'/'.str_replace(' ', '-', $data->teama->team_name))}}">View Matchs</a> <i class="fa fa-chevron-right"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="sportsmagazine-match-view">
                                                                <span>VS</span>
                                                            </div>
                                                            <div class="sportsmagazine-second-team">
                                                                <figure><img src="{{$data->teamb->team_logo}}" alt=""></figure>
                                                                <div class="sportsmagazine-second-team-info">
                                                                    <h6 style="font-size: 16px;"><a href="{{url('/match-details/'.str_replace(' ', '-', $data->teamb->team_name))}}">{{$data->teamb->team_name}}</a></h6>
                                                                    {{-- <span>Marine College</span> --}}
                                                                    <span class="view_all"><a href="{{url('/match/'.$data->teamb->team_id.'/'.str_replace(' ', '-', $data->teamb->team_name))}}">View Matchs</a> <i class="fa fa-chevron-right"></i></span>
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
                                            @foreach ($userdata1 as $userdata)      
                                <a href="{{url('/schedule/'.str_replace(' ', '-', $userdata->sport_name).'/'.str_replace(' ', '-',$userdata->event_name).'/'.str_replace(' ', '-',$userdata->season_name.'/Latest-Schedule-match-list-venue-dates-team-list'))}}"  class="schedule-btn inline">Full Schedules</a> 
                                @endforeach
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

                        <div class="widget widget_team_ranking">
                            
                            <div class=" widget_add">
                                <img src="{{url('assets/extra-images/add.jpg')}}" alt="">
                            </div>
                        </div>
                        <!--// Widget TeamRanking \\-->
                        <div class="widget widget_popular_news">

                            @foreach($article_type as $type_data)
                    @if($type_data->article_type_name =='Featured News')
                                <div class="sportsmagazine-fancy-title"><h2>Popular News</h2></div>
                                <ul>
                                    @foreach($articles_data as $data)
                                    @if($type_data->article_type_id==$data->article_type_id)
                                    <li>
                                     
                                        <div class="popular_news_text">
                                          
                                            <h5><a href="{{url('details/'.str_replace(' ', '-', $type_data->article_type_name).'/'.$data->article_id)}}">{{$data->heading2}}</a><h5>
                                                            <p class="data-info">{{date('d F Y | H:i:s', strtotime($data->created));}} </p>

                                        </div>
                                    </li>
                                    @endif
                                    @endforeach
    
                                  
                                </ul>
                                @endif
                                @endforeach

                            </div>
                            <!--// Widget Popular News \\-->
                 </aside>    
                           

            
                        
                           
            
            
            
            
            </div>
            <div class="col-md-12">
            <div class="widget widget_trending_news">
                        <div class="sportsmagazine-classic-heading">
                            <h2>Coming Up</h2>
                        </div>
                        <ul class="nav-tabs" role="tablist">
                            @foreach($sports_data1 as $data)
                            <li role="presentation" class="{{ $data->season_id == 1 ? 'active' : '' }}">
                                <a href="#home{{ $data->season_id }}" aria-controls="home" role="tab" data-toggle="tab">{{$data->season_name }}</a>
                              </li>
                            {{-- <li role="presentation" class="schedules_tab "><a href="#{{$data->season_name}}" aria-controls="home" role="tab" data-toggle="tab">{{$data->season_name}}</a></li> --}}
                            @endforeach
                           
                        </ul>
                        <!-- Tab panes -->

                        <div class="tab-content">
                            @foreach ($sports_data1 as $itam)
                                 <div role="tabpanel" class="tab-pane {{ $itam->season_id == 1 ? 'active' : '' }}" id="home{{ $itam->season_id }}" class="active">

                                    <table class="sportsmagazine-client-detail">
                                        <tbody>
                                    @foreach( $schedule_data1 as $data)
                                  
                                    @if ($data->season_id==$itam->season_id)    
                                   <?php
                                    $i =  0 ;
                                    if($i <5){ ?>




                                            <tr>
                                                <td><time datetime="{{$data->created}}" class="dt"><a href="#">{{date('d F Y | H:i', strtotime($data->created));}}</a></time></td>
                                                <td>
                                                    <figure><img src="{{$data->teama->team_logo}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="{{url('/match-details/'.str_replace(' ', '-', $data->teama->team_name))}}">{{$data->teama->team_name}}</a></h6>
                                                    </div>
                                                </td>
                                                <td><span>VS</span></td>
                                                <td>
                                                    <figure><img src="{{$data->teamb->team_logo}}" alt=""></figure>
                                                    <div class="player-stats-text">
                                                        <h6><a href="{{url('/match-details/'.str_replace(' ', '-', $data->teamb->team_name))}}">{{$data->teamb->team_name}}</a></h6>
                                                    </div>
                                                </td>
                                            </tr>
                                          <?php  $i++;
                                        }
                                            ?>
                                   
                                            
                                    @endif
                                  
                                @endforeach

                            </tbody>
                        </table>
                                   <a href="{{url('/schedule/'.$itam->season_id.'/'.str_replace(' ', '-', $itam->season_name.'/Latest-Schedule-match-list-venue-dates-team-list'))}}"  class="schedule-btn inline">Full Schedules</a> 

                                
                                 </div>
                            @endforeach
                           </div>


                    </div>
                    @foreach($article_type as $type_data)
                    @if($type_data->article_type_name!='Recent News')
                    <div class="sportsmagazine-fancy-title">
                        <h2 class="inline">{{$type_data->article_type_name}}</h2>
                        <a href="{{url('all/' .str_replace(' ', '-', $type_data->article_type_name))}}" class="schedule-btn inline">See All</a>
                    </div>
                  
                    <div class="multiple-items">
                        <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                            <ul class="row">
                        
                              @foreach($articles_data as $data)
                              @if($type_data->article_type_id==$data->article_type_id)
                            
                                <li class="col-md-3 sportsmagazine-the-team">
                                    <figure>
                                        <a href="{{url('details/'.str_replace(' ', '-', $type_data->article_type_name).'/'.$data->article_id)}}"><img src="https://admin.matchtimings.com/assets/article/{{$data->image}}" alt="{{$data->image}}"></a>
                                        <figcaption>
                                            {{-- <span><small>The Team</small></span> --}}
                                            {{-- <a href="blog-detail.html" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a> --}}
                                        </figcaption>
                                    </figure>
                                    <section>
                                        <h2><a href="{{url('details/'.str_replace(' ', '-', $type_data->article_type_name).'/'.$data->article_id)}}">{{$data->heading1}}</a></h2>
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
                                            <h5><a href="{{url('details/'.str_replace(' ', '-', $type_data->article_type_name).'/'.$data->article_id)}}">{{$data->heading1}}</a></h5>
                                            <span class="data-info">{{date('d F Y | H:i:s', strtotime($data->created));}} </span>
                                            <p>{{substr($data->summary_outline_description,0,157)}}...<a href="{{url('details/'.str_replace(' ', '-', $type_data->article_type_name).'/'.$data->article_id)}}">Read More [+]</a></p>
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


<!--// Main Content \\-->
@include('footer')