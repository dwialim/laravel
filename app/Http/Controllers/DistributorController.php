<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributor;

class DistributorController extends Controller
{
	public function index(){
		return view('distributor.index');
	}

	public function createform(){
		return view('distributor.create.index');
	}
}
