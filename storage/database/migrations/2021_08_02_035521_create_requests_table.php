<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();

            $table->string('nomor')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('judul');
            $table->date('awal_pelaksanaan');
            $table->date('akhir_pelaksanaan');
            $table->date('tanggal_tanam');
            $table->string('blok');
            $table->string('peneliti');

            $table->string('areal');
            $table->string('keterangan_areal');

            $table->string('komoditas');
            $table->string('varietas');
            $table->string('peralatan');
            $table->integer('jumlah_peralatan');
            $table->string('pupuk');
            $table->string('jumlah_pupuk');
            $table->string('sarana_lain');


            $table->string('catatan_staf_muda')->nullable();
            $table->string('catatan_vp')->nullable();
            $table->string('status');
            
            $table->softDeletes();
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
        Schema::dropIfExists('requests');
    }
}
