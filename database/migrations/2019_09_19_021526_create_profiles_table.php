<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->text('address')->nullable();
            $table->date('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('primaryNumber')->nullable();
            $table->string('secondaryNumber')->nullable();
            $table->string('civilStatus')->nullable();
            $table->string('peopleGroup')->nullable();
            $table->date('weddingAnniversary')->nullable();
            $table->date('victoryWeekendDate')->nullable();
            $table->string('facebook')->nullable();
            $table->string('serviceAttended')->nullable();

            $table->boolean('one2One')->default(0)->nullable();
            $table->boolean('victoryWeekend')->default(0)->nullable();
            $table->boolean('leadership113')->default(0)->nullable();
            $table->boolean('victoryGroup')->default(0)->nullable();
            $table->boolean('discipleshipClass')->default(0)->nullable();
            $table->boolean('discipleshipCoaching')->default(0)->nullable();

            $table->string('primaryMinistry')->nullable();
            $table->string('secondaryMinistry')->nullable();

            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->index('user_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
