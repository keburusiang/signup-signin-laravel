<!-- file home.blade.php -->

@extends('layout.master')
@section('title','Home')
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

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
</style>
<div class="container">
	<label> <h1> Welcome, <code>{{ Auth::user()->username }}</code></h1></label>
	<hr> 
 <a href="{{ URL::to('signout') }}">Keluar</a>
</div> 
@endsection