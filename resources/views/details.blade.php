@php

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
@endphp
@include('header')		<!--// Main Content \\-->
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
                             <li><a href="{{url('all/'.$name)}}"> {{$name}}</a></li> 
                             <li><a href="{{url('/')}}">{{$articles_data->heading1}}</a>
                        </ul>
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
                        <div class="row">
                                <div class="col-md-8">
                                        <div class="main_img_blg">
                                    <img src="https://admin.matchtimings.com/assets/article/{{$articles_data->image}}" width="100%">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sportsmagazine-rich-editor">
                                        <blockquote>{{$articles_data->summary_outline_description}}
                                            <span></span>
                                            </blockquote>
                                            <p>{{$articles_data->image_desc}}</p>
                                    
                                            <p>{{$articles_data->detail_description}}</p>
                                    
                                    </div>
                                </div>
                            </div>
                           
                            <div class="sportsmagazine-rich-editor">
                             
                               
                               
                               
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
                                        <figure><a href="{{url('details/'.str_replace(' ', '-', $data->Artic->article_type_name).'/'.$data->article_id)}}"><img src="https://admin.matchtimings.com/assets/article/{{$data->image}}" alt=""></a></figure>
                                        <div class="sportsmagazine-article-text">
                                             <time datetime="2008-02-14 20:00">{{date('d F Y | H:i:s', strtotime($data->created));}}</time>
                                             <h5><a href="{{url('details/'.str_replace(' ', '-', $data->Artic->article_type_name).'/'.$data->article_id)}}">{{$data->heading1}}</a></h5>
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
                            



                            <!--// Widget Upcoming Matches \\-->
                              <div class="widget widget_team_ranking">
                        <div class="sportsmagazine-fancy-title">
                            <h2>Advertisement Corner</h2>
                        </div>
                        <div class="widget widget_add">
                            <img src="{{url('assets/extra-images/add.jpg')}}" alt="">
                        </div></br>
                        <div class="widget widget_add">
                            <img src="{{url('assets/extra-images/add.jpg')}}" alt="">
                        </div>
                    </div>
                            <!--// Widget Popular Post \\-->

                            <!--// Widget Cetagories \\-->
                           
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