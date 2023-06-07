<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Db;
use Illuminate\Support\Facades\Hash;

class kontroller extends Controller
{
    //
    public function main(){
        if(Auth::check()){
          return view('coba_ujikom.main');  
        }else
        return view('yo');
    }

//login
    public function d_login(){
        return view('coba_ujikom.login');
    }  

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/main');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }
//login 

//register
    public function d_register(){
        return view('coba_ujikom.register');
    }

    public function register(Request $request){
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirm' => 'required|same:password',

        ]);

        $user = new User([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        return redirect()->route('user')->with('success', 'Registration complete, you may now login');
    }
//register   

//paket
    public function paket(){
        $data = DB::table('paket')->get();
        return view('coba_ujikom.paket', ['data'=>$data]);
    }
    //create
    public function d_add_paket(){
        return view('coba_ujikom.tambah_paket');
    }

    public function add_paket(Request $request){
        $request->validate([
            'nama_paket' => 'required',
            'harga' => 'required|numeric',
        ]);
        DB::table('paket')->insert([
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga
        ]);
        return redirect()->route('paket');
    }

    public function jenis_paket(){
        $data = DB::table('jenis_paket')->get();
        return view('coba_ujikom.jenis_paket', ['data' => $data]);
    }

    public function d_add_jenis_paket(){
        return view('coba_ujikom.tambah_jenis_paket');
    }

    public function add_jenis_paket(Request $request){
        $request->validate([
            'jenis_paket' => 'required',
            'waktu_pengerjaan' => 'required|numeric',
            'biaya_tambahan' => 'required|numeric',
        ]);

        DB::table('jenis_paket')->insert([
            'jenis_paket' => $request->jenis_paket,
            'waktu_pengerjaan' => $request->waktu_pengerjaan,
            'biaya_tambahan' => $request->biaya_tambahan,
        ]);

        return redirect()->route('jenis_paket');
    }
    //update
    public function d_edit_paket($id_paket){
        $data = DB::table('paket')->where('id_paket', $id_paket)->get();
        return view('coba_ujikom.edit_paket', ['data' => $data]);
    }

    public function edit_paket(Request $request){
        $request->validate([
            'nama_paket' => 'required',
            'harga' => 'required|numeric',
        ]);

        DB::table('paket')->where('id_paket', $request->id_paket)->update([
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
        ]);

        return redirect()->route('paket');
    }

    public function d_edit_jenis_paket($id_jenis_paket){
        $data = DB::table('jenis_paket')->where('id_jenis_paket', $id_jenis_paket)->get();
        return view('coba_ujikom.edit_jenis_paket', ['data' => $data]);
    }

    public function edit_jenis_paket(Request $request){
        $request->validate([
            'jenis_paket' => 'required',
            'waktu_pengerjaan' => 'required|numeric',
            'biaya_tambahan' => 'required|numeric'
        ]);

        DB::table('jenis_paket')->where('id_jenis_paket', $request->id_jenis_paket)->update([
            'jenis_paket' => $request->jenis_paket,
            'waktu_pengerjaan' => $request->waktu_pengerjaan,
            'biaya_tambahan' => $request->biaya_tambahan
        ]);

        return redirect()->route('jenis_paket');
    }
    //delete
    public function hapus_paket($id_paket){
        DB::table('paket')->where('id_paket', $id_paket)->delete();
        return redirect()->route('paket');
    }

    public function hapus_jenis_paket($id_jenis_paket){
        DB::table('jenis_paket')->where('id_jenis_paket', $id_jenis_paket)->delete();
        return redirect()->route('jenis_paket');
    }

    
//paket

//user
    public function user(){
        $data=DB::table('tb_user')->where('role', 'Kasir')->get();
        return view('coba_ujikom.user', ['data' => $data]);
    }
    //create //make register ae wis asu
    public function d_add_user(){
        return view('coba_ujikom.tambah_user'); 
    }
    //update
    public function d_edit_user($user_id){
        $data = DB::table('tb_user')->where('user_id', $user_id)->get();
        return view('coba_ujikom.edit_user', ['data' => $data]);
    }

    public function edit_user(Request $request){
        $request->validate([
            'nama'=>'required',
            'username' => 'required',
            'pass_confirm' => 'same:password'
        ]);
    if ($request->password == "") {
        # code...
        DB::table('tb_user')->where('user_id', $request->user_id)->update([
        'user_id' => $request->user_id,
        'nama' => $request->nama,
        'username' => $request->username,
    ]);
    return redirect()->route('user');
    }else{
        DB::table('tb_user')->where('user_id', $request->user_id)->update([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('user');
    }
    }

    // public function password_action(Request $request)
    // {
    //     $request->validate([
    //         'old_password' => 'required|current_password',
    //         'new_password' => 'required|confirmed',
    //     ]);
    //     $user = User::find(Auth::id());
    //     $user->password = Hash::make($request->new_password);
    //     $user->save();
    //     $request->session()->regenerate();
    //     return back()->with('success', 'Password changed!');
    // }

    public function delete_user($user_id){
        DB::table('tb_user')->where('user_id', $user_id)->delete();
        return redirect()->route('user');
    }
//user

//member
    public function member(){
        $data=DB::table('member')->get();
        return view('coba_ujikom.member', ['data' => $data]);
    }
    //create
        public function d_add_member(){
        return view('coba_ujikom.tambah_member');
    }
    public function add_member(Request $request){
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tlp' => 'required|numeric',
        ]);

        DB::table('member')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
        ]);
        return redirect()->route('member');
    }
    //update
    public function d_edit_member($id_member){
        $data = DB::table('member')->where('id_member', $id_member)->get();
        return view('coba_ujikom.edit_member', ['data' => $data]);
    }

    public function edit_member(Request $request){
        $request->validate([
            'nama'=>'required',
            'alamat' => 'required',
            'tlp' => 'required|numeric'
        ]);

        DB::table('member')->where('id_member', $request->id_member)->update([
                'id_member' => $request->id_member,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'tlp' => $request->tlp,
                'streak' => $request->streak,
        ]);
        return redirect()->route('member');
    }
    //delete
    public function delete_member($id_member){
        DB::table('member')->where('id_member', $id_member)->delete();
        return redirect()->route('member');
    }
