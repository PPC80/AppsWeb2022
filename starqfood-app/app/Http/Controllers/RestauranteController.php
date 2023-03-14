<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use \App\Models\Restaurant;
use \App\Models\Food;
use \App\Models\Image;
use Illuminate\Support\Facades\DB;
use \App\Models\RestaurantCategory;
use Illuminate\Http\Request;
use Cloudder;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Storage;


class RestauranteController extends Controller
{  
    public function index(Request $request){

        $pila = array();

        $buscarpor=$request->get('buscarpor');
       
        $restaurantes= '';
        $restaurantes = Restaurant::where('local_name','like','%' .$buscarpor . '%')->get();


       foreach ($restaurantes as $restaurante) {
        $aux = $restaurante->toArray();
        $restaurante->toArray();
        $ruc = $restaurante->ruc;
        $category_id_fk = $restaurante->category_id_fk;
        // $imagen = Image::where('imageable_id','=',$ruc)->get()->toArray();
        // $categorys = RestaurantCategory::where('id','=',$category_id_fk)->get()->toArray();
        $imagen = db::select("SELECT * FROM restaurant_categories JOIN images WHERE restaurant_categories.id = $category_id_fk AND images.imageable_id =  $ruc");
        $json= json_encode($imagen);
        $array = json_decode($json, true);
        foreach ($array as $id) {
            $restauranteaux = array_merge($aux , $id);
            array_push($pila, $restauranteaux);
        }
      
        
       }

       

    // $restaurantes = Restaurante::get();
        //return view('restaurantes.index', compact('restaurantes', 'buscarpor'));

        $restaurantes = json_decode(json_encode($pila));

        return view('restaurantes.index',['restaurantes' => $restaurantes, 'buscarpor' => $buscarpor]);
        //return dump($restaurantes);
    }


    public function show($ruc){

        $restaurante=Restaurant::findOrFail($ruc);
    

        $pila = array();
        $aux = $restaurante->toArray();
        $restaurante->toArray();
        $ruc = $restaurante->ruc;
        $imagen = Image::where('imageable_id','=',$ruc)->get()->toArray();
        foreach ($imagen as $id) {
            $restauranteaux = array_merge($aux , $id);
            array_push($pila, $restauranteaux);
        }
        
        $restaurantes = json_decode(json_encode($pila));
        $ruc = $restaurante->ruc;

        $platos = Restaurant::find($ruc)->foods()->get();
        return view('restaurantes.show',['restaurantes'=>$restaurantes, 'platos'=>$platos]);


        $restaurant=Restaurant::findOrFail($ruc);

        $image=$restaurant->image;

        return view('admin.restaurant.show',['restaurant'=>Restaurant::findOrFail($ruc)]);

        // return dump($ruc);

        // $restaurant=Restaurant::findOrFail($ruc);
        // $platos = $restaurant -> foods;
        // return view('restaurantes.show',['restaurantes'=>$restaurant, 'platos'=>$platos]);

    
    }

    public function create(){

       
        // $food = new Food();
        // $category = FoodCategory::pluck('category','id');
        // $restaurant = Restaurant::pluck('local_name', 'ruc');

        //$restaurant = new Restaurant();       
        $category = RestaurantCategory::pluck('category','id');


        //return view('food.create', compact('food','category','restaurant'));
     


        return view('restaurantes.create', compact('category'));
        //return view('restaurantes.create');
        //return var_dump( compact('category'));
        
    }


    public function store(Request $request){

        $request->validate([
            'RucLocal'=>['required'],
            'nombreRestaurante'=>['required'],
            'direccionLocal'=>['required'],
            'nombreGerente'=>['required'],
            'TelefonoFijoLocal'=>['required'],
            'TelefonoMovilLocal'=>['required'],
            'DescripcionLocal'=>['required'],
            'fotoLocal'=>['required'],
            'correoLocal'=>['required'],    
        ]);


        $datoRestaurante = request()->except('_token');

        



        $restaurante = new Restaurant;
        $imagen = new Image;


        if($request->hasFile('fotoLocal')){
            $foto = $request->file('fotoLocal');
            $obj = Cloudinary::upload($foto->getRealPath(),['folder'=>'Restaurantes']);
            $url = $obj -> getSecurePath();
            $fotoID = $obj -> getPublicID();
            $destino = '../storage/images/';
            $filename = time(). '-' . $foto->getClientOriginalName();
            $subirImagen = $request->file('fotoLocal')->move($destino, $filename);
            $imagen-> direc_public = $destino . $filename;
        }
        $restaurante-> ruc = $request->input('RucLocal');
        $restaurante-> category_id_fk = $request->input('category_id_fk');
        $restaurante-> user_id_fk = 1;
        $restaurante-> local_name = $request->input('nombreRestaurante');
        $restaurante-> address = $request->input('direccionLocal');
        $restaurante-> local_email = $request->input('correoLocal');
        $restaurante-> ower = $request->input('nombreGerente');
        $restaurante-> local_tel = $request->input('TelefonoFijoLocal');
        $restaurante-> local_movil = $request->input('TelefonoMovilLocal');
        $restaurante-> description = $request->input('DescripcionLocal');
        $imagen-> imageable_id = $request->input('RucLocal');
        $imagen-> url = $url;
        $imagen-> imageable_type = $fotoID;

       //    $restaurante-> tipo_local = $request->input('categoriaLocal');


        


        $restaurante->save();
        $imagen->save();

        session()->flash('status', 'Restaurante Creado con Exito');
        $tipo_local = $request->input('category_id_fk');
         //return var_dump($tipo_local);
        return to_route('restaurants.index');
    }

