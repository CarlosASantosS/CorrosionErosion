<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salamas', function (Blueprint $table) {
            $table->id();
            $table->string("a");
            $table->string("b");
            $table->date("c");
            $table->double("c15", 12, 5);
            $table->double("c16", 12, 5);
            $table->double("c18", 12, 5);
            $table->double("c22", 12, 5);
            $table->double("c23", 12, 5);
            $table->double("c25", 12, 5);
            $table->double("c26", 12, 5);
            $table->string("sm", 12, 5);
            $table->double("c17", 12, 5);
            $table->double("c19", 12, 5);
            $table->double("c20", 12, 5);
            $table->double("c21", 12, 5);
            $table->double("c24", 12, 5);
            $table->double("c28", 12, 5);
            $table->double("f28", 12, 5);
            $table->double("c70", 12, 5);
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
        Schema::dropIfExists('salamas');
    }
}
