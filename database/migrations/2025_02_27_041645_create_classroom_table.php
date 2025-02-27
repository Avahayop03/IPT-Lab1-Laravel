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
        Schema::create('classroom', function (Blueprint $table) {
            $table->id(); // classroom_id (Primary Key)
            $table->year('year');
            $table->foreignId('grade_id')->constrained()->onDelete('cascade');
            $table->char('section', 2);
            $table->boolean('status')->default(1);
            $table->string('remarks', 45)->nullable();
            $table->foreignId('teacher_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classroom');
    }
};
