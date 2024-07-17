<!doctype html>
<html lang="zxx">
	<head>
		@include('frontend.layouts.headcss')	
	</head>
    <body>
		@include('frontend.layouts.header-top')
		@yield('main-content')
		@include('frontend.layouts.footer')
		@include('frontend.layouts.footerjs')
	</body>
</html>