<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResearchPapers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_papers', function (Blueprint $table) {
            $table->increments('id');
//            Foreign keys
            $table->unsignedInteger('dep_id');
            $table->foreign('dep_id')->references('id')->on('departments')->onDelete('cascade');

            $table->string('title');
            $table->string('author');
            $table->string('link')->nullable();
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
        Schema::dropIfExists('research_papers');
    }
}
