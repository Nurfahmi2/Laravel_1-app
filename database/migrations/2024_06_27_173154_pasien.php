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
        Schema::create("pasien",function(Blueprint $table) {
            $table->id("id_pasien");
            $table->string("nama_pasien", 45);
            $table->string("keterangan", 45);
            $table->timestamps();
            $table->foreignId("id")->constrain('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("pasien");
    }
};
