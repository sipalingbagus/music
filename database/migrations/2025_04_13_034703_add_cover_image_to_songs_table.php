<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('songs', function (Blueprint $table) {
        $table->string('cover_image')->after('file_path')->nullable(); // Menambahkan kolom cover_image
    });
}

public function down()
{
    Schema::table('songs', function (Blueprint $table) {
        $table->dropColumn('cover_image'); // Menghapus kolom cover_image jika rollback
    });
}

};
