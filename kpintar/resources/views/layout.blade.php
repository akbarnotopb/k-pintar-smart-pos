<!DOCTYPE html>
<html>
<head>
	@include('shared.partial.meta')
	<title>K-pintar Solusi POS Anda</title>
	@include('shared.partial.stylesheet')
	@yield('additional-css')
</head>
<body>
	<div id="wrapper">
		@include('shared.partial.navbar')
		@include('shared.partial.profilechange')
		@yield('realpage')
	</div>

	@include('shared.partial.jquery')
	@yield('additional-js')
</body>
</html>