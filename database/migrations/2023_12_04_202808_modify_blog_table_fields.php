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
        Schema::table("blogs", function ($table){
            $table->string('blogname', 150)->nullable()->change();
            $table->string('blogdescription', 2000)->default("No description")->change();
            $table->string("blogimage", 150)->default("No Image")->change();
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
