<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateStudentn extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        //[,,,,,,,,,,]

        return [
            //
            'name'=>"required|string",
            'studentnumber'=>"required|max:12",
            'parentnumber'=>"required|max:12",
            'firstdegree'=>"required|string",
            'seconddegree'=>"required|string",
            'thirddegree'=>"required|string",
            'fourthdegree'=>"required|string",
            'fifthdegree'=>"required|string",
            'sithdegree'=>"required|string",
            'seventhdegree'=>"required|string",
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>"You must enter student name",
            'studentnumber.required'=>"you must enter student number",
            'parentnumber.required'=>"you must enter student parent number",
            'firstdegree.required'=>"you must enter day degree",
            'seconddegree.required'=>"you must enter day degree",
            'thirddegree.required'=>"you must enter day degree",
            'fourthdegree.required'=>"you must enter day degree",
            'fifthdegree.required'=>"you must enter day degree",
            'sithdegree.required'=>"you must enter day degree",
            'seventhdegree.required'=>"you must enter day degree",
        ];
    }
    
}
