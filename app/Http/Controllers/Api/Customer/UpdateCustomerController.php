<?php

namespace App\Http\Controllers\Api\Customer;

use App\Commands\Customer\UpdateCustomer;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Customer\UpdateCustomerRequest;
use Illuminate\Http\JsonResponse;

class UpdateCustomerController extends Controller
{
    public function __construct(
        private readonly UpdateCustomer $command,
    )
    {
    }

    /**
     * Handle the incoming request.
     * @param UpdateCustomerRequest $request
     * @param string $customer
     * @return JsonResponse
     */
    public function __invoke(UpdateCustomerRequest $request, string $customer): JsonResponse
    {
        $this->command->handle(
            payload: $request->payload(),
            id: $customer
        );
        return response()->json(['message' => 'Le client a été mis à jour avec succès']);
    }
}
