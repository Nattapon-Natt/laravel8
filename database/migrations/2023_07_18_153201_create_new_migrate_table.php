<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewMigrateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_migrate', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('age')->nullable();
            $table->float('weight',16,2)->nullable();
            $table->string('tell')->nullable();
            $table->date('birth day')->nullable();
            $table->text('name')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_migrate');
    }
}
