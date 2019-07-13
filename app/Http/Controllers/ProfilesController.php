<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
   
    public function index(User $user)
    {
        //$user=User::findOrFail  ($user);
        #dd($user);
        return view('profiles/index',compact('user'));
    }
    public function edit(User $user){
        
        $this->authorize('update',$user->profile);
        return view('profiles/edit',compact('user'));
    }
    public function update(User $user){
        $this->authorize('update',$user->profile);
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url'=>'url',
            'image'=>'',
        ]);
        if(request('image')){

            $imagePath=request('image')->store('profile','public');
            $image=Image::make(public_path("storage/".$imagePath))->fit(1200,1200);
            $image->save();
            auth()->user()->profile->update(array_merge(
                $data,
                array("image"=>$imagePath) #ovo se radi jer ne zelimo fajl nego path u fajl kada pohranimo data
            ));
        }
        else{
            auth()->user()->profile->update($data);
        }
        
        
        return redirect('/profile/'.$user->id);
    }
}
