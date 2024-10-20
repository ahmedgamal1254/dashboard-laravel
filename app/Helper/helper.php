<?php

use App\Models\Language;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
function all_languages(){
    return Language::select("icon","native_name","name_en")->where("status",1)->get();
}

function current_language(){
    $icon=App::getLocale();

    $lang=DB::table("languages")->where("icon",$icon)->where("status",1)->first();

    if(!$lang){
        return Language::where("icon","us")->first();
    }else{
        return $lang;
    }
}


