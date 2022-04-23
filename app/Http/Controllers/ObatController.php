<?php

namespace App\Http\Controllers;
use App\Models\Obat;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ObatController extends Controller
{
	public function index(){
		$data = DB::table('obat')->get();

		return view('obat.index',compact('data'));
	}

	public function createform(){
		return view('obat.create.index');
	}

	public function create(Request $req){
		$data = new obat;
		$data->kode_obat = $req->kode;
		$data->nama_obat = $req->nama;
		$data->satuan_obat = $req->satuan;
		$data->harga_obat = $req->harga;
		$data->stock_obat = $req->stock;
		$data->save();

		return redirect('/obat');
	}

	public function updateform($id){
		$data = DB::table('obat')->where('id_obat',$id)->get();
		return view('obat.update.update',['data' => $data]);
	}

	public function update(Request $req){
		$data = obat::find($req->id_obat);
		$data->kode_obat = $req->kode;
		$data->nama_obat = $req->nama;
		$data->satuan_obat = $req->satuan;
		$data->harga_obat = $req->harga;
		$data->stock_obat = $req->stock;
		$data->save();
		return redirect('/obat');
	}

	public function destroy($id){
		obat::find($id)->delete();

		return redirect('/obat');
	}

	// API cek stock
	public function stock(Request $req){
		$key = $req->key;
		if(!empty($key)){
			$data = obat::select('stock_obat')->where('kode_obat','=',$key)->get();
			if($data->isEmpty()) {
				return response()->json([
					"status" => false,
					"message" => "no matches data found!",
				],401);
			}
			return response()->json([
				"status" => true,
				"message" => "data found",
				"stock" => $data,
			],200);
		}
		return response()->json([
			"status" => false,
			"message" => "please insert value",
		],401);
	}
}
