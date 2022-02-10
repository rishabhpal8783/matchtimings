@include('header')

		<!--// SubHeader \\-->
        <div class="sportsmagazine-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1> {{$name}}</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                             <li> {{$name}}</li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section sportsmagazine-bloglarge-full">
				<div class="container">
					<div class="row">
						
						<div class="col-md-9">
                        @foreach($articles_datap as $data)
    
                        <div class="col-md-4" >
                            <div class="sportsmagazine-blog sportsmagazine-bloglarge">
                                <ul class="row">
                                    <li style="margin:10px" >
                                        <figure><a href="{{url('details/'.$name.'/'.$data->article_id)}}"><img src="https://admin.matchtimings.com/assets/article/{{$data->image}}" alt=""></a></figure>
                                        <div class="sportsmagazine-bloglarge-text">
                                            {{-- <time >Tags</time> --}}
                                            <time datetime="2008-02-14 20:00">{{date('d F Y | H:i:s', strtotime($data->created));}}</time>
                                            <h5><a href="{{url('details/'.$name.'/'.$data->article_id)}}">{{$data->heading1}}</a></h5>
                                            <p>{{$data->heading2}}</p>
                                            <a href="{{url('details/'.$name.'/'.$data->article_id)}}" class="sportsmagazine-readmore-btn">READ MORE <i class="fa fa-arrow-circle-o-right"></i></a>
                                            <ul class="sportsmagazine-article-options">
                                                {{-- <li><a href="#404.html"><i class="fa fa-thumbs-o-up"></i> 320</a></li>
                                                <li><a href="#404.html"><i class="fa fa-eye"></i> 840</a></li> --}}
                                                <li >
                                                    @if(count($data->profile)>0)
                                                    @foreach($data->profile as $new) 
                                                    {{-- <button class="b2">{{$new->tag_type_name}}</button> --}}
                                      
                                                    <a href="{{url('/tags/'.$new->tag_type_id.'/'.str_replace(' ', '-', $new->tag_type_name))}}" class="tag article tdh">{{$new->tag_type_name}}</a>
                                                </li>
                                                    @endforeach
                                                    @endif
                                                </li>
                                                <li><a href="#"><i class="fa fa-user"></i> {{$data->published_by}}</a></li>

                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </div>
                        </div>
                            @endforeach

                            <!--// Pagination \\-->
      
                            <!--// Pagination \\-->
                        </div>
                        
                        <!--// SideBar \\-->
                        <aside class="col-md-3">
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
                            <!--// Widget Popular Post \\-->
                            {{-- <div class="sportsmagazine-widget-heading"><h2>Popular Posts</h2></div>
                            <div class="widget widget_popular_post">
                                <ul>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                            <figure><a href="blog-detail.html"><img src="extra-images/widget-popular-post1.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                            <figure><a href="blog-detail.html"><img src="extra-images/widget-popular-post2.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                            <figure><a href="blog-detail.html"><img src="extra-images/widget-popular-post3.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                            <figure><a href="blog-detail.html"><img src="extra-images/widget-popular-post4.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
                            <!--// Widget Popular Post \\-->

                         
                        </aside>
                        <!--// SideBar \\-->


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

        @include('footer')