<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class VoteController extends Controller
{
    public function vote(Request $request){
        $npm = $request->input('npm');
        $vote = $request->input('vote');
        
        $user = User::where('npm','=',$npm)->first();
        $user->vote = $vote;
        $user->save();
        return redirect('/voting');
    }

    public function countVote(){
        $totalVote = User::where('vote', '!=', null)->count();
        $totalUser = User::where('role','=',0)->count();
        $totalVote1 = User::where('vote', '=', 1)->count();
        $totalVote2 = User::where('vote', '=', 2)->count();
        
        $persentaseVote1 = $totalVote != 0 ? number_format(($totalVote1 / $totalVote) * 100, 1, '.', '') : 0;
        $persentaseVote2 = $totalVote != 0 ? number_format(($totalVote2 / $totalVote) * 100, 1, '.', '') : 0;
        
        $data = [
            'totalVote1' => $totalVote1,
            'totalVote2' => $totalVote2,
            'persentaseVote1' => $persentaseVote1,
            'persentaseVote2' => $persentaseVote2,
            'totalSeluruhVote' => $totalVote,
            'totalSeluruhUser' => $totalUser
        ];
        
        return response()->json($data);
    }    
}
