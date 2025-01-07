<?php

use App\Enums\BookStatus;
use App\Enums\BookType;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('isbn');
            $table->boolean('used')->default(false);
            $table->enum('type' , BookType::values());
            $table->enum('status' ,BookStatus::values());
            $table->double('price');
            $table->date('published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
