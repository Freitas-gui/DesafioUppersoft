<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientusers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',50);
            $table->string('cpf', 11)->unique();
            $table->date('birth');
            $table->string('email',50)->unique();
            $table->string('tel', 15);
            $table->string('address',250);
            $table->string('city',250);
            $table->string('state',250);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientusers');
    }
}
