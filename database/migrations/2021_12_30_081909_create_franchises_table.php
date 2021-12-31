<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFranchisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchises', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('number');
            $table->string('email');

            $table->string('qualification');
            $table->string('commercial_experie');
            


            $table->string('area');
            $table->string('investment_value');
            $table->unsignedTinyInteger('solvency')->default(0);

            $table->date('date');
            $table->text('reason_franchise');
            $table->text('know_us');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('franchises');
    }
}
