<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToPermohonanNarasumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permohonan_narasumber', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->nullable()->change(); // Mengubah kolom menjadi nullable
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permohonan_narasumber', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->default(0)->change(); // Mengembalikan perubahan jika diperlukan
        });
    }
}

