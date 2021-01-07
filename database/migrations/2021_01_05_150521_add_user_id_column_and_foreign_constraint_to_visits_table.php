<?php
# @Date:   2021-01-05T15:05:21+00:00
# @Last modified time: 2021-01-05T19:50:33+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Visits;

class AddUserIdColumnAndForeignConstraintToVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Visits::truncate();
        Schema::table('visits', function (Blueprint $table) {
              $table->dropColumn('patientName');
              $table->unsignedBigInteger('user_id');
              $table->foreign('user_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->string('patientName');
        });
    }
}
