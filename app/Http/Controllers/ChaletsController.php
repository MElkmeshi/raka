<?php

namespace App\Http\Controllers;
use App\Models\Chalets;
use Illuminate\Http\Request;
use App\Models\Categories;
class ChaletsController extends Controller
{

    public function index()
    {
        $data=Chalets::all();
        $categories=Categories::get();
        return view('admin.chalets.index',compact('data','categories'));}

    public function store(Request $request)
    {

        $request->validate([

            'category_id' => 'required|exists:categories,id',
            'number' => 'required|integer',
        ]);
        $data=$request->only('category_id','number','status');
        Chalets::create($data);
        return redirect()->route('chalets');
    }

    public function edit($id)
    {
        $data=Chalets::find($id);
        return view('admin.chalets.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([    
            'category_id' => 'required|exists:categories,id',
            'number' => 'required|integer',
        ]);
        $data=$request->only('category_id','number','status');
        Chalets::find($id)->update($data);
        return redirect()->route('chalets');
    }
    public function destroy($id)
    {
        Chalets::find($id)->delete();
        return redirect()->route('chalets');
    }
}
