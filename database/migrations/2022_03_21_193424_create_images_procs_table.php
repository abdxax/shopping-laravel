<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesProcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_procs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("prod_id");
            $table->string("path");

            $table->timestamps();
            $table->softDeletes();

            $table->foreign("prod_id")->references("id")->on("proudcts")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images_procs');
    }
}
