<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
// use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('test',function(){
//   echo"salaam";
    
// });

Route::get('testEmail1','admin\homecontroller@test');
Route::get('/','HomeController@index');

Route::get('testEmail',function (){
   return view('emails.weekly');
});
Route::get('/testtest','HomeController@testtest');
Route::get('business/p/business={id?}','HomeController@entrepreneurs_prof')->name('business');


Route::get('registration','HomeController@show_reg_option');
Route::get('enterpreneur_registration','HomeController@showEntrepreneur');
Route::get('investor_registration','HomeController@showinvestor');
Route::post('investor_register','HomeController@investor_register');
Route::post('entrepreneur_Reg','HomeController@entre_register');
Route::get('account_verification','HomaeController@account_verification');
Route::get('account_activation/e/id={id?}','HomeController@account_activation_e');
Route::get('account_activation/i/id={id?}','HomeController@account_activation_i');

Route::get('account/login','HomeController@login');
Route::post('ent__login_check','HomeController@check')->name('entre_login');
Route::post('inv_login_check','HomeController@login_check');

Route::get('password_reset','HomeController@password_reset');
Route::post('password_change_reset','HomeController@password__change_reset');
Route::get('password/reset/email={email?}/id={id?}','HomeController@password_recovery');
Route::post('password_recovery_change','HomeController@password_recovery_change');



Route::post('Business/serach','HomeController@Busserach');
Route::get('serach/business/{sector?}','HomeController@serach_home_bus');
Route::get('sectors/business/sector={sector?}','HomeController@sector_search');

// pages

Route::get('about_us','HomeController@about_page');
Route::get('careers','HomeController@careers');
Route::get('Careers/{slug?}','HomeController@careers_show');
Route::get('partners','HomeController@partner');
Route::get('privacy-policy','HomeController@privacy_page');
Route::get('terms-of-use','HomeController@terms_of_use');
Route::get('intellectual-property','HomeController@intellectual_property');
Route::get('support','HomeController@support');
Route::get('investors-relationship','HomeController@investors_relationship');
Route::get('press-news','HomeController@press_news');
Route::get('invite-friends','HomeController@invite_friend');
Route::post('invite_frinds','HomeController@invite_friend_post');
Route::get('blog/{slug?}','HomeController@blog_details');
Route::get('blogs','HomeController@blog_all');
Route::get('news/{slug?}','HomeController@news_details');

Route::get('contact_us','HomeController@contact_page');

Route::get('businesses/','HomeController@entrepreneurs_page');


 Route::get('notifications','NotificationsController@entreNotifications');
 Route::get('notifications/delete/{id?}','NotificationsController@Notifications_delete');

// Startup profile

