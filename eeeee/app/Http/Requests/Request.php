<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{

    public function attributes (){
        $attributes=[];
        if(count($this->rules())==0){

            foreach ($this->rules() as $key=>$value){
                $attributes[$key]=trans('lang.$key');
            }
        }
    }
}
