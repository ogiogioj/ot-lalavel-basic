<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //마이그레이션 실행시켰을때 실행
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('body',255);
            $table->bigInteger('user_id')->index(); // foreigId('user_id')
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    //롤백할때 실행
    public function down(): void
    {
       Schema::dropIfExists('articles');
    }
};
