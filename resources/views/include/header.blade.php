<div class="banner">
    <div class="container">

        <div class="row ripple-background">
            <div class="col-md-5 ml-auto mr-3">
                <div class="ripple-background">

                    <div class="circle xxlarge shade1"></div>
                    <div class="circle xlarge shade2"></div>
                    <div class="circle large shade3"></div>
                    <div class="circle mediun shade4"></div>
                    <div class="circle small shade5"></div>
                </div>
            </div>
            
        </div>

        <div class="header">

            <div class="header-left">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('public/frontend/images/logo-new.png')}}" width="250px" class="img-responsive" alt="" /></a>
                </div>
                <!-- <ul>
                    <li><a href="#"><i class="fb"> </i></a></li>
                    <li><a href="#"><i class="twt"> </i></a></li>
                    <li>
                        <div class="search2">
                            <form>
                                <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
                                <input type="submit" value="">
                            </form>
                        </div></li>
                        <div class="clearfix"></div>
                    </ul> -->

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="head-nav">
                <span class="menu"> </span>
                <ul class="cl-effect-15">
                    <li class="active"><a href="{{url('/')}}">HOME</a></li>
                    <li><a href="{{url('/about')}}" data-hover="ABOUT">ABOUT</a></li>
                    <li><a href="{{url('/photos')}}" data-hover="PHOTOS">PHOTOS</a></li>
                    <!-- <li><a href="404.html" data-hover="ARCHIVES">ARCHIVES</a></li> -->
                    <li><a href="{{url('/contact')}}" data-hover="CONTACT">CONTACT</a></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>

            <!-- script-for-nav -->
            <script>
                $( "span.menu" ).click(function() {
                  $( ".head-nav ul" ).slideToggle(300, function() {
                            // Animation complete.
                        });
              });
          </script>
          <!-- script-for-nav -->                      
      </div> 
  </div>