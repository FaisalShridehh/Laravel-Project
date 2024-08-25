<?php

namespace App\Http\Requests;

use App\JobSchedule;
use App\SalaryType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
class StoreJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Update this according to your authorization logic
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'title' => ['required','string','max:255'],
            'location' => ['required','string','max:255'],
            'company' => ['required','string','max:255'],
            'salary' => ['required','numeric','min:0'],
            'salary_type' => ['required', new Enum(SalaryType::class)],
            'description' => ['require','string'],
            'schedule' => ['required', new Enum(JobSchedule::class)],
            'url' => ['nullable','url'],
            'featured' => ['boolean'],
        ];
    }

    /**
     * Get custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'schedule.required' => 'Please select a valid job schedule.',
            'salary_type.required' => 'Please select a valid salary type.',
        ];
    }
}
