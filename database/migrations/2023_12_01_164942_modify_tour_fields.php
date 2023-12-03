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
            $table->string('tourname', 150)->nullable()->change();
            $table->string('tourdescription', 750)->default("No description")->change();
            $table->double('tourprice')->default(0)->change();
            $table->double('day')->default(0)->change();
            $table->string("image1", 150)->default("No Image")->change();
            $table->string("image2", 150)->default("No Image")->change();
            $table->string("image3", 150)->default("No Image")->change();
            $table->string("image4", 150)->default("No Image")->change();
            $table->string("image5", 150)->default("No Image")->change();
            $table->string("locationone", 100)->default("No location")->change();
            $table->string("dayonedesc", 750)->default("No description")->change();
            $table->string("locationtwo", 100)->default("No location")->change();
            $table->string("daytwodesc", 750)->default("No description")->change();
            $table->string("locationthree", 100)->default("No location")->change();
            $table->string("daythreedesc", 750)->default("No description")->change();
            $table->string("locationfour", 100)->default("No location")->change();
            $table->string("dayfourdesc", 750)->default("No description")->change();
            $table->string("locationfive", 100)->default("No location")->change();
            $table->string("dayfivedesc", 750)->default("No description")->change();
            $table->string("locationsix", 100)->default("No location")->change();
            $table->string("daysixdesc", 750)->default("No description")->change();
            $table->string("locationseven", 100)->default("No location")->change();
            $table->string("daysevendesc", 750)->default("No description")->change();
            $table->string("locationeight", 100)->default("No location")->change();
            $table->string("dayeightdesc", 750)->default("No description")->change();
            $table->string("locationnine", 100)->default("No location")->change();
            $table->string("dayninedesc", 750)->default("No description")->change();
            $table->string("locationten", 100)->default("No location")->change();
            $table->string("daytendesc", 750)->default("No description")->change();
            $table->string("locationeleven", 100)->default("No location")->change();
            $table->string("dayelevendesc", 750)->default("No description")->change();
            $table->string("locationtwelve", 100)->default("No location")->change();
            $table->string("daytwelvedesc", 750)->default("No description")->change();
            $table->string("locationthirteen", 100)->default("No location")->change();
            $table->string("daythirteendesc", 750)->default("No description")->change();
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
