<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Cashier extends Model
{
    use HasFactory;

    public function delivery_notes(): HasMany
    {
        return $this->hasMany(DeliveryNote::class);
    }
}
