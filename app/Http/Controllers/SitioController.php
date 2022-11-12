<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitioController extends Controller
{
    public function contact($code= null)
    {
        if($code == '1234'){
            $name = "Oliver";
            $email = "oliver.quintero@gmail.com";
            $comment = "Quisiera ofrecerle un empleo.";
        }else{
            $name = null;
            $email = null;
            $comment = null;
        }
    
        return view('contact', compact('code', 'name', 'email', 'comment'));
    }

    public function recibeFormContacto(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|min:3',
            'email' => 'required|email',
            'comment' => 'required|min:3',
        ]);

        DB::table('contacts')->insert([
            'name'=>$request->name,
            'email'=>['required','email'],
            'comment'=>$request->comment,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        return redirect('/contact');     
    }

    public function landingpage()
    {
        return view('landingpage');
    }
}