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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

//Admin Coontroller
Route::get('/adminLogin','AdminController@adminLogin')->name('adminLogin');
Route::get('/adminRegister','AdminController@adminRegister')->name('adminRegister');
Route::post('/registerAdmin','AdminController@registerAdmin')->name('registerAdmin');
Route::get('/adminLogout','AdminController@adminLogout')->name('adminLogout');
Route::post('/loginCheck','AdminController@loginCheck')->name('loginCheck');
Route::post('/changeRole','AdminController@changeRole')->name('changeRole');

Route::get('/dashboard/viewAdmins','DashboardController@viewAdmins')->name('viewAdmins');
Route::get('/dashboard/editAdmin/{id}','AdminController@editAdmin')->name('editAdmin');
Route::post('/dashboard/updateAdmin/{id}','AdminController@updateAdmin')->name('updateAdmin');
Route::get('/dashboard/deleteAdmin/{id}','AdminController@deleteAdmin')->name('deleteAdmin');


Route::get('/index', function () {
    return view('welcome');
})->name('index');

//Dashboard Controller 

Route::get('/','DashboardController@dashboard')->name('dashboard');
Route::get('/dashboard/allContacts','employeeListController@allContacts')->name('allContacts');
// Route::get('/administrationdashboard','DashboardController@allContacts')->name('administration');
Route::get('/auditordashboard','AuditReportController@auditorDashboard')->name('auditorDashboard');
Route::get('/ceodashboard', 'DashboardController@ceodashboard')->name('ceodashboard');





//Bank
Route::get('/dashboard/addBank','BankController@addBank')->name('addBank');
Route::post('/dashboard/insertBank','BankController@insertBank')->name('insertBank');
Route::get('/dashboard/viewBank','BankController@viewBank')->name('viewBank');
Route::get('/dashboard/deleteBank/{id}','BankController@deleteBank')->name('deleteBank');
Route::get('/dashboard/editBank/{id}','BankController@editBank')->name('editBank');
Route::post('/dashboard/updateBank/{id}','BankController@updateBank')->name('updateBank');

//Banker
Route::get('/dashboard/addBanker','BankerController@addBanker')->name('addBanker');
Route::post('/dashboard/insertBanker','BankerController@insertBanker')->name('insertBanker');
Route::get('/dashboard/viewBanker','BankerController@viewBanker')->name('viewBanker');
Route::post('/dashboard/bankerSearch','BankerController@bankerSearch')->name('bankerSearch');
Route::get('/dashboard/deleteBanker/{id}','BankerController@deleteBanker')->name('deleteBanker');
Route::get('/dashboard/editBanker/{id}','BankerController@editBanker')->name('editBanker');
Route::post('/dashboard/updateBanker/{id}','BankerController@updateBanker')->name('updateBanker');

//.....................legalDocumen...............
Route::get('dashboard/legalDocument','LegalDocumentController@legalDocument')->name('legalDocument');
Route::post('dashboard/createDocument','LegalDocumentController@createDocument')->name('createDocument');
Route::get('dashboard/documentDelete/{ID}','LegalDocumentController@documentDelete')->name('documentDelete');
Route::get('dashboard/legalDocumentEdit/{ID}','LegalDocumentController@legalDocumentEdit')->name('legalDocumentEdit');
Route::post('/dashboard/updateLegalDocument','LegalDocumentController@updateLegalDocument')->name('updateLegalDocument');


//....................employee................
Route::get('/dashboard/employeeCreate','employeeListController@index')->name('employeeCreate');
Route::post('/dashboard/createEmployee','employeeListController@create')->name('createEmployee');
Route::post('/dashboard/updateEmployee/{id}','employeeListController@updateList')->name('updateEmployee');
Route::get('/dashboard/employeelist','employeeListController@view')->name('employeelist');
Route::get('dashboard/employeelistedit/{ID}','employeeListController@edit')->name('employeelistedit');
Route::get('dashboard/employeelistdelete/{ID}','employeeListController@delete')->name('employeelistDelete');
//.....................audit................

Route::get('/dashboard/auditCreate','auditController@index')->name('auditCreate');
Route::post('/dashboard/createAudit','auditController@create')->name('createAudit');
Route::post('/dashboard/updateAudit/{id}','auditController@updateList')->name('updateAudit');
Route::get('/dashboard/auditlist','auditController@view')->name('auditlist');
Route::get('dashboard/auditlistedit/{ID}','auditController@edit')->name('auditlistedit');
Route::get('dashboard/auditdelete/{ID}','auditController@delete')->name('auditDelete');


