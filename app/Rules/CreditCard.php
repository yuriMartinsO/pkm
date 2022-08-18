<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;
use Illuminate\Contracts\Validation\DataAwareRule;
use App\Models\Card;

class CreditCard implements DataAwareRule, InvokableRule
{
    /**
     * All of the data under validation.
     *
     * @var array
     */
    protected $data = [];

    /**
     * Set the data under validation.
     *
     * @param  array  $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        if ($this->data['card_type'] == Card::DEBIT) {
            return;
        }

        $firstSixDigits = substr($value, 0, 6);
        $lastDigits = substr($value, -4);

        $exists = Card::where('cardNumber', 'LIKE', "{$firstSixDigits}X%")
            ->where('cardNumber', 'LIKE', "%X{$lastDigits}")
            ->exists();

        if ($exists) {
            $fail('Número de cartão de crédito já existe.');
        }
    }
}
