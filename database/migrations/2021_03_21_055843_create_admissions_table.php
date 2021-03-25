<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('phone');
            $table->bigInteger('nid');
            $table->string('name');
            $table->string('father');
            $table->bigInteger('parent_phone');
            $table->text('dob');
            $table->text('district_id');
            $table->text('branch_id');
            $table->text('batch_id');
            $table->text('qualification_id');
            $table->text('subscrip_id');
            $table->text('image');
            $table->text('sign');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('admissions');
    }
}
