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
			<div class="sportsmagazine-main-section" style="padding-top:40px;">
				<div class="container">
					<div class="row">

                        <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>{{$articles_data->heading2}}</h2>
                            </div> 
                            <div class="col-md-8">
                                        <div class="main_img_blg">
                                    <img src="https://admin.matchtimings.com/assets/article/{{$articles_data->image}}" width="100%">
                                    <p>{{$articles_data->image_desc}}</p>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="sportsmagazine-rich-editor">
                                        <blockquote>{{$articles_data->summary_outline_description}}
                                            <span></span>
                                            </blockquote>            
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                            <p>{{$articles_data->detail_description}}</p>
                            </div> 
                           
                            
                         
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
                                     @foreach ($Comment_data as $item)
                                         
                                    
                                    <div class="thumb-list">
                                       <figure><img alt="" src="extra-images/comment-img1.jpg"></figure>
                                       <div class="text-holder">
                                          <h6>{{ $item->name}}</h6>
                                          <time class="post-date" datetime="2008-02-14 20:00">{{ $item->created_at}} </time>
                                          <a class="comment-reply-link" href="#">Reply</a>
                                       </div>
                                       <p>{{ $item->message	}}</p>
                                    </div>
                                    @endforeach
                                  
                                    <!-- .children -->
                                 </li>
                                 <!-- #comment-## -->
                                
                                 <!-- #comment-## -->
                              </ul>
                              <!--// coments \\-->
                              <!--// comment-respond \\-->
                              <div class="comment-respond sportsmagazine-contact-form">
                               <div class="sportsmagazine-section-heading"><h2>Write A Comment</h2></div>
                               <form id="contact-formc" method="POST">
                                @csrf
                                    <ul>
                                        <li>
                                            <label>Name:</label>
                                            <p>
                                                <input id="name" name="name" placeholder="Name" required="" value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" type="text">
                                                <span><i class="fa fa-user"></i></span>
                                            </p>
                                        </li>
                                        <li>
                                            <label>Email:</label>
                                            <p>
                                                <input id="email" name="email" placeholder="E-Mail" required="" value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" type="text">
                                                <span><i class="fa fa-envelope"></i></span>
                                            </p>

                                        </li>
                                        <input  type="hidden" id="status" name="status" value={{$id}}>
                                        <li class="full-input">
                                            <label>Comment:</label>
                                            <p>
                                                <textarea name="message" id="message" placeholder="Type here"></textarea>
                                                <span><i class="fa fa-comment"></i></span>
                                            </p>

                                        </li>
                                              <span class="text-danger" style="color:red; position: relative;top: -10px;" id="capp"></span>  
                                            <div class="col-lg-12 mb-35">
                                              
                                                <input class="from-control" type="text" id="captchap"  >
                                            </div>
                                       <small class="captcha"
                                        style="
                                        text-align: center;
                                        display: inline-block;
                                        font-size: 15px;
                                        background: #ededed;
                                        padding: 8px;
                                        "
                                        >     
                                <?php $a=rand(00,99);
                                                        $b=rand(0,9);
                                                        $c=rand(0,9);
                                                        echo $a."+".$b."-".$c;
                                                    ?>                   
                        </small>
					    <div class="row">
							<div class="col-sm-12 col-md-12 col-12 col-lg-12 col-xl-12">
								<input type="hidden"  class="form-control captcha1" placeholder="Captcha" id="captchap1" value="<?php  echo $c=$a+$b-$c;?>">
							</div>
                        </div> 
                                        <li>
                                            <p><label><input class="submit" value="Submit" type="submit"></label></p>
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
       <script>
    
        $('#contact-formc').on("submit",function(e){ 
         e.preventDefault();
        $c= $('#captchap').val();
        $c1= $('#captchap1').val();
        if($c==$c1)
        {
         var formData=new FormData(this);
         $.ajax({
             url:"{{url('add_comment')}}",
             type:"POST",
             data:formData,
             dataType: 'json',
             contentType:false,
             processData:false,
             success: function(data) {
              if(data.success)
              {
                alert(data.success);
                location.reload();    
              }
             }
         });
        }
        else
        {
          $('#capp').html("Captcha Not Matched!");
        }
        
     });
     </script>
            