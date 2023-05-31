<?php

use App\Models\teszt;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes')->default('v1');
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->string('timestamps')->nullable();
        });

        teszt::create(['kerdes' => 'Mennyi 2+2?', 'v1' => '4','v2' => '2','v3' => '3','v4' => '1', 'kategoriaId' => 1]);
        teszt::create(['kerdes' => 'Mennyi 4+4?', 'v1' => '8','v2' => '21','v3' => '30','v4' => '1111', 'kategoriaId'=> 1]);
        teszt::create(['kerdes' => 'Hova gyűjtjük a szemetet?', 'v1' => 'Kukába','v2' => 'Dunába','v3' => 'Tiszába','v4' => 'Közútra', 'kategoriaId'=> 2]);
        teszt::create(['kerdes' => 'Hova nem dobjuk a szemetet?', 'v1' => 'Balatonba','v2' => 'Kukába','v3' => 'Szemetesbe','v4' => 'Szemétdombra', 'kategoriaId'=> 2]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teszts');
    }
};
