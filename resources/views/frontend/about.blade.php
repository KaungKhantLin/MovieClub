<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MovieClub MM</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('about/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Custom CSS -->
    <link href="{{ asset('about/css/round-about.css') }}" rel="stylesheet">

    <link href="{{ asset('dist/css/font.css') }}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
          .round {
            display:block;
            width: 180px;
            height: 180px;
            border-radius: 70%;
            overflow: hidden;
            padding:10px px;
        }
        .round img {
            width: 45px;
        }
    </style>
    <script>
        var cw = $('.round_img').width();
        $('.round_img').css({
            'height': cw + 'px'
        });
    </script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home.index') }}">MovieClub MM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">profile</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About Us
                    <small>It's Nice to Meet You!</small>
                </h1>
                <p>We are Myanmar Software Developer. We are freelance. We are Founder of PROWAY Creative Team. We can develop Websites, Webapplications
                   and Desktop application. This site(MovieClub MM) is our product.
                   You can advertise your business on my website.

               </p>

               <ul>
                   <li> If you want to advertise ...profile us .</li>
                   <li>If you want to create your own website ..... profile us.</li>
               </ul>
               <br>
               <h2>profile Email Address</h2>
               <ol>
                   <li> kaungkhantlin.msdeveloper@gmail.com</li>
                   <li> amigo.k8@gmail.com</li>
               </ol>

               <p>You can also profile following Facebook profile.</p>

           </div>
       </div>

       <!-- Team Members Row -->
       <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">This Site Created Developers</h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center">
          <a href="https://www.facebook.com/kaungkhantlin.165" target="_blank"> <img class="round" src="{{ asset('logo/kkl4.jpg') }}" alt=""></a>
          <h3> <a href="https://www.facebook.com/kaungkhantlin.165" target="_blank">Kaung Khant Lynn</a>
            <small>Web Developer</small>
        </h3>
        <p>Founder of MovieClub MM.  This is his facebook profile.</p>
        <p>Skills : Laravel , C#</p>
    </div>
    <div class="col-lg-4 col-sm-6 text-center">
        <a href="https://www.facebook.com/amigo.k8" target="_blank"><img class="round" src="{{ asset('logo/tnw.jpg') }}" alt=""></a>
        <h3><a href="https://www.facebook.com/amigo.k8" target="_blank"> Tint Naing Winn (amigo)</a>
            <small>Web Developer</small>
        </h3>
        <p>Founder of MovieClub MM. This is his facebook profile.</p>
        <p>Skills : Laravel , VB.Net</p>
    </div>

</div>

<hr>

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">PROWAY Creative Team Member</h2>
    </div>
    <div class="col-lg-4 col-sm-6 text-center">
        <a href="https://www.facebook.com/kaungkhantlin.165" target="_blank"><img class="round" src="{{ asset('logo/kkl4.jpg') }}" alt=""></a>
        <h3><a href="https://www.facebook.com/kaungkhantlin.165" target="_blank">Kaung Khant Lynn</a> <small>Web Developer</small>
        </h3>
        <p>Founder of MovieClub MM. This is his facebook profile.</p>
        <p>Skills : Laravel , C#</p>
    </div>

<div class="col-lg-4 col-sm-6 text-center">
    <a href="https://www.facebook.com/amigo.k8" target="_blank"><img class="round" src="{{ asset('logo/tnw.jpg') }}" alt=""></a>
    <h3><a href="https://www.facebook.com/amigo.k8" target="_blank"> Tint Naing Winn (amigo)</a>
        <small>Web Developer</small>
    </h3>
    <p>Founder of MovieClub MM. This is his facebook profile.</p>
    <p>Skills : Laravel , VB.Net</p>
</div>
<div class="col-lg-4 col-sm-6 text-center">
 <a href="https://www.facebook.com/mr.kaungmyataung?fref=ts" target="_blank">  <img class="round" src="{{ asset('logo/kma.jpg') }}" alt=""></a>
 <h3> <a href="https://www.facebook.com/mr.kaungmyataung?fref=ts" target="_blank">Kaung Myat Aung</a>
    <small>Web Developer</small>
</h3>
<p>Member of PROWAY Creative Team.This is his facebook profile.</p>
<p>Skills : Laravel , C#</p>
</div>
<div class="col-lg-4 col-sm-6 text-center">
    <a href="https://www.facebook.com/naingminkhant.cm?fref=ts" target="_blank"><img class="round" src="{{ asset('logo/nmk.jpg') }}" alt=""></a>
    <h3> <a href="https://www.facebook.com/naingminkhant.cm?fref=ts" target="_blank">  Naing Min Khant</a>
        <small>Desktop Application Developer</small>
    </h3>
    <p>Member of PROWAY Creative Team.This is his facebook profile.</p>
    <p>Skills : C#</p>
</div>
<div class="col-lg-4 col-sm-6 text-center">
  <a href="https://www.facebook.com/waiyan.phyo.5602?fref=ts" target="_blank"><img class="round" src="{{ asset('logo/wyp.jpg') }}" alt=""></a>
  <h3>  <a href="https://www.facebook.com/waiyan.phyo.5602?fref=ts" target="_blank">WaiYan Phyo</a>
    <small>Web Developer</small>
</h3>
<p>Member of PROWAY Creative Team.This is his facebook profile.</p>
<p>Skills : Laravel </p>
</div>
<div class="col-lg-4 col-sm-6 text-center">
  <a href="https://www.facebook.com/youngster.phyolay.33449138?fref=ts" target="_blank"><img class="round" src="{{ asset('logo/play.jpg') }}" alt=""></a>
  <h3> <a href="https://www.facebook.com/youngster.phyolay.33449138?fref=ts" target="_blank">Phyo Thiha</a>
    <small>Web Developer</small>
</h3>
<p>Member of PROWAY Creative Team.This is his facebook profile.</p>
<p>Skills : Laravel </p>
</div>
<div class="col-lg-4 col-sm-6 text-center">
   <a href="https://www.facebook.com/chan.nyeinthu.315?fref=ts" target="_blank"><img class="round" src="{{ asset('logo/cnt.jpg') }}" alt=""></a>
   <h3><a href="https://www.facebook.com/chan.nyeinthu.315?fref=ts" target="_blank">Chann Nyein Thu</a>
       <small>Web Developer</small>
   </h3>
   <p>Member of PROWAY Creative Team.This is his facebook profile.</p>
   <p>Skills : C# ,.Net</p>
</div>

<div class="col-lg-4 col-sm-6 text-center">
   <a href="https://www.facebook.com/myathtookhine?fref=ts" target="_blank"><img class="round" src="{{ asset('logo/mhk.jpg') }}" alt=""></a>
   <h3><a href="https://www.facebook.com/myathtookhine?fref=ts" target="_blank">Myat Htoo Khine</a>
       <small>Web Developer</small>
   </h3>
   <p>Member of PROWAY Creative Team.This is his facebook profile.</p>
   <p>Skills : Laravel , WebDesign</p>
</div>


</div>
</div>


<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p align="center">~~~~~~~~~~~~~~~~~~~~~~~~~~ PROWAY Creative Team ~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="{{ asset('about/js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('about/js/bootstrap.min.js') }}"></script>

</body>

</html>
