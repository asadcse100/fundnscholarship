<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentApplyPoorFundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_apply_poor_funds', function (Blueprint $table) {
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
            $table->string('gpa_cgpa');
            $table->string('father_occupation');
            $table->integer('monthly_income');
            $table->text('description')->nullable();           
            $table->string('chirman_certificate')->nullable();           
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
        Schema::dropIfExists('std_apply_poor_funds');
    }
}
