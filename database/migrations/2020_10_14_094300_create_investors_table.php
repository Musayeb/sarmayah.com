<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            $table->id('investor_id')->unsigned();
            $table->string('env_name');
            $table->string('env_last_name');
            $table->string('env_email');
            $table->string('env_password');
            $table->string('env_phone');
            $table->string('country');
            $table->string('investment_amount');
            $table->string('env_protfolio');
            $table->string('intersted_sector');
            $table->string('account_type');
            $table->string('env_suits');
            $table->string('intial_startup_criteria');
            $table->integer('account_status');
            $table->integer('admin_status');
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
        Schema::dropIfExists('investors');
    }
}
