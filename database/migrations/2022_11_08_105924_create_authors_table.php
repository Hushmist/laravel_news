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
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->required();
            $table->string('email')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamps();
        });

        DB::table('authors')->insert([
            'name' => 'author 1',
            'email' => 'Author@gmail.com',
            'avatar' => 'img/ds4f8d4s6_avatar.png',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
};
