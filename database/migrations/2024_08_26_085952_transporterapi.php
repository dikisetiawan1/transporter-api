<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transporterapi', function (Blueprint $table) {
            $table->id();
            $table->string('nospe');
            $table->integer('indekspe');
            $table->string('noso');
            $table->date('sodate');
            $table->integer('flagspe');
            $table->integer('indeks');
            $table->string('typetrans');
            $table->string('typepayment');
            $table->date('transactiondate');
            $table->string('transporter');
            $table->string('vehicle');
            $table->string('supir');
            $table->string('supirdua');
            $table->string('customer');
            $table->string('route');
            $table->string('ref');
            $table->string('note');
            $table->string('pembuat');
            $table->date('startdate');
            $table->time('starttime');
            $table->date('finishdate');
            $table->time('finishtime');
            $table->string('typetruck');
            $table->string('dari');
            $table->string('untuk');
            $table->string('status');
            $table->integer('harga');
            $table->integer('uangjalan');
            $table->integer('ujisisebilah');
            $table->integer('ujkosongsebilah');
            $table->integer('uangsewakendaraanthirdpe');
            $table->integer('uangclaim');
            $table->string('pic');
            $table->integer('totaluangdiberikan');
            $table->integer('totaldeklarasi');
            $table->integer('sisauang');
            $table->string('noer');
            $table->date('erdate');
            $table->string('departmentcharged');
            $table->string('declaredby');
            $table->integer('flager');
            $table->integer('counter');
            $table->integer('indeker');
            $table->string('typeer');
            $table->date('docdatecomplete');
            $table->string('statusercom');
            $table->date('erdatecom');
            $table->integer('maxtimedelivery');
            $table->integer('maxtimechecking');
            $table->integer('geoidasal');
            $table->string('geofenceasal');
            $table->integer('geoidtujuan');
            $table->string('geofencetujuan');
            $table->integer('km');
            $table->string('barang');
            $table->integer('suhureq');
            $table->string('sj_no');
            $table->string('geocodeasal');
            $table->string('geocodetujuan');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
