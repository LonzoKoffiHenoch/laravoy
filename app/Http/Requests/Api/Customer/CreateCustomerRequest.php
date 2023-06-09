<?php

declare(strict_types=1);

namespace App\Http\Requests\Api\Customer;

use App\Dto\Customer\CreateCustomerDto;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

final class CreateCustomerRequest extends FormRequest
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
     * @return array<string, ValidationRule,array>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3'],
            'first_name' => ['required', 'min:3'],
            'address' => ['min:3'],
            'phone' => ['required', 'min:10', 'max:10'],
        ];
    }

    public function payload(): CreateCustomerDto
    {
        return new CreateCustomerDto(...$this->validated());
    }
}
