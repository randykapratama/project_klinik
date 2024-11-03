<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFotoToPasiensTable extends Migration
{
    public function up()
    {
        Schema::table('pasiens', function (Blueprint $table) {
            $table->string('foto')->nullable(); // Tambahkan kolom foto
        });
    }

    public function down()
    {
        Schema::table('pasiens', function (Blueprint $table) {
            $table->dropColumn('foto'); // Hapus kolom foto saat rollback
        });
    }
}
