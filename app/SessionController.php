<?php

namespace App;

use Illuminate\Http\Request;

class SessionController
{
    public function pullAllData(Request $request)
    {
        $sessionData = $request->session()->get('playlist');
        //dd($sessionData);
        return view('recent', compact('sessionData'));
    }

    public function pushIntoSession($data)
    {
        session()->push('playlist', $data);
    }

}
