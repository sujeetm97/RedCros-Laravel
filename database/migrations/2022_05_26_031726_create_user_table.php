<?php

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
        Schema::create('user', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_email',100);
            $table->string('user_name',50);
            $table->string('user_mobileNO');
            $table->string('user_address',200);
            $table->enum('user_gender',["M","F","O"])->nullable();
            $table->date('user_dob')->nullable();
            $table->string('user_password');
            $table->boolean('user_status')->default(1);
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
        Schema::dropIfExists('user');
    }
};
