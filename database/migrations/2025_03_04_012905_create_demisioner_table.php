<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemisionerTable extends Migration
{
    public function up()
    {
        Schema::create('demisioner', function (Blueprint $table) {
            $table->id();  // Kolom id
            $table->string('nama');  // Kolom nama untuk menyimpan nama demisioner
            $table->string('jabatan');  // Kolom jabatan untuk menyimpan jabatan demisioner
            $table->string('foto');  // Kolom foto untuk menyimpan path ke file gambar
            $table->string('periode');  // Kolom periode untuk menyimpan periode jabatan (misalnya: 2012-2015)
            $table->timestamps();  // Menambahkan kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('demisioner');
    }
}
