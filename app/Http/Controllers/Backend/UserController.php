<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function UserView(){
        //$allDataUser=User::all();
        $data['allDataUser']=User::all();
        return view('backend.user.view_user',$data);
    }

    public function UserAdd(){
        //$allDataUser=User::all();
        //$data['allDataUser']=User::all();
        return view('backend.user.add_user');
    }
    
    public function UserStore(Request $request){
        
        $validatedData=$request->validate([
            'email'=>'required|unique:users',
            'textNama'=>'required',
        ]);
// dd($request);
        $data = new User();
        $data->usertype=$request->selectUser;
        $data->name=$request->textNama;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->save();

        return redirect()->route('user.view')->with('info','Data Berhasil Disimpan!!');
        
    }

    public function UserEdit($id){
        $editData=User::find($id);
        return view('backend.user.edit_user', compact('editData'));
    }

    public function UserUpdate(Request $request, $id){
        
        $validatedData=$request->validate([
            'email'=>'required|unique:users',
            'textNama'=>'required',
        ]);

        $data = User::find($id);
        $data->usertype=$request->selectUser;
        $data->name=$request->textNama;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->save();

        return redirect()->route('user.view')->with('info','Data Berhasil Diupdate!!');
        
    }
    
    public function UserDelete($id){
        $editData=User::find($id);
        $editData->delete();
        return redirect()->route('user.view')->with('info','Data Berhasil DiLEnyapKaannnn!!');
    }
}
