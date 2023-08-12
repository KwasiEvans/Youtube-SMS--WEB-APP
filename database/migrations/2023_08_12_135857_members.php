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
        Schema::create('members', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('number');
            $table->enum('role',[
                'pastor',
                'choir',
                'new member',
                'media',
            ]);
            $table->string('joined_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
