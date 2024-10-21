<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class LanguageController extends Controller
{
    public function index(){
        $locale = request()->segment(1); // e.g., 'en', 'fr', etc.

        return view("admin.languages.index");
    }

    public function allLanguages(){
        $languages=Language::orderByDesc("status");

        return DataTables::of($languages)
        ->addColumn("status",function ($lang){
            if($lang->status == 1){
                return '
                <div class="checkbox-wrapper-19">
                    <input type="checkbox" value="' . $lang->status . '" id="'.$lang->id.'"  type="checkbox" data-id="'. $lang->id .'" class="form control check_status" checked="' . $lang->status .'"  />
                    <label for="'.$lang->id.'" class="check-box">
                </div>';
            }else{
                return '
                <div class="checkbox-wrapper-19">
                    <input type="checkbox" value="' . $lang->status . '" id="'.$lang->id.'" type="checkbox" data-id="'. $lang->id .'" class="form control check_status" />
                    <label for="'.$lang->id.'" class="check-box">
                </div>';
            }
        })
        ->rawColumns(["status"])
        ->make(true);
    }

    public function store(StoreLanguageRequest $request){

        Language::create([
            "name_en" => $request->name_en,
            "native_name" => $request->name_native,
            "icon" => $request->icon,
            "language" => $request->lang,
            "status" => 1,
            "admin_id" => Auth::guard("admin")->user()->id
        ]);

        return response()->json([
            "message" => "تم الاضافة بنجاح",
            "success" => true
        ],201);
    }

    public function status(Request $request){

        Language::find($request->id)->update(["status" => $request->status==1 ? 0:1]);

        return response()->json([
            "message" => "تم التحديث بنجاح",
            "success" => true
        ],201);
    }

    public function edit($lang,$id){
        $language=Language::find($id);

        return response()->json([
            "data" => $language
        ],200);
    }

    public function update(UpdateLanguageRequest $request){
        Language::findOrFail($request->id)->update([
            "name_en" => $request->name_en,
            "native_name" => $request->name_native,
            "icon" => $request->icon,
            "language" => $request->lang,
            "status" => 1,
            "admin_id" => Auth::guard("admin")->user()->id
        ]);

        return response()->json([
            "message" => "تم التعديل بنجاح",
            "success" => true
        ],201);
    }

    public function destroy($lang,int $id){
        $language=Language::findOrFail($id)->delete();

        return response()->json([
            "message" => "تم الحذف بنجاح",
            "success" => true
        ],201);
    }
}
