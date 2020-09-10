<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesOrderRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_order_rows', function (Blueprint $table) {
            $table->bigIncrements('DocEntry')->autoIncrement();
            $table->mediumInteger('LineNum')->comment("Row Number");
            $table->string("ItemCode",50)->comment("Item No.");
            $table->mediumText('Dscription')->comment("Item/Service Description");
            $table->float('Quantity',9,2)->comment('Quantity');
            $table->float('Price',9,2)->comment('Unit Price');
            $table->mediumText('Currency')->comment("Price Currency");
            $table->float('Rate',9,2)->comment('Currency Rate');
            $table->float('LineTotal',9,2)->comment('Row Total');
            $table->mediumInteger('SlpCode')->comment("	Sales Employee Code");
            $table->mediumInteger('OwnerCode')->comment('Document Owner');
            $table->mediumInteger('UserSign2')->comment('Updating User');
            $table->mediumText('CodeBars')->comment("Bar Code");
            $table->float('GrssProfit',8,2)->comment("Row Gross Profit");
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
        Schema::dropIfExists('sales_order_rows');
    }
}
