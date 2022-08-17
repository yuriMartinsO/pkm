<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Card;
use Illuminate\Http\Request;
use App\Models\Donor;
use Illuminate\Support\Collection;

/**
 * Controller class for doner
 */
class DonorController extends Controller
{
    /**
     * Show the donation interval options
     */
    public static function showDonationIntervalOptions()
    {
        $options = Donor::DONATION_INTERVALS;
        $html = '';

        foreach ($options as $key => $optionName) {
            $html .= "<option value={$key}>{$optionName}</option>";
        }

        echo $html;
    }

    /**
     * Create a new donor
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $requestFieldsCollection = new Collection($request->all());
        $donorFields = (new Donor)->getTableColumns();
        $addressFields = (new Address())->getTableColumns();
        $cardFields = (new Card)->getTableColumns();

        $address = Address::create(
            $requestFieldsCollection->only($addressFields)->all()
        );

        if (!$address) {
            return back()->with('error', 'Erro ao cadastrar endereço');
        }

        $card = Card::create(
            $requestFieldsCollection->only($cardFields)->all()
        );

        if (!$card) {
            return back()->with('error', 'Erro ao cadastrar cartão');
        }

        $fieldsDonor = $requestFieldsCollection->only($donorFields)->all();
        $fieldsDonor['address_id'] = $address->id;
        $fieldsDonor['card_id'] = $card->id;

        $donor = Donor::create(
            $fieldsDonor
        );

        if (!$donor) {
            return back()->with('error', 'Erro ao cadastrar doador');
        }

        return back($status = 201)->with('success', 'Doador criado com sucesso');
    }
}
