<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnv0501Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dnv0501s', function (Blueprint $table) {
            $table->id();
            $table->string("a");
            $table->string("b");
            $table->date("c");
            $table->double("g", 12, 5);
            $table->double("h", 12, 5);
            $table->double("i", 12, 5);
            $table->double("j", 12, 5);
            $table->double("k", 12, 5);
            $table->double("l", 12, 5);
            $table->double("m", 12, 5);
            $table->double("n", 12, 5);
            $table->double("o", 12, 5);
            $table->double("p", 12, 5);
            $table->double("q", 12, 5);
            $table->double("r", 12, 5);
            $table->double("s", 12, 5);
            $table->double("t", 12, 5);
            $table->double("u", 12, 5);
            $table->double("v", 12, 5);
            $table->double("w", 12, 5);
            $table->double("x", 12, 5);
            $table->double("y", 12, 5);
            $table->double("z", 12, 5);
            $table->double("aa", 12, 5);
            $table->double("ab", 12, 5);
            $table->double("ac", 12, 5);
            $table->double("ad", 12, 5);
            $table->double("ae", 12, 5);
            $table->double("af", 12, 5);
            $table->double("ag", 12, 5);
            $table->double("ah", 12, 5);
            $table->double("ai", 12, 5);
            $table->double("aj", 12, 5);
            $table->double("ak", 12, 5);
            $table->double("al", 12, 5);
            $table->double("am", 12, 5);
            $table->double("an", 12, 5);
            $table->double("ao", 12, 5);
            $table->double("aq", 12, 5);
            $table->double("ar", 12, 5);
            $table->double("as", 12, 5);
            $table->double("at", 12, 5);
            $table->double("au", 12, 5);
            $table->double("av", 12, 5);
            $table->double("aw", 12, 5);
            $table->double("ax", 12, 5);
            $table->double("ay", 12, 5);
            $table->double("bb", 12, 5);
            $table->double("bd", 12, 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dnv0501s');
    }
}
