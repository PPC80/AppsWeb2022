<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RestaurantEditRequest;
use App\Http\Requests\RestaurantRequest;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\RestaurantCategory;
use App\Models\User;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
  
    public function index()
    {
        $restaurants=Restaurant::all();
        return view('admin.restaurant.index',['restaurants'=>$restaurants]);

    }

  
    public function create()
    {
        $users=User::orderBy('user_id','desc')->whereNot('rol_id_fk',3)->get(['user_id','username','email','created_at']);
        $categories=RestaurantCategory::orderBy('category')->get();
        return view('admin.restaurant.create',['users'=>$users,'categories'=>$categories]);

    }

    
    public function store(RestaurantRequest $request)
    {
        $restaurant=Restaurant::create($request->validated());
     
        $id=$restaurant->ruc;
        $direction='StarQfoot/restaurants/Logos';
        
        if(isset($request->validated()['image']) && $request->validated()['image']){

            $image = $request->file('image');  
            //$extension = $image->getClientOriginalExtension();
            //$newName=$id.'_logo.'.$extension;
            $newName=$id.'_logo.';
            $path = $request->file('image')->storeAS('public/'.$direction,$newName.$image->extension());
            $logo = storage_path($path);
            $obj = Cloudinary::upload($image->getRealPath(),['folder'=>$direction]);
            $url = $obj -> getSecurePath();
            $imagenID = $obj -> getPublicID();
            $result = Storage::deleteDirectory($direction, true);
            $restaurant->image()->create(['url'=>$url,'direc_public'=>$imagenID]);
             $result = Storage::deleteDirectory($direction, true);
        }
    
         return view('admin.restaurant.show',['restaurant'=>Restaurant::findOrFail($id)]);
    }

    public function show($ruc)
    {
        $restaurant=Restaurant::findOrFail($ruc);

        $image=$restaurant->image;

        return view('admin.restaurant.show',['restaurant'=>Restaurant::findOrFail($ruc)]);
    }

 
    public function edit($id)
    {
        //
    }


    public function update(RestaurantEditRequest $request, Restaurant $restaurant)
    {
        
        $restaurant->Restaurant::where('ruc', 1)->update($request->validated());
        
        $id=$restaurant->id;
        $direction='StarQfoot/restaurants/Logos';
        $restaurant->save();
        if(isset($request['image'])){
            $image = $request->file('image');
            $obj = Cloudinary::upload($image->getRealPath(),['folder'=>$direction]);
            $url = $obj -> getSecurePath();
            $imagenID = $obj -> getPublicID();
            if(isset($restaurant-> image->public_id))
            {
                Cloudinary::destroy($restaurant-> image->public_id);
                $restaurant->image()->update(['url'=>$url,'public_id'=>$imagenID]);
            }else{
                $restaurant->image()->create(['url'=>$url,'public_id'=>$imagenID]);
            }
        }
        
            
        return redirect()->route('restaurants')->with('success','Se ha actualizado correctamente su información');
    }

    
    public function destroy(Restaurant $restaurant)
    {
        if(isset($restaurant->image->direc_public)){
            $fotoID = $restaurant->image->direc_public;
            Cloudinary::destroy($fotoID);
        }
        
        $restaurant->delete();
        return to_route('restaurants')->with('success','Se ha eliminado correctamente su información');
    }
}
