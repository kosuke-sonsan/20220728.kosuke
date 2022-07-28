<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asks', function (Blueprint $table) {//お問合せユーザテーブル設定
            $table->id();
            $table->string('fullname', 255)->nullable();;
            $table->tinyInteger('sex')->nullable();;
            $table->string('email', 255)->nullable();;
            $table->string('postcode', 8)->nullable();;
            $table->string('address', 255)->nullable();;
            $table->string('building_name', 255)->nullable();;
            $table->text('opinion')->nullable();;
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asks');
    }
}
