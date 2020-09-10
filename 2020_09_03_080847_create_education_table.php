<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->bigIncrements('DocEntry')->autoIncrement();
            $table->mediumInteger('empID')->comment("Employee No.");
            $table->mediumInteger('line')->comment("Education: Information Row");
            $table->date('fromDate')->comment("Education from Date");
            $table->date('toDate')->comment("Education To Date");
            $table->mediumInteger('type')->comment("Education Type");
            $table->mediumText('institute',100)->comment("Institute");
            $table->mediumText('major',100)->comment("Major");
            $table->mediumText('diploma',100)->comment("Diploma");
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
        Schema::dropIfExists('education');
    }
}
