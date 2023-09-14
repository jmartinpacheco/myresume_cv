<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\User;
 
class ProfileController extends Controller
{
    public function __construct()
    {
        
    }

    public function home(){

        $json = \File::get('json/profile.json');
        $data = json_decode($json, true);

    	return view('home', $data);
    }
}