<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
// use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function admin(){
        $totalUser = User::where('vote','!=', null)->count();

        $jumlahVote1 = User::where('vote', '=', 1)->count();
        $jumlahVote2 = User::where('vote', '=', 2)->count();

        $persentase1 = strval(number_format((($jumlahVote1/$totalUser)*100), 1, '.', ''));
        $persentase2 = strval(number_format((($jumlahVote2/$totalUser)*100), 1, '.', ''));

        return view('admin', compact('jumlahVote1','jumlahVote2','persentase1','persentase2'));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'npm' => 'required|min:13',
                'password' => 'required'
            ]
        );
        // dd(Auth::attempt($credentials));
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(auth()->user()->role===1){
                return redirect('/admin');
            }

            return redirect('/voting');
        }

        return redirect('/')->with('loginError','NPM atau Pasword anda salah')
        ->withInput($request->only(['npm','password']));
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
