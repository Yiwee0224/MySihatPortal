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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->date("apDate")->nullable();
            $table->string('apTime');
            $table->string('apName');
            $table->string('apPlace');
            $table->unsignedInteger('userID');

            $table->foreign('userID')->references('userID')->on('users');
        });






        DB::table('appointment')->insert([
            ['userID' => '1', 'apName' => 'Health Screening', 'apPlace' => 'Pantai Hospital  ', 'apDate' => '2023-2-16', 'apTime' => '05.00pm'],
            ['userID' => '2', 'apName' => 'Urine Test', 'apPlace' => ' Columbia Asia Hospital ', 'apDate' => '2023-2-17', 'apTime' => '06.00pm'],
            ['userID' => '3', 'apName' => 'Blood Test', 'apPlace' => 'Sri kota Hospital  ', 'apDate' => '2023-2-18', 'apTime' => '04.00pm'],
            ['userID' => '4', 'apName' => 'DNA Test', 'apPlace' => ' Bukit Tinggi Hospital ', 'apDate' => '2023-2-19', 'apTime' => '05.00pm'],
            ['userID' => '5', 'apName' => 'Medical Consultation', 'apPlace' => 'Tengku Ampuan Rahimah Hospital  ', 'apDate' => '2023-2-20', 'apTime' => '03.00pm'],
            ['userID' => '6', 'apName' => 'Pre Maritial Screening', 'apPlace' => 'Tengku Ampuan Rahimah Hospital  ', 'apDate' => '2023-2-21', 'apTime' => '06.00pm'],

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
