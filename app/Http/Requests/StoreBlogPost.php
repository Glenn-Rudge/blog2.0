<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class StoreBlogPost extends FormRequest
    {

        public function authorize()
        {
            return true;
        }

        public function rules()
        {
            return [
                "title" => "bail|required|min:5|max:100",
                "content" => "required|min:10",
                "thumbnail" => "required|image|mimes:jpg,jpeg,png,svg|max:5000"
            ];
        }
    }
