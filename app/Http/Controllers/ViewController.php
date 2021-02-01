<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function escape(){
		return view('view.escape',[
			'msg' => '<img src="http://wings.msn.to./image/wings.jpg" title="ロゴ">
			<p>WINGSへようこそ</p>']);
	}

	public function if(){
		return view('view.if',[
			'random' => random_int(0,100)
		]);
	}

	public function isset(){
		return view('view.isset',[
			'msg' => 'こんにちは、世界！']);
	}

	public function switch(){
		return view('view.switch', [
			'rondom' => random_int(1,5)
		]);
	}

	public function while(){
		return view('view.while', [
		]);
	}

	public function foreach_assoc(){
		return view('view.foreach_assoc',[
			'member' =>[
				'name' => 'YAMADA',
				'sex' => '男',
				'birth' => '1994-12-29'
			]
		]);
	}

	public function master(){
		return view('view.master',['msg' =>'こんにちは、世界！']);
	}

}

