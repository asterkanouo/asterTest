<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depot', function (Blueprint $table) {
            $table->integer('code_depot', true);
            $table->text('libelle')->nullable();
            $table->text('telephone')->nullable();
            $table->text('contact_personne')->nullable();
            $table->string('delai_reglement', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depot');
    }
}
