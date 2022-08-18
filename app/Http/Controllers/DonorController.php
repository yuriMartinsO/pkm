<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Card;
use App\Models\Donor;
use App\Http\Requests\DonorPostRequest;

/**
 * Controller class for doner
 */
class DonorController extends Controller
{
    /**
     * Create a new address
     *
     * @param  \App\Http\Requests\DonorPostRequest $request
     * @return Address|RedirectResponse
     */
    private function createAddress(DonorPostRequest $request)
    {
        $address = new Address();
        $address->street = $request->input('street');
        $address->number = $request->input('number');
        $address->neighborhood = $request->input('neighborhood');
        $address->postalcode = preg_replace('/\D/', '', $request->input('postalcode'));

        $message = 'Erro ao cadastrar endereço';
        try {
            $saved = $address->save();
        } catch (\Exception $e) {
            return back()->with('error', $message);
        }

        if (!$saved) {
            return back()->with('error', $message);
        }

        return $address;
    }

    /**
     * Create a new card
     *
     * @param  \App\Http\Requests\DonorPostRequest $request
     * @return Card|RedirectResponse
     */
    private function createCard(DonorPostRequest $request)
    {
        $card = new Card();

        $cardNumber = Card::maskCardNumber($request->input('cardNumber'));
        $card->cardNumber = $cardNumber;

        $card->cardType = $request->input('card_type');

        if ($card->cardType == Card::CREDIT) {
            $card->cardFlag = $request->input('cardFlag');
        }

        $message = 'Erro ao cadastrar cartão';
        try {
            $saved = $card->save();
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        if (!$saved) {
            return back()->with('error', $message);
        }

        return $card;
    }

    /**
     * Create a new donor
     *
     * @param  \App\Http\Requests\DonorPostRequest $request
     * @return \App\Http\Requests\Response
     */
    public function create(DonorPostRequest $request)
    {
        $response = $this->createAddress($request);
        if (!$response instanceof Address) {
            return $response;
        }
    
        $address = $response;

        $response = $this->createCard($request);
        if (!$response instanceof Card) {
            return $response;
        }

        $card = $response;

        $donor = new Donor();
        $donor->name = $request->input('name');
        $donor->email = $request->input('email');
        $donor->cpf = $request->input('cpf');
        $donor->phone = $request->input('phone');
        $donor->born_at = $request->input('born_at');
        $donor->donationInterval = $request->input('donationInterval');
        $donor->donationValue = floatval(preg_replace('/[^\d\.]/', '', $request->input('donationValue')));
        $donor->address_id = $address->id;
        $donor->card_id = $card->id;

        $message = 'Erro ao cadastrar doador';
        try {
            $saved = $donor->save();
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        if (!$saved) {
            return back()->with('error', 'Erro ao cadastrar doador');
        }

        return back($status = 201)->with('success', 'Doador criado com sucesso');
    }
}
