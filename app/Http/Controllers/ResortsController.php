<?php

namespace App\Http\Controllers;
use App\Models\Municipalities;
use App\Models\User;
use App\Models\Resorts;
use Illuminate\Http\Request;

class ResortsController extends Controller
{
public function index()
{
    $users=User::get();
    $municipalities=Municipalities::get();
    $data=Resorts::all();
    return view('admin.resorts.index',compact('data','municipalities','users'));
}
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
            'phone' => 'required|string',
            'email' => 'required|email',
            'website' => 'nullable|string',
            'locations_link' => 'nullable',
            'address' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'rating' => 'nullable|numeric|min:0|max:5',
            'check_in_time' => 'required|date_format:H:i',
            'check_out_time' => 'required|date_format:H:i',
            'number_of_chalets' => 'required|integer|min:0',
            'user_id' => 'required|exists:users,id',
            'municipality_id' => 'required|exists:municipalities,id',
    ]);
    $data=$request->only(
        'name', 'description', 'image', 'locations_link', 
        'address', 'phone', 'email', 'website', 'rating',
         'check_in_time', 'check_out_time', 'number_of_chalets','created_by','user_id','municipality_id'
    );
    $image=$request->file('image');
    $imageName=time().'.'.$image->getClientOriginalExtension();
    $image->move(public_path('resorts'), $imageName);
    $data['image']=$imageName;
    $resort = Resorts::create($data);

    return redirect()->route('resort');
}
public function edit($id)
{
    $users=User::get();
    $municipalities=Municipalities::get();
    $data=Resorts::find($id);
    return view('admin.resorts.edit',compact('data','municipalities','users'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
            'phone' => 'required|string',
            'email' => 'required|email',
            'website' => 'nullable|string',
            'locations_link' => 'nullable',
            'address' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'rating' => 'nullable|numeric|min:0|max:5',
            'check_in_time' => 'required|date_format:H:i',  
            'check_out_time' => 'required|date_format:H:i',
            'number_of_chalets' => 'required|integer|min:0',
            'user_id' => 'required|exists:users,id',
            'municipality_id' => 'required|exists:municipalities,id',
    ]);
    $data=$request->only(
        'name', 'description', 'image', 'locations_link', 
        'address', 'phone', 'email', 'website', 'rating',
         'check_in_time', 'check_out_time', 'number_of_chalets','created_by','user_id','municipality_id'
    );
    $image=$request->file('image');
    $imageName=time().'.'.$image->getClientOriginalExtension();
    $image->move(public_path('resorts'), $imageName);
    $data['image']=$imageName;
    $resort = Resorts::where('id', $id)->update($data);
    return redirect()->route('resort');
}

public function destroy($id)
{
    $resort = Resorts::find($id);
    $resort->delete();
    return redirect()->route('resort');
}



}