<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_kelamin_id');
            $table->foreignId('agama_id');
            $table->foreignId('golongan_id');
            $table->foreignId('jabatan_id');
            $table->foreignId('eselon_id');
            $table->string('nip')->unique();
            $table->string('nama', 225);
            $table->string('tempat_lahir', 225);
            $table->text('alamat', 225);
            $table->string('tanggal_lahir', 225);
            $table->string('tempat_tugas', 225);
            $table->string('unit_kerja', 225);
            $table->string('no_hp');
            $table->string('npwp')->unique;
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
        Schema::dropIfExists('pegawais');
    }
}
