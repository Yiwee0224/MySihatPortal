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
        Schema::create('labreport', function (Blueprint $table) {
            $table->increments('reportID')->unique();
            $table->unsignedInteger('userID');
            $table->string('userName');
            $table->string('reportTitle');
            $table->date('reportDate');
            $table->string('reportDocument'); //store file path only

            $table->foreign('userID')->references('userID')->on('users');
            $table->foreign('userName')->references('userName')->on('users');
        });

        DB::table('Labreport')->insert([
            ['userID' => '1', 'userName' => 'Janice', 'reportTitle' => 'DNA test ', 'reportDate' => '2019-02-06', 'reportDocument' => 'Labreport.pdf'],
            ['userID' => '2', 'userName' => 'Ruben',  'userName' => 'Ruben', 'reportTitle' => 'Health Screening', 'reportDate' => '2019-03-16', 'reportDocument' => 'Labreport.pdf'],
            ['userID' => '3', 'userName' => 'Muthu', 'reportTitle' => 'Allergy test', 'reportDate' => '2019-04-28', 'reportDocument' => 'Labreport.pdf'],
            ['userID' => '4', 'userName' => 'Jayson Tatum', 'reportTitle' => 'Cardia test', 'reportDate' => '2019-04-28', 'reportDocument' => 'Labreport.pdf'],
            ['userID' => '5', 'userName' => 'Stephen Curry', 'reportTitle' => 'Pre-U Screening', 'reportDate' => '2019-04-28', 'reportDocument' => 'Labreport.pdf'],
            ['userID' => '6', 'userName' => 'Michael Jordan', 'reportTitle' => 'Pre Maritial Screening', 'reportDate' => '2019-04-28', 'reportDocument' => 'Labreport.pdf'],
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
