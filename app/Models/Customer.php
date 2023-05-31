<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Customer extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'name',
        'first_name',
        'address',
        'phone',
    ];

    //    public function user(): BelongsTo
    //    {
    //        return $this->belongsTo(User::class, 'user_id');
    //    }
}
