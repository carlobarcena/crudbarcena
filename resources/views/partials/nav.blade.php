<!-- nav.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light back2 fixed-top">
	<a class="navbar-brand" href="/">Employee - Department CRUD</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmobile">
	<span class=""><i class="fas fa-bars" style="color:white"></i></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbarmobile">
  		
  		<ul class="navbar-nav ml-auto">
  			@guest
  			<li class="nav-item">
  				<a  class="nav-link" href="login">Login</a>
  			</li>
  			<li class="nav-item">
  				<a  class="nav-link" href="register">Register</a>
  			</li>
  			@else
  			<li class="nav-item">
  				<a  class="nav-link" href="home">Dashboard ({{Auth::user()->username}})</a>
  			</li>

        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a  class="nav-link" href="employee">Employee</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="department">Department</a>
        </li>
      </ul>


  			<li class="nav-item">
  				<a  class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
  			</li>

  			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
            </form>
  			@endguest

  		</ul>
  	</div>
</nav>