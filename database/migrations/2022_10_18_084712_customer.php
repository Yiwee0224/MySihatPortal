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
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('cusID')->unique();
            $table->unsignedInteger('customerID');
            $table->unsignedInteger('lecturerID')->nullable();


            $table->foreign('customerID')->references('userID')->on('users');
            $table->foreign('lecturerID')->references('userID')->on('users');
        });

        DB::table('Customer')->insert([
            ['customerID' => 1, 'lecturerID' => 7],
            ['customerID' => 2, 'lecturerID' => 8],
            ['customerID' => 3, 'lecturerID' => 7],
            ['customerID' => 4, 'lecturerID' => 8],
            ['customerID' => 5, 'lecturerID' => 7],
            ['customerID' => 6, 'lecturerID' => 8],
            ['customerID' => 9, 'lecturerID' => 8],
            ['customerID' => 10, 'lecturerID' => 8],
            ['customerID' => 11, 'lecturerID' => 8],
            ['customerID' => 12, 'lecturerID' => 8],
            ['customerID' => 13, 'lecturerID' => 8],
            ['customerID' => 14, 'lecturerID' => 8],
            ['customerID' => 15, 'lecturerID' => 8],
            ['customerID' => 16, 'lecturerID' => 8],
            ['customerID' => 17, 'lecturerID' => 8],
            ['customerID' => 18, 'lecturerID' => 8],
            ['customerID' => 19, 'lecturerID' => 8],
            ['customerID' => 20, 'lecturerID' => 8],



        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lab_report');
        Schema::dropIfExists('Customer');
    }
};
