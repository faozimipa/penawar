<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->string('phone')->unique();
            $table->string('company')->nullable();
            $table->string('is_active')->nullable(0);
            $table->string('is_subscribe')->nullable(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->dropColumn('phone');
            $table->dropColumn('company');
            $table->dropColumn('is_active');
            $table->dropColumn('is_subscribe');
        });
    }
}
