<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_socials', function (Blueprint $table) {
            $table->bigIncrements('id')-> unsined();
            $table-> interger('user.id');
            $table-> string('social_network');
            $table-> string('social_id');
            $table-> string('social_email');
            $table-> string('social_avatar');

            $table->timestamps();

            $table->foreign('user_id')->references('id') -> on('users');
            $table->foreign('social_email')->references('email') -> on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_social',  function (Blueprint $table){
            $table -> dropForeign('user_socials_user_id_forign');
            $table -> dropForeign('user_socials_social_email_forign')
        })
        Schema::dropIfExists('user_socials');
    }
}