Route::group(['middleware' => ['startup']], function () {

Route::get('ent/startup/add/team/member','entreprenuer\StartupController@add_team_member');
Route::post('ent/startup/add/team/member/add','entreprenuer\StartupController@add_team_member_add');
Route::get('ent/startup/add/team/member/delete/{id?}','entreprenuer\StartupController@add_team_member_delete');
Route::get('ent/startup/edit/team/member/member={id?}','entreprenuer\StartupController@edit_team_member');
Route::post('ent/startup/update/team/member/','entreprenuer\StartupController@update_team_member');
// 
Route::post('ent/startup/business_minimum_viable_product/','entreprenuer\StartupController@viable_product');
Route::post('ent/startup/high_level_product/','entreprenuer\StartupController@high_level_product');
Route::post('ent/startup/product_need/','entreprenuer\StartupController@product_need');
Route::post('ent/startup/product_plan/','entreprenuer\StartupController@product_plan');
Route::get('ent/startup/busniess_modal_content/{data?}','entreprenuer\StartupController@busniess_modal_content');
Route::post('ent/startup/store_busniess_model','entreprenuer\StartupController@store_busniess_model');

Route::post('ent/startup/busness_trends_add','entreprenuer\StartupController@busniess_trends');
Route::post('ent/startup/risk_a_add','entreprenuer\StartupController@risk_a_add');
Route::post('ent/startup/advantage','entreprenuer\StartupController@advantage');
Route::post('ent/startup/store_market_position','entreprenuer\StartupController@startup_market_position');
Route::post('ent/startup/store_the_market','entreprenuer\StartupController@startup_themarket');
Route::post('ent/startup/store_define_invest','entreprenuer\StartupController@startup_store_define_invest');
Route::post('ent/startup/store_define_invest_plan','entreprenuer\StartupController@startup_store_define_invest_plan');

Route::post('ent/startup/store_define_invest_breakdown','entreprenuer\StartupController@startup_store_define_invest_breackdown');
Route::post('ent/startup/calculate_cost','entreprenuer\StartupController@calculate_cost');
Route::post('ent/startup/store_market_segment','entreprenuer\StartupController@store_market_segment');
Route::post('ent/startup/b_head_question','entreprenuer\StartupController@b_head_question');

Route::post('ent/startup/b_head_summary','entreprenuer\StartupController@b_head_summary');
Route::post('ent/startup/b_head_total_market_size','entreprenuer\StartupController@total_market_size');
Route::post('ent/startup/b_head_market_life_cycle','entreprenuer\StartupController@market_life_cycle');

Route::post('ent/startup/financial/first','entreprenuer\StartupController@star_finance1');
Route::post('ent/startup/financial/second','entreprenuer\StartupController@star_finance2');
Route::post('ent/startup/financial/third','entreprenuer\StartupController@star_finance3');
Route::post('ent/startup/financial/forth','entreprenuer\StartupController@star_finance4');

Route::get('ent/startup/profile','entreprenuer\StartupController@profile1');
Route::get('ent/startup/edit/account','entreprenuer\StartupController@startup_edit_settings');
Route::post('ent/startup/change/photo','entreprenuer\StartupController@startup_change_photo');
Route::post('ent/startup/change/general','entreprenuer\StartupController@startup_change_genral');
Route::post('ent/startup/change/password','entreprenuer\StartupController@startup_change_password');  

   // upload

Route::post('ent/startup/tazkira/update','entreprenuer\StartupController@startup_update_tazkira');
Route::post('ent/startup/busniess_logo/update','entreprenuer\StartupController@startup_update_logo');
Route::post('ent/startup/Business_profile/update','entreprenuer\StartupController@startup_update_Business_profile');
Route::post('ent/startup/busniess_plan/update','entreprenuer\StartupController@startup_update_Business_plan');
Route::post('ent/startup/pitch_deck/update','entreprenuer\StartupController@startup_update_pitch_deck');
Route::post('ent/startup/busniess_license/update','entreprenuer\StartupController@startup_update_bus_license');
// 

Route::get('ent/startup/profile/edit','entreprenuer\StartupController@star_profile_edit');
Route::post('ent/startup/profile/update','entreprenuer\StartupController@star_profile_update');
Route::post('ent/startup/profile/update1','entreprenuer\StartupController@star_profile_update1');
Route::post('ent/startup/profile/update2','entreprenuer\StartupController@star_profile_update2');
Route::post('ent/startup/profile/update3','entreprenuer\StartupController@star_profile_update3');
Route::get('ent/startup/profile/update4','entreprenuer\StartupController@star_profile_update4');



    Route::get('ent/startup/logout','HomeController@startup_logout');
    // notification


});
//endstartup

// SME




