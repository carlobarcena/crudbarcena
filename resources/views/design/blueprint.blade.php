<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>
<body>
	<div id="loader">
	  <div class="shadow"></div>
	  <div id="box"></div>
	</div>
	<span id="loader-title">Loading</span>
	<div id="afterload" class="wrapper nodisplay">
		@include('partials.side-nav')
		<div class="main-panel  animate-bottom">
			@include('partials.nav')
			@yield('content')
			@include('partials.footer')
		</div>	
	</div>
	<!-- The Modal -->
	<div class="modal" id="edit_eModal">
	  <div class="modal-dialog">
	    <div class="modal-content" id="modal-ajax">

	    </div>
	  </div>
	</div>
	@include('partials.script')
</body>
</html>