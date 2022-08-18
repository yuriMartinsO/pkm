<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model class for address
 */
class Address extends Model
{
    use HasFactory;

    /**
     * Data allowed of filling
     */
    protected $fillable = [
        'street',
        'number',
        'neighborhood',
        'postalcode'
    ];
}
