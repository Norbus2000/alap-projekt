<?php

use App\Models\kategoria;
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
        Schema::create('kategorias', function (Blueprint $table) {
            $table->id();
            $table->string('kategorianev');
            $table->string('timestamps')->nullable();
        });
        kategoria::create(['kategorianev'=>'Matek']);
        kategoria::create(['kategorianev'=>'Természetvédelem']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategorias');
    }
};
