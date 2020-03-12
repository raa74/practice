<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitRequest extends FormRequest
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
        return [
            'input'=>'required | min:3',
          //  '$a' => 'required | numeric',
        //    '$b' => 'required | numeric',
          //  '$oper' => '+' or '-' or '*' or '/',
        ];
        /*if (!$oper || (!$a && $a != '0') || (!$b && $b != '0')) {
            $error_write = 'Заполнены не все поля';
        }
        else {
            if (!is_numeric($a) || !is_numeric($b)){
                $error_write = 'Введены некорректные данные, требуется число';
            }

        }*/
    }
}
