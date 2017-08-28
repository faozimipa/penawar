<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDemandsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('demand_name');
            $table->string('demand_company');
            $table->string('demand_product');
            $table->text('demand_product_detail');
            $table->string('demand_quantity');
            $table->string('demand_unit');
            $table->decimal('demand_estimation_price_low',12,2);
            $table->decimal('demand_estimation_price_height', 12,2);
            $table->string('demand_expired_date');
            $table->string('demand_due_date');
            $table->string('demand_phone');
            $table->string('demand_email');
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
        Schema::drop('demands');
    }
}
