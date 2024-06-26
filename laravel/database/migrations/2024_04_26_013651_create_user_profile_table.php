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
        Schema::create('user_profile', function (Blueprint $table) {
//            $table->id();
            ///$table->increments('user_profile_id');
            $table->unsignedBigInteger('user_id');
            $table->string('first_name', 55);
            $table->string('last_name', 55);
            $table->string('discription', 255)->nullable();
            $table->tinyInteger('sex')->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('address', 255)->nullable();
            $table->timestamps();

              // Thêm ràng buộc khóa ngoại
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile');
    }
};
