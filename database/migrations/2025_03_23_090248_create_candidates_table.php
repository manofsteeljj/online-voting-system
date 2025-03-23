<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('election_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->integer('votes')->default(0);
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('candidates');
    }
};
