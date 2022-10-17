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
        Schema::create('_student', function (Blueprint $table) {
            // $table->id(); Đã tồn tại trong migration nên phải ẩn đi

            $table->String('fullname');
            $table->string('birthday');
            $table->string('address');

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_student');
    }
};
