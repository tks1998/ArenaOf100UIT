<?php

namespace App\Http\Controllers;
use App\contest;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class user_contest_controller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('checkadmin');
    }
  public function index(){
  //      $question = Question::all();
        
          $CQ=DB::table('contests')->get();
          var_dump($CQ);
          	return view('usercontest.show',compact('question'));
    }   
}

