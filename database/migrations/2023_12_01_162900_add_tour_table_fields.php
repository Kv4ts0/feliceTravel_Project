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
        Schema::table("tours", function (Blueprint $table){
            $table->string('tourname');
            $table->string('tourdescription');
            $table->double('tourprice');
            $table->double('day');
            $table->string("image1");
            $table->string("image2");
            $table->string("image3");
            $table->string("image4");
            $table->string("image5");
            $table->string("locationone");
            $table->string("dayonedesc");
            $table->string("locationtwo");
            $table->string("daytwodesc");
            $table->string("locationthree");
            $table->string("daythreedesc");
            $table->string("locationfour");
            $table->string("dayfourdesc");
            $table->string("locationfive");
            $table->string("dayfivedesc");
            $table->string("locationsix");
            $table->string("daysixdesc");
            $table->string("locationseven");
            $table->string("daysevendesc");
            $table->string("locationeight");
            $table->string("dayeightdesc");
            $table->string("locationnine");
            $table->string("dayninedesc");
            $table->string("locationten");
            $table->string("daytendesc");
            $table->string("locationeleven");
            $table->string("dayelevendesc");
            $table->string("locationtwelve");
            $table->string("daytwelvedesc");
            $table->string("locationthirteen");
            $table->string("daythirteendesc");
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
