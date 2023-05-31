<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Customer;

use App\Commands\Customer\GetCustomer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

final class GetCustomerController extends Controller
{
    public function __construct(
        private readonly GetCustomer $command,
    )
    {

    }

    /**
     * @param Request $request
     * @param string $customer
     */
    public function __invoke(Request $request, string $customer)
    {
        return $this->command->handle(id: $customer);
    }
}