Route::group(['middleware' => ['sme']], function () {
Route::get('ent/sme/profile','entreprenuer\SmeController@sme_profile1');
//team

  Route::get('ent/sme/add/team/member','entreprenuer\SmeController@sme_add_team_member');
  Route::post('ent/sme/add/team/member/add','entreprenuer\SmeController@sme_add_team_member_add');
  Route::get('ent/sme/add/team/member/delete/{id?}','entreprenuer\SmeController@sme_add_team_member_delete');
  Route::get('ent/sme/edit/team/member/member={id?}','entreprenuer\SmeController@sme_edit_team_member');
  Route::post('ent/sme/update/team/member/','entreprenuer\SmeController@sme_update_team_member');

// endteam
// tabs
   Route::post('ent/sme/profile/update','entreprenuer\SmeController@sme_profile_update');
   Route::get('ent/sme/edit/account','entreprenuer\SmeController@sme_edit_settings');
   Route::post('ent/sme/change/photo','entreprenuer\SmeController@sme_change_photo');
   Route::post('ent/sme/change/general','entreprenuer\SmeController@sme_change_genral');
   Route::post('ent/sme/change/password','entreprenuer\SmeController@sme_change_password');  
   Route::get('ent/sme/profile/edit','entreprenuer\SmeController@sme_profile_edit')->name('sme_prfile_edit');

   Route::post('ent/gr/business_minimum_viable_product/','entreprenuer\SmeController@sme_viable_product');
   Route::post('ent/gr/high_level_product/','entreprenuer\SmeController@high_level_product');
   Route::post('ent/gr/product_need/','entreprenuer\SmeController@product_need');
   Route::post('ent/gr/product_plan/','entreprenuer\SmeController@product_plan');
   Route::get('ent/gr/busniess_modal_content/{data?}','entreprenuer\SmeController@busniess_modal_content');
   Route::post('ent/gr/store_busniess_model','entreprenuer\SmeController@store_busniess_model');
   Route::post('ent/gr/profile/update1','entreprenuer\SmeController@sme_profile_update1');
   Route::post('ent/gr/busness_trends_add','entreprenuer\SmeController@busniess_trends');
   Route::post('ent/gr/risk_a_add','entreprenuer\SmeController@risk_a_add');
   Route::post('ent/gr/advantage','entreprenuer\SmeController@advantage');
   Route::post('ent/gr/store_market_position','entreprenuer\SmeController@sme_market_position');
   Route::post('ent/gr/store_the_market','entreprenuer\SmeController@sme_themarket');
   Route::post('ent/gr/store_define_invest','entreprenuer\SmeController@sme_store_define_invest');
   Route::post('ent/gr/store_define_invest_plan','entreprenuer\SmeController@sme_store_define_invest_plan');
   Route::post('ent/gr/store_define_invest_breakdown','entreprenuer\SmeController@sme_store_define_invest_breackdown');
   Route::post('ent/gr/calculate_cost','entreprenuer\SmeController@sme_calculate_cost');
   Route::post('ent/gr/store_market_segment','entreprenuer\SmeController@store_market_segment');
   Route::post('ent/gr/b_head_question','entreprenuer\SmeController@b_head_question');
   Route::post('ent/gr/b_head_summary','entreprenuer\SmeController@b_head_summary');
   Route::post('ent/gr/b_head_total_market_size','entreprenuer\SmeController@total_market_size');
   Route::post('ent/gr/b_head_market_life_cycle','entreprenuer\SmeController@market_life_cycle');
   Route::post('ent/gr/financial/first','entreprenuer\SmeController@sme_finance1');
   Route::post('ent/gr/financial/second','entreprenuer\SmeController@sme_finance2');
   Route::post('ent/gr/financial/third','entreprenuer\SmeController@sme_finance3');
   Route::post('ent/gr/financial/forth','entreprenuer\SmeController@sme_finance4');

   // Swoat analyze route
   Route::post('ent/gr/Expansion_Plan/','entreprenuer\SmeController@expansion_plan');
   Route::post('ent/gr/executive_summary/','entreprenuer\SmeController@executive_summary');
   Route::post('ent/gr/swoat_analyze/','entreprenuer\SmeController@swoat_analyze');
   Route::post('ent/gr/target_market/','entreprenuer\SmeController@target_market');
   Route::post('ent/gr/market_study/','entreprenuer\SmeController@market_study');
   Route::post('ent/gr/product_upgrade/','entreprenuer\SmeController@product_upgrade');
   Route::post('ent/gr/required_tech_fincance','entreprenuer\SmeController@required_tech_fincance');
// 
// upload

   Route::post('ent/gr/tazkira/update','entreprenuer\SmeController@sme_update_tazkira');
   Route::post('ent/gr/busniess_logo/update','entreprenuer\SmeController@sme_update_logo');
   Route::post('ent/gr/Business_profile/update','entreprenuer\SmeController@sme_update_Business_profile');
   Route::post('ent/gr/busniess_plan/update','entreprenuer\SmeController@sme_update_Business_plan');
   Route::post('ent/gr/pitch_deck/update','entreprenuer\SmeController@sme_update_pitch_deck');
   Route::post('ent/gr/busniess_license/update','entreprenuer\SmeController@sme_update_bus_license');

   Route::get('ent/gr/profile/update4','entreprenuer\SmeController@sme_profile_update4');

// 

   Route::get('ent/sme/logout','HomeController@sme_logout');
// notification



});

// route::get()
Route::get('/clear-cache-all', function() {
    Artisan::call('cache:clear');
 
    dd("Cache Clear All");
    
});


// end SME 

