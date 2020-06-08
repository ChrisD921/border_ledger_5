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
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age');
            $table->string('id_type');
            $table->string('id_num');
            $table->string('trans_mode')->default('');
            $table->string('plate_num');
            $table->string('purpose')->nullable();
            $table->string('destination');
            $table->string('pass_border')->default('');
            $table->integer('direction');

            $table->timestamps();
        });

        Artisan::call('db:seed', [
            '--class' => PasserbyTableSeeder::class
        ]);
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
