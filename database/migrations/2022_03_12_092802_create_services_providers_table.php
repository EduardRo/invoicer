<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_providers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('codreg');
            $table->string('cui');
            $table->string('region');
            $table->string('city');
            $table->text('address');
            $table->string('postalcode');
            $table->float('capital',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_providers');
    }
};
