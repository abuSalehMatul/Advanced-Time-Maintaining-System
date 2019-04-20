<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;
use App\User;
use App\Role; 
use App\User_Image;
use App\Category;
use Image;
class UserController extends Controller
{
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role' => 'required'

        ]);
        $user=User::where('email',$request->email)->get();
        foreach($user as $user){
            $role=Role::where('user_id',$user->id)->first();
            if($role->role== $request->role){
                $id=$user->id;
                break;
            }
        }
        $user=User::find($id);
        Auth::login($user);
        Session::put('user',$user);
        Session::put('role',$role);
        return Redirect::to('/dashboard');
       
    }
    public function dashboard(){
   
        $user=Session::get('user');
        $role=Session::get('role');
        return view('back.dashboard')->with('user',$user)->with('role',$role);
    }
    public function register(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
            'telephone'=>'required',
            'role'=>'required'

        ]);
        $data = Hash::make($request['password']);
        $check=User::where('email',$request->email)->get();
        if($check){
            foreach ($check as $check) {
                $role = Role::where('user_id', $check->id)->first();
                if ($role->role == $request->role) {
                   return redirect()->back();
                }
            }
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->telephone;
        $user->password = $data;
        $user->save();
        $role=new Role;
        $role->user_id=$user->id;
        $role->role=$request->role;
        $role->save();

        if ($request->hasFile('image')) {
           
            $image = $request->file('image');
           
            $filename = time().'.'.$image->getClientOriginalExtension();
          
            $location = public_path('/uploads/image/');

            // Image::make($image)->save($location);
            $image->move( $location, $filename);
        //    return 'hi';
           // $product->image = $filename;
           $user_image= new User_Image;
           $user_image->user_id=$user->id;
           $user_image->image=$filename;
           $user_image->save();
        }
        Auth::login($user);
        Session::put('user', $user);
        Session::put('role', $role);
        return Redirect::to('/dashboard');
    }
    public function test(){
        Session::flush();
    }
    public function logout_user(){
        Session::flush();
        return Redirect::to('/');
    }
    public function category(){
        $user = Session::get('user');
        $role = Session::get('role');
        return view('back.category')->with('user',$user)->with('role',$role);
    }
    public function add_category(){
        $user = Session::get('user');
        $role = Session::get('role');
        return view('back.add_category')->with('user', $user)->with('role', $role);
    }

    public function store_category(Request $request){
        $this->validate($request, [
            'category_name' => 'required',

        ]);
        $category= new Category;
        $category->name=$request->category_name;
        $category->save();
        return Redirect::to('/category');
    }
    public function change_role($id){
       // return $id;
       if($id=='admin'){
            $id=3;
       }elseif($id=='user'){
            $id=1;
       }elseif($id=='manager'){
            $id=2;
       }
       $u=Auth::user();
       $role=Role::where('role',$id)->get();
      // return $role;
       foreach($role as $role){
            $user = User::where('id', $role->user_id)->first();
           
            if($user->email == $u->email){
              
                Auth::login($user);
                Session::put('user',Auth::user());
                Session::put('role',$role);
                Session::flash('message','User Role has been changed ');
            }else{
                if($id==1){
                    Session::flash('message', 'You do not have User account');
                }elseif($id==2){
                    Session::flash('message', 'You do not have Manager account');
                }else{
                    Session::flash('message', 'You do not have Admin account');
                }              
               
            }
            return redirect()->back();
       }
    }
    public function team()
    {
        $user = Session::get('user');
        $role = Session::get('role');
        return view('back.team')->with('user', $user)->with('role', $role);
    }
}
