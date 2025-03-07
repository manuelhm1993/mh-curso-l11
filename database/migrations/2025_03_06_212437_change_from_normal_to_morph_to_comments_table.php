<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['post_id']);
            $table->dropColumn('post_id');

            $table->morphs('commentable');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropIndex('comments_commentable_type_commentable_id_index');
            $table->dropColumn(['commentable_type', 'commentable_id']);

            $table->unsignedBigInteger('post_id')->after('content');

            /*$table->foreign('post_id')->references('id')->on('posts')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');*/
        });
    }
};
