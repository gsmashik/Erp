<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionOrderRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_order_rows', function (Blueprint $table) {
            $table->bigIncrements('DocEntry')->autoIncrement();
            $table->mediumInteger('LineNum')->comment("Row Number");
            $table->string("ItemCode",50)->comment("Item No.");
            $table->float('BaseQty')->comment("Base Quantity");
            $table->mediumInteger('PlannedQty')->comment("Planned Quantity - Rows");
            $table->mediumInteger('IssuedQty')->comment("Issued Quantity");
            $table->char('IssueType',1)->comment('	Production Order Issue Type 	B=Backflush, M=Manual');
            $table->text('LineText')->comment('Row Text');
            $table->date('StartDate')->comment("Start Date");
            $table->date('EndDate')->comment("End Date");
            $table->string('Warehouse',8)->comment('nvarchar');
            $table->char('Status',1)->comment('	Stage Status 	C=Complete, I=In Progress, P=Planned');
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
        Schema::dropIfExists('production_order_rows');
    }
}
