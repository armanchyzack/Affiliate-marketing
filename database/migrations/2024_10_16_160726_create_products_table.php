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
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sub_category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('title')->require;
            $table->string('slug')->unique();
            $table->string('product_name')->require;
            $table->integer('status')->default(0);
            $table->longText('keyword')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('short_description')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('discount_price')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->longText('description');
            $table->string('affiliate_link')->require;
            $table->string('image_alt_text')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->string('thumbnail_image_url')->nullable();
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
