<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceRquest;
use Illuminate\Http\Request;
use DB;

class ResumeController extends Controller
{
    public function resumePage(){
        return view('pages.admin.resume.index');
    }

    public function storeExperience(ExperienceRquest $request){
        return DB::table('experiences')->insert([
            'duration'=>$request->duration,
            'title'=>$request->title,
            'designation'=>$request->designation,
            'details'=>$request->details,
        ]);
    }

    public function deleteExperience($id){
        return DB::table('experiences')->where('id','=', $id)->delete();
    }
    public function showExperience($id){
        return DB::table('experiences')->where('id','=', $id)->first();
    }
    public function experienceUpdate(ExperienceRquest $request,$id){
        $experience = DB::table('experiences')->first();
        return DB::table('experiences')->where('id','=',$id)->update([
            'duration'=>$request->duration,
            'title'=>$request->title,
            'designation'=>$request->designation,
            'details'=>$request->details,
        ]);

    }
}
