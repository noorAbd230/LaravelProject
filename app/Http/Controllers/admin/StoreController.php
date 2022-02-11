<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Category;
use App\Store;
use App\Rating;

class StoreController extends Controller
{
    public function create() {
        $category = Category::select('*')->get();
        return view('admin/stores/create')->with('categories',$category);
    }

    public function create1() {
        $category = Category::select('*')->first();
        return response()->json([
            'success' => true,
            'posts' => $category
        ]);
    }
    public function index() {

         //$store = Store::with('category')->select('*')->get();
        $store = Store::where('address','london')->limit(2)->get();
          dd($store);
         return view('admin/stores/index')->with('stores',$store);
    }

    public function store(Request $request) {

         $image = $request->file('sImg');
        // return $request->image->storeAs('public',$image)
        $path = 'public/uploads/';

        //$name = $image->getClientOriginalName();

        $name = time()+rand(1,100000000) .'.'. $image->getClientOriginalName();
        Storage::disk('local')->put($path.$name,file_get_contents($image));


        $category = $request['category'];
        $address = $request['address'];
        $sName = $request['sName'];

        $existing_name = Store::where('name',$sName)->exists();
            if ($existing_name) {
                $store = Store::where('name',$sName)->first();
                $store->name = $sName;
                $store->save();
            }else{
                $store = new Store();
                $store->name = $sName;
                $store->address = $address;
                $store->rate = 0;
                $store->category_id = $category;
                $store->img = 'uploads/'.$name;
                $store->save();
            }
        
    
        return redirect()->back();

    }


    public function edit($id) {
        $store = Store::where('id',$id)->first();
        $category = Category::select('*')->get();
        return view('admin.stores.edit')->with('store',$store)->with('categories',$category);
    }

    public function update(Request $request , $id) {

        if($request->hasFile('sImg')){
            $image = $request->file('sImg');
            $path = 'public/uploads/';

            $name = time()+rand(1,100000000) .'.'. $image->getClientOriginalName();
            Storage::disk('local')->put($path.$name,file_get_contents($image));
       
        }


        $sName = $request['sName'];
        $category = $request['category'];
        $address = $request['address'];

        $store = Store::where('id',$id)->first();
        
        $store->name = $sName;
        $store->address = $address;
        $store->category_id = $category;

        if($request->hasFile('sImg')){
            $store->img = 'uploads/'.$name;
        }
        
        $store->save();

        return redirect()->back();

    }

    public function destroy($id) {
        Store::where('id',$id)->delete();
        Rating::where('store_id',$id)->delete();
         return redirect()->back();
    }

   
}
