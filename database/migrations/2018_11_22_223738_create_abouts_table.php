<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\About;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('missao')->nullabe();
            $table->text('visao')->nullable();
            $table->text('valores')->nullable();
            $table->longText('body')->nullable();
            $table->timestamps();
        });

        About::create([
            'missao' => ' ',
            'visao' => ' ',
            'valores' => ' ',
            'body' => ' '
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
