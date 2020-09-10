<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_details', function (Blueprint $table) {
            $table->bigIncrements('version')->autoIncrement();
            $table->mediumText('CompnyName',100)->comment("Company Name");
            $table->mediumText('info1',100)->comment("info1");
            $table->mediumText('info2',100)->comment("info2");
            $table->mediumText('info3',100)->comment("info3");
            $table->mediumText('localCurrency',100)->comment("Local Currency");
            $table->mediumText('systemCurrency',100)->comment("System Currency");
            $table->mediumText('defaultcur',100)->comment("Default System Currency");
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
        Schema::dropIfExists('company_details');
    }
}
