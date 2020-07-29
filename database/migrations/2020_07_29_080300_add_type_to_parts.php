<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeToParts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parts', function (Blueprint $table) {
            //
            $table->tinyInteger('type');
            $table->tinyInteger('level')->default('1');
            $table->integer('hp');
            $table->integer('combatAtk');
            $table->integer('shotAtk');
            $table->integer('combatDef');
            $table->integer('shotDef');
            $table->integer('beamResistance');
            $table->integer('phycicalResistance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parts', function (Blueprint $table) {
            //
        });
    }
}
