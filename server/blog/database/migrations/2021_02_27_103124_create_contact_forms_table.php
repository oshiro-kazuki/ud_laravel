<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            // 登録情報内容
            $table->string('name', 20);
            $table->string('email', 255);
            $table->longText('url')->nullable($value = true);
            $table->boolean('gender');
            $table->tinyInteger('age')->unsigned();
            $table->string('contact', 255);
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
        Schema::dropIfExists('contact_forms');
    }
}
