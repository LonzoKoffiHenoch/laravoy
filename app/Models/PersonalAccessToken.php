<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PersonalAccessToken extends Model
{
    public function tokenable()
    {
        return $this->morphTo('tokenable');
    }
}
