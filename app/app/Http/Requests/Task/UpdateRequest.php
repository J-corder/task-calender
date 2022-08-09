<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
        ];
    }

    public function id(): int
    {
        return (int) $this->route('taskId');
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
