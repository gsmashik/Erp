<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemGroupAndWareHouseHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_group_and_ware_house_histories', function (Blueprint $table) {
            $table->bigIncrements('DocEntry')->autoIncrement();
            $table->mediumInteger('ItmsGrpCod')->comment("Item Group Code");
            $table->string("WhsCode",6)->comment("Warehouse Code");
            $table->mediumInteger('UserSign')->comment('User Signature');
            $table->mediumInteger('UserSign2')->comment('Updating User');
            $table->mediumText('Notes',100)->comment("Remarks");
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
        Schema::dropIfExists('item_group_and_ware_house_histories');
    }
}
