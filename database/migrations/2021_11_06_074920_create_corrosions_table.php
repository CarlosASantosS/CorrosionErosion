<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrosionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corrosions', function (Blueprint $table) {
            $table->id();
            $table->double("c4", 12, 5);
            $table->double("c5", 12, 5);
            $table->double("c6", 12, 5);
            $table->double("c7", 12, 5);
            $table->double("c8", 12, 5);
            $table->double("c9", 12, 5);
            $table->double("c10", 12, 5);
            $table->double("c11", 12, 5);
            $table->double("c12", 12, 5);
            $table->double("c13", 12, 5);
            $table->double("c17", 12, 5);
            $table->double("c18", 12, 5);
            $table->double("c19", 12, 5);
            $table->double("c20", 12, 5);
            $table->double("c21", 12, 5);
            $table->double("c22", 12, 5);
            $table->double("c26", 12, 5);
            $table->double("c27", 12, 5);
            $table->double("c28", 12, 5);
            $table->double("c29", 12, 5);
            $table->double("c30", 12, 5);
            $table->double("c31", 12, 5);
            $table->double("c32", 12, 5);
            $table->double("c33", 12, 5);
            $table->double("f4", 12, 5);
            $table->double("f5", 12, 5);
            $table->double("f6", 12, 5);
            $table->double("f7", 12, 5);
            $table->double("f8", 12, 5);
            $table->double("f9", 12, 5);
            $table->double("f10", 12, 5);
            $table->double("f11", 12, 5);
            $table->double("f15", 12, 5);
            $table->double("f16", 12, 5);
            $table->double("f17", 12, 5);
            $table->double("f18", 12, 5);
            $table->double("f19", 12, 5);
            $table->double("f20", 12, 5);
            $table->double("f21", 12, 5);
            $table->double("f22", 12, 5);
            $table->double("f23", 12, 5);
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
        Schema::dropIfExists('corrosions');
    }
}
