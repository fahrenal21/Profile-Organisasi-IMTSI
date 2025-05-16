<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusTable extends Migration
{
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id(); // kolom id
            $table->string('nama'); // kolom nama pengurus
            $table->string('jabatan'); // kolom jabatan pengurus
            $table->string('foto'); // kolom foto pengurus
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengurus');
    }
}
