<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllEducationalInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_educational_institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('eiin')->unique();
            $table->string('type');
            $table->integer('division_id');
            $table->string('division');
            $table->integer('district_id');
            $table->string('district');
            $table->string('thana');
            $table->string('unon');
            $table->string('address');
            $table->string('post');
            $table->string('management_type');
            $table->string('phone');
            $table->string('student_type');
            $table->string('edu_lavel');
            $table->string('mpo_status');
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
        Schema::dropIfExists('all_educational_institutions');
    }
}
