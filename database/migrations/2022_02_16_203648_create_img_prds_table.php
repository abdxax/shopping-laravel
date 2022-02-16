<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgPrdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_prds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("prod_id");
            $table->string("imgPath");
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
        Schema::dropIfExists('img_prds');
    }
}
