<?php

namespace App\Http\Controllers;
use App\Inventaris; 
use Illuminate\Http\Request;


class inventarisController extends Controller
{
    public function create (Request $request){
        $new_data = Inventaris::create($request->all());
        if($new_data){
            return view('berhasil');
        }else{

        }
    }

    public function index(Request $request){
        $data['inventaris']= Inventaris::all();
        return view('inventarisview',$data);
    }

    public function edit(Request $request,$id){
        $data['inventaris']= Inventaris::where('id',$id)->first();
        return view('inventarisupdate',$data);
        // return $data;
    }

    public function update(Request $request){
        $update=Inventaris::find($request->id);
        $update->nama=$request->nama;
        $update->jumlah=$request->jumlah;
        $update->berfungsi=$request->berfungsi;
        $update->rusak=$request->rusak;
        $update->keterangan=$request->keterangan;
        $update->save();
        return view('berhasilupdate');
        // return $update;
    }

    public function delete(Request $request){
        $delete=Inventaris::find($request->id);
        $delete->delete();
        return view('dihapus');
        // return $delete;
    }
}
