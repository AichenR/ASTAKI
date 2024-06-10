<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stock;
use App\Models\Store;

class StockController extends Controller
{
    public function item (Request $request){
        return view ('item.itemCat',[
            "item" => stock::paginate(20),
            "store" => store::all()
        ]);
    }

    public function item_Delete($id){
        $data = stock::find($id); 
        $data->delete();
        return redirect()->route('item')->with('success','Item Berhasil Dihapus');
    }

    public function item_Reg(){
        return view ('item.itemReg',[
            "store" => store::all()
        ]);
    }

    public function item_Post(Request $request){
        $message = [
            'required' => ':attribute Wajib Diisi'
        ];
        
        $request->validate([
            'item_Name' => 'required',
            'stock' => 'required',
            'acquired_Price' => 'required',
            'selling_Price' => 'required',
            'documentation' => 'required'
        ], $message);
 
        $data = stock::create($request->all());

        if ($request->hasFile('documentation')){
            foreach($request->file('documentation') as $file){
                $path = public_path('Foto_Aset/'.$request->item_Name.'/');
                $listed_url = 'Foto_Aset/'.$request->item_name.'/';
                $name = time().'-'.$file->getClientOriginalName();
                $file->move($path,$name);
                $aset[] = [
                    'name' => $name, 'url' => $listed_url.$name
                ];   
            };

            $data->documentation = $aset;
            $data->save();
        }

        else {
            $data->documentation = NULL;
        }

        // dd($request->all());
        return redirect()->route('item')->with('success','Data Direktori Berhasil Ditambahkan');
    }

    public function item_View($id){
        $item = stock::find($id);
        return view('Directory.dir_view', compact('item'));
    }

    public function item_View_Post(Request $request,$id){
        $message = [
            'required' => ':attribute Wajib Diisi'
        ];

        $request->validate([
            'item_Name' => 'required',
            'stock' => 'required',
            'acquired_Price' => 'required',
            'selling_Price' => 'required',
        ], $message);
 
        $data = item::find($id);
        $data->update($request->all());
        if ($request->hasFile('documentation')){
            foreach($request->file('documentation') as $file){
                $path = public_path('Foto_Aset/'.$request->Project_ID.'/');
                $listed_url = 'Foto_Aset/'.$request->id.'/';
                $name = time().'-'.$file->getClientOriginalName();
                $file->move($path,$name);
                $aset[] = [
                    'name' => $name, 'url' => $listed_url.$name
                ];   
            };

            $data->documentation = $aset;
            $data->save();
        }
        return redirect()->route('item.itemCat')->with('success','Data Direktori Berhasil Diupdate');
    }

}
