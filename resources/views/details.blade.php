@php

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
@endphp
@include('header')		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content sportsmagazine-main-contentminus">
            
            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section sportsmagazine-thumb">
                <span class="thumb-transparent"></span>
                <div class="sportsmagazine-thumb-text">

                    <div class="container">
                        <div class="row">

                            <div class="col-md-12">
                                <h2>{{$articles_data->heading1}}</h2>
                                <ul class="sportsmagazine-thumb-option">
                                    <li><i class="fa fa-calendar-o"></i> {{date('d F Y | H:i:s', strtotime($articles_data->created));}} </li>
                                   
                                    <li><i class="fa fa-user"></i> {{$articles_data->published_by}}</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">

                        <div class="col-md-9">
                            <div class="main_img_blg">
                                <img src="https://www.cricbuzz.com/a/img/v1/420x235/i1/c213136/virat-kohli-to-step-down-as-t2.jpg" width="100%">
                            </div>
                            <div class="sportsmagazine-rich-editor">
                                <blockquote>{{$articles_data->summary_outline_description}}
                                    <span></span>
                                    </blockquote>
                                    <p>{{$articles_data->image_desc}}</p>
                               
                                    <p>{{$articles_data->detail_description}}</p>
                               
                               
                               
                                <div class="sportsmagazine-post-tags">
                                  {{-- <div class="sportsmagazine-tags">
                                     <a href="404.html">#Playoffs</a>
                                     <a href="404.html">#Injuries</a>
                                     <a href="404.html">#Teams</a>
                                     <a href="404.html">#Uniform</a>
                                  </div> --}}
                                  <div class="sportsmagazine-blog-social">
                                     <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=@php echo $actual_link; @endphp" class="color-one"><i class="fa fa-facebook"></i>facebook</a></li>
                                        <li><a href="https://twitter.com/intent/tweet?url=@php echo $actual_link; @endphp" class="color-two"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        {{-- <li><a href="https://plus.google.com/" class="color-three"><i class="fa fa-google-plus"></i>Google+</a></li> --}}
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            {{-- <div class="sportsmagazine-prenxt-post">
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
                            </div> --}}
                            <div class="sportsmagazine-section-heading"><h2>Related Articles</h2></div>
                            <div class="sportsmagazine-related-article sportsmagazine-blog-artical">
                                <ul class="row">
                                    @foreach($articles_latest_data as $data)
                                    <li class="col-md-4">
                                        <figure><a href="{{url('details/'.$data->article_id)}}"><img src="https://www.cricbuzz.com/a/img/v1/420x235/i1/c213136/virat-kohli-to-step-down-as-t2.jpg" alt=""></a></figure>
                                        <div class="sportsmagazine-article-text">
                                             <time datetime="2008-02-14 20:00">{{date('d F Y | H:i:s', strtotime($data->created));}}</time>
                                             <h5><a href="{{url('details/'.$data->article_id)}}">{{$data->heading1}}</a></h5>
                                        </div>
                                        <ul class="sportsmagazine-article-options">
                                            <li></i>published By - {{$data->published_by}}</li>
                                          
                                        </ul>
                                    </li>
                                    @endforeach
                                   
                                </ul>
                            </div>
                            <div class="comments-area">
                              <!--// coments \\-->
                              <div class="sportsmagazine-section-heading"><h2>Comments</h2></div>
                              <ul class="comment-list">
                                 <li>
                                    <div class="thumb-list">
                                       <figure><img alt="" src="extra-images/comment-img1.jpg"></figure>
                                       <div class="text-holder">
                                          <h6>Albert Darren</h6>
                                          <time class="post-date" datetime="2008-02-14 20:00">1 Hour Ago </time>
                                          <a class="comment-reply-link" href="#">Reply</a>
                                       </div>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                                    </div>
                                    <div class="thumb-list">
                                       <figure><img alt="" src="extra-images/comment-img2.jpg"></figure>
                                       <div class="text-holder">
                                          <h6>Albert Darren</h6>
                                          <time class="post-date" datetime="2008-02-14 20:00">1 Hour Ago </time>
                                          <a class="comment-reply-link" href="#">Reply</a>
                                       </div>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                                    </div>
                                    <ul class="children">
                                       <li>
                                          <div class="thumb-list">
                                             <figure><img alt="" src="extra-images/comment-img3.jpg"></figure>
                                             <div class="text-holder">
                                                <h6>Jeans Morris</h6>
                                                <time class="post-date" datetime="2008-02-14 20:00">1 Hour Ago </time>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consetur ed vit dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                                          </div>
                                       </li>
                                       <!-- #comment-## -->
                                    </ul>
                                    <!-- .children -->
                                 </li>
                                 <!-- #comment-## -->
                                 <li>
                                    <div class="thumb-list">
                                       <figure><img alt="" src="extra-images/comment-img4.jpg"></figure>
                                       <div class="text-holder">
                                          <h6>Ricky David</h6>
                                          <time class="post-date" datetime="2008-02-14 20:00">1 Hour Ago </time>
                                          <a class="comment-reply-link" href="#">Reply</a>
                                       </div>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                                    </div>
                                 </li>
                                 <!-- #comment-## -->
                              </ul>
                              <!--// coments \\-->
                              <!--// comment-respond \\-->
                              <div class="comment-respond sportsmagazine-contact-form">
                               <div class="sportsmagazine-section-heading"><h2>Write A Comment</h2></div>
                               <form>
                                    <ul>
                                        <li>
                                            <label>Name:</label>
                                            <p>
                                                <input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" type="text">
                                                <span><i class="fa fa-user"></i></span>
                                            </p>
                                        </li>
                                        <li>
                                            <label>Email:</label>
                                            <p>
                                                <input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" type="text">
                                                <span><i class="fa fa-envelope"></i></span>
                                            </p>
                                        </li>
                                        <li class="full-input">
                                            <label>Comment:</label>
                                            <p>
                                                <textarea name="u_msg" placeholder="Type here"></textarea>
                                                <span><i class="fa fa-comment"></i></span>
                                            </p>

                                        </li>
                                        <li>
                                            <p><label><input value="Submit" type="submit"></label></p>
                                        </li>
                                    </ul>
                                </form>
                              </div>
                              <!--// comment-respond \\-->
                           </div>

                        </div>
                        
                        <!--// SideBar \\-->
                        <aside class="col-md-3">
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

                            

                            <!--// Widget Flicker Images \\-->
                            {{-- <div class="sportsmagazine-widget-heading"><h2>Flicker Images</h2></div>
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
                            </div> --}}
                            <!--// Widget Flicker Images \\-->

                        </aside>
                        <!--// SideBar \\-->


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

		<!--// Footer \\-->
       @include('footer')