<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxmapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxmaps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('DiaChi')->nullable();
            $table->string('ThoiGian')->nullable();
            $table->string('lng')->nullable();
            $table->string('lat')->nullable();
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
        Schema::dropIfExists('boxmaps');
    }
}
