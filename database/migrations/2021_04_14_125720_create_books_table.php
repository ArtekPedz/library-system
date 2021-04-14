<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isbn');
            $table->string('title');
            $table->string('description');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('publishing_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('publishing_id')->references('id')->on('publishings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function(Blueprint $table)
        {
            $table->dropForeign(['category_id','publishing_id']);
        });
        Schema::dropIfExists('books');
    }
}
