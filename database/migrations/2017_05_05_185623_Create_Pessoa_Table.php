<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Person', function (Blueprint $table) {
          $table->increments("id");
          $table->string("name", 60);
          $table->string("document", 11);
          $table->string("email", 100);
          $table->boolean("univelStudent");
          $table->string("course", 50)->nullable();
          $table->string("college", 100)->nullable();
          $table->rememberToken();
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
        Schema::dropIfExists('Person');
    }
}
