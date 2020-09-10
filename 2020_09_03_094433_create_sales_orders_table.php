<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_orders', function (Blueprint $table) {
            $table->bigIncrements('DocEntry')->autoIncrement()->comment("Internal Number");
            $table->mediumInteger('DocNum')->comment("Document Number");
            $table->char('DocType',1)->comment('Document Type');
            $table->char('CANCELED',1)->comment('Canceled');
            $table->char('Printed',1)->comment('Printed');
            $table->char('DocStatus',1)->comment('Document Status'); // C=Closed, O=Open
            $table->date('DocDate')->comment("Posting Date");
            $table->date('DocDueDate')->comment("Due Date");
            $table->string("CardCode",50)->comment("Customer/Vendor Code");
            $table->mediumText('CardName',100)->comment("Customer/Vendor Name");
            $table->mediumText('Address',255)->comment("Bill to");
            $table->float('	VatPercent',8,2)->comment("Tax Rate");
            $table->float('VatSum',8,2)->comment("Total Tax");
            $table->char('DocCur',3)->comment('Document Currency');
            $table->float('	DocRate',8,2)->comment("Document Rate");
            $table->float('DocTotal',8,2)->comment("Document Total	");
            $table->float('GrosProfit',8,2)->comment("Gross Profit");
            $table->text('Comments')->comment('Remarks');
            $table->text('JrnlMemo')->comment('Journal Remarks');
            $table->time('DocTime', 6)->comment('Generation Time');
            $table->mediumInteger('SlpCode')->comment("	Sales Employee Code");
            $table->mediumInteger('OwnerCode')->comment('Document Owner');
            $table->mediumInteger('UserSign2')->comment('Updating User');
            $table->float('DiscPrcnt', 8, 2)->comment('Discount % for Document');
            $table->float('DiscSum', 8, 2)->comment('Total Discount');
            $table->date('UpdateDate')->comment("Date of Update");
            $table->date('CreateDate')->comment("Creation Date");
            $table->date('ReqDate')->comment("Required Date");
            $table->date('CancelDate')->comment("Cancelation Date");
            $table->date('ClsDate')->comment("Document Closing Date");
            $table->mediumInteger('Series')->comment("Series");
           

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
        Schema::dropIfExists('sales_orders');
    }
}
