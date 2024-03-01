<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewRowToTable extends Migration
{
    public function up()
    {
        Schema::table('hospitallists', function (Blueprint $table) {
            $table->string('manager'); // Define your new column here
        });

       
    }

    public function down()
    {
        Schema::table('hospitallists', function (Blueprint $table) {
            $table->dropColumn('manager'); // Define how to rollback the migration here
        });

    
    }
}


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('table', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table', function (Blueprint $table) {
            //
        });
    }
};
