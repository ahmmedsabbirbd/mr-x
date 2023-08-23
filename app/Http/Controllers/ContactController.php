<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function page() {
        $seo=DB::table('seoproperties')->where('pageName', '=', 'contact')->first();
        return view('pages.contact',['seo'=>$seo]);
    }

    public function contactRequest(StoreContactRequest $request) {
        $form = DB::table('contacts')
        ->insert([
            'fullName'=> $request->fullName,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'message'=> $request->message,
        ]);

        if($form) {
            return response()->json([
                'status'=>201,
                'data' => 'Data Created'
            ], 201);
        } else {
            return response()->json([
                'status'=>404,
                'data' => 'Message not sent'
            ]);
        }
    }
}