    public function edit($ruc){
        $restaurante=Restaurant::findOrFail($ruc);



        $ruc = $restaurante->ruc;

        $imagen = Image::where('imageable_id','=',$ruc)->get();
        foreach ($imagen as $id) {
        $url = $id->url;
    }
  
        
         return view('restaurantes.edit',['restaurante'=>$restaurante,'url'=>$url]);
    }


    public function update(Request $request, $ruc, Image $imagen){

        $restaurante=Restaurant::findOrFail($ruc);

        
        $request->validate([
            'RucLocal'=>['required'],
            'nombreRestaurante'=>['required'],
            'direccionLocal'=>['required'],
            'nombreGerente'=>['required'],
            'TelefonoFijoLocal'=>['required'],
            'TelefonoMovilLocal'=>['required'],
            'DescripcionLocal'=>['required'],
            'correoLocal'=>['required'],   
        ]);



        if($request->hasFile('fotoLocal')){
           
            $id_restauratne = $restaurante->ruc;
            $nueva_ruc = $request->input('RucLocal');
            $imagen = image::where('imageable_id','like',$id_restauratne )->get()->toArray();
            foreach ($imagen as $id) {
                $imagenaux = array_merge($id);
            }

           $direc_public = $imagenaux['direc_public'];

           File::delete($direc_public);

           $imageable_type_vieja = $imagenaux['imageable_type'];
           Cloudinary::destroy($imageable_type_vieja);
           $foto = $request->file('fotoLocal');
           $obj = Cloudinary::upload($foto->getRealPath(),['folder'=>'Restaurantes']);
           $url = $obj -> getSecurePath();
           $fotoID = $obj -> getPublicID();
           $destino = '../storage/images/';
           $filename = time(). '-' . $foto->getClientOriginalName();
           $subirImagen = $request->file('fotoLocal')->move($destino, $filename);


           $id_restauratne = $restaurante->ruc;
           $nueva_ruc = $request->input('RucLocal');
           $imagen = image::where('imageable_id','like',$id_restauratne )->get();
                
           $imagen = image::where('imageable_id','like',$id_restauratne )->update(array('imageable_type' => $fotoID));
           $imagen = image::where('imageable_id','like',$id_restauratne )->update(array('url' => $url));
           $imagen = image::where('imageable_id','like',$id_restauratne )->update(array('direc_public' => $destino . $filename));
           $imagen = image::where('imageable_id','like',$id_restauratne )->update(array('imageable_id' => $nueva_ruc));
        }   
       

        $id_restauratne = $restaurante->ruc;
        $nueva_ruc = $request->input('RucLocal');
        $imagen = image::where('imageable_id','like',$id_restauratne )->get();
        $imagen = image::where('imageable_id','like',$id_restauratne )->update(array('imageable_id' => $nueva_ruc));
        $restaurante-> ruc = $request->input('RucLocal');
        $restaurante-> category_id_fk = 1;
        $restaurante-> user_id_fk = 1;
        $restaurante-> local_name = $request->input('nombreRestaurante');
        $restaurante-> address = $request->input('direccionLocal');
        $restaurante-> local_email = $request->input('correoLocal');
        $restaurante-> ower = $request->input('nombreGerente');
        $restaurante-> local_tel = $request->input('TelefonoFijoLocal');
        $restaurante-> local_movil = $request->input('TelefonoMovilLocal');
        $restaurante-> description = $request->input('DescripcionLocal');
        $restaurante->save();

 

        

      // $restaurante-> tipo_local = $request->input('categoriaLocal');
 //       $restaurante-> local_email = $request->input('correoLocal');


        session()->flash('status', 'Informacion actualizada');



        
        $ruc = $request->input('RucLocal');

        $imagen = Image::where('imageable_id','=',$ruc)->get();
        foreach ($imagen as $id) {
        $url = $id->url;
        $restaurante = $request->input('RucLocal');
        
    }
//    // return view('restaurantes.edit',['restaurante'=>$restaurante,'url'=>$url]);
      return to_route('restaurants.index',['restaurante'=>$restaurante,'url'=>$url]);
//         //return view('restaurantes.show',['restaurante'=>$restaurante]);


  // return(dump($imageable_type_vieja));
    }


    public function destroy($ruc, Request $request){

        $restaurante=Restaurant::findOrFail($ruc);
        $ruc = $restaurante->ruc;
 
        $imagen = Image::where('imageable_id','=',$ruc)->get();
            foreach ($imagen as $id) {
            $fotoID = $id->imageable_type;
            $direc_public = $id->direc_public;
            $id->Delete();
        }
        Cloudinary::destroy($fotoID);
        $restaurante->delete(); 
        File::delete($direc_public);

        return to_route('restaurants.index')->with('status','Restaurante Eliminado');
    }
}
