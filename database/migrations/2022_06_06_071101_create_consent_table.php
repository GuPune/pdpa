<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consent', function (Blueprint $table) {
            $table->id();
            $table->integer('pdpaform_id');
            $table->integer('branch_id');
            $table->text('telephone');
            $table->text('ip');
            $table->text('browser')->nullable();
            $table->text('device')->nullable();
            $table->text('os')->nullable();
            $table->text('details')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('consent');
    }
}
