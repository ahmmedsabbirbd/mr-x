<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contactpage() {
        return view('pages.admin.contact.index');
    }

    public function ContactMessageList() {
        $contacts = DB::table('contacts')->get();

        if($contacts) {
            return response()->json([
                'status'=>200,
                'data' => $contacts
            ]);
        } else {
            return response()->json([
                'status'=>404,
                'data' => 'Data not found'
            ]);
        }
    }

    public function getContactMessage($id) {
        $contact = DB::table('contacts')
            ->where('id', $id)
            ->first();

        if($contact) {
            return response()->json([
                'status'=>200,
                'data' => $contact
            ]);
        } else {
            return response()->json([
                'status'=>404,
                'data' => 'Data not found'
            ]);
        }
    }

    public function deleteContactMessage($id){
        return DB::table('contacts')->where('id','=', $id)->delete();
    }
}
