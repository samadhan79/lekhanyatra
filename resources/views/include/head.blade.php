<title>Animus A Blogging Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="{{asset('public/frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Graphic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>


<link rel="stylesheet" href="{{asset('public/frontend/css/swipebox.css')}}">
<!------ Light Box ------>
<script src="{{asset('public/frontend/js/jquery.swipebox.min.js')}}"></script> 
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>
<!------ Eng Light Box ------>

<script>
    $(document).ready(function () {
        size_li = $("#myList li").size();
        x=3;
        $('#myList li:lt('+x+')').show();
        $('#loadMore').click(function () {
            x= (x+1 <= size_li) ? x+1 : size_li;
            $('#myList li:lt('+x+')').show();
        });
        $('#showLess').click(function () {
            x=(x-1<0) ? 1 : x-1;
            $('#myList li').not(':lt('+x+')').hide();
        });
    });
</script>



<!-- 
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">


<title>CodePen - Animated Ripples background </title>
<meta name="viewport" content="width=device-width, initial-scale=1">

-->

<!-- <style>


    /*body{
      background: #3399ff;
      }*/

      .banner{
        background: #f5f6f7;
    }
    .circle{
        position: absolute;
        border-radius: 50%;
        background: #dde00ffa;
        animation: ripple 15s infinite;
        box-shadow: 0px 0px 1px 0px #508fb9;
    }

    .small{
        width: 200px;
        height: 200px;
        left: -100px;
        bottom: -100px;
    }

    .medium{
        width: 400px;
        height: 400px;
        left: -200px;
        bottom: -200px;
    }

    .large{
        width: 600px;
        height: 600px;
        left: -300px;
        bottom: -300px;
    }

    .xlarge{
        width: 800px;
        height: 800px;
        left: -400px;
        bottom: -400px;
    }

    .xxlarge{
        width: 1000px;
        height: 1000px;
        left: -500px;
        bottom: -500px;
    }

    .shade1{
        opacity: 0.2;
    }
    .shade2{
        opacity: 0.5;
    }

    .shade3{
        opacity: 0.7;
    }

    .shade4{
        opacity: 0.8;
    }

    .shade5{
        opacity: 0.9;
    }

    @keyframes ripple{
        0%{
          transform: scale(0.8);
      }

      50%{
          transform: scale(1.2);
      }

      100%{
          transform: scale(0.8);
      }
  }
</style>

<script>
  window.console = window.console || function(t) {};
</script>



<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
}
</script>

<script type="text/javascript" src="{{asset('public/frontend/js/blog.js')}}"></script> -->