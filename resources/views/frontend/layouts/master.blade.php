<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>IDataHost</title>
		<meta name="description" content="Cloudhub is a modern, responsive and easy to customize HTML template, perfectly suited for hosting and technology companies.">
		<meta name="keywords" content="html template, responsive, retina, cloud hosting, technology, startup">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link rel="apple-touch-icon-precomposed" href="{{asset('')}}frontend/img/logos/favicon.png">
		<link rel="icon" href="{{asset('')}}frontend/img/logos/favicon.png">
		
		@include('frontend/layouts/headerScript')
	</head>
	<body>

		<!-- Header Start-->
			@include('frontend/layouts/header')
		<!-- Header End -->

		<!-- Content Start-->
		@yield('content')
		<!-- Content End-->
		
		<!-- Footer Start -->
		@include('frontend/layouts/footer')

		<!-- Footer End -->
		
		<!-- Footer Scripts Start -->
		@include('frontend/layouts/footerScript')
		<!-- Footer Scripts End -->
		
	</body>
</html>