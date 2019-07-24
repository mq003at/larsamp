<?php
//-m when creating models will create the migration table to reuse the schema for many other SQLs and working directly with the db without interface (its structure section)
// for creating another table, create a model by running command. 2 basic tables are user_table and password_reset.
// to start the migration, use php artisan migrate.
// this only need to run once to update the db, after that, not needed anymore


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {      // creating field
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->mediumText('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
