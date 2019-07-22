<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *  php artisan make:migration add_user_id_to_posts
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //creating a column for table
            $table->string('user_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // drop the collumn to the table. Run php artisan migrate
            $table->dropColumn('user_name');
        });
    }
}
