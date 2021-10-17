<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredit', function (Blueprint $table) {
            $table->string('kode_kredit', 20)->primary();
            $table->char('ktp_pembeli', 16);
            $table->string('kode_paket', 20);
            $table->string('kode_mobil', 20);
            $table->date('tgl_kredit');
            $table->string('fotokopi_ktp', 50);
            $table->string('fotokopi_kk', 50);
            $table->string('fotokopi_slip_gaji', 50);

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
        Schema::dropIfExists('kredit');
    }
}
