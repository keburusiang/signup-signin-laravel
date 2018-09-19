<!-- file register.blade.php -->

@extends('layout.master')
@section('title', 'Register')
@section('content')
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: grey;
}

* {
    box-sizing: border-box;
}

.container {
	align-content: center;
	position: absolute;
	width: 50%;
    padding: 16px;
    background-color: white;
    left: 25%;
}
.container>label>h1{
	text-align: center;
}
.container>label>h3{
	text-align: center;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=text]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

}
</style>
 <form action="{{ URL::to('signup') }}" method="POST">
    {{ csrf_field() }}
 	<div class="container"> 
 		<label><h1> Laravel Simple Register</h1></label>
 		<label> <h3> Fauzan Awanda A | 17523147</h3></label>
 		<label><b>Username</b> </label>
 		<input type="text" name="username">
 		<label> <b> Password</b></label>
 		<input type="text" name="password">
 		<hr> 
 		<button type="submit"> <b> Login</b> </button>
 	</div>
 </form>

@endsection