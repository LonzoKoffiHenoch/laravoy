<?php

namespace App\Commands\Customer;

use App\Contracts\DataTransfertObject;
use App\Models\Customer;

class UpdateCustomer
{

    public function handle(DataTransfertObject $payload, string $id): void
    {
        $customer = Customer::query()->findOrFail($id);
        $customer->update((array)$payload);
    }
}
