<?php

namespace App\Http\Controllers\Api\Customer;

use App\Commands\Customer\DestroyCustomer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteCustomerController extends Controller
{
    public function __construct(
        private readonly DestroyCustomer $command,
    )
    {

    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $customer)
    {
        $this->command->run(id: $customer);
        return 'success';
    }
}
