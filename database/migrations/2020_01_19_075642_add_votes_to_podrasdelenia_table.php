<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotesToPodrasdeleniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('podrasdelenia', function (Blueprint $table) {
            $table->string('rukovoditel', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('podrasdelenia', function (Blueprint $table) {
            $table->dropColumn('rukovoditel');
        });
    }
}
