<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('border', function (Blueprint $table) {
            $table->string('id')->default('');
            $table->string('pass_border');
            $table->timestamps();
        });

        Artisan::call('db:seed', [
            '--class' => BorderNameTableSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('border');
    }
}
