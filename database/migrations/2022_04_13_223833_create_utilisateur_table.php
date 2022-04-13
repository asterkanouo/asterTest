<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->integer('id', true)->index('code_user');
            $table->text('compte')->nullable();
            $table->text('password')->nullable();
            $table->text('nom')->nullable();
            $table->text('prenom')->nullable();
            $table->integer('code_groupe')->nullable();
            $table->text('statut')->nullable();
            $table->string('email', 50);
            $table->string('name', 191);
            $table->boolean('is_admin')->default(true);
            $table->boolean('is_vendeur')->default(false);
            $table->boolean('is_caissier')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->unsignedBigInteger('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('utilisateur');
    }
}
