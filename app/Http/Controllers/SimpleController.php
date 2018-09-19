<?php

namespace App\Http\Controllers;
use Auth;
use Hash; // memanggil class hash untuk hashing password
use App\Simple; // memanggil clas model
use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function register(Request $request)
    {
    	$db = new simple;
    	$db->username = $request -> username;
    	$db->password = Hash::make($request->password);
    	$db->save();
    	return redirect('/');
    }

    public function login(Request $request){
    	$data = array('username' => $request->username,'password' => $request->password);
    	if(Auth::attempt($data)){
    		return redirect('/home');
    	} else {
    		return redirect('/');
    	}
    }
}
