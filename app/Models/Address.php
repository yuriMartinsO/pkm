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
    use GetTableColumnsTrait;

    /**
     * Dados protegidos por requisição
     */
    protected $guarded = array();
}
