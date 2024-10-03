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
        Schema::table('settings', function (Blueprint $table){
            // dropping the coloumn here
            $table->dropColumn('meta_theme');

            // adding the two new coloumns here
            $table->string('meta_description')->nullable();
            $table->string('meta_tag')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('setting',function (Blueprint $table){
            // restoring the meta_theme coloumn here
            $table->string('meta_theme')->nullable();

            // dropping the new coloumn here if it is rolling back
            $table->dropColumn('meta_description');
            $table->dropColumn('meta_tag');
        });
    }
};
