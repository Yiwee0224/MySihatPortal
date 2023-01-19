<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('userID');
            $table->string('userName')->unique();
            $table->string('contactNumber');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('userType');
        });

        $control = new Controller();


        DB::table('users')->insert([

            ['userName' => 'Janice', 'contactNumber' => '0145874526', 'email' => 'janice@gmail.com', 'password' => $control->encrypt('111123'), 'userType' => 'customer'],
            ['userName' => 'Ruben', 'contactNumber' => '0145874526', 'email' => 'ruben@gmail.com', 'password' => $control->encrypt('111123'), 'userType' => 'customer'],
            ['userName' => 'Muthu', 'contactNumber' => '0145874526', 'email' => 'muthu@gmail.com', 'password' => $control->encrypt('111123'), 'userType' => 'customer'],
            ['userName' => 'Jayson Tatum', 'contactNumber' => '01489357469', 'email' => 'Jayson104@gmail.com', 'password' => $control->encrypt('15523523'), 'userType' => 'customer'],
            ['userName' => 'Stephen Curry', 'contactNumber' => '01841625789', 'email' => 'Curry0810@gmail.com', 'password' => $control->encrypt('123411123'), 'userType' => 'customer'],
            ['userName' => 'Michael Jordan', 'contactNumber' => '0132456985', 'email' => 'Jorden806@gmail.com', 'password' => $control->encrypt('122223'), 'userType' => 'customer'],
            ['userName' => 'Rakesh', 'contactNumber' => '0145874526', 'email' => 'ra@gmail.com', 'password' => $control->encrypt('boom'), 'userType' => 'admin'],
            ['userName' => 'Roland', 'contactNumber' => '0145874526', 'email' => 'ro@gmail.com', 'password' => $control->encrypt('skr'), 'userType' => 'admin'],
            ['userName' => 'Lebron James', 'contactNumber' => '0174589632', 'email' => 'James904@gmail.com', 'password' => $control->encrypt('12333423'), 'userType' => 'customer'],
            ['userName' => 'Klay Thomson', 'contactNumber' => '0145236987', 'email' => 'Klay604@gmail.com', 'password' => $control->encrypt('153523'), 'userType' => 'customer'],
            ['userName' => 'Dreamon Green', 'contactNumber' => '0175847965', 'email' => 'Green302@gmail.com', 'password' => $control->encrypt('13523'), 'userType' => 'customer'],
            ['userName' => 'Andrew Wiggins', 'contactNumber' => '01', 'email' => 'Wiggins2012@gmail.com', 'password' => $control->encrypt('12351111111133'), 'userType' => 'customer'],
            ['userName' => 'Jimmy Butler', 'contactNumber' => '01741258745', 'email' => 'Jimmy802@gmail.com', 'password' => $control->encrypt('12553'), 'userType' => 'customer'],
            ['userName' => 'Giannis', 'contactNumber' => '0147859632', 'email' => 'Ginannis012@gmail.com', 'password' => $control->encrypt('1353523'), 'userType' => 'customer'],
            ['userName' => 'James Harden', 'contactNumber' => '0132569874', 'email' => 'Harden402@gmail.com', 'password' => $control->encrypt('123533'), 'userType' => 'customer'],
            ['userName' => 'westbrook', 'contactNumber' => '0145874526', 'email' => 'Brook023@gmail.com', 'password' => $control->encrypt('111123'), 'userType' => 'customer'],
            ['userName' => 'Jordan Smitch', 'contactNumber' => '01145278569', 'email' => 'Jrsmitch002@gmail.com', 'password' => $control->encrypt('12231233'), 'userType' => 'customer'],
            ['userName' => 'Garry Payton', 'contactNumber' => '014554789836', 'email' => 'Payton002@gmail.com', 'password' => $control->encrypt('12535353'), 'userType' => 'customer'],
            ['userName' => 'Kryie Erving', 'contactNumber' => '015478965478', 'email' => 'Erving001@gmail.com', 'password' => $control->encrypt('12121243'), 'userType' => 'customer'],
            ['userName' => 'Kevin Durant', 'contactNumber' => '0198567458', 'email' => 'Durant022@gmail.com', 'password' => $control->encrypt('12235253'), 'userType' => 'customer'],


        ]);
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
};
