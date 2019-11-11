<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // таблица информации или уведомлений
        Schema::create('informs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('text');
            $table->timestamps();
        });

        // связующая таблица, для связи прочитаной информации
        Schema::create('inform_users', function (Blueprint $table) {
          $table->bigInteger('user_id')->unsigned();
          $table->bigInteger('inform_id')->unsigned();
          $table->dateTime('read_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informs');
        Schema::dropIfExists('inform_users');
    }
}
