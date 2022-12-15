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
            $user=Auth::user();
            return view(('admin.index'), compact('user'));
            //return response()->json($response,200);
        }else{
            //return response()->json($response,400);
            return view('admin.error');
        }
    }
    public function details(){
        $user=Auth::user();
        $response['user']=$user;
        return response()->json($response,200);
    }
    public function eventsview(){
        $events = Events::all();
        return view(('admin.eventsview1'), compact('events'));
    }
    public function eventslist(){
        $events = Events::all();
        return view(('admin.eventsview1'), compact('events'));;
    }
    public function annilist(){
        $annivers = annivers::all();
        return view(('admin.anniversarysview'), compact('annivers'));;
    }

    public function eventsadd(Request $request){
        $events = Events::all();
        return view(('admin.eventsadd'), compact('events'));;
    }
    public function addevent(Request $request){
        $data= new events;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->start=$request->start;
        $data->end=$request->end;
        $data->venue=$request->venue;
        $data->save();
        $events = Events::all();
        return view(('admin.eventsview1'), compact('events'));;
    }

    public function eventedit($id){
        $events = Events::find($id);
        return view(('admin.eventedit'), compact('events'));;
    }
    public function editevent(Request $request, $id){
        $data = Events::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        $data->start=$request->start;
        $data->end=$request->end;
        $data->venue=$request->venue;
        $data->save();
        $events = Events::all();
        return view(('admin.eventsview1'), compact('events'));
    }
    public function eventdetails(Request $request, $id){
        $events = Events::find($id);

        return view(('admin.eventdetails'), compact('events'));
    }
    public function editanni($id){
        $annivers = Annivers::find($id);
        return view(('admin.anniversedit'), compact('annivers'));
    }
    public function anniedit(Request $request, $id){
        $data = Annivers::find($id);
        $data->name=$request->name;
        $data->anniversary=$request->anniversary;
        $data->start=$request->start;
        $data->end=$request->end;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->save();
        $annivers = Annivers::all();
        return view(('admin.anniversarysview'), compact('annivers'));;
    }
    public function annidetails(Request $request, $id){
        $annivers = annivers::find($id);

        return view(('admin.anniverdetails'), compact('annivers'));;
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
    public function userdetails(Request $request, $id){
        $user = User::find($id);

        return view(('admin.userdetails'), compact('user'));;
    }
    public function userslist(){
        $user = User::all();
        return view(('admin.userview'), compact('user'));;
    }

    public function useredit($id){
        $user = User::find($id);
        return view(('admin.edituser'), compact('user'));;
    }
    public function editusers(Request $request, $id){
        $data = User::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->gender=$request->gender;
        $data->usertype=$request->usertype;
        $data->password=Hash::make($data['password']);
        $data->save();
        $user = User::all();
        return view(('admin.userview'), compact('user'));
    }
    public function anniversaryview(){
        $annivers = annivers::all();
        return view(('admin.anniversarysview'), compact('annivers'));;
    }
    public function anniversarysadd(Request $request){
        $annivers = annivers::all();
        return view(('admin.anniversaryadd'), compact('annivers'));;
    }
    public function addanniversary(Request $request){
        $data= new annivers;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->anniversary=$request->anniversary;
        $data->start=$request->start;
        $data->end=$request->end;
        $data->address=$request->address;
        $data->save();
        $annivers = annivers::all();
        return view(('admin.anniversarysview'), compact('annivers'));;
    }
    public function deleteanni($id){

        $data=annivers::find($id);
        $data->Delete();
        $annivers = annivers::all();
        return view(('admin.anniversarysview'), compact('annivers'));;

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
