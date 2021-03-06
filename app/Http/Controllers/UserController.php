<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        /*$user = User::all();
        return response()->json($user);*/
        $response = Http::get('https://odhiya.com/get.php');
        return $response->body();
    }

    public function register(Request $request){
        /*$user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        return response()->json(['user'=>$user,'message'=>'Succefully registered'],200);*/
        $response = Http::post('https://odhiya.com/post_data.php', [
            'sender_id' => 1,
            'receiver_id' => 2,
            'body' => "7izb lgar3a"
        ]);
        
        return $response;
    }
}
