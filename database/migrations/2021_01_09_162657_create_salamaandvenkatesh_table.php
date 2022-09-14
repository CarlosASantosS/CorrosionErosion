<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalamaandvenkateshTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salamaandvenkateshes', function (Blueprint $table) {
            $table->id();
            $table->string("a");
            $table->string("b");
            $table->date("c");
            $table->double("w", 12, 5);
            $table->double("v", 12, 5);
            $table->double("d", 12, 5);
            $table->string("sm", 12, 5);
            $table->double("er", 12, 5);
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
        Schema::dropIfExists('salamaandvenkateshes');
    }
}
