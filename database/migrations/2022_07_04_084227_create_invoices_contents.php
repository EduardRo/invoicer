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
        Schema::create('invoices_contents', function (Blueprint $table) {
            $table->id();
            $table->integer('nrcrt');
            $table->string('title');
            $table->float('quantity');
            $table->float('price',10,2);
            $table->float('vat',10,2);
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
        Schema::dropIfExists('invoices_contents');
    }
};
