<?php

namespace App\Http\Controllers;
use App\Models\Municipalities;
use App\Models\Chalets;
use Illuminate\Http\Request;
use App\Models\resorts;
use App\Models\Categories;
use App\Models\Guests;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function show()
    {
        $resorts = Resorts::get();
        $reso=Resorts::count();
        $categories = Categories::get();
        $chalets = Chalets::latest()->take(3)->get();
        $chaleh=Chalets::count();
        $municipalities = Municipalities::get();
        $munic=Municipalities::count();
        $guests = Guests::count();
        return view('website.main', compact('municipalities', 'chalets', 'categories', 'resorts', 'chaleh', 'munic', 'reso', 'guests'));
    }

        public function explore(Request $request)
        {
            $addressFilter = $request->query('address');
            $priceOrder = $request->query('price_order'); // للحصول على ترتيب السعر
        
            $query = Chalets::with(['category.resort'])
                ->join('categories', 'chalets.category_id', '=', 'categories.id')
                ->join('resorts', 'categories.resort_id', '=', 'resorts.id');
        
            if ($addressFilter) {
                $query->where('resorts.address', 'like', '%' . $addressFilter . '%');
            }
        
            if ($priceOrder == 'asc') {
                $query->orderBy('categories.price', 'asc');
            } elseif ($priceOrder == 'desc') {
                $query->orderBy('categories.price', 'desc');
            } else {
                $query->orderBy('resorts.name'); // الترتيب الافتراضي
            }
        
            $chalets = $query->select(
                'chalets.*',
                'categories.name as category_name',
                'categories.price as category_price', // تأكد من أن السعر موجود في الفئة
                'resorts.name as resort_name'
            )->get();
        
            $resorts = resorts::all(); // استرجاع جميع المنتجعات لعرضها في القائمة المنسدلة
            $categories = Categories::all(); // قد تحتاج لاسترجاع الفئات لعرضها في الفلترة
        
            return view('website.explore', compact('chalets', 'resorts', 'categories', 'addressFilter', 'priceOrder'));
        }
        public function resort($id){
            $request = request();
            $priceOrder = $request->query('price_order'); // للحصول على ترتيب السعر
            $categoryId = $request->query('category_id'); // للحصول على معرّف الفئة
            
            $query = Chalets::with(['category.resort'])
                ->join('categories', 'chalets.category_id', '=', 'categories.id')
                ->join('resorts', 'categories.resort_id', '=', 'resorts.id')
                ->where('resorts.id', $id); // تأكد من تصفية النتائج حسب المنتجع
            
            if ($categoryId) {
                $query->where('categories.id', $categoryId); // تصفية النتائج حسب الفئة
            }
            
            if ($priceOrder == 'asc') {
                $query->orderBy('categories.price', 'asc');
            } elseif ($priceOrder == 'desc') {
                $query->orderBy('categories.price', 'desc');
            } else {
                $query->orderBy('resorts.name');  
            }
            
            $chalets = $query->select(
                'chalets.*',
                'categories.name as category_name',
                'categories.price as category_price',
                'resorts.name as resort_name'
            )->paginate(9);
            
            $resort = Resorts::findOrFail($id);
            $categories = Categories::all();
            
            return view('website.resorts', compact('chalets', 'resort', 'categories', 'priceOrder', 'categoryId'));
        }
        public function showChalet($id) {
            $chalet = Chalets::with(['category.resort', 'category.categoryAttach'])->findOrFail($id);
            $category = Categories::with(['categoryAttach'])->get();
            return view('website.chalets', compact('chalet', 'category'));
        }

        
        
}

