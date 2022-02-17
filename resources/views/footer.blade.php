<!--// Footer \\-->
<footer id="sportsmagazine-footer" class="sportsmagazine-footer-one">

    <!--// Footer Widget \\-->
    <div class="sportsmagazine-footer-widget">
        <div class="container">
            <div class="row">
                <!--// Widget Contact Info \\-->
                <aside class="col-md-4 widget widget_contact_info">
                    <a href="index-2.html" class="footer-logo"><img src="{{url('assets/images/mt_logo.png')}}" alt=""></a>
                    <p>In this Website, you will get the latest news related to sports such as cricket , IPL football and all types of sports.</p>
                    <ul class="sportsmagazine-social-network">
                        <li>
                            <a href="https://www.facebook.com/Matchtimings" class="sportsmagazine-colorhover fa fa-facebook-official"></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/matchtimings" class="sportsmagazine-colorhover fa fa-twitter-square"></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/matchtimings/" class="sportsmagazine-colorhover fa fa-instagram"></a>
                        </li>
                    </ul>
                    <ul class="sportsmagazine-info-list">
                       
                        <li><i class="fa fa-envelope"></i> <span><a href="mailto:name@email.com">info@example.com</a></span></li>
                    </ul>
                </aside>
                <!--// Widget Contact Info \\-->
                <!--// Widget Twitter \\-->
                <aside class="col-md-4 widget widget_twitter">
                    <div class="footer-widget-title">
                        <h2>Twitter Feeds</h2>
                    </div>
                    <ul>
                        <li>
                            <i class="fa fa-twitter"></i> <span>@basketball</span>
                            <p>Sed gravida, urna quis tempus sollicitudin, tellus urnasuscipit nisl, id rhoncus ligula elit condimentum <a href="404.html">https://t.co/XHrPAM4ANv</a></p>
                            <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 2 Hours Ago</time>
                        </li>
                        <li>
                            <i class="fa fa-twitter"></i> <span>@football</span>
                            <p>Sed gravida, urna quis tempus sollicitudin, tellus urnasuscipit nisl, id rhoncus ligula elit condimentum <a href="404.html">https://t.co/XHrPAM4ANv</a></p>
                            <time datetime="2008-02-14 20:00"><i class="fa fa-clock-o"></i> 4 Hours Ago</time>
                        </li>
                    </ul>
                </aside>
                <!--// Widget Twitter \\-->
                <!--// Widget Gallery \\-->
                <aside class="col-md-4 widget widget_gallery">
                    <div class="footer-widget-title">
                        <h2>Our Sports</h2>
                    </div>
                    <ul class="nav navbar-nav">
                                            <li class="active"><a href="{{url('/')}}">Home</a></li>
                                            @foreach($sports_data as $data)
                                            <li class="sportsmagazine-megamenu-li"><a href="{{url('/sport/'.$data->sport_id.'/'.str_replace(' ', '-', $data->sport_name))}}" >{{$data->sport_name}}</a>

                                            </li>
                                            @endforeach
                                          </ul>
                                            </li>
                                        </ul>
                </aside>
                <!--// Widget Gallery \\-->

            </div>
        </div>
        <a href="#" class="sportsmagazine-back-top"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--// Footer Widget \\-->

    <!--// CopyRight \\-->
    <div class="sportsmagazine-copyright">
        <div class="container">
            <div class="row">
                <aside class="col-md-6 sportsmagazine-copyright-left">
                    <p>© 2022, Matchtimings - All Rights Reserved Designed & Developed By <a href="https://progmattic.com" target="_blank">Progmattic AI</a></p>
                </aside>
                <aside class="col-md-6 sportsmagazine-copyright-right">
                    <ul class="sportsmagazine-copyright-link">
                        <li><a href="404.html" class="sportsmagazine-colorhover">Terms And Condition</a></li>
                        <li><a href="404.html" class="sportsmagazine-colorhover">Privacy Policy</a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
    <!--// CopyRight \\-->

</footer>
<!--// Footer \\-->

<div class="clearfix"></div>
</div>
<!--// Main Wrapper \\-->

<!-- SearchModal -->
<div class="searchmodal modal fade" id="searchModal" tabindex="-1" role="dialog">
    <a href="#" data-dismiss="modal" class="sportsmagazine-modal-close"><i class="icon-uniF106"></i></a>
    <div class="modal-dialog" role="document">
        <div class="container">
            <div class="row">
                <form class="sportsmagazine-search-box">
                    <input type="text" value="Search Your Keyword" onblur="if(this.value == '') { this.value ='Search Your Keyword'; }" onfocus="if(this.value =='Search Your Keyword') { this.value = ''; }">
                    <input type="submit" value="">
                    <i class="fa fa-search"></i>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- LoginModal -->
<div class="loginmodal modal fade" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="sportsmagazine-login-box">
            <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
            <h4>Login To Your Account</h4>
            <form>
                <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                <input type="password" value="Password*" onblur="if(this.value == '') { this.value ='Password*'; }" onfocus="if(this.value =='Password*') { this.value = ''; }">
                <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                <div class="clearfix"></div>
                <label><input type="submit" value="Sign In" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
            </form>
            <h4>Try Our Socials Also</h4>
            <ul class="login-network">
                <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
            </ul>
            <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Sign - Up Now !</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!-- SignupModal -->
<div class="loginmodal modal fade" id="signupModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="sportsmagazine-login-box">
            <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
            <h4>Sign Up Now</h4>
            <form>
                <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                <input type="text" value="Type your password*" onblur="if(this.value == '') { this.value ='Type your password*'; }" onfocus="if(this.value =='Type your password*') { this.value = ''; }">
                <input type="text" value="Confirm your password*" onblur="if(this.value == '') { this.value ='Confirm your password*'; }" onfocus="if(this.value =='Confirm your password*') { this.value = ''; }">
                <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                <div class="clearfix"></div>
                <label><input type="submit" value="Sign Up" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
            </form>
            <h4>Try Our Socials Also</h4>
            <ul class="login-network">
                <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
            </ul>
            <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Login - Now !</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<!-- jQuery (necessary for JavaScript plugins) -->
<script type="text/javascript" src="{{url('assets/script/jquery.js')}}"></script>
<script type="text/javascript" src="{{url('assets/script/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/script/slick.slider.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/script/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/script/fancybox.pack.js')}}"></script>
<script type="text/javascript" src="{{url('assets/script/isotope.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/script/progressbar.js')}}"></script>
<script type="text/javascript" src="{{url('assets/script/counter.js')}}"></script>
<script type="text/javascript" src="{{url('assets/script/functions.js')}}"></script>

</body>

</html>