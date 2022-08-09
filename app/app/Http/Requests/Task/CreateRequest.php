<?php

namespace App\Http\Requests\Task;

use DateTime;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'content' => 'required|max:140',
            'start' => 'required|date|after:yesterday',
            'end' => 'required|date|after_or_equal:start',
        ];
    }

    public function userId(): int
    {
        return $this->user()->id;
    }

    public function content(): string
    {
        return $this->input('content');
    }

    public function start(): string
    {
        return $this->input('start');
    }

    public function end(): string
    {
        return $this->input('end');
    }
}
