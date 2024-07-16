<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public function index()
    {
        $data=Services::all();
        return view('admin.service.index',compact('data'));
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|string|max:255',
            
        ]);
        $data=$request->only('name');
        Services::create($data);
        return redirect()->route('service');
    }
    public function edit($id)
    {
        $data=Services::find($id);
        return view('admin.services.edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            
        ]);
        $data=$request->only('name');
        Services::find($id)->update($data);
        return redirect()->route('service');
    }
    public function destroy($id)
    {
        Services::find($id)->delete();
        return redirect()->route('service');
    }
}
