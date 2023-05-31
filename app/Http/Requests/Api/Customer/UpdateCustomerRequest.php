<?php

namespace App\Http\Requests\Api\Customer;

use App\Dto\Customer\CreateCustomerDto;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'first_name' => ['required', 'min:3'],
            'address' => ['min:3'],
            'phone' => 'nullable|string|max:10',
        ];
    }

    public function payload(): CreateCustomerDto
    {

        return new CreateCustomerDto(...$this->validated());
    }
}
