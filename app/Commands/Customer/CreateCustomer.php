<?php

declare(strict_types=1);

namespace App\Commands\Customer;

use App\Contracts\DataTransfertObject;
use App\Models\Customer;
use Illuminate\Http\JsonResponse;

final class CreateCustomer
{
    /**
     * @param DataTransfertObject $payload
     * @return JsonResponse
     */
    public function handle(DataTransfertObject $payload): JsonResponse
    {
        $customer = Customer::query()->create((array)$payload);
        return response()->json(
            data: [
                'customer' => $customer,
                'message' => 'Enregistré Avec succès'
            ],
            status: 200
        );

    }
}
