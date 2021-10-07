<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('component_id')->nullable();
            $table->unsignedInteger('supplier_id')->nullable();
            $table->timestamps();

            $table->foreign('component_id')->references('id')->on('components')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('component_suppliers');
    }
}
