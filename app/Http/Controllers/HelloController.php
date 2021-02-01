<?php

namespace App\Http\Controllers;

// a. Controller classを継承

use Illuminate\Http\Request;
use App\Models\Book;

class HelloController extends Controller{
    //　b.アクションメソッドを定義
    public function index(){
    	// c 出力を戻り値に
    	return 'こんにちは、世界！';
    }

    public function view(){
	    $date=[
	    	'msg' => 'こんにちは、世界！'
	    ];
	    return view('hello.view',$date);
    }
    public function list(){
    	$date = [
    		'records' => Book::all()
    	];
    	return view('hello.list', $date);
    }
}
