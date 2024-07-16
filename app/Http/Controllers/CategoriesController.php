<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\CategoriesAttach;
use App\Models\ServicesCategories;
use Illuminate\Http\Request;
use App\Models\Resorts;
use App\Models\Services;


class CategoriesController extends Controller
{
public function index()
{
    $resorts = Resorts::all();
    $services = Services::all();
    $data=Categories::all();
    return view('admin.category.index',compact('data','services','resorts'));
}
public function store(Request $request)
{
   /* $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'rooms_count' => 'required|integer',
        'bathroom_count' => 'required|integer',
        'price' => 'required|numeric',
        'capacity' => 'required|integer',
        'resort_id' => 'required|exists:resorts,id',
    ]); */

    $data = $request->only('name', 'description', 'rooms_count', 'bathroom_count', 'price', 'capacity', 'resort_id');

    $category = Categories::create($data);
    if (!empty($request->file('images'))) {
        foreach ($request->file('images') as $image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            CategoriesAttach::create([
                'category_id' => $category->id,
                'path' => $imageName
            ]);
        }
    }
    if ($request->has('services')) {
        $category->serviceCategories()->sync($request->services);
    }
    $category = Categories::create($data);


    return redirect()->route('category');
}



public function edit($id)
{
    $data=Categories::find($id);
    return view('admin.categories.edit',compact('data'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        
    ]);
    $data=$request->only('name');
    Categories::find($id)->update($data);
    return redirect()->route('category');
}
public function destroy($id)
{
    ServicesCategories::where('category_id', $id)->delete();
    CategoriesAttach::where('category_id', $id)->delete();
    Categories::find($id)->delete();
    return redirect()->route('category');
}
}
