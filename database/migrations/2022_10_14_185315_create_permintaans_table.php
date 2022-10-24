<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('permintaans', function (Blueprint $table) {
            $table->id();
            $table->string('domain')->unique();
            $table->string('program');
            $table->string('keterangan');
            $table->string('userhost')->unique();
            $table->string('passhost');
            $table->enum('status', ['pending', 'proses', 'selesai']);
            $table->foreignId('pemohon_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('permintaans');
    }
};
