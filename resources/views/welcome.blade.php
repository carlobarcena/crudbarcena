@extends('layouts.app')

@section('content')
<div class="container center">
@guest
<h1><a href="initialize">Initialized Database</a></h1>
<h1 style="color:#007bff">Or</h1>
<h1><a href="login">Go to Login</a></h1>
@else
<h1><a href="home">Go to Home</a></h1>
@endguest
</div>

@endsection