<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('login')->unique();
            $table->boolean('read')->default(TRUE);
            $table->boolean('edit')->default(FALSE);
            $table->boolean('write')->default(FALSE);
            $table->boolean('active')->default(TRUE);
        });
        
          DB::table('users')->insert(
                        array( 
                                array('login' => 'user')                        
                        ));
          
          DB::table('users')->insert(
          				array(
          						array('login' => 'admin', 'write' => 1, 'edit' => 1)
          				));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
