<!--
Author:W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html lang="zxx">

<head>
    <title></title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        // addEventListener("load", function() {
        //     setTimeout(hideURLbar, 0);
        // }, false);

        // function hideURLbar() {
        //     window.scrollTo(0, 1);
        // }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="icon" href="{{ asset('public/images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap-submenu.min.css') }}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/style-web.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="{{ asset('public/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- //Fonts -->
    <style type="text/css">
        
        /*.dropdown-submenu {
          position: relative;
        }

        .dropdown-toggle::after {
            display: unset;
            width: 0;
            height: 0;
            margin-left: 0;
            vertical-align: 0;
            content: "";
            border-top: 0;
            border-right: 0;
            border-bottom: 0;
            border-left: 0;
        }

        .dropdown-submenu .dropdown-menu {
            top: 30px;
            right: 0%;
            margin-top: -1px;
            position: absolute;
        }*/

        .dropdown-menu{
            /*top: 17%;*/
            right: 2%;
            z-index: 99;
            position: absolute;
            left: unset;
            padding: 0px;
            margin: 0px;
        }

        #dropdownMenu1{
            /*position: fixed;*/
            /*top: 4%;*/
            width: 3em;
            height: 3em;
            margin: 0;
            padding: 0 1em;
            /*background: #151e253d;*/
            background: #97973d;
            color: #ffffff;
            z-index: 99;
            right: 2%;
        }

        .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
             background-color: unset; 
        }

        .morelink{
            color: #d8a574;
            font-size: 17px;
            font-weight: 700;
        }

        a.morelink:hover {
            color: #d8a574;
        }

        a.morelink:focus {
            color: #d8a574;
        }

        .logo_img{
            height: 100px;
            width: 244px;
            /*object-fit: cover;*/
        }

        .py-5-new{
            padding-top: 12rem;
        }

        .hover_menu{
            padding-top: 10px !important;
            padding-bottom: 10px !important;
        }

        .dropdown ul li .hover_menu:hover{
            background: #97973d;
            /*border: 1px solid #96963d;*/
        }

        .p-list{
            margin: 0px;
        }

        .h_menu:hover {
            background: #97973d !important;
        }

        .img-footer{
            height: 130px;
            width: 130px;
        }

        .dropdown-submenu {
            position: unset;
        }
        
        .container {
            padding-right: 0px;
            padding-left: 0px;
        }

        .form-group input{
            text-align: unset;
            letter-spacing: 1px;
        }

        hr{
            border-top: 1px solid #f1eaea;
            margin-bottom: 8px;
        }

        #wa_link:hover{
            text-decoration: unset;
        }

        #wa_link{
            text-decoration: unset;
        }

        .f-18{
            font-size: 18px !important;
        }

        .f-20{
            font-size: 21px !important;
        }
    </style>
</head>

