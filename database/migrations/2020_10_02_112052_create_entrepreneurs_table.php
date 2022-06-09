<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepreneursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrepreneurs', function (Blueprint $table) {
            $table->id('entrepreneurs_id');
            $table->string('catagory');
            $table->string('entre_name');
            $table->string('entre_last_name');
            $table->string('entre_email');
            $table->string('enter_password');
            $table->integer('entre_phone');
            $table->string('country');
            $table->string('startup_name');
            $table->string('company_name');
            $table->string('website_url');
            $table->string('facebook_url');
            $table->string('linkedin_url');
            $table->string('instagram_url');
            $table->date('establishment_date');
            $table->string('ent_industry_sector');
            $table->string('ent_revenue');
            $table->string('ent_operation_cost');
            $table->integer('team_size');
            $table->string('pitch_video_link');
            $table->string('incobation_program_center');
            $table->date('graduation_date');
            $table->string('top_three_campatitors');
            $table->string('kind_of_investment');
            $table->string('company_profile');
            $table->string('pitch_presentation');
            $table->integer('mainimum_amount_looking');
            $table->string('round_invest');
            $table->string('how_hear_ab_us');
            $table->string('elavator_picth');
            $table->string('problem_sulotion');
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
        Schema::dropIfExists('entrepreneurs');
    }
}
