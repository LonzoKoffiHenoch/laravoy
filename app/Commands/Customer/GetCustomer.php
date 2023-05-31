<?php

namespace App\Commands\Customer;

use App\Http\Resources\Api\Customer\CustomerResource;
use App\Models\Customer;

class GetCustomer
{
    public function handle(string $id): CustomerResource
    {
        return new CustomerResource(Customer::query()->findOrFail($id));
    }
}
