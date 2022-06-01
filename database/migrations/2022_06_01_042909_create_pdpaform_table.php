<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdpaformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdpaform', function (Blueprint $table) {
            $table->id();
            $table->text('code_form');
            $table->text('name');
            $table->text('note');
            $table->text('des');
            $table->integer('branch_id');
            $table->text('linenoti');
            $table->text('qrcode');
            $table->text('agree');
            $table->text('token');
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
        Schema::dropIfExists('pdpaform');
    }
}