//member

//transaksi
    public function transaksi(){
        $data=DB::table('transaksi')->where('status', 'baru')->get();
        return view('coba_ujikom.transaksi', ['data' => $data]);
    }

    public function d_add_transaksi(){
        $tgl=Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
        $data=DB::table('paket')->get();
        $data2=DB::table('jenis_paket')->get();
        return view('coba_ujikom.tambah_transaksi', ['data'=>$data, 'data2'=>$data2, 'tgl'=>$tgl]);
    }

    public function add_transaksi(Request $request){
        $request->validate([
            'nama_client' => 'required',
            'tlp' => 'required|numeric',
            'qty' => 'required|numeric',
            'tanggal' => 'required'
        ]);
        $wPengerjaan = DB::table('jenis_paket')->where('id_jenis_paket', $request->jenis_paket)->value('waktu_pengerjaan');
        $basi = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
        $cok = Carbon::parse($basi);

        $exp = DB::table('transaksi')->latest('tanggal')->first();

        if (!$request->tanggal == $exp) {
            DB::table('total_order')->insert([
                'banyak_order' => 1
            ]);
        }

        $sueasli = $request->qty/$wPengerjaan;
        $cok->addDays($wPengerjaan*$sueasli);

        $bJpaket = DB::table('jenis_paket')->where('id_jenis_paket', $request->jenis_paket)->value('biaya_tambahan');
        $bPaket = DB::table('paket')->where('id_paket', $request->paket)->value('harga');

        $jPaket = DB::table('jenis_paket')->where('id_jenis_paket', $request->jenis_paket)->value('jenis_paket');
        $nPaket = DB::table('paket')->where('id_paket', $request->paket)->value('nama_paket');
        DB::table('transaksi')->insert([
            'nama_client' => $request->nama_client,
            'tlp_client' => $request->tlp,
            'qty' => $request->qty,
            'jenis_paket' => $jPaket,
            'nama_paket' => $nPaket,
            'biaya' => ($bPaket + $bJpaket) * $request->qty,
            'tanggal' => $request->tanggal,
            'tanggal_ambil' => $cok,
            'user_id' => Auth::user()->user_id
        ]);
        return redirect()->route('transaksi');
    }
       
    //update
    public function d_edit_transaksi($id_transaksi){
        $data2=DB::table('paket')->get();
        $data=DB::table('transaksi')->where('id_transaksi', $id_transaksi)->get();
        return view('coba_ujikom.edit_transaksi', ['data' => $data, 'data2'=>$data2]);
    }

    public function edit_transaksi(Request $request){
        $request->validate([
            'nama_client' => 'required',
            'tlp' => 'required|numeric',
            'qty' => 'required|numeric',
        ]);
        $biaya_paket = DB::table('paket')->where('nama_paket', $request->nama_paket)->value('harga');
        $bJpaket = DB::table('jenis_paket')->where('jenis_paket', $request->jenis_paket)->value('biaya_tambahan');
    //silly 
        $tglj = DB::table('jenis_paket')->where('jenis_paket', $request->jenis_paket)->value('waktu_pengerjaan');
        $tgll = Carbon::parse($request->tanggal); 
        $cock = $request->qty/5;
        $balls = $tglj * $cock;
        $tgll->adddays($balls);
    //silly 
        DB::table('transaksi')->where('id_transaksi', $request->id_transaksi)->update([
            'nama_client' => $request->nama_client,
            'tlp_client' => $request->tlp,
            'qty' => $request->qty,
            'tanggal_ambil' => $tgll,
            'biaya' => ($biaya_paket + $bJpaket) * $request->qty, 
        ]);

        return redirect()->route('transaksi');
    }
    //delete
    public function delete_transaksi($id_transaksi){
        DB::table('transaksi')->where('id_transaksi', $id_transaksi)->delete();
        return redirect()->route('transaksi');
    }
    //old
    public function old_transaksi(){
        $data=DB::table('transaksi')->where('status', 'selesai')->get();
        return view('coba_ujikom.old_transaksi', ['data' => $data]);
    }

    public function delete_old($id_transaksi){
        DB::table('transaksi')->where('id_transaksi', $id_transaksi)->delete();
        return redirect()->rotue('old_transaksi');
    }
    //bayar
    public function d_bayar($id_transaksi){
       $data=DB::table('transaksi')->where('id_transaksi', $id_transaksi)->get();
       $tgl=Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
       return view('coba_ujikom.bayar_transaksi', ['data' => $data, 'tgl' => $tgl]);
    }

    public function bayar(Request $request){
        $request->validate([
            'tanggal_bayar' => 'required',
            'bayar' => 'required|numeric|gte:biaya',
        ]); 
        $tggl = DB::table('transaksi')->where('id_transaksi', $request->id_transaksi)->value('tanggal');
        $kd_inv = 'INV'.'-'.$tggl.'-'.$request->id_transaksi;

        $diskon_10 = $request->biaya - ($request->biaya * 10 /100);

        if($request->biaya >= 50000){
            DB::table('transaksi')->where('id_transaksi', $request->id_transaksi)->update([
                'tanggal_bayar' => $request->tanggal_bayar,
                'bayar' => $request->bayar,
                'potongan' => '10%',
                'kembali' => $request->bayar - $diskon_10,
                'kd_invoice' => $kd_inv,
                'status' => 'selesai'
                ]);
        }else {
            DB::table('transaksi')->where('id_transaksi', $request->id_transaksi)->update([
            'tanggal_bayar' => $request->tanggal_bayar,
            'bayar' => $request->bayar,
            'kembali' => $request->bayar - $request->biaya,
            'kd_invoice' => $kd_inv,
            'status' => 'selesai'
            ]);
        }
            
        return redirect()->route('struk', $request->id_transaksi);
    }
    //clear histori
        public function clear_all(){
            DB::table('transaksi')->where('status', 'selesai')->delete();
            return redirect()->route('old_transaksi');
        }
//transaksi
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function struk($id_transaksi){
        $data = DB::table('transaksi')->where('id_transaksi', $id_transaksi)->get();
        $id_kasir = DB::table('transaksi')->where('id_transaksi', $id_transaksi)->value('user_id');
        $kd_inv = DB::table('transaksi')->where('id_transaksi', $id_transaksi)->value('kd_invoice');
        $nama_kasir = DB::table('tb_user')->where('user_id', $id_kasir)->value('nama');
        return view('coba_ujikom.struk', ['data' => $data , 'kasir' => $nama_kasir, 'kd_inv' => $kd_inv]);
    }

//laporan
    public function laporan(){
        $data = DB::table('transaksi')->where('status', 'selesai')->get();
        return view('coba_ujikom.laporan', ['data' => $data]);
    }

//cari
    public function cari(Request $request){
        $data = DB::table('transaksi')->where('nama_client', $request->cari_nama)->get();
        return view('coba_ujikom.transaksi', ['data' => $data]);
    }
}


