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
            $table->string('pass_first_name');
            $table->string('pass_last_name');
            $table->integer('pass_age');
            $table->string('pass_id_type');
            $table->string('pass_id_num');
            $table->string('pass_trans_mode')->default('');
            $table->string('pass_plate_num');
            $table->string('pass_purpose')->nullable();
            $table->string('pass_des');
            $table->string('pass_border')->default('');
            $table->integer('pass_ingoing_or_outgoing');
            $table->rememberToken();

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
