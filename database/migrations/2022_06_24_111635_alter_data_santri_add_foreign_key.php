<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataSantriAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_santri', function (Blueprint $table) {
            $table->unsignedBigInteger('santri_id');
            $table->foreign('santri_id')->references('id')->on('data_santri')->onDelete('cascode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_santri', function (Blueprint $table) {
            $table->dropForeign('santri_id');
            $table->dropColumn('santri_id');
        });
    }
}
