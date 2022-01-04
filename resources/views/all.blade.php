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
                            {{-- <h1> {{$name}}</h1> --}}
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
    

                            <div class="sportsmagazine-blog sportsmagazine-bloglarge">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <figure><a href="{{url('details/'.$data->article_id)}}"><img src="https://admin.matchtimings.com/assets/article/{{$data->image}}" alt=""></a></figure>
                                        <div class="sportsmagazine-bloglarge-text">
                                            {{-- <time >Tags</time> --}}
                                            <time datetime="2008-02-14 20:00">{{date('d F Y | H:i:s', strtotime($data->created));}}</time>
                                            <h5><a href="{{url('details/'.$data->article_id)}}">{{$data->heading1}}</a></h5>
                                            <p>{{$data->heading2}}</p>
                                            <a href="{{url('details/'.$data->article_id)}}" class="sportsmagazine-readmore-btn">READ MORE <i class="fa fa-arrow-circle-o-right"></i></a>
                                            <ul class="sportsmagazine-article-options">
                                                {{-- <li><a href="#404.html"><i class="fa fa-thumbs-o-up"></i> 320</a></li>
                                                <li><a href="#404.html"><i class="fa fa-eye"></i> 840</a></li> --}}
                                                <li >
                                                    @if(count($data->profile)>0)
                                                    @foreach($data->profile as $new) 
                                                    <button class="b2">{{$new->tag_type_name}}</button>
                                                   

                                                    @endforeach
                                                    @endif
                                                </li>
                                                <li><a href="#404.html"><i class="fa fa-user"></i> {{$data->published_by}}</a></li>

                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </div>
                            @endforeach

                            <!--// Pagination \\-->
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
                            <!--// Pagination \\-->
                        </div>
                        
                        <!--// SideBar \\-->
                        <aside class="col-md-3">
                            
                            <!--// Widget Popular Post \\-->
                            <div class="sportsmagazine-widget-heading"><h2>Popular Posts</h2></div>
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
                            </div>
                            <!--// Widget Popular Post \\-->

                            <!--// Widget Cetagories \\-->
                            <div class="sportsmagazine-widget-heading"><h2>Cetagories</h2></div>
                            <div class="widget widget_cetagories">
                                <ul>
                                    <li><a href="404.html">Championship <span>( 13 )</span></a></li>
                                    <li><a href="404.html">Super Ball <span>( 12 )</span></a></li>
                                    <li><a href="404.html">Football <span>( 04 )</span></a></li>
                                    <li><a href="404.html">Boxing <span>( 08 )</span></a></li>
                                    <li><a href="404.html">BasketBall <span>( 13 )</span></a></li>
                                </ul>
                            </div>
                            <!--// Widget Cetagories \\-->

                            <!--// Widget Upcoming Matches \\-->
                            <div class="sportsmagazine-widget-heading"><h2>Upcoming Matches</h2></div>
                            <div class="widget widget_matches">
                                <ul>
                                    <li>
                                        <div class="sportsmagazine-team-one">
                                            <h6><a href="fixture-detail.html">Ocean Kings</a></h6>
                                            <span>St. Patrick’s</span>
                                        </div>
                                        <span>VS</span>
                                        <div class="sportsmagazine-team-two">
                                            <h6><a href="fixture-detail.html">Bloody Wave</a></h6>
                                            <span>Marine College</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-team-one">
                                            <h6><a href="fixture-detail.html">LA Pirates</a></h6>
                                            <span>Bebop Institute</span>
                                        </div>
                                        <span>VS</span>
                                        <div class="sportsmagazine-team-two">
                                            <h6><a href="fixture-detail.html">Ocean Kings</a></h6>
                                            <span>Marine College</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-team-one">
                                            <h6><a href="fixture-detail.html">Red Wings</a></h6>
                                            <span>Marine College</span>
                                        </div>
                                        <span>VS</span>
                                        <div class="sportsmagazine-team-two">
                                            <h6><a href="fixture-detail.html">Lucky Clovers</a></h6>
                                            <span>Elric Bros School</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-team-one">
                                            <h6><a href="fixture-detail.html">Draconians</a></h6>
                                            <span>Atlantic School</span>
                                        </div>
                                        <span>VS</span>
                                        <div class="sportsmagazine-team-two">
                                            <h6><a href="fixture-detail.html">Bloody Wave</a></h6>
                                            <span>Marine College</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--// Widget Upcoming Matches \\-->

                            <!--// Widget Flicker Images \\-->
                            <div class="sportsmagazine-widget-heading"><h2>Flicker Images</h2></div>
                            <div class="widget widget_gallery">
                                <ul>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-1.jpg" class="fancybox"><img src="extra-images/flicker-image-1.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-2.jpg" class="fancybox"><img src="extra-images/flicker-image-2.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-3.jpg" class="fancybox"><img src="extra-images/flicker-image-3.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-4.jpg" class="fancybox"><img src="extra-images/flicker-image-4.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-5.jpg" class="fancybox"><img src="extra-images/flicker-image-5.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-6.jpg" class="fancybox"><img src="extra-images/flicker-image-6.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-7.jpg" class="fancybox"><img src="extra-images/flicker-image-7.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-8.jpg" class="fancybox"><img src="extra-images/flicker-image-8.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-9.jpg" class="fancybox"><img src="extra-images/flicker-image-9.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                            <!--// Widget Flicker Images \\-->

                        </aside>
                        <!--// SideBar \\-->


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

        @include('footer')