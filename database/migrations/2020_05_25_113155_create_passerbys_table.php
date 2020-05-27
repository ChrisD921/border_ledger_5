<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasserbysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passerbys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('inputFName');
            $table->string('inputLName');
            $table->integer('inputAge');
            $table->string('inputIdType');
            $table->integer('inputTransMode');
            $table->string('inputPlateNum');
            $table->string('inputPurpose');
            $table->string('inputDes');
            $table->integer('IngoingOrOutgoing');
            $table->rememberToken();

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
        Schema::dropIfExists('passerbys');
    }
}
