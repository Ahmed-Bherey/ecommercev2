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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mainDepartment_id')->nullable();
            $table->unsignedBigInteger('subDepartment_id')->nullable();
            $table->longText('Product_Name')->nullable();
            $table->longText('Product_NameAr')->nullable();
            $table->longText('Long_Description')->nullable();
            $table->longText('Short_Description')->nullable();
            $table->longText('Supplier_Source')->nullable();
            $table->longText('Variation_Name1')->nullable();
            $table->longText('Option_for_Variation1')->nullable();
            $table->longText('Variation_Name2')->nullable();
            $table->longText('Option_for_Variation2')->nullable();
            $table->longText('Variation_Name3')->nullable();
            $table->longText('Option_for_Variation3')->nullable();
            $table->string('Price')->nullable();
            $table->string('Currency')->nullable();
            $table->string('Stock')->nullable();
            $table->string('SKU')->nullable();
            $table->string('Weight')->nullable();
            $table->string('Length')->nullable();
            $table->string('Width')->nullable();
            $table->string('Height')->nullable();
            $table->string('Item_image1')->nullable();
            $table->string('Item_image2')->nullable();
            $table->string('Item_image3')->nullable();
            $table->string('Item_image4')->nullable();
            $table->string('Item_image5')->nullable();
            $table->string('Item_image6')->nullable();
            $table->string('Item_image7')->nullable();
            $table->string('Item_image8')->nullable();
            $table->string('Item_image9')->nullable();
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
};
