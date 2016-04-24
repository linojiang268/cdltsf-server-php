<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->primary('id');
            $table->char('id', 36);

            $table->string('name', 16);
            $table->string('brand', 32);  // which brand, refers to brand's id
            $table->string('poster', 128); // the poster image
            $table->text('intro');
            $table->boolean('hot')->defualt(false);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
