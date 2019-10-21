<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('members', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('victorygroup_id');
        $table->string('name');
        $table->string('contactNumber');
        $table->boolean('one2One')->default(0)->nullable();
        $table->boolean('victoryGroup')->default(0)->nullable();
        $table->boolean('victoryWeekend')->default(0)->nullable();
        $table->boolean('discipleshipClass')->default(0)->nullable();
        $table->boolean('leadership113')->default(0)->nullable();
        $table->timestamps();   
    });

       Schema::table('members', function ($table){
        $table->foreign('victorygroup_id')->references('id')->on('victorygroups')->onDelete('cascade');

       });
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign(['victorygroup_id']);
        Schema::dropIfExists('members');
    }
}
