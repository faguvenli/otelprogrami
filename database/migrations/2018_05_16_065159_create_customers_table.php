<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tcKimlikNo')->unique()->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('fatherName')->nullable();
            $table->string('birthPlace')->nullable();
            $table->date('birthDate');
            $table->char('nationality',3);
            $table->char('gender',1);
            $table->string('phone')->nullable();
            $table->decimal('price',10,2)->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
