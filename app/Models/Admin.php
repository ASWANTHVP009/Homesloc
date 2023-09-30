<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ($value == 1) ? "Enabled" : "Disabled",
        );
    }
}
