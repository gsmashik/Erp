<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenceInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absence_information', function (Blueprint $table) {
            $table->bigIncrements('DocEntry')->autoIncrement();
            $table->mediumInteger('empID')->comment("Employee ID");
            $table->mediumInteger('line')->comment("Absence Information Row");
            $table->date('fromDate')->comment("Education from Date");
            $table->date('toDate')->comment("Education To Date");
            $table->mediumText('reason',50)->comment("Reason");
            $table->mediumText('approvedBy',50)->comment("Approved By");
            $table->mediumText('cnfrmrNum',50)->comment("Confirmer Number");
            $table->mediumInteger('type')->comment("Education Type");
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
        Schema::dropIfExists('absence_information');
    }
}
