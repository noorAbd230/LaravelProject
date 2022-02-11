<?php

namespace App\Http\Controllers\admin;
use App\Helpers\UserSystemInfoHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Rating;

class RatingController extends Controller
{
     public function ratings() {
        
        $store = Rating::with('store')->count();
        if ($store>=3) {
            if($store%2==0){
             $paginate = $store/2;
             }else{
             $paginate = $store-1;
             }
        
        }else{
             $paginate = $store;
        }

             $users = Rating::with('store')->distinct()->count('user_id');

         $ratings = Rating::join('stores','ratings.store_id','stores.id')
         ->select('stores.id','stores.name','stores.img',DB::raw(' SUM(ratings.stars_rated)/ count(ratings.user_id) as starnum'),DB::raw('count(ratings.user_id) as usernum'))->groupby('ratings.store_id')
          ->get();
           
          dd($ratings->toArray());
          return view('admin.stores.rating')->with('ratings',$ratings)->with('usersnum',$users);
    }



    public function search(Request $request) {
        $search = $request['search'];
        $users = Rating::with('store')->distinct()->count('user_id');

         $ratings = Rating::join('stores','ratings.store_id','stores.id')
         ->select('stores.id','stores.name','stores.img',DB::raw(' SUM(ratings.stars_rated)/ count(ratings.user_id) as starnum'),DB::raw('count(ratings.user_id) as usernum'))->groupby('ratings.store_id')->where('name','LIKE','%'.$search.'%')
          ->get();

       
        return view('admin.stores.search')->with('ratings',$ratings)->with('usersnum',$users);
    }
}
