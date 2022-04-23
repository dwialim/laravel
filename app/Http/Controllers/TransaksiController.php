<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Transaksi;
use App\Models\Obat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PDF;

class TransaksiController extends Controller
{
	public function index(){
		$data = obat::with('transaksi')->get();

		return view('transaksi.index',['data'=>$data]) ;
	}

	public function createform($id){
		$obat = DB::table('obat')->where('id_obat',$id)->get();
		return view('transaksi.create.index',['obat'=>$obat]);
	}

	// API pesanan obat
	public function post(Request $req){
		$validator = Validator::make($req->all(),[
			'id_obat' =>  'required',
			'kode_obat' => 'required',
			'total_barang'	=>	'required',
			'total_harga'	=>	'required',
		]);
		if($validator->fails()){
			return response()->json([
				"status" => false,
				"message" => "all fields are required!",
				"data" => $validator->errors(),
			],401);
		}

		$data = Transaksi::create($req->all());
		if($data){
			return response()->json([
				"status" => true,
				"message" => "data has been add!",
				"data" => $data,
			],200);
		}
		return response()->json([
			"status" => false,
			"message" => "fail to be add!",
		],401);
	}

	// API laporan transaksi
	public function laporan(Request $req){
		$key = $req->keyword;
		if(!empty($key)){
			$data = Transaksi::where('created_at','like','%'.$key.'%')->get();
			if($data->isEmpty()) {
				return response()->json([
					"status" => false,
					"message" => "no matches data found!",
				],200);
			}
			return response()->json([
				"status" => true,
				"message" => "data found",
				"data" => $data,
			],200);
		}

		return response()->json([
			"status" => false,
			"message" => "please insert value",
		],401);
	}

	public function create(Request $req){
		$harga = $req->harga;
		$beli = $req->beli;
		$total = $harga * $beli;

		$transaksi = new transaksi;
		$transaksi->id_obat = $req->id;
		$transaksi->kode_obat = $req->kode;
		$transaksi->total_barang = $req->beli;
		$transaksi->total_harga = $total;
		$transaksi->save();
		return redirect('/transaksi');
	}

	public function destroy($id){
		Transaksi::find($id)->delete();

		return redirect('/transaksi');
	}

	public function cetak_pdf($id){
		$data = Transaksi::where('id','=',$id)->get();
 
    	$pdf = PDF::loadview('transaksi.laporan.transaksi_pdf',['data'=>$data]);
    	return $pdf->download('laporan-transaksi-pdf');
    	// return $pdf->stream();
	}
}
