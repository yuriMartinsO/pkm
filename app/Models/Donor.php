<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model class for donor
 */
class Donor extends Model
{
    use HasFactory;
    use GetTableColumnsTrait;

    /**
     * Constants of donation interval
     */
    const UNIQUE = 1;
    const BIMONTHLY = 2;
    const SEMIANNUAL = 3;
    const YEARLY = 4;

    const DONATION_INTERVALS = [
        self::UNIQUE => 'Único',
        self::BIMONTHLY => 'Bimestral',
        self::SEMIANNUAL => 'Semestral',
        self::YEARLY => 'Anual' 
    ];
    
    /**
     * Dados de doador protegidos por requisição
     */
    protected $guarded = array();
}
