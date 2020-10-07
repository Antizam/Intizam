<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('phone_number')->default('05xxxxxxxx');
            $table->boolean('is_admin')->default(0);
            $table->string('email')->unique();
            $table->string('city')->default('city');
            $table->string('neighborhood')->default('neighborhood');
            $table->time('sun')->default('00:00:00');
            $table->time('mon')->default('00:00:00');
            $table->time('tue')->default('00:00:00');
            $table->time('wed')->default('00:00:00');
            $table->time('thu')->default('00:00:00');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
