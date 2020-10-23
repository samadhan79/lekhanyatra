<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorySubitemtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category_sub_item', function (Blueprint $table) {
            $table->increments('sub_item_id');
            $table->string('category_id');
            $table->text('sub_item_thumb_image');
            $table->text('sub_item_foreground_image');
            $table->text('sub_item_background_image');
            $table->timestamps();
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_category_sub_item');
    }
}
