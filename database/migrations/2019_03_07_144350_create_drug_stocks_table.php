<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrugStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_stocks', function (Blueprint $table) {
            $table->bigIncrements('stock_id');
            $table->text('drug_name');
            $table->integer('drug_cate');
            $table->string('miligram');
            $table->integer('type_id');
            $table->integer('total_quantity');
            $table->integer('total_carton');
            $table->text('total_sachet');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drug_stocks');
    }
}
