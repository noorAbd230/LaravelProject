<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\UserSystemInfoHelper;
use App\Category;
use App\Store;
use App\Rating;

class HomeController extends Controller
{
    public function index() {
        $category = Category::select('*')->get();
        return view('user.home')->with('categories',$category);
    }

    public function stores($id) {

        $category = Category::with('store')->select('*')->where('id',$id)->first();

         return view('user.stores')->with('categories',$category);           
       
    }

    public function search(Request $request) {
        $search = $request['search'];
        $stores = Store::where('name','LIKE','%'.$search.'%')->with('category')->get();
        return view('user.search')->with('stores',$stores);
    }


    public function addRating(Request $request) {
        $user_ip = UserSystemInfoHelper::get_ip();
        $pRating = $request['product_rating'];
        $store_id = $request['store_id'];
        
        $existing_rating = Rating::where('user_id',$user_ip)->where('store_id',$store_id)->exists();

        if ($existing_rating) {
            $rating = Rating::where('user_id',$user_ip)->where('store_id',$store_id)->first();
            $rating->stars_rated = $pRating;
            $rating->save();
        }else{
            $rating = new Rating();
            $rating->user_id = $user_ip;
            $rating->stars_rated = $pRating;
            $rating->store_id = $store_id;
            
            $rating->save();
        }

        
        
        return redirect()->back();

    }


    public function storeInfo($id) {
            $user_ip = UserSystemInfoHelper::get_ip();

            $store = Store::where('id',$id)->first();
            $ratings = Rating::where('store_id',$store->id)->get();
            $rating_sum = Rating::where('store_id',$store->id)->sum('stars_rated');
            $rating_value = UserSystemInfoHelper::divnum($rating_sum,$ratings->count());
            $user_rating = Rating::where('user_id',$user_ip)->where('store_id',$store->id)->first(); 


            return view('user.info')->with('store',$store)->with('rating_value',$rating_value)->with('user_rating',$user_rating);
    }
}
