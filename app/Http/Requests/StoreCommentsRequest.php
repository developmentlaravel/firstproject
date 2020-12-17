<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Rules\Uppercase;

class StoreCommentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        // dd(request());
        return [
            'title' =>  'required | max:200 |unique:articles,title ',
            'excerpt'=> 'required  | max:5000 ',
            'body' => [ 'required' , new Uppercase ],
        ];

    }

//     public function message()
// {
//     return trans('validation.uppercase');
// }
}
