<?php

use App\Models\Language;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
function all_languages(){
    return Language::select("icon","native_name","name_en","language")->where("status",1)->get();
}

function current_language(){
    $icon=App::getLocale();

    $lang=DB::table("languages")->where("language",$icon)->where("status",1)->first();

    if(!$lang){
        return Language::where("language","en")->first();
    }else{
        return $lang;
    }
}


