<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolios', static function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('img');
            $table->text('text');
            $table->string('client', 70);
            $table->string('url', 70);
            $table->date('created_date');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
