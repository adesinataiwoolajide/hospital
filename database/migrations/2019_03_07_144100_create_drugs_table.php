<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->bigIncrements('drug_id');
            $table->string('drug_name');
            $table->string('drug_number');
            $table->text('carton');
            $table->string('sachet');
            $table->string('pack_price');
            $table->text('price');
            $table->string('quantity');
            $table->string('manufacturer');
            $table->text('miligram');
            $table->string('type_id');
            $table->string('category_id');
            $table->text('manu_date');
            $table->text('exp_date');
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
        Schema::dropIfExists('drugs');
    }
}
