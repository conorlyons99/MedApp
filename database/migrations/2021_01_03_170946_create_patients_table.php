<?php
# @Date:   2021-01-03T17:09:50+00:00
# @Last modified time: 2021-01-10T13:45:38+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
          $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('address', 100);
            $table->string('phone', 20);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
