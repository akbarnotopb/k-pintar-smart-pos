<!DOCTYPE html>
<html>
<head>
	@include('shared.partial.meta')
	<title>SB Admin 2 - Bootstrap Admin Theme</title>
	@include('shared.partial.stylesheet')
</head>
<body>
	<div id="wrapper">
		@include('shared.partial.navbar')
		@yield('realpage')
	</div>

	@include('shared.partial.jquery')
	@yield('additional-js')
</body>
</html>