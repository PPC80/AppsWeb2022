<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{

    public function index()
    {
        $users=User::all();

        return view('admin.user.index',['users'=>$users]);
    
    }


    public function create()
    {
        return view('admin.user.createUser');
    }


    public function store(RegisterRequest $request)
    {
        $user=User::create($request->validated());
        $profile=$user->profile()->create($request->getDataProfile());
        return redirect()->route('users.index');
    }


    public function show($id)
    {
        $user = User::findOrFail($id);
        $profile = $user->profile;
        $restaurat=$user->restaurant;
        return view('admin.user.show',['user'=>User::findOrFail($id)]);
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        $profile = $user->profile;
		return view('admin.user.edit',['user'=>User::findOrFail($id)]);
    }


    public function update(UserUpdateRequest $request, $id)
    {

        $user = User::findOrFail($id);
		$user->update($request->validated());
		$profileData = $request->except('email');
		$profile = Profile::where('user_id_fk', $request->id)->firstOrFail();
		$profile->update($profileData);
		
		return redirect()->route('users.show',$id);
  
    }

    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success','Usuario eliminado exitosamente.');
    }
}
