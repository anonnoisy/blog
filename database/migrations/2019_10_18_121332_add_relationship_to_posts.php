<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->integer('tag_id')->after('id')->references('id')->on('tags')
            ->onUpdate('cascade')->onDelete('cascade');
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
            $table->dropForeignKey('posts_tag_id_foreign');
        });

        Schema::table('posts', function(Blueprint $table) {
            $table->dropIndex('posts_tag_id_foriegn');
        });

        Schema::table('posts', function(Blueprint $table) {
            $table->integer('tag_id')->change();
        });
    }
}
