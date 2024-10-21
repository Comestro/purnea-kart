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
        Schema::table('settings',function (Blueprint $table){

            // dropping the new coloumn here if it is rolling back
            $table->dropColumn('meta_description');
            $table->dropColumn('meta_tag');
        });
    }
};
