<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cslist', function (Blueprint $table) {
            $table->increments('csID');
            $table->unsignedInteger('userID');
            $table->string('CsTitle');
            $table->string('CsSolution');

            $table->foreign('userID')->references('userID')->on('users');
        });

        DB::table('cslist')->insert([
            ['userID' => '1', 'CsTitle' => 'Payment Not found', 'CsSolution' => 'reload page'],
            ['userID' => '2', 'CsTitle' => 'Appointment Not found', 'CsSolution' => 'reload page'],
            ['userID' => '3', 'CsTitle' => 'Lab Report Not found', 'CsSolution' => 'reload page'],
            ['userID' => '4', 'CsTitle' => 'Account cant be edit  ', 'CsSolution' => 'Error fixed'],
            ['userID' => '5', 'CsTitle' => 'Location found', 'CsSolution' => 'We have no offline location'],
            ['userID' => '6', 'CsTitle' => 'Why no vaccine info  ', 'CsSolution' => 'We will updating soon '],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
