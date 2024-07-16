<?php

namespace App\Http\Controllers;
use App\Models\Municipalities;
use App\Models\User;
use Illuminate\Http\Request;

class MunicipalitiesController extends Controller
{
public function index()
{
    $users=User::get();
    $data=Municipalities::all();
    return view('admin.municipalities.index', compact('data', 'users'));
}
public function store(Request $request)
{
    $request->validate([
        'name'=>'required|string|max:255',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
    ]);
    $data=$request->only(
        'name',
        'image',
        'created_by'
    );
    $image=$request->file('image');
    $imageName=time().'.'.$image->getClientOriginalExtension();
    $image->move(public_path('municipalities'), $imageName);
    $data['image']=$imageName;
    $municipal=Municipalities::create($data);
    return redirect()->route('municipalities');
}
public function edit($id)
{
    $data=Municipalities::find($id);
    return view('admin.municipalities.edit', compact('data'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'name'=>'required|string|max:255',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
    ]);
    $data=$request->only(
        'name',
        'image'
    );
    $municipal=Municipalities::find($id);
    if($request->hasFile('image')){
        $image=$request->file('image');
        $imageName=time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $data['image']=$imageName;
    }
    $municipal->update($data);
    return redirect()->route('municipalities'); 
}
public function destroy($id)
{
    $municipal=Municipalities::find($id);
    $municipal->delete();
    return redirect()->route('municipalities'); 
}
}