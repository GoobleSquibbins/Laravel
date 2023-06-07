<?php

namespace App\Http\Controllers;

use App\Models\octahedron;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class ligmaController extends Controller
{
//w
    public function kum(){
        return view('gooblesquibbins');
    }

    public function aaa(){
        $data = DB::table('tb_user')->get();
        return view('yo', ['data' => $data]);
    }

    public function d_save(){
        return view('create');
    }

    public function save(Request $request){
        DB::table('bazoink')->insert([
            'name' => $request->name,
            'descript' => $request->descript
        ]);
        return redirect('hhh');
    }

    public function d_update($id){
        $data = DB::table('bazoink')->where('id', $id)->get();
        return view('update', ['data' => $data]);
    }

    public function update(Request $request){
        DB::table('bazoink')->where('id', $request->id)->update([
            'name' => $request -> name,
            'descript' => $request -> descript
        ]);
        return redirect('/hhh');
    }

    public function delete($id){
        DB::table('bazoink')->where('id', $id)->delete();
        return redirect('/hhh');
    }
//w

//register
    public function d_register(){
        return view('register');
    }

    public function register(Request $request){
        $request -> validate([
            'name' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = new octahedron ([
            'name' => $request -> name,
            'username' => $request -> username,
            'password' => Hash::make($request->password),
        ]);
        $user -> save();

        return redirect()->route('login')->with('success', 'registration success');
    }
//register

//login
    public function d_login(){
        return view('login');
    }
//login
}
