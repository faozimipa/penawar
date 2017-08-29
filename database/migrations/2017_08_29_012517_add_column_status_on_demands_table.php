<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnStatusOnDemandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demands', function(Blueprint $table)
        {
            $table->boolean('valid')->default(0);
            $table->string('status')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demands', function(Blueprint $table)
        {
            $table->dropColumn('valid');
            $table->dropColumn('status');

        });
    }
}
