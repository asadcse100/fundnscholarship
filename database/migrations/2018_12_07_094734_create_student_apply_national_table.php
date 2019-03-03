<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentApplyNationalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_apply_national_issu', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('userId')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->text('adress');
            $table->string('organize');
            $table->string('class');
            $table->string('year');
            $table->string('division');
            $table->string('district');
            $table->string('issue_name');
            $table->string('issue_type');
            $table->text('description');
            $table->text('issue_image')->nullable();
            $table->text('video_link')->nullable();
            $table->string('remarks')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_apply_national_issu');
    }
}
