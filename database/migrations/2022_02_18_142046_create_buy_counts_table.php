<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_counts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("prod_id");
            $table->integer("count");
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
        Schema::dropIfExists('buy_counts');
    }
}
