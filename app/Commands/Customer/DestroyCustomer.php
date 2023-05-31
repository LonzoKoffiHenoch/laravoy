<?php

namespace App\Commands\Customer;

use App\Models\Customer;

class DestroyCustomer
{
    public function run(string $id): void
    {
        $customer = Customer::query()->findOrFail($id);
        $customer->delete();
    }
}
