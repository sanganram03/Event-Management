<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
//use Validator;
use App\Models\User;
use App\Models\Events;
use App\Models\Annivers;

class ApiController extends Controller
{
    public function register(){
        return view('register');
    }
    public function userregister(Request $request){
        $validator = Validator::make($request->all(),
        [
            'name' =>'required',
            'email' => 'required|email',
            'phone' => 'required',
            'gender' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ] );
        if ($validator->fails()) {
            return response()->json(['message'=>'validation error'], 400);
        }
        $data=$request->all();
        $data['password']=Hash::make($data['password']);
        $user=User::create($data);
        $response['token'] = $user->createToken('matrimony');
        $response['name']=$user->name;

        return view('admin.index');
    }
    public function login(){
        return view('login');
    }
    public function loginuser(Request $request){
        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')] )){
            $user=Auth::user();
            $response['token'] = $user->createToken('matrimony');
            $response['name']=$user->name;
            return response()->json($response,200);
        }else{
            return view('admin.index');
        }
    }
    public function details(){
        $user=Auth::user();
        $response['user']=$user;
        return response()->json($response,200);
    }
    public function eventsview(){
        $events = Events::all();
        return view(('admin.eventsview1'), compact('events'));;
    }
    public function eventsadd(Request $request){
        $events = Events::all();
        return view(('admin.eventsadd'), compact('events'));;
    }
    public function addevent(Request $request){
        $data= new events;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->start_time=$request->start_time;
        $data->venue=$request->venue;
        $data->save();
        $events = Events::all();
        return view(('admin.eventsview1'), compact('events'));;
    }
    public function usersview(){
        $user = User::all();
        return view(('admin.userview'), compact('user'));;
    }
    public function usersadd(Request $request){
        $user = User::all();
        return view(('admin.usersadd'), compact('user'));;
    }
    public function adduser(Request $request){
        $data= new user;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->gender=$request->gender;
        $data->usertype=$request->usertype;
        $data->password=Hash::make($data['password']);
        $data->save();
        $user = User::all();
        return view(('admin.userview'), compact('user'));;
    }
    public function anniversaryview(){
        $anniversary = annivers::all();
        return view(('admin.anniversarysview'), compact('anniversary'));;
    }
    public function anniversarysadd(Request $request){
        $anniversary = annivers::all();
        return view(('admin.anniversaryadd'), compact('anniversary'));;
    }
    public function addanniversary(Request $request){
        $data= new annivers;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->anniversary=$request->anniversary;
        $data->dateofanni=$request->dateofanni;
        $data->address=$request->address;
        $data->save();
        $anniversary = annivers::all();
        return view(('admin.anniversarysview'), compact('anniversary'));;
    }
    public function deleteanni($id){

        $data=annivers::find($id);
        $data->Delete();
        $anniversary = annivers::all();
        return view(('admin.anniversarysview'), compact('anniversary'));;

    }
    public function deleteeven($id){

        $data=Events::find($id);
        $data->Delete();
        $events = Events::all();
        return view(('admin.eventsview1'), compact('events'));;

    }
    public function deleteuser($id){

        $data=User::find($id);
        $data->Delete();
        $user = User::all();
        return view(('admin.eventsuser'), compact('user'));;

    }


}
