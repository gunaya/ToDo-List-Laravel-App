<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class KantinController extends Controller
{
    public function readData(Request $request){
    	$kategori_id = $request->kategori_id;
    	$result = Barang::where('kategori_id', $kategori_id)->get();

    	return $result;
    }

    public function createData(Request $request){
    	$barang = new Barang ([
    		'nama_barang' => $request->nama_barang,
    		'foto_barang' => $request->foto_barang,
    		'kadaluarsa' => $request->kadaluarsa,
    		'harga_beli' => $request->harga_beli,
    		'harga_jual' => $request->harga_jual,
    		'jumlah' => $request->jumlah,
    		'kategori_id' => $request->kategori_id
    	]);
    	$barang->save();

    	return response()->json([
    		'message' => 'success'
    	]);
    }

    public function updateData(Request $request){
    	$id = $request->id;
    	$nama_barang = $request->nama_barang;
		$foto_barang = $request->foto_barang;
		$kadaluarsa = $request->kadaluarsa;
		$harga_beli = $request->harga_beli;
		$harga_jual = $request->harga_jual;
		$jumlah = $request->jumlah;
		$kategori_id = $request->kategori_id;

		$barang = Barang::find($id);
		$barang->nama_barang = $nama_barang;
		$barang->foto_barang = $foto_barang;
		$barang->kadaluarsa = $kadaluarsa;
		$barang->harga_beli = $harga_beli;
		$barang->harga_jual = $harga_jual;
		$barang->jumlah = $jumlah;
		$barang->kategori_id = $kategori_id;
		$barang->save();

		return response()->json([
    		'message' => 'success'
    	]);
    }

    public function deleteData(Request $request){
    	$id = $request->id;
    	$barang = Barang::find($id);
    	$barang->delete();

    	return response()->json([
    		'message' => 'success'
    	]);
    }
}
