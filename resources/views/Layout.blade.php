<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <title>@yield('title') || The11Laptop</title>
    @include('FrontEnd.Style.Link')

</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
       <!-- Banner Popup Start -->
        @include('FrontEnd.Header')
        <!-- Categorie Menu & Slider Area Start Here -->
        <div class="main-page-banner home-3">
            <div class="container">
                <div class="row">
                    <!-- Vertical Menu Start Here -->
                    @include('FrontEnd.Menu')
                    <!-- Vertical Menu End Here -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Categorie Menu & Slider Area End Here -->
        @yield('content-layout')
        <!-- Support Area Start Here -->
        @include('FrontEnd.Footer')


    </div>
    <!-- Main Wrapper End Here -->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/664b036f9a809f19fb32edec/1huagareq';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
   @include('FrontEnd.Style.Script')

</body>

</html>
