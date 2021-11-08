<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('ref')->nullable();

            $table->json('properties')->nullable();

            $table->json('functions')->nullable();
            $table->json('others')->nullable();

            $table->integer('material_id')->nullable();
            $table->integer('condition_id')->nullable();
            $table->integer('bezelmaterial_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('clasp_id')->nullable();
            $table->integer('claspmaterial_id')->nullable();
            $table->integer('deliveryset_id')->nullable();
            $table->integer('deliverytime_id')->nullable();
            $table->integer('face_id')->nullable();
            $table->integer('gender_id')->nullable();
            $table->integer('glass_id')->nullable();
            $table->integer('numbersface_id')->nullable();
            $table->integer('strapcolor_id')->nullable();
            $table->integer('strapmaterial_id')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('waterresistant_id')->nullable();
            $table->integer('state_id')->nullable();

            $table->string('model')->nullable();
            $table->string('year')->nullable();

            $table->string('diameter_one', 20)->nullable();
            $table->string('diameter_two', 20)->nullable();
            $table->string('diameter_height', 20)->nullable();

            $table->string('caliber', 20)->nullable();
            $table->string('base_caliber', 20)->nullable();
            $table->string('power_reserve', 20)->nullable();
            $table->string('number_stars', 20)->nullable();
            $table->string('oscillation', 20)->nullable();

            $table->string('jumper_width', 20)->nullable();
            $table->string('clasp_width', 20)->nullable();
            $table->string('long_strap_long', 20)->nullable();
            $table->string('long_strap_short', 20)->nullable();
            $table->string('strength_strap', 20)->nullable();

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
        Schema::dropIfExists('products');
    }
}
