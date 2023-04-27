<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id')->constrained()->onDelete(action: 'cascade');
            $table->text(column: 'subject');
            $table->text(column: 'message');
            $table->text(column: 'file_url');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