//...................question.................
Route::get('/dashboard/addQuestion','QuestionController@addQuestion')->name('addQuestion');
Route::post('/dashboard/insertQuestion','QuestionController@insertQuestion')->name('insertQuestion');
Route::get('/dashboard/viewQuestion','QuestionController@viewQuestion')->name('viewQuestion');
Route::get('/dashboard/deleteQuestion/{id}','QuestionController@deleteQuestion')->name('deleteQuestion');
Route::get('/dashboard/editQuestion/{id}','QuestionController@editQuestion')->name('editQuestion');
Route::post('/dashboard/updateQuestion/{id}','QuestionController@updateQuestion')->name('updateQuestion');

//...................company.................
Route::get('/dashboard/addCompany','CompanyController@addCompany')->name('addCompany');
Route::post('/dashboard/insertCompany','CompanyController@insertCompany')->name('insertCompany');
Route::get('/dashboard/viewCompany','CompanyController@viewCompany')->name('viewConpany');
Route::get('/dashboard/deleteCompany/{id}','CompanyController@deleteCompany')->name('deleteCompany');
Route::get('/dashboard/editCompany/{id}','CompanyController@editCompany')->name('editCompany');
Route::post('/dashboard/updateCompany/{id}','CompanyController@updateCompany')->name('updateCompany');


//...................certificate.................
Route::get('/dashboard/addCertificate','CertificateController@addCertificate')->name('addCertificate');
Route::post('/dashboard/insertCertificate','CertificateController@insertCertificate')->name('insertCertificate');
Route::get('/dashboard/viewCertificate','CertificateController@viewCertificate')->name('viewCertificate');
Route::get('/dashboard/deleteCertificate/{id}','CertificateController@deleteCertificate')->name('deleteCertificate');
Route::get('/dashboard/editCertificate/{id}','CertificateController@editCertificate')->name('editCertificate');
Route::post('/dashboard/updateCertificate/{id}','CertificateController@updateCertificate')->name('updateCertificate');
Route::get('/createCertificate/{id}','CertificateController@createCertificate')->name('createCertificate');
Route::get('/certificateGenerate/{id}','CertificateController@certificateGenerate')->name('certificateGenerate');
Route::get('/dashboard/viewReportCertificateable','CertificateController@viewReportCertificateable')->name('viewReportCertificateable');

//Audit Reports
Route::get('/dashboard/auditReport/{id}/{stage}','AuditReportController@makeReport');
Route::get('/dashboard/changesummary/{id}/{stage}/{com}','AuditReportController@changesummary');
Route::post('/dashboard/insertchangesummary','AuditReportController@insertchangesummary')->name('insertchangesummary');
Route::get('/dashboard/auditquestion/{id}/{stage}/{com}','AuditReportController@auditquestion');

Route::get('/dashboard/editReport/{id}','AuditReportController@editReport')->name('editReport');
Route::get('/dashboard/editChange/{id}','AuditReportController@editChange')->name('editChange');
Route::post('/dashboard/updateChange/{id}','AuditReportController@updateChange')->name('updateChange');
Route::get('/dashboard/editSummary/{id}','AuditReportController@editSummary')->name('editSummary');


Route::get('/dashboard/auditReport','AuditReportController@auditReport')->name('auditReport');
Route::post('/dashboard/insertReport','AuditReportController@insertReport')->name('insertReport');
Route::get('/dashboard/viewReport','AuditReportController@viewReport')->name('viewReport');
Route::get('/dashboard/deleteReport/{id}','AuditReportController@deleteReport')->name('deleteReport');




Route::get('/dashboard/viewReportDetails/{id}','AuditReportController@viewReportDetails')->name('viewReportDetails');
Route::get('/viewChangeDetails/{id}','AuditReportController@viewChangeDetails')->name('viewChangeDetails');
Route::get('/viewSummaryDetail/{id}','AuditReportController@viewSummaryDetail')->name('viewSummaryDetail');
Route::get('/allDetailsView/{id}','AuditReportController@allDetailsView')->name('allDetailsView');




Route::get('/dashboard/generatePdf/{id}','AuditReportController@generatePdf')->name('generatePdf');





Route::post('/updateReport/{id}','AuditReportController@updateReport')->name('updateReport');
Route::get('/reportStatus/{id}','AuditReportController@reportStatus')->name('reportStatus');
Route::post('/searchCompany','AuditReportController@searchCompany')->name('searchCompany');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



// Mail 
Route::get('/sendMail', 'MailController@sendMail')->name('sendMail');