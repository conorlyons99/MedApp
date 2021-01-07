<?php
# @Date:   2021-01-03T17:09:50+00:00
# @Last modified time: 2021-01-05T12:08:00+00:00




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
          $table->id();
          $table->string('address', 100);
          $table->string('phone', 20);
          $table->unsignedBigInteger('user_id');
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
