<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Category;
use App\Store;
use App\Rating;


class CategoryController extends Controller
{

    public function index() {
       $category = Category::select('*')->get();
         // foreach($category as $cate) {
         //    $img_link = Storage::url($cate->img);
         //    $cate->img = $img_link;
         // }

          //dd($category->toArray());
                // $url = Storage::url()
         return view('admin/category/index')->with('categories',$category);
    }


     public function create()
    {
        return view('admin/category/create');
    }

    public function store(Request $request){

        $image = $request->file('cImg');
        // return $request->image->storeAs('public',$image)
        $path = 'public/uploads/';

        //$name = $image->getClientOriginalName();

        $name = time()+rand(1,100000000) .'.'. $image->getClientOriginalName();
        Storage::disk('local')->put($path.$name,file_get_contents($image));


        $cName = $request['cName'];
        $existing_name = Category::where('name',$cName)->exists();
            if ($existing_name) {
                $category = Category::where('name',$cName)->first();
                $category->name = $cName;
                $category->save();
            }else{
                $category = new Category();
                $category->name = $cName;
                $category->img = 'uploads/'.$name;
                $category->save();
            }
        

        return redirect()->back();
    }

    public function edit($id) {
       $categories = Category::where('id',$id)->first();
        return view('admin.category.edit')->with('categories',$categories);
    }


    public function update(Request $request , $id) {
        

         if($request->hasFile('cImg')){
            $image = $request->file('cImg');
            $path = 'public/uploads/';

            $name = time()+rand(1,100000000) .'.'. $image->getClientOriginalName();
            Storage::disk('local')->put($path.$name,file_get_contents($image));
       
        }


        $cName = $request['cName'];
        $category = Category::where('id',$id)->first();
        
        $category->name = $cName;
        if($request->hasFile('cImg')){
            $category->img = 'uploads/'.$name;
        }
        
        $category->save();

        return redirect()->back();
    }

    public function destroy($id){
         
         $stores = Store::where('category_id',$id)->get();
          foreach($stores as $store){
            $rating = Rating::where('store_id',$store->id)->delete();
            //dd($rating);
          }
         Category::where('id',$id)->delete();
         Store::where('category_id',$id)->delete();
         return redirect()->back();
    }


}
