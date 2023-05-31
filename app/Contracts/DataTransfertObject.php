<?php

declare(strict_types=1);

namespace App\Contracts;

use App\Http\Requests\Api\Customer\CreateCustomerRequest;

interface DataTransfertObject
{
    public static function formRequest(CreateCustomerRequest $request): self;

    public function toArray(): array;

}
