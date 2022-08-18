<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model class for card
 */
class Card extends Model
{
    use HasFactory;

    /**
     * Constantes de tipo de cartão
     */
    const DEBIT = 'debito';
    const CREDIT = 'credito';

    /**
     * Data allowed of filling
     */
    protected $fillable = [
        'cardNumber',
        'cardFlag'
    ];

    /**
     * mask the card number
     *
     * @param string $cardNumber
     * @return string
     */
    public static function maskCardNumber(string $cardNumber)
    {
        return preg_replace("/(?<=.{6}).(?=.{4})/", "X", $cardNumber);
    }
}
