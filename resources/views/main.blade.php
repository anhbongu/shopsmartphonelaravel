<!DOCTYPE html>

<html class="no-js" lang="">
    <head>
 			@include('element.head')
    </head>
    <body class="home-three">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
		<!-- header area start -->
		<header class="short-stor">
			@include('element.header')
		</header>
			@yield('content')
		<!-- Brand Logo Area End -->
		<!-- FOOTER START -->
		<footer>
			@include('element.footer')
		</footer>
			@include('element.script')
    </body>
</html>		