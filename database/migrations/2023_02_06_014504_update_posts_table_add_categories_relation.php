<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePostsTableAddCategoriesRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // colonna della chiave esterna (foreign key)
            $table->unsignedBigInteger('category_id')->after('id')->default(1);

            // relazione tra tabelle
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
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
            // eliminare la relazione
            $table->dropForeign(['category_id']);

            // eliminare la colonna
            $table->dropColumn('category_id');
        });
    }
}
