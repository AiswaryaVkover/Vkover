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
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->string('mailid');
            $table->string('mobilenumber');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('pan')->nullable();
            $table->string('aadhar')->nullable();
            $table->string('bankname')->nullable();
            $table->string('ifsccode')->nullable();
            $table->string('accountnumber')->nullable();
            $table->timestamps();
        });

        /*Schema::create('managers', function (Blueprint $table) {
            $table->string('middlename')->nullable();
            $table->string('pan')->nullable();
            $table->string('aadhar')->nullable();
            $table->string('bankname')->nullable();
            $table->string('ifsccode')->nullable();
            $table->string('accountnumber')->nullable();
            // Other columns...
        });*/
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managers');
    }
};
