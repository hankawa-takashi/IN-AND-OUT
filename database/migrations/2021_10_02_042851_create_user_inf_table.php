<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('user_inf', function (Blueprint $table) {
                $table->integer('id', 11)->autoIncrement();
                $table->string('company_name', 255);
                $table->string('user_name', 255);
                $table->string('mail', 255)->unique();
                $table->string('password', 255);
                $table->timestamps();
                $table->tinyInteger('deleted');
            });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_inf');
    }
}
