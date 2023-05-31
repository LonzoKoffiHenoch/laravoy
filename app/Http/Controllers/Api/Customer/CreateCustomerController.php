<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Customer;

use App\Commands\Customer\CreateCustomer;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Customer\CreateCustomerRequest;

final class CreateCustomerController extends Controller
{

    public function __construct(
        private readonly CreateCustomer $command,
    )
    {

    }

    public function __invoke(CreateCustomerRequest $request)
    {
        return $this->command->handle($request->payload());

    }
}
