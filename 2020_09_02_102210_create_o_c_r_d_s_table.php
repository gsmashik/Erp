<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOCRDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_c_r_d_s', function (Blueprint $table) {
            $table->bigIncrements('DocEntry')->autoIncrement();
            $table->string("CardCode",50)->comment("BP Code");
            $table->mediumText('CardName',100)->comment("BP Name");
            $table->mediumText('CardFName',100)->comment("Foreign Name");
            $table->char('CardType',1)->comment('BP Type');
            $table->char('CmpPrivate',1)->comment('Business Partner Type');
            $table->mediumInteger('GroupCode')->comment("Group Code");
            $table->mediumText('Address',100)->comment("Bill-to Street");
            $table->string('ZipCode',20)->comment('Bill-to Zip Code');
            $table->mediumText('MailAddres',100)->comment("Ship-to Street");
            $table->string('MailZipCod',20)->comment('Ship-to Zip Code');
            $table->string('Phone1',20)->comment('Telephone 1');
            $table->string('Phone2',20)->comment('Telephone 2');
            $table->string('Fax',20)->comment('Fax Number');
            $table->string('Email',100)->comment('Email');
            $table->mediumInteger('CreditCard')->comment("Credit Cards");
            $table->mediumText('CrCardNum',100)->comment("Credit Card No.");
            $table->date('CardValid')->comment("Credit Card Validity");
            $table->mediumText('Picture',100)->comment("Picture");
            $table->string('City',20)->comment('Bill-to City');
            $table->string('MailCity',3)->comment('Ship-to City');
            $table->string('MailCounty',3)->comment('Ship-to County');
            $table->string('ShipCountry',3)->comment('Bill-to County');
            $table->string('ShipCounty',3)->comment('Shipp-to Country');
            $table->string('BillCountry',3)->comment('Bill-to Country');
            $table->string('CntctPrsn',90)->comment('Contact Person');
            $table->mediumText('Notes',100)->comment("Remarks");
            $table->text('Free_Text')->comment('Free Text');
            $table->mediumInteger('SlpCode')->comment("	Sales Employee Code");
            $table->string('Currency',3)->comment('BP Currency');
            $table->char('Deleted',1)->comment('Deleted  [Yes/No]');
            $table->mediumInteger('UserSign')->comment('User Signature');
            $table->mediumInteger('UserSign2')->comment('Updating User');
         
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
        Schema::dropIfExists('o_c_r_d_s');
    }
}
