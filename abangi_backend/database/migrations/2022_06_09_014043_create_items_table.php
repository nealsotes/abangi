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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_category_id');
            $table->unsignedBigInteger('user_id');
            $table->string('user_image');
            $table->string('item_name');
            $table->string('item_desc');
            $table->foreign('item_category_id')
                ->references('id')->on('item_categories')->onDelete('cascade');
            $table->foreign('user_id')
                 ->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('items');
    }
};