// idea
Route::group(['middleware' => ['idea']], function () {
   Route::get('ent/idea/profile/','entreprenuer\entrepreController@idea_profile');
   Route::get('ent/idea/profile/update4','entreprenuer\entrepreController@idea_profile_update4');

   Route::get('ent/idea/profile/edit','entreprenuer\entrepreController@idea_profile_edit')->name('idea_prfile_edit');

   Route::get('ent/idea/edit/account','entreprenuer\entrepreController@idea_edit_settings');
   Route::post('ent/idea/change/photo','entreprenuer\entrepreController@idea_change_photo');
   Route::post('ent/idea/change/general','entreprenuer\entrepreController@idea_change_genral');
   Route::post('ent/idea/change/password','entreprenuer\entrepreController@idea_change_password');  
   Route::post('ent/idea/busniess_logo/update','entreprenuer\entrepreController@idea_update_logo');  
   Route::post('ent/idea/pitch_deck/update','entreprenuer\entrepreController@idea_update_pitch_deck');  
   Route::post('ent/idea/tazkira/update','entreprenuer\entrepreController@idea_update_tazkira');
   Route::get('ent/idea/add/team/member','entreprenuer\entrepreController@idea_team_member');
   Route::post('ent/idea/add/team/member/add','entreprenuer\entrepreController@idea_add_team_member_add');

   Route::get('ent/idea/add/team/member/delete/{id?}','entreprenuer\entrepreController@idea_add_team_member_delete');
   Route::get('ent/idea/edit/team/member/member={id?}','entreprenuer\entrepreController@idea_edit_team_member');
   Route::post('ent/idea/update/team/member/','entreprenuer\entrepreController@idea_update_team_member');
   Route::post('ent/idea/profile/update','entreprenuer\entrepreController@idea_profile_update');

   Route::post('ent/idea/profile/edit/elevator','entreprenuer\entrepreController@idea_profile_elevator');
   Route::post('ent/idea/profile/edit/problem','entreprenuer\entrepreController@idea_profile_problem');
   Route::post('ent/idea/profile/edit/solution','entreprenuer\entrepreController@idea_profile_solution');
   Route::post('ent/idea/busniess_model_store','entreprenuer\entrepreController@idea_busniess_model_store');
   Route::post('ent/idea/the_market_store','entreprenuer\entrepreController@the_market');
   Route::post('ent/idea/busness_trends_add','entreprenuer\entrepreController@busniess_trends_add');
   Route::post('ent/idea/risk_a_add','entreprenuer\entrepreController@idea_risk_analysis');

   Route::post('ent/idea/store_define_invest','entreprenuer\entrepreController@idea_store_define_invest');
   Route::post('ent/idea/store_define_invest_plan','entreprenuer\entrepreController@idea_store_define_invest_plan');
   Route::post('ent/idea/store_define_invest_breakdown','entreprenuer\entrepreController@idea_store_define_invest_breackdown');
   Route::post('ent/idea/store_implement_phase','entreprenuer\entrepreController@implement_phase');

   // 
   Route::post('ent/idea/financial/first','entreprenuer\entrepreController@idea_finance1');
   Route::post('ent/idea/financial/second','entreprenuer\entrepreController@idea_finance2');
   Route::post('ent/idea/financial/third','entreprenuer\entrepreController@idea_finance3');
   Route::post('ent/idea/financial/forth','entreprenuer\entrepreController@idea_finance4');

  Route::get('ent/idea/busniess_modal_content/{data?}','entreprenuer\entrepreController@busniess_model');
  Route::get('ent/idea/implement_plan','entreprenuer\entrepreController@plan_implement');


  Route::post('compatitive_advantage','entreprenuer\entrepreController@compatitive_adv');

  Route::post('ent/idea/store_market_position','entreprenuer\entrepreController@market_position');

  Route::post('ent/idea/store_investment_management','entreprenuer\entrepreController@invest_management');


   Route::get('ent/idea/logout','HomeController@idea_logout');
// notification



});




 //end idea  


// investor
Route::group(['middleware' => ['investor']], function () {
Route::get('investor_profile','InvestorController@profile');
Route::post('investor/change/password','InvestorController@change_password');
Route::post('investor/change/detail/main','InvestorController@change_detail_main');
Route::post('investor/change/detail/','InvestorController@change_detail');
Route::post('investor/add/portfolio','InvestorController@add_portfolio');
// for see startups or entreprenure


Route::post('investment_process/','HomeController@invest_process');
Route::post('invest/request/cancel','HomeController@invest_cancel');
Route::get('invest/business/save','HomeController@save_business');

Route::get('saved-businesses','HomeController@saved_business_show');
Route::get('interested-businesses','HomeController@interested_business_show');
Route::get('matched-business','HomeController@matched_business_show');

Route::get('investment/request/','HomeController@investment_request');
Route::get('investor/notificatios/','InvestorController@show_notification');
Route::get('investor/notificatios/delete/{id?}','InvestorController@delete_notification');

Route::get('invested_entreprenure/id={id?}','InvestorController@invested_entreprenure');
Route::get('inv_logout','HomeController@logout');



});

