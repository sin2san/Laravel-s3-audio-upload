<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class FeedRequest extends FormRequest {

    public function rules()
    {
        return [
            'title' => 'required',
            'audio' => 'required|max:5000|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav'

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please enter title',
            'audio.required' => 'Please select audio',
            'audio.max' => 'Uploaded audio size is greater than 5MB'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
