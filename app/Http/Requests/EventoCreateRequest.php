<?php

namespace App\Http\Requests;

use App\Models\Evento;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EventoCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'objeto' => ['string', 'max:255'],
            'activity'=>['string', 'max:255'],
            'address'=>['string', 'max:255'],
            'description'=>['string', 'max:255'],
            'badge'=>['string', 'max:255'],
            'budget'=>['string', 'max:255'],
            'start_date'=>['date', 'max:255'],
            'end_date'=>['date', 'max:255'],
            'start_time'=>['time', 'max:255'],
            'end_time'=>['time', 'max:255'],
        ];
    }
}
