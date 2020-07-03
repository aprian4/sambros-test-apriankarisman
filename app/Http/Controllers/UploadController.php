<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\companysData;

class UploadController extends Controller
{
    
    public function upload(){
		$company = companysData::get();
		return view('company',['company' => $company]);
	}
	public function formupload(){
		$company = companysData::get();
		return view('formcompany',['company' => $company]);
	}
 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'name' => 'required',
			'phone' => 'required',
			'address' => 'required',
			'logo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'pics' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('logo');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		companysData::create([
			'name' => $request->name,
			'phone' => $request->address,
			'address' => $request->address,
			'logo' => $nama_file,
			'pics' => $request->pics,
		]);
 
		return redirect()->back();
	}
}
