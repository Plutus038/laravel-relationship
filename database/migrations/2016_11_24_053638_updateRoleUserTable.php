<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('role_users', function (Blueprint $table) {
            $table->integer('role_id')
                ->after('id')
                ->unsigned()->nullable();
            $table->integer('user_id')
                ->after('id')
                ->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_users', function (Blueprint $table) {
            $table->dropColumn('role_id');
            $table->dropColumn('user_id');
        });
    }
}
