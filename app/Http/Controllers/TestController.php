<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

class TestController extends Controller
{
	public function index()
	{
		$data = 789;

		return view('test')->with('data', $data);
	}
}
