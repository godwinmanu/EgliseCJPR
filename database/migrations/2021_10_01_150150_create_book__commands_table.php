<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book__commands', function (Blueprint $table) {
            $table->id();
            $table->string('client_fullname');
            $table->integer('client_phone_number');
            $table->string('client_email');
            $table->integer('book_quantity');
            $table->mediumText('other_details');
            $table->foreignId('book_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('book__commands');
    }
}