<body style="user-select:none;">

    <!-- /main-top -->
    <!-- <div class="main-banner" id="home">
        <div class="bg-overlay"> -->

            <input type="hidden" name="" id="search_year">
            <input type="hidden" name="" id="search_month">
            <input type="hidden" name="" id="blog_id" value="{{ $blog->blog_id }}">
            <input type="hidden" name="" id="blog_title" value="{{ $blog->blog_title }}">
            <p id="text_p" style="display: none;"></p>

            <div class="header-top text-left" style="position: fixed;margin: 0px;padding: 0px;display: inline-flex;justify-content: space-between;">
                <div class="main-icons" style="padding: 9px 15px;">
                    <img src="{{ asset('public/images/logo-new.png') }}" class="logo_img">
                    <p style="color: #909044;font-weight: 600;" class="img-tagline div-tagline">
                        વિચારના વમળથી, શબ્દના સ્પર્શ સુધી...            
                    </p>
                </div>
                <!-- <div class="logo-w3pvt text-center" style="display: flex;align-items: center;">
                    <p style="color: #909044;font-weight: 600;" class="tagline div-tagline">
                        વિચારનાં વમળથી, શબ્દનાં સ્પર્શ સુધી...
                    </p>
                </div> -->
                <div class="menu-w3layouts" style="display: flex;align-items: center;justify-content: flex-end;padding-right:15px;">
                    <p style="color: #909044;font-weight: 600;padding-right: 21px;" class="tagline div-tagline">
                        વિચારના વમળથી, શબ્દના સ્પર્શ સુધી...
                    </p>
                    <div class="dropdown" style="">
                        <button class="btn btn-default" type="button" id="dropdownMenu1" style="float:right;outline: none;">
                            <span class="fa fa-home" aria-hidden="true"></span>
                        </button>
                    </div>

                </div>
            </div>
        <!-- </div>
    </div> -->

    <!-- blog -->
    <section class="blog_exclu3l py-5-new" id="blog">
        <div class="container py-md-5">
            <div class="row blog_exclu3l_top" style="margin-left: 0px;margin-right: 0px;">
                <div class="col-lg-12 blog_exclu3l_right">
                    <div id="blogs">
                        <h4 class="mt-3 f-20">{{ $blog->blog_title }}</h4>
                        <img src="{{ asset('public/storage/image') }}/{{ $blog->blog_image }}" alt="blog image" class="img-fluid" style="padding-bottom: 10px;">
                        <div class="blog_exclu3l-5">
                            <h4 class="mt-3 f-18">{{ $blog->blog_title }}</h4>
                            <input type="hidden" id="blog_date" value="{{ $blog->created_at }}">
                            <h5 class="mt-3" style="color: #97973d;font-weight: 700;margin-top: 0em !important;">    <span id="blog_date_c" style="padding-top: 7px;"></span>
                                <span>
                                    <!-- <iframe style="height: 20px;margin-left: 7px;margin-bottom: -7px;margin-right: -8px;" src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flekhanyatra.com%2Fcomment%2F{{ $blog->blog_id }}&layout=button&size=small&width=69&height=20" width="69" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" name="frame_{{ $blog->blog_id }}">
                                    </iframe> -->
                                    <iframe style="height: 20px;margin-left: 7px;margin-bottom: -7px;margin-right: -8px;" src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2F192.168.0.102%2FBlog_site%2Fcomment%2F{{ $blog->blog_id }}&amp&layout=button&size=small&width=69&height=20" width="69" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" name="frame_{{ $blog->blog_id }}">
                                    </iframe>
                                </span>
                                &nbsp;&nbsp;
                                <span>
                                    <a style="" target="_blank" id="wa_link" data-action="share/whatsapp/share">
                                        <img style="height: 21px;width: 21px;border-radius: 5px;" src="{{ asset('public/images/whatsapp.png') }}">
                                    </a>
                                </span>
                                <span style="padding-left:2px;">
                                    <img title="Copy Link" style="color: #07C;cursor: pointer;font-weight: bold;height: 21px;width: 21px;border-radius: 5px;" src="{{ asset('public/images/copy.png') }}" id="copy_{{ $blog->blog_id }}" class="img" onclick="copy_text(this,'http://192.168.0.102/Blog_site/comment/{{ $blog->blog_id }}','{{ $blog->blog_id }}')">
                                </span>
                            </h5>
                            <div class="comment" style="white-space: pre-line;" id="p_5">
                               {{ $blog->blog_description }}   
                            </div>
                        </div>
                    </div>
                    <!-- <div id="disqus_thread" class="scroll-link"></div> -->
                    <div class="row">
                        <div class="col-md-8">
                            <h3>Leave a Reply</h3>
                            <span>Required fields are marked <span style="color: red;">*</span></span>
                            <br><br>
                            <div>
                                <form method="post" id="add_comment">
                                    <input type="hidden" name="blog_id" id="blog_id" value="{{ $blog->blog_id }}">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" >Name <span style="color:red;">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" id="name" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Phone No <span style="color:red;">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" id="phone" name="phone" class="form-control" required pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number">
                                        </div>
                                        <span class="col-sm-4 error" id="error_phone" ></span>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" id="email" name="email" class="form-control" style="text-transform: unset;">
                                        </div>
                                        <!-- <span class="col-sm-4 error" id="error_category_name" ></span> -->
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Comment <span style="color:red;">*</span></label>
                                        <div class="col-sm-8">
                                            <textarea id="comment" name="comment" class="form-control" required></textarea>
                                        </div>
                                        <!-- <span class="col-sm-4 error" id="error_category_name" ></span> -->
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-3">
                                            <button type="submit" class="btn btn-round waves-effect waves-light"  style="background: #97973d;color: white;">Post comment</button>
                                        </div>
                                        <div class="col-sm-2">
                                            <img class="loader" style="display: none;" src="{{asset('public/assets/loader/loader.gif')}}">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="total_div" style="display: none;"><span id="total_comm"></span> comments on "{{ $blog->blog_title }}"</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="comments">
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //blog -->
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row footer-top" style="margin-left: 0px;margin-right: 0px;">
                <div class="col-lg-4 footer-grid_section_w3pvt">
                    <h2 class="logo-2 mb-lg-4 mb-3">
                        <a href="{{ url('/') }}" class="text-uppercase" style="font-size: 1em;font-family: andalus;">Lekhanyatra.com</a>
                    </h2>
                    <p style="color: #d9a674;font-size: 1em;">વિચારના વમળથી, શબ્દના સ્પર્શ સુધી...</p>
                    <p style="color: #0dd3ff;font-size: 1em;">Releasing Date: 29/9/2019</p>
                    <h4 class="sub-con-fo ad-info my-4" style="margin-bottom: 0.2rem !important;">Contact us on</h4>
                    <ul class="w3pvt_social_list list-unstyled">
                        <li>
                            <p style="color: #d9a674;font-size: 0.9em;">Lekhanyatra9@gmail.com</p>
                        </li>
                    </ul>
                    <h4 class="sub-con-fo ad-info my-4">Catch on Social</h4>
                    <ul class="w3pvt_social_list list-unstyled">
                        <li>
                            <a href="https://www.facebook.com/Lekhanyatra-102727571134618" class="w3layouts_facebook">
                                <span class="fa fa-facebook"></span>
                            </a>
                        </li>
                        <li class="mx-2" style="display:none;">
                            <a href="#" class="w3layouts_twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w3layouts_dribble">
                                <span class="fa fa-instagram"></span>
                            </a>
                        </li>
                        <li class="ml-2" style="display:none;">
                            <a href="#" class="w3layouts_google">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 footer-right">

                    <div class="row mt-lg-4 bottom-w3pvt-sec-nav mx-0">
                        <div class="col-md-6 footer-grid_section_w3pvt" style="padding-left: 0px;padding-right: 0px;">
                            <center><img src="{{ asset('public/images/yagnik.png') }}" class="img-footer">
                            <h3 class="footer-title mb-lg-4 mb-3" style="font-family: andalus;">Yagnik Ishverbhai Kanzariya (અનુનાદ)</h3></center>
                            <ul class="list-unstyled">
                                <li>
                                    <center>
                                        <p class="p-list">B.E. Mechanical</p>
                                        <p class="p-list">ભૌતિક વિજ્ઞાન (Physics)</p>
                                        <p class="p-list">(Application of Physics)</p>
                                        <p class="p-list">04/03/1994</p>
                                        <p class="p-list">97243 48902</p>
                                        <p class="p-list">Kanzariyayi127@gmail.com</p>
                                    </center>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 footer-grid_section_w3pvt" style="padding-left: 0px;padding-right: 0px;">
                            <center><img src="{{ asset('public/images/jayesh.jpg') }}" class="img-footer">
                            <h3 class="footer-title mb-lg-4 mb-3" style="font-family: andalus;">Jayesh Boghajibhai Parmar (અન્વય)</h3></center>
                            <ul class="list-unstyled">
                                <li>
                                    <center>
                                        <p class="p-list">M.A. M.Ed.</p>
                                        <p class="p-list">સંસ્કૃત (Sanskrit)</p>
                                        <p class="p-list">(वदतु संस्कृतम्)</p>
                                        <p class="p-list">08/11/1986</p>
                                        <p class="p-list">97235 35174</p>
                                        <p class="p-list">Jayesh71parmar@gmail.com</p>
                                    </center>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <div class="cpy-right py-3">
        <div class="container">
            <div class="row" style="margin-left: 0px;margin-right: 0px;">
                <p class="col-md-10 text-lg-left text-center">© 2019 લેખનયાત્રા.com . All rights reserved
                </p>
            </div>
        </div>

    </div>

    <!-- <script id="dsq-count-scr" src="http://lekhanyatra-com.disqus.com/count.js" async></script> -->

    <script type="text/javascript" src="{{ asset('public/assets/bower_components/jquery/js/jquery.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/assets/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('public/assets/bower_components/bootstrap/js/bootstrap.min.js') }}"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/js/bootstrap-submenu.min.js') }}"></script>
    <script type="text/javascript"
    src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.13/moment-timezone-with-data.js"></script>

    <!-- mask -->
    <script src="{{ asset('public/assets/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/input-mask/jquery.inputmask.phone.extensions.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
    <script>
        $(function () {
            $("[data-mask]").inputmask();
        });
    </script>

    <!-- <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        // var disqus_developer = 1;
        // var disqus_config = function () {
        //     var blog_id = $('#blog_id').val();
        //     var blog_title = $('#blog_title').val();
            
        //     this.page.url = "http://lekhanyatra.com/Blog_site/comment"+"/"+blog_id;  // Replace PAGE_URL with your page's canonical URL variable
        //     this.page.identifier = blog_id; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        //     this.page.title = blog_title;
        //     this.page.category_id = blog_id;
        //     this.page.short_name = "lekhanyatra-com";
        // };
        
        var disqus_shortname = 'lekhanyatra-com';
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');s.type = 'text/javascript'; s.async = true;
            s.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(s);
            // s.src = 'https://lekhanyatra-com.disqus.com/embed.js';
            // s.setAttribute('data-timestamp', +new Date());
            // (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript> -->

    <script type="text/javascript">
        $(document).ready(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            list_comment();

            let ischeck = checkCookie();
            if(!ischeck){
                //ajax

                $.ajax({
                    type:'POST',
                    url: '{{ url("/visitor_add") }}',
                    success:function(data){
                        setCookie();
                    },
                    error:function(err){
                    }
                });
            }

            $(".comment").shorten({
                "showChars" : 200
            });
            
            var blog_date = $('#blog_date').val();
            var m = moment.utc(blog_date, "YYYY-MM-DD h:mm:ss A"); // parse input as UTC
                            
            var timezone = moment.tz.guess(); // example value, you can use moment.tz.guess()
            var date = new Date(m.clone().tz(timezone).format("YYYY-MM-DD h:mm:ss A"));
            var f_date = moment(date).format("MMMM DD, YYYY");
            $('#blog_date_c').text(f_date);
            
            $('#dropdownMenu1').on('click',function(e){
                window.location.href = "{{ url('/') }}" ;
            });

            var id = '{{ $blog->blog_id }}';
            var wa_url = "https://web.whatsapp.com/send?text=http://192.168.0.102/Blog_site/comment/"+id;
            // var wa_url = "https://web.whatsapp.com/send?text=http://lekhanyatra.com/comment/"+id;
            if(navigator.userAgent.toLowerCase().indexOf("android") > -1 || navigator.userAgent.toLowerCase().indexOf("iphone") > -1 || navigator.userAgent.toLowerCase().indexOf("BlackBerry") > -1){
                var wa_url = "whatsapp://send?text=http://192.168.0.102/Blog_site/comment/"+id;
                // var wa_url = "whatsapp://send?text=http://lekhanyatra.com/comment/"+id;
            }
            $('#wa_link').attr('href',wa_url);
            
            $("#add_comment").on("submit", function (e) {
                e.preventDefault();

                var blog_id = $("#blog_id").val();
                var name = $("#name").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var phone = $("#phone").val();
                var comment = $("#comment").val();

                // if(phone != ''){
                //     var phoneno = /^\d{10}$/;
                //     if(!(phone.value.match(phoneno))){
                //         alert("message");
                //         return false;
                //     }else{
                //         alert("mdfgessage");

                //     }
                // }

                $('.loader').css('display','block');
                $.ajax({
                    type: 'POST',
                    url: "{{ url('/add_comment') }}",
                    data: {
                        blog_id: blog_id,
                        name: name,
                        email: email,
                        phone: phone,
                        comment: comment
                    },
                    success: function (data)
                    {
                        $('.loader').css('display','none');
                        location.reload();
                    },
                    error: function () {
                        
                    }
                });
            });    
            
        });

        function setCookie() {
            // var d = new Date();
            // d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
            // var expires = "expires=" + d.toGMTString();
            var date = new Date();
            var midnight = new Date(date.getFullYear(), date.getMonth(), date.getDate(), 24, 00, 00);
            var expires = "expires=" + midnight.toGMTString();
            document.cookie = "visitor=1;" + expires + ";path=/";
        }

        function getCookie() {
            var name = "visitor=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkCookie() {
            var user = getCookie("visitor");
            if (user != "") {
                return true
            } else {
                return false
            }
        }

        function list_comment(){
            var blog_id = $("#blog_id").val();
            var timezone = moment.tz.guess();

            $.ajax({
                type: 'POST',
                url: "{{ url('/list_comment') }}",
                data: {
                    blog_id: blog_id,
                    timezone: timezone
                },
                success: function (data)
                {

                    var json_obj = $.parseJSON(data);
                    console.log(json_obj.total_comment);
                    if(json_obj.total_comment != '0'){
                        $('#total_div').css('display','block');
                        $('#total_comm').html(json_obj.total_comment);
                    }
                    $('#comments').html(json_obj.result);
                },
                error: function () {
                    
                }
            });
        }

        function copy_text(input,value,id){
            var tempInput = document.createElement("input");
            tempInput.style = "position: absolute; left: -1000px; top: -1000px";
            tempInput.value = value;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);

            setTooltip(id);
            hideTooltip(id);
        }

        function setTooltip(id) {
            $('#copy_'+id).attr('title','');
            $('#copy_'+id).attr('data-original-title','Copied');
            $('#copy_'+id).tooltip('show');
        }

        function hideTooltip(id) {
          setTimeout(function() {
            
            $('#copy_'+id).attr('data-original-title','');
            $('#copy_'+id).attr('title','Copy Link');
            $('#copy_'+id).tooltip('hide');
          }, 1000);
        }
        
    </script>
</body>
    
</html>
