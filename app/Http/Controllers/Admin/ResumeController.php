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

    public function showEducation($id){
        return DB::table('educations')->where('id','=', $id)->first();
    }

    public function updateEducation(Request $request,$id){
        $education = DB::table('educations')->first();
        return DB::table('educations')->where('id','=',$id)->update([
            'duration'=>$request->duration,
            'institutionName'=>$request->institutionName,
            'address'=>$request->address,
            'field'=>$request->field,
            'details'=>$request->details,
        ]);
    }

    public function deleteEducation($id){
        return DB::table('educations')->where('id','=', $id)->delete();
    }

    public function storeEducation(Request $request){
        return DB::table('educations')->insert([
            'duration'=>$request->duration,
            'institutionName'=>$request->institutionName,
            'address'=>$request->address,
            'field'=>$request->field,
            'details'=>$request->details,
        ]);
    }

    public function showSkill($id){
        return DB::table('skills')->where('id','=', $id)->first();
    }

    public function updateSkill(Request $request,$id){
        return DB::table('skills')->where('id','=',$id)->update([
            'name'=>$request->name
        ]);
    }

    public function deleteSkill($id){
        return DB::table('skills')->where('id','=', $id)->delete();
    }

    public function storeSkill(Request $request){
        return DB::table('skills')->insert([
            'name'=>$request->name
        ]);
    }
    public function showLanguage($id){
        return DB::table('languages')->where('id','=', $id)->first();
    }

    public function updateLanguage(Request $request,$id){
        return DB::table('languages')->where('id','=',$id)->update([
            'name'=>$request->name
        ]);
    }

    public function languageDelete($id){
        return DB::table('languages')->where('id','=', $id)->delete();
    }

    public function storeLanguage(Request $request){
        return DB::table('languages')->insert([
            'name'=>$request->name
        ]);
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
