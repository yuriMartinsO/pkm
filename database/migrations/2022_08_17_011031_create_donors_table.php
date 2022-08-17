<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Address;
use App\Models\Card;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Address::class);
            $table->foreignIdFor(Card::class);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cpf');
            $table->string('phone');
            $table->timestamp('born_at');
            $table->tinyInteger('donationInterval');
            $table->float('donationValue', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }
};
