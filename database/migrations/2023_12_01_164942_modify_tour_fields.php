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
        Schema::table("tours", function ($table){
            $table->string('tourname', 50)->nullable()->change();
            $table->string('tourdescription', 350)->default("No description")->change();
            $table->double('tourprice')->default(0)->change();
            $table->double('day')->default(0)->change();
            $table->string("image1", 150)->default("No Image")->change();
            $table->string("image2", 150)->default("No Image")->change();
            $table->string("image3", 150)->default("No Image")->change();
            $table->string("image4", 150)->default("No Image")->change();
            $table->string("image5", 150)->default("No Image")->change();
            $table->string("locationone", 50)->default("No location")->change();
            $table->string("dayonedesc", 350)->default("No description")->change();
            $table->string("locationtwo", 50)->default("No location")->change();
            $table->string("daytwodesc", 350)->default("No description")->change();
            $table->string("locationthree", 50)->default("No location")->change();
            $table->string("daythreedesc", 350)->default("No description")->change();
            $table->string("locationfour", 50)->default("No location")->change();
            $table->string("dayfourdesc", 350)->default("No description")->change();
            $table->string("locationfive", 50)->default("No location")->change();
            $table->string("dayfivedesc", 350)->default("No description")->change();
            $table->string("locationsix", 50)->default("No location")->change();
            $table->string("daysixdesc", 350)->default("No description")->change();
            $table->string("locationseven", 50)->default("No location")->change();
            $table->string("daysevendesc", 350)->default("No description")->change();
            $table->string("locationeight", 50)->default("No location")->change();
            $table->string("dayeightdesc", 350)->default("No description")->change();
            $table->string("locationnine", 50)->default("No location")->change();
            $table->string("dayninedesc", 350)->default("No description")->change();
            $table->string("locationten", 50)->default("No location")->change();
            $table->string("daytendesc", 350)->default("No description")->change();
            $table->string("locationeleven", 50)->default("No location")->change();
            $table->string("dayelevendesc", 350)->default("No description")->change();
            $table->string("locationtwelve", 50)->default("No location")->change();
            $table->string("daytwelvedesc", 350)->default("No description")->change();
            $table->string("locationthirteen", 50)->default("No location")->change();
            $table->string("daythirteendesc", 350)->default("No description")->change();
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
