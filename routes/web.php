<?php

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

Route::get('/', function () {
    //return view('welcome');
});

Route::namespace('Front')->group(function(){
	//Front web Roting  
	Route::get('/', 'HomeController@home')->name('home');
	Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
	Route::get('/about', 'HomeController@about')->name('about');
	Route::get('/copyright_policy', 'HomeController@copyright_policy')->name('copyright_policy');
	Route::get('/privacyPolicy', 'HomeController@privacyPolicy')->name('privacyPolicy');
	Route::get('/termsAndConditions', 'HomeController@termsAndConditions')->name('termsAndConditions');
	Route::get('/siteMap', 'HomeController@siteMap')->name('siteMap');
	Route::get('/scholarships', 'HomeController@scholarships')->name('scholarships');
	Route::get('/faq', 'HomeController@faq')->name('faq');
	Route::get('/regComplain', 'HomeController@regComplain')->name('regComplain');

	Route::get('/insuti_regitrater', 'HomeController@insuti_regitrater')->name('insuti_regitrater');
	Route::get('/wohfare_register', 'HomeController@wohfare_register')->name('wohfare_register');
	Route::get('/induvidual_register', 'HomeController@induvidual_register')->name('induvidual_register');
});

Route::namespace('Backend')->group(function(){
	//Front web Roting  
	//Route::get('/', 'HomeController@home')->name('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('divisions', 'DivisionController');

Route::resource('districts', 'DistrictController');

Route::resource('studentApplies', 'StudentApplyController');

Route::resource('studentApplyResults', 'StudentApplyResultController');

Route::resource('studentApplyProjects', 'StudentApplyProjectController');

Route::resource('studentApplyInnovations', 'StudentApplyInnovationController');

Route::resource('studentApplyIssues', 'StudentApplyIssueController');

Route::resource('studentApplyPoorFunds', 'StudentApplyPoorFundController');




Route::get('frontend/students', ['as'=> 'frontend.students.index', 'uses' => 'Frontend\StudentController@index']);
Route::post('frontend/students', ['as'=> 'frontend.students.store', 'uses' => 'Frontend\StudentController@store']);
Route::get('frontend/students/create', ['as'=> 'frontend.students.create', 'uses' => 'Frontend\StudentController@create']);
Route::put('frontend/students/{students}', ['as'=> 'frontend.students.update', 'uses' => 'Frontend\StudentController@update']);
Route::patch('frontend/students/{students}', ['as'=> 'frontend.students.update', 'uses' => 'Frontend\StudentController@update']);
Route::delete('frontend/students/{students}', ['as'=> 'frontend.students.destroy', 'uses' => 'Frontend\StudentController@destroy']);
Route::get('frontend/students/{students}', ['as'=> 'frontend.students.show', 'uses' => 'Frontend\StudentController@show']);
Route::get('frontend/students/{students}/edit', ['as'=> 'frontend.students.edit', 'uses' => 'Frontend\StudentController@edit']);


Route::get('frontend/studentApplies', ['as'=> 'frontend.studentApplies.index', 'uses' => 'Frontend\StudentApplyController@index']);
Route::post('frontend/studentApplies', ['as'=> 'frontend.studentApplies.store', 'uses' => 'Frontend\StudentApplyController@store']);
Route::get('frontend/studentApplies/create', ['as'=> 'frontend.studentApplies.create', 'uses' => 'Frontend\StudentApplyController@create']);
Route::put('frontend/studentApplies/{studentApplies}', ['as'=> 'frontend.studentApplies.update', 'uses' => 'Frontend\StudentApplyController@update']);
Route::patch('frontend/studentApplies/{studentApplies}', ['as'=> 'frontend.studentApplies.update', 'uses' => 'Frontend\StudentApplyController@update']);
Route::delete('frontend/studentApplies/{studentApplies}', ['as'=> 'frontend.studentApplies.destroy', 'uses' => 'Frontend\StudentApplyController@destroy']);
Route::get('frontend/studentApplies/{studentApplies}', ['as'=> 'frontend.studentApplies.show', 'uses' => 'Frontend\StudentApplyController@show']);
Route::get('frontend/studentApplies/{studentApplies}/edit', ['as'=> 'frontend.studentApplies.edit', 'uses' => 'Frontend\StudentApplyController@edit']);


Route::get('frontend/stdApplyResults', ['as'=> 'frontend.stdApplyResults.index', 'uses' => 'Frontend\Std_apply_resultController@index']);
Route::post('frontend/stdApplyResults', ['as'=> 'frontend.stdApplyResults.store', 'uses' => 'Frontend\Std_apply_resultController@store']);
Route::get('frontend/stdApplyResults/create', ['as'=> 'frontend.stdApplyResults.create', 'uses' => 'Frontend\Std_apply_resultController@create']);
Route::put('frontend/stdApplyResults/{stdApplyResults}', ['as'=> 'frontend.stdApplyResults.update', 'uses' => 'Frontend\Std_apply_resultController@update']);
Route::patch('frontend/stdApplyResults/{stdApplyResults}', ['as'=> 'frontend.stdApplyResults.update', 'uses' => 'Frontend\Std_apply_resultController@update']);
Route::delete('frontend/stdApplyResults/{stdApplyResults}', ['as'=> 'frontend.stdApplyResults.destroy', 'uses' => 'Frontend\Std_apply_resultController@destroy']);
Route::get('frontend/stdApplyResults/{stdApplyResults}', ['as'=> 'frontend.stdApplyResults.show', 'uses' => 'Frontend\Std_apply_resultController@show']);
Route::get('frontend/stdApplyResults/{stdApplyResults}/edit', ['as'=> 'frontend.stdApplyResults.edit', 'uses' => 'Frontend\Std_apply_resultController@edit']);


Route::get('frontend/stdApplyInnovations', ['as'=> 'frontend.stdApplyInnovations.index', 'uses' => 'Frontend\Std_apply_innovationController@index']);
Route::post('frontend/stdApplyInnovations', ['as'=> 'frontend.stdApplyInnovations.store', 'uses' => 'Frontend\Std_apply_innovationController@store']);
Route::get('frontend/stdApplyInnovations/create', ['as'=> 'frontend.stdApplyInnovations.create', 'uses' => 'Frontend\Std_apply_innovationController@create']);
Route::put('frontend/stdApplyInnovations/{stdApplyInnovations}', ['as'=> 'frontend.stdApplyInnovations.update', 'uses' => 'Frontend\Std_apply_innovationController@update']);
Route::patch('frontend/stdApplyInnovations/{stdApplyInnovations}', ['as'=> 'frontend.stdApplyInnovations.update', 'uses' => 'Frontend\Std_apply_innovationController@update']);
Route::delete('frontend/stdApplyInnovations/{stdApplyInnovations}', ['as'=> 'frontend.stdApplyInnovations.destroy', 'uses' => 'Frontend\Std_apply_innovationController@destroy']);
Route::get('frontend/stdApplyInnovations/{stdApplyInnovations}', ['as'=> 'frontend.stdApplyInnovations.show', 'uses' => 'Frontend\Std_apply_innovationController@show']);
Route::get('frontend/stdApplyInnovations/{stdApplyInnovations}/edit', ['as'=> 'frontend.stdApplyInnovations.edit', 'uses' => 'Frontend\Std_apply_innovationController@edit']);


Route::get('frontend/stdApplyNationalIssus', ['as'=> 'frontend.stdApplyNationalIssus.index', 'uses' => 'Frontend\Std_apply_national_issuController@index']);
Route::post('frontend/stdApplyNationalIssus', ['as'=> 'frontend.stdApplyNationalIssus.store', 'uses' => 'Frontend\Std_apply_national_issuController@store']);
Route::get('frontend/stdApplyNationalIssus/create', ['as'=> 'frontend.stdApplyNationalIssus.create', 'uses' => 'Frontend\Std_apply_national_issuController@create']);
Route::put('frontend/stdApplyNationalIssus/{stdApplyNationalIssus}', ['as'=> 'frontend.stdApplyNationalIssus.update', 'uses' => 'Frontend\Std_apply_national_issuController@update']);
Route::patch('frontend/stdApplyNationalIssus/{stdApplyNationalIssus}', ['as'=> 'frontend.stdApplyNationalIssus.update', 'uses' => 'Frontend\Std_apply_national_issuController@update']);
Route::delete('frontend/stdApplyNationalIssus/{stdApplyNationalIssus}', ['as'=> 'frontend.stdApplyNationalIssus.destroy', 'uses' => 'Frontend\Std_apply_national_issuController@destroy']);
Route::get('frontend/stdApplyNationalIssus/{stdApplyNationalIssus}', ['as'=> 'frontend.stdApplyNationalIssus.show', 'uses' => 'Frontend\Std_apply_national_issuController@show']);
Route::get('frontend/stdApplyNationalIssus/{stdApplyNationalIssus}/edit', ['as'=> 'frontend.stdApplyNationalIssus.edit', 'uses' => 'Frontend\Std_apply_national_issuController@edit']);


Route::get('frontend/stdApplyInnovations', ['as'=> 'frontend.stdApplyInnovations.index', 'uses' => 'Frontend\Std_apply_innovationController@index']);
Route::post('frontend/stdApplyInnovations', ['as'=> 'frontend.stdApplyInnovations.store', 'uses' => 'Frontend\Std_apply_innovationController@store']);
Route::get('frontend/stdApplyInnovations/create', ['as'=> 'frontend.stdApplyInnovations.create', 'uses' => 'Frontend\Std_apply_innovationController@create']);
Route::put('frontend/stdApplyInnovations/{stdApplyInnovations}', ['as'=> 'frontend.stdApplyInnovations.update', 'uses' => 'Frontend\Std_apply_innovationController@update']);
Route::patch('frontend/stdApplyInnovations/{stdApplyInnovations}', ['as'=> 'frontend.stdApplyInnovations.update', 'uses' => 'Frontend\Std_apply_innovationController@update']);
Route::delete('frontend/stdApplyInnovations/{stdApplyInnovations}', ['as'=> 'frontend.stdApplyInnovations.destroy', 'uses' => 'Frontend\Std_apply_innovationController@destroy']);
Route::get('frontend/stdApplyInnovations/{stdApplyInnovations}', ['as'=> 'frontend.stdApplyInnovations.show', 'uses' => 'Frontend\Std_apply_innovationController@show']);
Route::get('frontend/stdApplyInnovations/{stdApplyInnovations}/edit', ['as'=> 'frontend.stdApplyInnovations.edit', 'uses' => 'Frontend\Std_apply_innovationController@edit']);


Route::get('frontend/stdApplyPoorFunds', ['as'=> 'frontend.stdApplyPoorFunds.index', 'uses' => 'Frontend\Std_apply_poor_fundController@index']);
Route::post('frontend/stdApplyPoorFunds', ['as'=> 'frontend.stdApplyPoorFunds.store', 'uses' => 'Frontend\Std_apply_poor_fundController@store']);
Route::get('frontend/stdApplyPoorFunds/create', ['as'=> 'frontend.stdApplyPoorFunds.create', 'uses' => 'Frontend\Std_apply_poor_fundController@create']);
Route::put('frontend/stdApplyPoorFunds/{stdApplyPoorFunds}', ['as'=> 'frontend.stdApplyPoorFunds.update', 'uses' => 'Frontend\Std_apply_poor_fundController@update']);
Route::patch('frontend/stdApplyPoorFunds/{stdApplyPoorFunds}', ['as'=> 'frontend.stdApplyPoorFunds.update', 'uses' => 'Frontend\Std_apply_poor_fundController@update']);
Route::delete('frontend/stdApplyPoorFunds/{stdApplyPoorFunds}', ['as'=> 'frontend.stdApplyPoorFunds.destroy', 'uses' => 'Frontend\Std_apply_poor_fundController@destroy']);
Route::get('frontend/stdApplyPoorFunds/{stdApplyPoorFunds}', ['as'=> 'frontend.stdApplyPoorFunds.show', 'uses' => 'Frontend\Std_apply_poor_fundController@show']);
Route::get('frontend/stdApplyPoorFunds/{stdApplyPoorFunds}/edit', ['as'=> 'frontend.stdApplyPoorFunds.edit', 'uses' => 'Frontend\Std_apply_poor_fundController@edit']);


Route::get('frontend/instiInnovations', ['as'=> 'frontend.instiInnovations.index', 'uses' => 'Frontend\Insti_innovationController@index']);
Route::post('frontend/instiInnovations', ['as'=> 'frontend.instiInnovations.store', 'uses' => 'Frontend\Insti_innovationController@store']);
Route::get('frontend/instiInnovations/create', ['as'=> 'frontend.instiInnovations.create', 'uses' => 'Frontend\Insti_innovationController@create']);
Route::put('frontend/instiInnovations/{instiInnovations}', ['as'=> 'frontend.instiInnovations.update', 'uses' => 'Frontend\Insti_innovationController@update']);
Route::patch('frontend/instiInnovations/{instiInnovations}', ['as'=> 'frontend.instiInnovations.update', 'uses' => 'Frontend\Insti_innovationController@update']);
Route::delete('frontend/instiInnovations/{instiInnovations}', ['as'=> 'frontend.instiInnovations.destroy', 'uses' => 'Frontend\Insti_innovationController@destroy']);
Route::get('frontend/instiInnovations/{instiInnovations}', ['as'=> 'frontend.instiInnovations.show', 'uses' => 'Frontend\Insti_innovationController@show']);
Route::get('frontend/instiInnovations/{instiInnovations}/edit', ['as'=> 'frontend.instiInnovations.edit', 'uses' => 'Frontend\Insti_innovationController@edit']);


Route::get('backend/instiInnovations', ['as'=> 'backend.instiInnovations.index', 'uses' => 'Backend\Insti_innovationController@index']);
Route::post('backend/instiInnovations', ['as'=> 'backend.instiInnovations.store', 'uses' => 'Backend\Insti_innovationController@store']);
Route::get('backend/instiInnovations/create', ['as'=> 'backend.instiInnovations.create', 'uses' => 'Backend\Insti_innovationController@create']);
Route::put('backend/instiInnovations/{instiInnovations}', ['as'=> 'backend.instiInnovations.update', 'uses' => 'Backend\Insti_innovationController@update']);
Route::patch('backend/instiInnovations/{instiInnovations}', ['as'=> 'backend.instiInnovations.update', 'uses' => 'Backend\Insti_innovationController@update']);
Route::delete('backend/instiInnovations/{instiInnovations}', ['as'=> 'backend.instiInnovations.destroy', 'uses' => 'Backend\Insti_innovationController@destroy']);
Route::get('backend/instiInnovations/{instiInnovations}', ['as'=> 'backend.instiInnovations.show', 'uses' => 'Backend\Insti_innovationController@show']);
Route::get('backend/instiInnovations/{instiInnovations}/edit', ['as'=> 'backend.instiInnovations.edit', 'uses' => 'Backend\Insti_innovationController@edit']);


Route::get('backend/instiWelfares', ['as'=> 'backend.instiWelfares.index', 'uses' => 'Backend\Insti_welfareController@index']);
Route::post('backend/instiWelfares', ['as'=> 'backend.instiWelfares.store', 'uses' => 'Backend\Insti_welfareController@store']);
Route::get('backend/instiWelfares/create', ['as'=> 'backend.instiWelfares.create', 'uses' => 'Backend\Insti_welfareController@create']);
Route::put('backend/instiWelfares/{instiWelfares}', ['as'=> 'backend.instiWelfares.update', 'uses' => 'Backend\Insti_welfareController@update']);
Route::patch('backend/instiWelfares/{instiWelfares}', ['as'=> 'backend.instiWelfares.update', 'uses' => 'Backend\Insti_welfareController@update']);
Route::delete('backend/instiWelfares/{instiWelfares}', ['as'=> 'backend.instiWelfares.destroy', 'uses' => 'Backend\Insti_welfareController@destroy']);
Route::get('backend/instiWelfares/{instiWelfares}', ['as'=> 'backend.instiWelfares.show', 'uses' => 'Backend\Insti_welfareController@show']);
Route::get('backend/instiWelfares/{instiWelfares}/edit', ['as'=> 'backend.instiWelfares.edit', 'uses' => 'Backend\Insti_welfareController@edit']);


Route::get('backend/indivisiInnovations', ['as'=> 'backend.indivisiInnovations.index', 'uses' => 'Backend\Indivisi_innovationController@index']);
Route::post('backend/indivisiInnovations', ['as'=> 'backend.indivisiInnovations.store', 'uses' => 'Backend\Indivisi_innovationController@store']);
Route::get('backend/indivisiInnovations/create', ['as'=> 'backend.indivisiInnovations.create', 'uses' => 'Backend\Indivisi_innovationController@create']);
Route::put('backend/indivisiInnovations/{indivisiInnovations}', ['as'=> 'backend.indivisiInnovations.update', 'uses' => 'Backend\Indivisi_innovationController@update']);
Route::patch('backend/indivisiInnovations/{indivisiInnovations}', ['as'=> 'backend.indivisiInnovations.update', 'uses' => 'Backend\Indivisi_innovationController@update']);
Route::delete('backend/indivisiInnovations/{indivisiInnovations}', ['as'=> 'backend.indivisiInnovations.destroy', 'uses' => 'Backend\Indivisi_innovationController@destroy']);
Route::get('backend/indivisiInnovations/{indivisiInnovations}', ['as'=> 'backend.indivisiInnovations.show', 'uses' => 'Backend\Indivisi_innovationController@show']);
Route::get('backend/indivisiInnovations/{indivisiInnovations}/edit', ['as'=> 'backend.indivisiInnovations.edit', 'uses' => 'Backend\Indivisi_innovationController@edit']);


Route::get('backend/indivisiNationals', ['as'=> 'backend.indivisiNationals.index', 'uses' => 'Backend\Indivisi_nationalController@index']);
Route::post('backend/indivisiNationals', ['as'=> 'backend.indivisiNationals.store', 'uses' => 'Backend\Indivisi_nationalController@store']);
Route::get('backend/indivisiNationals/create', ['as'=> 'backend.indivisiNationals.create', 'uses' => 'Backend\Indivisi_nationalController@create']);
Route::put('backend/indivisiNationals/{indivisiNationals}', ['as'=> 'backend.indivisiNationals.update', 'uses' => 'Backend\Indivisi_nationalController@update']);
Route::patch('backend/indivisiNationals/{indivisiNationals}', ['as'=> 'backend.indivisiNationals.update', 'uses' => 'Backend\Indivisi_nationalController@update']);
Route::delete('backend/indivisiNationals/{indivisiNationals}', ['as'=> 'backend.indivisiNationals.destroy', 'uses' => 'Backend\Indivisi_nationalController@destroy']);
Route::get('backend/indivisiNationals/{indivisiNationals}', ['as'=> 'backend.indivisiNationals.show', 'uses' => 'Backend\Indivisi_nationalController@show']);
Route::get('backend/indivisiNationals/{indivisiNationals}/edit', ['as'=> 'backend.indivisiNationals.edit', 'uses' => 'Backend\Indivisi_nationalController@edit']);


Route::get('frontend/indivisiNationals', ['as'=> 'frontend.indivisiNationals.index', 'uses' => 'Frontend\Indivisi_nationalController@index']);
Route::post('frontend/indivisiNationals', ['as'=> 'frontend.indivisiNationals.store', 'uses' => 'Frontend\Indivisi_nationalController@store']);
Route::get('frontend/indivisiNationals/create', ['as'=> 'frontend.indivisiNationals.create', 'uses' => 'Frontend\Indivisi_nationalController@create']);
Route::put('frontend/indivisiNationals/{indivisiNationals}', ['as'=> 'frontend.indivisiNationals.update', 'uses' => 'Frontend\Indivisi_nationalController@update']);
Route::patch('frontend/indivisiNationals/{indivisiNationals}', ['as'=> 'frontend.indivisiNationals.update', 'uses' => 'Frontend\Indivisi_nationalController@update']);
Route::delete('frontend/indivisiNationals/{indivisiNationals}', ['as'=> 'frontend.indivisiNationals.destroy', 'uses' => 'Frontend\Indivisi_nationalController@destroy']);
Route::get('frontend/indivisiNationals/{indivisiNationals}', ['as'=> 'frontend.indivisiNationals.show', 'uses' => 'Frontend\Indivisi_nationalController@show']);
Route::get('frontend/indivisiNationals/{indivisiNationals}/edit', ['as'=> 'frontend.indivisiNationals.edit', 'uses' => 'Frontend\Indivisi_nationalController@edit']);


Route::get('frontend/indivisiInnovations', ['as'=> 'frontend.indivisiInnovations.index', 'uses' => 'Frontend\Indivisi_innovationController@index']);
Route::post('frontend/indivisiInnovations', ['as'=> 'frontend.indivisiInnovations.store', 'uses' => 'Frontend\Indivisi_innovationController@store']);
Route::get('frontend/indivisiInnovations/create', ['as'=> 'frontend.indivisiInnovations.create', 'uses' => 'Frontend\Indivisi_innovationController@create']);
Route::put('frontend/indivisiInnovations/{indivisiInnovations}', ['as'=> 'frontend.indivisiInnovations.update', 'uses' => 'Frontend\Indivisi_innovationController@update']);
Route::patch('frontend/indivisiInnovations/{indivisiInnovations}', ['as'=> 'frontend.indivisiInnovations.update', 'uses' => 'Frontend\Indivisi_innovationController@update']);
Route::delete('frontend/indivisiInnovations/{indivisiInnovations}', ['as'=> 'frontend.indivisiInnovations.destroy', 'uses' => 'Frontend\Indivisi_innovationController@destroy']);
Route::get('frontend/indivisiInnovations/{indivisiInnovations}', ['as'=> 'frontend.indivisiInnovations.show', 'uses' => 'Frontend\Indivisi_innovationController@show']);
Route::get('frontend/indivisiInnovations/{indivisiInnovations}/edit', ['as'=> 'frontend.indivisiInnovations.edit', 'uses' => 'Frontend\Indivisi_innovationController@edit']);


Route::get('frontend/instiInnovations', ['as'=> 'frontend.instiInnovations.index', 'uses' => 'Frontend\Insti_innovationController@index']);
Route::post('frontend/instiInnovations', ['as'=> 'frontend.instiInnovations.store', 'uses' => 'Frontend\Insti_innovationController@store']);
Route::get('frontend/instiInnovations/create', ['as'=> 'frontend.instiInnovations.create', 'uses' => 'Frontend\Insti_innovationController@create']);
Route::put('frontend/instiInnovations/{instiInnovations}', ['as'=> 'frontend.instiInnovations.update', 'uses' => 'Frontend\Insti_innovationController@update']);
Route::patch('frontend/instiInnovations/{instiInnovations}', ['as'=> 'frontend.instiInnovations.update', 'uses' => 'Frontend\Insti_innovationController@update']);
Route::delete('frontend/instiInnovations/{instiInnovations}', ['as'=> 'frontend.instiInnovations.destroy', 'uses' => 'Frontend\Insti_innovationController@destroy']);
Route::get('frontend/instiInnovations/{instiInnovations}', ['as'=> 'frontend.instiInnovations.show', 'uses' => 'Frontend\Insti_innovationController@show']);
Route::get('frontend/instiInnovations/{instiInnovations}/edit', ['as'=> 'frontend.instiInnovations.edit', 'uses' => 'Frontend\Insti_innovationController@edit']);


Route::get('frontend/instiWelfares', ['as'=> 'frontend.instiWelfares.index', 'uses' => 'Frontend\Insti_welfareController@index']);
Route::post('frontend/instiWelfares', ['as'=> 'frontend.instiWelfares.store', 'uses' => 'Frontend\Insti_welfareController@store']);
Route::get('frontend/instiWelfares/create', ['as'=> 'frontend.instiWelfares.create', 'uses' => 'Frontend\Insti_welfareController@create']);
Route::put('frontend/instiWelfares/{instiWelfares}', ['as'=> 'frontend.instiWelfares.update', 'uses' => 'Frontend\Insti_welfareController@update']);
Route::patch('frontend/instiWelfares/{instiWelfares}', ['as'=> 'frontend.instiWelfares.update', 'uses' => 'Frontend\Insti_welfareController@update']);
Route::delete('frontend/instiWelfares/{instiWelfares}', ['as'=> 'frontend.instiWelfares.destroy', 'uses' => 'Frontend\Insti_welfareController@destroy']);
Route::get('frontend/instiWelfares/{instiWelfares}', ['as'=> 'frontend.instiWelfares.show', 'uses' => 'Frontend\Insti_welfareController@show']);
Route::get('frontend/instiWelfares/{instiWelfares}/edit', ['as'=> 'frontend.instiWelfares.edit', 'uses' => 'Frontend\Insti_welfareController@edit']);


Route::get('backend/stdClasses', ['as'=> 'backend.stdClasses.index', 'uses' => 'Backend\Std_classController@index']);
Route::post('backend/stdClasses', ['as'=> 'backend.stdClasses.store', 'uses' => 'Backend\Std_classController@store']);
Route::get('backend/stdClasses/create', ['as'=> 'backend.stdClasses.create', 'uses' => 'Backend\Std_classController@create']);
Route::put('backend/stdClasses/{stdClasses}', ['as'=> 'backend.stdClasses.update', 'uses' => 'Backend\Std_classController@update']);
Route::patch('backend/stdClasses/{stdClasses}', ['as'=> 'backend.stdClasses.update', 'uses' => 'Backend\Std_classController@update']);
Route::delete('backend/stdClasses/{stdClasses}', ['as'=> 'backend.stdClasses.destroy', 'uses' => 'Backend\Std_classController@destroy']);
Route::get('backend/stdClasses/{stdClasses}', ['as'=> 'backend.stdClasses.show', 'uses' => 'Backend\Std_classController@show']);
Route::get('backend/stdClasses/{stdClasses}/edit', ['as'=> 'backend.stdClasses.edit', 'uses' => 'Backend\Std_classController@edit']);


Route::get('backend/stdClassYears', ['as'=> 'backend.stdClassYears.index', 'uses' => 'Backend\Std_class_yearController@index']);
Route::post('backend/stdClassYears', ['as'=> 'backend.stdClassYears.store', 'uses' => 'Backend\Std_class_yearController@store']);
Route::get('backend/stdClassYears/create', ['as'=> 'backend.stdClassYears.create', 'uses' => 'Backend\Std_class_yearController@create']);
Route::put('backend/stdClassYears/{stdClassYears}', ['as'=> 'backend.stdClassYears.update', 'uses' => 'Backend\Std_class_yearController@update']);
Route::patch('backend/stdClassYears/{stdClassYears}', ['as'=> 'backend.stdClassYears.update', 'uses' => 'Backend\Std_class_yearController@update']);
Route::delete('backend/stdClassYears/{stdClassYears}', ['as'=> 'backend.stdClassYears.destroy', 'uses' => 'Backend\Std_class_yearController@destroy']);
Route::get('backend/stdClassYears/{stdClassYears}', ['as'=> 'backend.stdClassYears.show', 'uses' => 'Backend\Std_class_yearController@show']);
Route::get('backend/stdClassYears/{stdClassYears}/edit', ['as'=> 'backend.stdClassYears.edit', 'uses' => 'Backend\Std_class_yearController@edit']);


Route::get('backend/welfarTypes', ['as'=> 'backend.welfarTypes.index', 'uses' => 'Backend\Welfar_typeController@index']);
Route::post('backend/welfarTypes', ['as'=> 'backend.welfarTypes.store', 'uses' => 'Backend\Welfar_typeController@store']);
Route::get('backend/welfarTypes/create', ['as'=> 'backend.welfarTypes.create', 'uses' => 'Backend\Welfar_typeController@create']);
Route::put('backend/welfarTypes/{welfarTypes}', ['as'=> 'backend.welfarTypes.update', 'uses' => 'Backend\Welfar_typeController@update']);
Route::patch('backend/welfarTypes/{welfarTypes}', ['as'=> 'backend.welfarTypes.update', 'uses' => 'Backend\Welfar_typeController@update']);
Route::delete('backend/welfarTypes/{welfarTypes}', ['as'=> 'backend.welfarTypes.destroy', 'uses' => 'Backend\Welfar_typeController@destroy']);
Route::get('backend/welfarTypes/{welfarTypes}', ['as'=> 'backend.welfarTypes.show', 'uses' => 'Backend\Welfar_typeController@show']);
Route::get('backend/welfarTypes/{welfarTypes}/edit', ['as'=> 'backend.welfarTypes.edit', 'uses' => 'Backend\Welfar_typeController@edit']);


Route::get('backend/innovationTypes', ['as'=> 'backend.innovationTypes.index', 'uses' => 'Backend\Innovation_typeController@index']);
Route::post('backend/innovationTypes', ['as'=> 'backend.innovationTypes.store', 'uses' => 'Backend\Innovation_typeController@store']);
Route::get('backend/innovationTypes/create', ['as'=> 'backend.innovationTypes.create', 'uses' => 'Backend\Innovation_typeController@create']);
Route::put('backend/innovationTypes/{innovationTypes}', ['as'=> 'backend.innovationTypes.update', 'uses' => 'Backend\Innovation_typeController@update']);
Route::patch('backend/innovationTypes/{innovationTypes}', ['as'=> 'backend.innovationTypes.update', 'uses' => 'Backend\Innovation_typeController@update']);
Route::delete('backend/innovationTypes/{innovationTypes}', ['as'=> 'backend.innovationTypes.destroy', 'uses' => 'Backend\Innovation_typeController@destroy']);
Route::get('backend/innovationTypes/{innovationTypes}', ['as'=> 'backend.innovationTypes.show', 'uses' => 'Backend\Innovation_typeController@show']);
Route::get('backend/innovationTypes/{innovationTypes}/edit', ['as'=> 'backend.innovationTypes.edit', 'uses' => 'Backend\Innovation_typeController@edit']);


Route::get('backend/ministies', ['as'=> 'backend.ministies.index', 'uses' => 'Backend\MinistyController@index']);
Route::post('backend/ministies', ['as'=> 'backend.ministies.store', 'uses' => 'Backend\MinistyController@store']);
Route::get('backend/ministies/create', ['as'=> 'backend.ministies.create', 'uses' => 'Backend\MinistyController@create']);
Route::put('backend/ministies/{ministies}', ['as'=> 'backend.ministies.update', 'uses' => 'Backend\MinistyController@update']);
Route::patch('backend/ministies/{ministies}', ['as'=> 'backend.ministies.update', 'uses' => 'Backend\MinistyController@update']);
Route::delete('backend/ministies/{ministies}', ['as'=> 'backend.ministies.destroy', 'uses' => 'Backend\MinistyController@destroy']);
Route::get('backend/ministies/{ministies}', ['as'=> 'backend.ministies.show', 'uses' => 'Backend\MinistyController@show']);
Route::get('backend/ministies/{ministies}/edit', ['as'=> 'backend.ministies.edit', 'uses' => 'Backend\MinistyController@edit']);


Route::get('frontend/stdApplyProjects', ['as'=> 'frontend.stdApplyProjects.index', 'uses' => 'Frontend\Std_apply_projectController@index']);
Route::post('frontend/stdApplyProjects', ['as'=> 'frontend.stdApplyProjects.store', 'uses' => 'Frontend\Std_apply_projectController@store']);
Route::get('frontend/stdApplyProjects/create', ['as'=> 'frontend.stdApplyProjects.create', 'uses' => 'Frontend\Std_apply_projectController@create']);
Route::put('frontend/stdApplyProjects/{stdApplyProjects}', ['as'=> 'frontend.stdApplyProjects.update', 'uses' => 'Frontend\Std_apply_projectController@update']);
Route::patch('frontend/stdApplyProjects/{stdApplyProjects}', ['as'=> 'frontend.stdApplyProjects.update', 'uses' => 'Frontend\Std_apply_projectController@update']);
Route::delete('frontend/stdApplyProjects/{stdApplyProjects}', ['as'=> 'frontend.stdApplyProjects.destroy', 'uses' => 'Frontend\Std_apply_projectController@destroy']);
Route::get('frontend/stdApplyProjects/{stdApplyProjects}', ['as'=> 'frontend.stdApplyProjects.show', 'uses' => 'Frontend\Std_apply_projectController@show']);
Route::get('frontend/stdApplyProjects/{stdApplyProjects}/edit', ['as'=> 'frontend.stdApplyProjects.edit', 'uses' => 'Frontend\Std_apply_projectController@edit']);


Route::get('frontend/complains', ['as'=> 'frontend.complains.index', 'uses' => 'Frontend\ComplainController@index']);
Route::post('frontend/complains', ['as'=> 'frontend.complains.store', 'uses' => 'Frontend\ComplainController@store']);
Route::get('frontend/complains/create', ['as'=> 'frontend.complains.create', 'uses' => 'Frontend\ComplainController@create']);
Route::put('frontend/complains/{complains}', ['as'=> 'frontend.complains.update', 'uses' => 'Frontend\ComplainController@update']);
Route::patch('frontend/complains/{complains}', ['as'=> 'frontend.complains.update', 'uses' => 'Frontend\ComplainController@update']);
Route::delete('frontend/complains/{complains}', ['as'=> 'frontend.complains.destroy', 'uses' => 'Frontend\ComplainController@destroy']);
Route::get('frontend/complains/{complains}', ['as'=> 'frontend.complains.show', 'uses' => 'Frontend\ComplainController@show']);
Route::get('frontend/complains/{complains}/edit', ['as'=> 'frontend.complains.edit', 'uses' => 'Frontend\ComplainController@edit']);


Route::get('backend/complains', ['as'=> 'backend.complains.index', 'uses' => 'Backend\ComplainController@index']);
Route::post('backend/complains', ['as'=> 'backend.complains.store', 'uses' => 'Backend\ComplainController@store']);
Route::get('backend/complains/create', ['as'=> 'backend.complains.create', 'uses' => 'Backend\ComplainController@create']);
Route::put('backend/complains/{complains}', ['as'=> 'backend.complains.update', 'uses' => 'Backend\ComplainController@update']);
Route::patch('backend/complains/{complains}', ['as'=> 'backend.complains.update', 'uses' => 'Backend\ComplainController@update']);
Route::delete('backend/complains/{complains}', ['as'=> 'backend.complains.destroy', 'uses' => 'Backend\ComplainController@destroy']);
Route::get('backend/complains/{complains}', ['as'=> 'backend.complains.show', 'uses' => 'Backend\ComplainController@show']);
Route::get('backend/complains/{complains}/edit', ['as'=> 'backend.complains.edit', 'uses' => 'Backend\ComplainController@edit']);


Route::get('backend/allEducationalInstitutions', ['as'=> 'backend.allEducationalInstitutions.index', 'uses' => 'Backend\All_educational_institutionController@index']);
Route::post('backend/allEducationalInstitutions', ['as'=> 'backend.allEducationalInstitutions.store', 'uses' => 'Backend\All_educational_institutionController@store']);
Route::get('backend/allEducationalInstitutions/create', ['as'=> 'backend.allEducationalInstitutions.create', 'uses' => 'Backend\All_educational_institutionController@create']);
Route::put('backend/allEducationalInstitutions/{allEducationalInstitutions}', ['as'=> 'backend.allEducationalInstitutions.update', 'uses' => 'Backend\All_educational_institutionController@update']);
Route::patch('backend/allEducationalInstitutions/{allEducationalInstitutions}', ['as'=> 'backend.allEducationalInstitutions.update', 'uses' => 'Backend\All_educational_institutionController@update']);
Route::delete('backend/allEducationalInstitutions/{allEducationalInstitutions}', ['as'=> 'backend.allEducationalInstitutions.destroy', 'uses' => 'Backend\All_educational_institutionController@destroy']);
Route::get('backend/allEducationalInstitutions/{allEducationalInstitutions}', ['as'=> 'backend.allEducationalInstitutions.show', 'uses' => 'Backend\All_educational_institutionController@show']);
Route::get('backend/allEducationalInstitutions/{allEducationalInstitutions}/edit', ['as'=> 'backend.allEducationalInstitutions.edit', 'uses' => 'Backend\All_educational_institutionController@edit']);


Route::get('frontend/allEducationalInstitutions', ['as'=> 'frontend.allEducationalInstitutions.index', 'uses' => 'Frontend\All_educational_institutionController@index']);
Route::post('frontend/allEducationalInstitutions', ['as'=> 'frontend.allEducationalInstitutions.store', 'uses' => 'Frontend\All_educational_institutionController@store']);
Route::get('frontend/allEducationalInstitutions/create', ['as'=> 'frontend.allEducationalInstitutions.create', 'uses' => 'Frontend\All_educational_institutionController@create']);
Route::put('frontend/allEducationalInstitutions/{allEducationalInstitutions}', ['as'=> 'frontend.allEducationalInstitutions.update', 'uses' => 'Frontend\All_educational_institutionController@update']);
Route::patch('frontend/allEducationalInstitutions/{allEducationalInstitutions}', ['as'=> 'frontend.allEducationalInstitutions.update', 'uses' => 'Frontend\All_educational_institutionController@update']);
Route::delete('frontend/allEducationalInstitutions/{allEducationalInstitutions}', ['as'=> 'frontend.allEducationalInstitutions.destroy', 'uses' => 'Frontend\All_educational_institutionController@destroy']);
Route::get('frontend/allEducationalInstitutions/{allEducationalInstitutions}', ['as'=> 'frontend.allEducationalInstitutions.show', 'uses' => 'Frontend\All_educational_institutionController@show']);
Route::get('frontend/allEducationalInstitutions/{allEducationalInstitutions}/edit', ['as'=> 'frontend.allEducationalInstitutions.edit', 'uses' => 'Frontend\All_educational_institutionController@edit']);
