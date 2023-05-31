<?php

declare(strict_types=1);

namespace App\Dto\Customer;

use App\Contracts\DataTransfertObject;
use App\Http\Requests\Api\Customer\CreateCustomerRequest;

/**
 * @property string $name
 * @property string $first_name
 * @property string $address
 * @property string $phone
 */
final class CreateCustomerDto implements DataTransfertObject
{
    public function __construct(
        public string $name,
        public string $first_name,
        public string $address,
        public string $phone,
    ) {
    }

    public static function formRequest(CreateCustomerRequest $request): DataTransfertObject
    {
        return new self(
            name: (string)$request['name'],
            first_name: (string)$request['first_name'],
            address: (string)$request['address'],
            phone: (string)$request['phone'],
        );
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'first_name' => $this->first_name,
            'address' => $this->address,
            'phone' => $this->phone,
        ];
    }
}
