<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'title'=>'required|string|max:255',
            'short_description'=>'required|string|max:255',
            'video_url'=>'required|string|max:255',
            'image'=>'required|mimes:jpg,png,jpeg,gif,svg,webp,avif|max:2048',
        ];
    }
}
