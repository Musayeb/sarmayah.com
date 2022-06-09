<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreFinancialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entre_financial', function (Blueprint $table) {
           $table->bigIncrements('entre_financial_id');
            $table->bigInteger('entre_id')->nullable();
            $table->bigInteger('intial_payroll')->nullable();
            $table->bigInteger('intial_operation_cost')->nullable();
            $table->bigInteger('intial_technology')->nullable();
            $table->bigInteger('intial_machinery')->nullable();
            $table->bigInteger('intial_online_presence')->nullable();
            $table->bigInteger('intial_other1')->nullable();
            $table->bigInteger('intial_other2')->nullable();
            $table->bigInteger('intial_other3')->nullable();
            $table->bigInteger('raised_r1')->nullable();
            $table->bigInteger('raised_r2')->nullable();
            $table->bigInteger('raised_r3')->nullable();
            $table->bigInteger('operation_payroll')->nullable();
            $table->bigInteger('operation_operation_cost')->nullable();
            $table->bigInteger('operation_technology')->nullable();
            $table->bigInteger('operation_machinery')->nullable();
            $table->bigInteger('operation_marketing')->nullable();
            $table->bigInteger('operation_other1')->nullable();
            $table->bigInteger('operation_other2')->nullable();
            $table->bigInteger('operation_other3')->nullable();
            $table->bigInteger('current_revenue')->nullable();
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entre_financial');
    }
}