Route::get('sendReminderDraft','admin\homecontroller@sendreminder');


Route::group(['middleware' => ['auth']], function () {   

 Route::get('ad/notification/center','admin\homecontroller@notification');  
Route::get('ad/home','admin\homecontroller@index');
Route::get('ad/ip_block','admin\homecontroller@blockip_add');
Route::post('ad/bloked/ip/','admin\homecontroller@add_blockip');
Route::get('ad/bloked/ip/delete/{id?ent/idea/profile}','admin\homecontroller@add_blockip_delete');


Route::get('ad/account/settings','admin\homecontroller@account_settings');
Route::post('update/admin/info','admin\homecontroller@admin_info_update');
Route::post('password/change','admin\homecontroller@change_pasword');

// entreprenure
Route::get('ad/featured/business','admin\homecontroller@featured_busniess');
Route::post('ad/featured/add','admin\homecontroller@add_feature');
Route::get('ad/featured/view/{date?}','admin\homecontroller@filter_view');
Route::get('ad/featured/filter/{date?}','admin\homecontroller@filter_feature');
Route::get('ad/featured/delete/{id?}','admin\homecontroller@delete_feature');
Route::get('ad/featured/detail/more/{date?}/{id?}','admin\homecontroller@feature_detail_more');



Route::get('ad/business/','admin\entrepreneurcontroller@bus_all');
Route::get('ad/business/draft','admin\entrepreneurcontroller@bus_draft');
Route::get('ad/business/submited','admin\entrepreneurcontroller@submited_business');

Route::get('ad/business/approved','admin\entrepreneurcontroller@bus_approved');
Route::get('ad/business/rejected','admin\entrepreneurcontroller@bus_reject');
Route::get('ad/business/not_verified','admin\entrepreneurcontroller@bus_not_verifyed');

Route::post('ad/send/mail','admin\homecontroller@send_mail');
Route::get('ad/enterpreuners_edit/{id?}','admin\entrepreneurcontroller@edit');
Route::post('ad/enterpreuners_update','admin\entrepreneurcontroller@update');
Route::get('ad/enterpreuners_delete/{id?}','admin\entrepreneurcontroller@delete');
Route::post('ad/enterpreuners_delete','admin\entrepreneurcontroller@info');
// profile
 Route::get('ad/business_profile/{id}','admin\homecontroller@profile');
 Route::get('ad/business_profile_show/{id}','admin\homecontroller@profile1');


 // sme
   Route::post('ad/gr/profile/update','admin\smeController@sme_profile_update');
   Route::post('ad/gr/business_minimum_viable_product/','admin\smeController@sme_viable_product');
   Route::post('ad/gr/high_level_product/','admin\smeController@high_level_product');
   Route::post('ad/gr/product_need/','admin\smeController@product_need');
   Route::post('ad/gr/b_head_market_life_cycle','admin\smeController@market_life_cycle');
   Route::post('ad/gr/product_plan/','admin\smeController@product_plan');
   Route::post('ad/gr/profile/update1','admin\smeController@sme_profile_update1');

   Route::get('ad/gr/busniess_modal_content/{data?}/{hide?}','admin\smeController@busniess_modal_content');
   Route::post('ad/gr/store_busniess_model','admin\smeController@store_busniess_model');
   Route::post('ad/gr/busness_trends_add','admin\smeController@busniess_trends');
   Route::post('ad/gr/risk_a_add','admin\smeController@risk_a_add');
   Route::post('ad/gr/advantage','admin\smeController@advantage');
   Route::post('ad/gr/store_the_market','admin\smeController@sme_themarket');
   Route::post('ad/gr/calculate_cost','admin\smeController@sme_calculate_cost');

   Route::post('ad/gr/store_market_segment','admin\smeController@store_market_segment');
   Route::post('ad/gr/b_head_question','admin\smeController@b_head_question');
   Route::post('ad/gr/b_head_summary','admin\smeController@b_head_summary');
   Route::post('ad/gr/b_head_total_market_size','admin\smeController@total_market_size');

   Route::post('ad/gr/Expansion_Plan/','admin\smeController@expansion_plan');
   Route::post('ad/gr/executive_summary/','admin\smeController@executive_summary');
   Route::post('ad/gr/target_market/','admin\smeController@target_market');
   Route::post('ad/gr/market_study/','admin\smeController@market_study');
   Route::post('ad/gr/product_upgrade/','admin\smeController@product_upgrade');
   Route::post('ad/gr/required_tech_fincance','admin\smeController@required_tech_fincance');

   Route::post('ad/gr/swoat_analyze/','admin\smeController@swoat_analyze');

   Route::post('ad/gr/store_market_position','admin\smeController@sme_market_position');
   Route::post('ad/gr/store_define_invest','admin\smeController@sme_store_define_invest');

   Route::post('ad/gr/store_define_invest_plan','admin\smeController@sme_store_define_invest_plan');


   Route::post('ad/gr/store_define_invest_breakdown','admin\smeController@sme_store_define_invest_breackdown');
   Route::post('ad/gr/financial/first','admin\smeController@sme_finance1');
   Route::post('ad/gr/financial/second','admin\smeController@sme_finance2');
   Route::post('ad/gr/financial/third','admin\smeController@sme_finance3');
   Route::post('ad/gr/financial/forth','admin\smeController@sme_finance4');
// hide_input\snalyze route


 Route::get('ad/gr/add/team/member/{id?}','admin\smeController@sme_team_member');
 Route::post('ad/gr/add/team/member/add','admin\smeController@sme_add_team_member_add');
 Route::get('ad/gr/add/team/member/delete/{id?}','admin\smeController@sme_add_team_member_delete');
 Route::get('ad/gr/edit/team/member/member={id?}','admin\smeController@sme_edit_team_member');
 Route::post('ad/gr/update/team/member/','admin\smeController@sme_update_team_member');


// 
// upload
Route::post('ad/gr/busniess_logo/update','admin\smeController@sme_update_logo');
Route::post('ad/gr/Business_profile/update','admin\smeController@sme_update_Business_profile');
Route::post('ad/gr/busniess_plan/update','admin\smeController@sme_update_Business_plan');
Route::post('ad/gr/pitch_deck/update','admin\smeController@sme_update_pitch_deck');
Route::post('ad/gr/busniess_license/update','admin\smeController@sme_update_bus_license');
// 

// idea


 Route::post('ad/idea/profile/update','admin\ideaController@idea_profile_update');
 Route::post('ad/idea/profile/edit/elevator','admin\ideaController@idea_profile_elevator');
 Route::post('ad/idea/profile/edit/problem','admin\ideaController@idea_profile_problem');

 Route::post('ad/idea/profile/edit/solution','admin\ideaController@idea_profile_solution');
 Route::get('ad/idea/busniess_modal_content/{data?}/{id?}','admin\ideaController@busniess_model');
 Route::post('ad/idea/busniess_model_store','admin\ideaController@idea_busniess_model_store');
 Route::post('ad/idea/the_market_store','admin\ideaController@the_market');
 Route::post('ad/idea/busness_trends_add','admin\ideaController@busniess_trends_add');
 Route::post('ad/idea/risk_a_add','admin\ideaController@idea_risk_analysis');
 Route::post('ad/compatitive_advantage','admin\ideaController@compatitive_adv');
 Route::post('ad/idea/store_define_invest','admin\ideaController@idea_store_define_invest');
 Route::post('ad/idea/store_define_invest_plan','admin\ideaController@idea_store_define_invest_plan');
 Route::post('ad/idea/store_define_invest_breakdown','admin\ideaController@idea_store_define_invest_breackdown');
 Route::get('ad/idea/implement_plan/{id?}','admin\ideaController@plan_implement');
 Route::post('ad/idea/store_implement_phase','admin\ideaController@implement_phase');


 Route::post('ad/idea/financial/first','admin\ideaController@idea_finance1');
 Route::post('ad/idea/financial/second','admin\ideaController@idea_finance2');
 Route::post('ad/idea/financial/third','admin\ideaController@idea_finance3');
 Route::post('ad/idea/financial/forth','admin\ideaController@idea_finance4');
 
 // upload
 Route::post('ad/idea/store_market_position','admin\ideaController@market_position');
 Route::post('ad/idea/pitch_deck/update','admin\ideaController@idea_update_pitch_deck'); 
 Route::post('ad/idea/busniess_logo/update','admin\ideaController@idea_update_logo');   
// endofupload


 Route::get('ad/idea/add/team/member/{id?}','admin\ideaController@idea_team_member');
 Route::post('ad/idea/add/team/member/add','admin\ideaController@idea_add_team_member_add');
 Route::get('ad/idea/add/team/member/delete/{id?}','admin\ideaController@idea_add_team_member_delete');
 Route::get('ad/idea/edit/team/member/member={id?}','admin\ideaController@idea_edit_team_member');
 Route::post('ad/idea/update/team/member/','admin\ideaController@idea_update_team_member');

 // end of idea

// startup 

Route::get('ad/startup/add/team/member/{id?}','admin\startupController@add_team_member');
Route::post('ad/startup/add/team/member/add','admin\startupController@add_team_member_add');
Route::get('ad/startup/add/team/member/delete/{id?}','admin\startupController@add_team_member_delete');
Route::get('ad/startup/edit/team/member/member={id?}','admin\startupController@edit_team_member');
Route::post('ad/startup/update/team/member/','admin\startupController@update_team_member');
//
 Route::post('ad/startup/profile/update','admin\startupController@star_profile_update');
 Route::post('ad/startup/profile/update1','admin\startupController@star_profile_update1');
 Route::get('ad/startup/busniess_modal_content/{data?}/{id?}','admin\startupController@busniess_modal_content');
 Route::post('ad/startup/store_busniess_model','admin\startupController@store_busniess_model'); 
 Route::post('ad/startup/busness_trends_add','admin\startupController@busniess_trends');
 Route::post('ad/startup/risk_a_add','admin\startupController@risk_a_add');
 Route::post('ad/startup/advantage','admin\startupController@advantage');

Route::post('ad/startup/business_minimum_viable_product/','admin\startupController@viable_product');
Route::post('ad/startup/high_level_product/','admin\startupController@high_level_product');
Route::post('ad/startup/product_need/','admin\startupController@product_need');
Route::post('ad/startup/product_plan/','admin\startupController@product_plan');
Route::post('ad/startup/calculate_cost','admin\startupController@calculate_cost');
Route::post('ad/startup/store_market_segment','admin\startupController@store_market_segment');
Route::post('ad/startup/b_head_question','admin\startupController@b_head_question');
Route::post('ad/startup/b_head_summary','admin\startupController@b_head_summary');
Route::post('ad/startup/b_head_total_market_size','admin\startupController@total_market_size');
Route::post('ad/startup/b_head_market_life_cycle','admin\startupController@market_life_cycle');
Route::post('ad/startup/store_the_market','admin\startupController@startup_themarket');
Route::post('ad/startup/store_define_invest','admin\startupController@startup_store_define_invest');
Route::post('ad/startup/store_define_invest_plan','admin\startupController@startup_store_define_invest_plan');
Route::post('ad/startup/store_define_invest_breakdown','admin\startupController@startup_store_define_invest_breackdown');
Route::post('ad/startup/financial/first','admin\startupController@star_finance1');
Route::post('ad/startup/financial/second','admin\startupController@star_finance2');
Route::post('ad/startup/financial/third','admin\startupController@star_finance3');
Route::post('ad/startup/financial/forth','admin\startupController@star_finance4');
Route::post('ad/startup/store_market_position','admin\startupController@startup_market_position');
 // upload
   Route::post('ad/startup/busniess_logo/update','admin\startupController@startup_update_logo');
   Route::post('ad/startup/Business_profile/update','admin\startupController@startup_update_Business_profile');
   Route::post('ad/startup/busniess_plan/update','admin\startupController@startup_update_Business_plan');
   Route::post('ad/startup/pitch_deck/update','admin\startupController@startup_update_pitch_deck');
   Route::post('ad/startup/busniess_license/update','admin\startupController@startup_update_bus_license');
// 


// investors

Route::get('ad/investors','admin\investorController@index');
// Route::get('ad/investors/edit/{id?}','admin\investorController@edit');
Route::get('ad/investor_profile/{id?}','admin\investorController@profile');
Route::post('ad/investor/update1/','admin\investorController@update1');
Route::post('ad/investor/update2/','admin\investorController@update2');
Route::post('ad/investor/update3/','admin\investorController@update3');
Route::get('ad/investor/delete/{id?}','admin\investorController@delete');
Route::get('ad/change/investor/status/{id?}/{status?}','admin\investorController@change_account_status2');


// invstment Requests
// accout status

Route::get('ad/change/entre/status/{id?}/{status?}','admin\entrepreneurcontroller@change_account_status');
Route::get('ad/change/entre/catagory/{id?}/{catagory?}','admin\entrepreneurcontroller@change_account_cat');

Route::get('ad/investment_request','admin\investorController@invest_request');
Route::get('ad/saved_business','admin\investorController@saved_business');
Route::get('ad/cancel_request','admin\investorController@cancel_business');


// users
Route::post('ad/users/register','admin\homecontroller@userregister');
Route::get('ad/users','admin\homecontroller@userShow');
Route::get('ad/users/edit/{id?}','admin\homecontroller@useredit');
Route::post('ad/users/update/','admin\homecontroller@userupdate');
Route::get('ad/users/delete/{id?}','admin\homecontroller@userdelete');



Route::post('ad/invest/fallup/email','admin\investorController@fallup_email');
Route::get('ad/invest_match/{investor?}/{entreprenure?}/{invest_process_id?}','admin\investorController@match');

// Route::get('testtest',function()
// {
//    return view('emails.invite_friend');
// });

Route::post('salaamupload','admin\homecontroller@upload');

// sectors
Route::get('ad/sectors','admin\homecontroller@sector_index');
Route::post('ad/sectors/add','admin\homecontroller@sector_add');
Route::get('ad/delete_sector/{id?}','admin\homecontroller@delete_sector');
Route::get('ad/sector_edit/{id?}','admin\homecontroller@sector_edit');
Route::post('ad/sector_update','admin\homecontroller@sector_update');


 // pages
// blog
Route::get('ad/blogs','admin\BlogController@index');
Route::get('ad/blogs/add','admin\BlogController@add');
Route::post('ad/blogs/create','admin\BlogController@create');
Route::get('edit_blog/{id}','admin\BlogController@BlogUpdateView');
Route::post('/blogUpdate','admin\BlogController@BlogUpdate');
Route::get('ad/Blog_delete/{data_id?}','admin\BlogController@deleBlog');
// 

Route::get('ad/website_pages','admin\website_pages_controller@website_pages');
Route::get('ad/create/pages','admin\website_pages_controller@create_pages');
Route::post('ad/create_page/add','admin\website_pages_controller@add_page_add');
Route::get('ad/page/edit/{id?}','admin\website_pages_controller@page_edit');
Route::post('ad/create_page/update','admin\website_pages_controller@page_update');
Route::get('ad/page/delete/{id?}','admin\website_pages_controller@delete_update');

// press news
Route::get('ad/press-news','admin\website_pages_controller@press_pages');
Route::get('ad/press-news/add','admin\website_pages_controller@press_page_add');
Route::post('ad/newes/add/new','admin\website_pages_controller@press_page_add_new');
Route::get('ad/newes/edit/{id?}','admin\website_pages_controller@press_page_edit');
Route::post('ad/newes/update','admin\website_pages_controller@press_page_update');
Route::get('ad/newes/delete/{id?}','admin\website_pages_controller@press_page_delete');

// careers

Route::get('ad/Careers','admin\website_pages_controller@career_pages');
Route::get('ad/career/add','admin\website_pages_controller@career_add');
Route::post('ad/career/add/create','admin\website_pages_controller@career_create');
Route::get('ad/career/edit/{id?}','admin\website_pages_controller@career_edit');
Route::post('ad/career/update','admin\website_pages_controller@career_update');
Route::get('ad/career/delete/{id?}','admin\website_pages_controller@career_delete');

Route::get('ad/partners','admin\website_pages_controller@partners');
Route::post('ad/store/partners','admin\website_pages_controller@partners_store');
Route::get('ad/intellectual_property','admin\website_pages_controller@intellectual_property');
Route::post('ad/intellectual_property_post','admin\website_pages_controller@intellectual_property_post');


Route::get('ad/support','admin\website_pages_controller@support');
Route::post('ad/support_post','admin\website_pages_controller@support_post');

Route::get('ad/investors_relationship','admin\website_pages_controller@investors_relationship');
Route::post('ad/investors_relationship_post','admin\website_pages_controller@investors_relationship_post');

Route::get('ad/invited_user','admin\homecontroller@invited_user');
});

// adminentrepreneur_Reg
