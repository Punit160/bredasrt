<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SrtdataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SrtreportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductrequestController;
use App\Http\Controllers\DispatchproductController;
use App\Http\Controllers\SiteSurveyController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\JammuController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\MaterialStatusController;
use App\Http\Controllers\SwpSurveyController;
use App\Http\Controllers\JammuSrtController;
use App\Http\Controllers\UpController;
use App\Http\Controllers\KsbComplaintController;
use App\Http\Controllers\KscComplaintController;
use App\Http\Controllers\CKusumController;
use App\Http\Controllers\BKusumController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SwpController;
use App\Http\Controllers\SSlController;
use App\Http\Controllers\OngridController;
use App\Http\Controllers\OffgridController; 
use App\Http\Controllers\PowerPackController;
use App\Http\Controllers\BiharsslController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\WorkOrderController;
use App\Http\Controllers\WoreportController;
use App\Http\Controllers\SrtComplaintController;  
use App\Http\Controllers\SSLComplaintController;  
use App\Http\Controllers\VendorproductrequestController;
use App\Http\Controllers\VendorComplaintController;   
use App\Http\Controllers\UpSSlController;   
use App\Http\Controllers\VendorProgressController;
use App\Http\Controllers\PaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// loginusercontroller 
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::match(['get', 'post'],'/loginuser',[LoginController::class,'loginuser'])->name('loginuser');

Route::middleware(['isLoggedIn'])->group(function () {
Route::get('/state', [LoginController::class, 'state'])->name('state');
Route::get('/bihar/solartype', [LoginController::class, 'solartype'])->name('solartype');
Route::get('/jammu/solartype', [LoginController::class, 'jammu_solartype'])->name('jammu-solartype');
Route::get('/kashmir/solartype', [LoginController::class, 'kashmir_solartype'])->name('kashmir-solartype');
Route::get('/up/solartype', [LoginController::class, 'up_solartype'])->name('up-solartype');
Route::get('/Karnataka/solartype', [LoginController::class, 'Karnataka_solartype'])->name('Karnataka-solartype');


// UserController
Route::get('/add-user',[UserController::class, 'add_user'])->name('add-user');
Route::post('/save-user',[UserController::class, 'create'])->name('save-user');
Route::get('/view-user',[UserController::class, 'view_user'])->name('view-user');

// loginusercontroller 

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/view-srtdata',[SrtdataController::class, 'view_srt'])->name('view-srt');
Route::get('/update-srtdata/{id}',[SrtdataController::class, 'edit']);
Route::put('/update-srtdata/{id}',[SrtdataController::class, 'update']);
Route::get('/view-srt/{id}',[SrtdataController::class, 'view_full_data']);
Route::get('/dashboard',[SrtdataController::class, 'index'])->name('dashboard');
Route::get('/ssl-dashboard',[SrtdataController::class, 'indexssl'])->name('ssl-dashboard');
Route::get('/srt-data/{status}/{phase}',[SrtdataController::class, 'srt_data']);  
Route::get('/phase-srt-data/{status}/{phase}',[SrtdataController::class, 'phase_srt_data']);
Route::get('/district-srt-data/{status}/{district}',[SrtdataController::class, 'district_srt_data']);
Route::get('/vendor-srt-data/{status}/{vendor}',[SrtdataController::class, 'vendor_srt_data']); 
Route::get('/main-srt-data/{status}',[SrtdataController::class, 'main_srt_data']);  

Route::get('/phasewise-report',[SrtreportController::class, 'phase'])->name('phasewise-report');
Route::get('/districtwise-report',[SrtreportController::class, 'district'])->name('districtwise-report');
Route::get('/vendorwise-report',[SrtreportController::class, 'vendor'])->name('vendorwise-report');

Route::get('/get-districts/{phase}', [SrtdataController::class, 'getDistricts'])->name('get.districts');
Route::get('/get-site_names/{district}', [SrtdataController::class, 'getSites'])->name('get.site_names');
Route::get('/get-site_names', [SrtdataController::class, 'getSites'])->name('get.site_name');

Route::any('/filter', [SrtdataController::class, 'filter'])->name('filter');
Route::any('/refresh', [SrtdataController::class, 'filter'])->name('refresh');
Route::get('/export-srt',[SrtdataController::class,'export_srt'])->name('export-srt');

Route::get('/view-product', [ProductController::class, 'index'])->name('view-product');
Route::get('/update-product/{id}', [ProductController::class, 'edit'])->name('edit-product');
Route::put('/update-product/{id}', [ProductController::class, 'update'])->name('update-product');

Route::get('/add-request', [ProductrequestController::class, 'index'])->name('add-request');
Route::post('/save-request', [ProductrequestController::class, 'store'])->name('save-request');
Route::get('/view-request',[ProductrequestController::class, 'view'])->name('view-request');
Route::post('/action-request',[ProductrequestController::class, 'accept_request'])->name('action-request');

Route::get('/add-swp-complaint', [SwpController::class, 'add_swp_complaint'])->name('add-swp-complaint');
Route::any('/save-swp-complaint',[SwpController::class, 'create'])->name('save-swp-complaint');
Route::get('/view-swp-complaint', [SwpController::class, 'view_swp_complaint'])->name('view-swp-complaint');
Route::get('/swp/vendors', [SwpController::class, 'getVendorDetails'])->name('swpvendors');
Route::get('/kusumb/customer', [SwpController::class, 'getCustomerDetails'])->name('swpcustomers');  

Route::get('/edit-swp/{id}', [SwpController::class, 'edit'])->name('edit-swp');
Route::post('/update-swp', [SwpController::class, 'update'])->name('update-swp');


// SrtComplaintController

Route::get('/add-srt-complaint', [SrtComplaintController::class, 'index'])->name('add-srt-complaint');
Route::any('/save-srt-complaint',[SrtComplaintController::class, 'create'])->name('save-srt-complaint');
Route::get('/view-srt-complaint', [SrtComplaintController::class, 'view'])->name('view-srt-complaint');
Route::get('/edit-srt-complaint/{id}', [SrtComplaintController::class, 'edit'])->name('edit-srt-complaint');
Route::post('/update-srt-complaint', [SrtComplaintController::class, 'update'])->name('update-srt-complaint');
Route::get('/getsitenames/{district}', [SrtComplaintController::class, 'getsitenames']);
Route::get('/getsrtsites', [SrtComplaintController::class, 'getVendorDetails']);


// SSLComplaintController

Route::get('/add-ssl-complaint', [SSLComplaintController::class, 'index'])->name('add-ssl-complaint');
Route::any('/save-ssl-complaint',[SSLComplaintController::class, 'create'])->name('save-ssl-complaint');
Route::get('/view-ssl-complaint', [SSLComplaintController::class, 'view'])->name('view-ssl-complaint');
Route::get('/ssl/vendors', [SSLComplaintController::class, 'getVendorDetails'])->name('sslvendors');
Route::get('/edit-ssl-complaint/{id}', [SSLComplaintController::class, 'edit'])->name('edit-ssl-complaint');
Route::post('/update-ssl-complaint', [SSLComplaintController::class, 'update'])->name('update-ssl-complaint');
Route::get('/getblocks/{district}', [SSLComplaintController::class, 'getblocks']);
Route::get('/getpanchyats', [SSLComplaintController::class, 'getpanchyats']);
Route::get('/getwards', [SSLComplaintController::class, 'getwards']);
Route::get('/getpoles', [SSLComplaintController::class, 'getpoles']);
Route::get('/getpoledatas', [SSLComplaintController::class, 'getVendorDetails']);



// DispatchproductController
Route::get('/dispatch/add-dispatch-products', [DispatchproductController::class, 'add_dispatch_product'])->name('add-product-dispatch');
Route::post('/dispatch/save-dispatch-products', [DispatchproductController::class, 'store_product'])->name('save-dispatch-product');
Route::get('/dispatch/view-dispatch-product',[DispatchproductController::class, 'view'])->name('view-product-dispatch');
Route::get('/dispatch/view-inhouse-dispatch',[DispatchproductController::class, 'view_inhouse'])->name('view-inhouse-dispatch');
Route::post('/accept-order',[DispatchproductController::class, 'accept_order'])->name('accept-order');
Route::get('/get-products/{warehouse}', [DispatchproductController::class, 'getProducts'])->name('get-products');
Route::get('/dispatch/inhouse-dispatch-products', [DispatchproductController::class, 'inhouse_dispatch_product'])->name('inhouse-product-dispatch');
Route::post('/outer-dispatch',[DispatchproductController::class, 'outer_dispatch'])->name('outer-dispatch');

// ComplaintController 
Route::get('/add-complaint', [ComplaintController::class, 'add_complaint'])->name('add-complaint');
Route::post('/save-complaint', [ComplaintController::class, 'create'])->name('save-complaint');
Route::get('/view-complaint', [ComplaintController::class, 'view_complaint'])->name('view-complaint');
Route::get('/close/{id}', [ComplaintController::class, 'edit'])->name('close');
Route::post('/update-complaint', [ComplaintController::class, 'update'])->name('update-complaint');
Route::get('/approve/{id}', [ComplaintController::class, 'approve'])->name('approve');
Route::post('/approve-closing', [ComplaintController::class, 'approve_update'])->name('approve-closing');
Route::get('/final-approve/{id}', [ComplaintController::class, 'final_approve'])->name('final-approve');
Route::post('/final-update', [ComplaintController::class, 'final_approve_update'])->name('final-update');


// NotificationController 
Route::get('/add-notification', [NotificationController::class, 'add_notification'])->name('add-notification');
Route::post('/save-notification', [NotificationController::class, 'create'])->name('save-notification');
Route::get('/view-notification', [NotificationController::class, 'view_notification'])->name('view-notification');
Route::get('/get-notiusers/{id}', [NotificationController::class, 'getUsers'])->name('get-users');

// Start CallController
Route::get('/kusum/dashboard', [CallController::class, 'index_kusum'])->name('kusum-dashboard');
Route::get('/complaint-dashboard', [CallController::class, 'all_complaints'])->name('complaint-dashboard');  
Route::get('/up-swp-complaint', [CallController::class, 'add_up_swp'])->name('up-swp-complaint');
Route::get('/jammu-swp-complaint', [CallController::class, 'add_jammu_swp'])->name('jammu-swp-complaint');
Route::get('/kashmir-swp-complaint', [CallController::class, 'add_kashmir_swp'])->name('kashmir-swp-complaint');
Route::get('/view-up-swp-complaint', [CallController::class, 'view_up_swp'])->name('view-up-swp-complaint');
Route::get('/view-jammu-swp-complaint', [CallController::class, 'view_jammu_swp'])->name('view-jammu-swp-complaint');
Route::get('/view-kashmir-swp-complaint', [CallController::class, 'view_kashmir_swp'])->name('view-kashmir-swp-complaint');



Route::get('/kusum/view-product', [ProductController::class, 'index_kusum'])->name('view-kusum-product');
Route::get('/kusum/add-request', [ProductrequestController::class, 'index_kusum'])->name('add-kusum-request');
Route::get('/kusum/view-request',[ProductrequestController::class, 'view_kusum'])->name('view-kusum-request');


// DispatchproductController
Route::get('/kusum/dispatch/add-dispatch-products', [DispatchproductController::class, 'add_dispatch_product_kusum'])->name('add-kusum-product-dispatch');
Route::get('/kusum/dispatch/view-dispatch-product',[DispatchproductController::class, 'view_kusum'])->name('view-kusum-product-dispatch');
Route::get('/kusum/dispatch/view-inhouse-dispatch',[DispatchproductController::class, 'view_inhouse_kusum'])->name('view-kusum-inhouse-dispatch');
Route::get('/kusum/dispatch/inhouse-dispatch-products', [DispatchproductController::class, 'inhouse_dispatch_product_kusum'])->name('inhouse-kusum-product-dispatch');

Route::get('/view-farmer', [FarmerController::class, 'view_farmer'])->name('view-farmer');
Route::post('/import-farmer', [FarmerController::class, 'farmerImport'])->name('import-farmer');

// SiteSurveyController
Route::get('/add-site-survey', [SiteSurveyController::class, 'index'])->name('add-site-survey');
Route::post('/save-site-survey', [SiteSurveyController::class, 'create'])->name('save-site-survey');
Route::get('/edit/{id}', [SiteSurveyController::class, 'edit']);
Route::post('/update-site-survey', [SiteSurveyController::class, 'update'])->name('update-site-survey');
Route::get('/delete/{id}', [SiteSurveyController::class, 'destroy'])->name('delete');
Route::get('/view-site-survey', [SiteSurveyController::class, 'view_site'])->name('view-site-survey');
Route::post('/import-site-survey', [SiteSurveyController::class, 'siteImport'])->name('import-site-survey');


// SiteSurveyController
Route::get('/jammu/add-site-survey', [SwpSurveyController::class, 'index'])->name('add-jammu-survey');
Route::post('/jammu/save-site-survey', [SwpSurveyController::class, 'create'])->name('save-jammu-survey');
Route::get('/jammu/edit/{id}', [SwpSurveyController::class, 'edit']);
Route::post('/jammu/update-site-survey', [SwpSurveyController::class, 'update'])->name('update-jammu-survey');
Route::get('/jammu/delete/{id}', [SwpSurveyController::class, 'destroy'])->name('delete-jammu-survey');
Route::get('/jammu/view-site-survey', [SwpSurveyController::class, 'view_site'])->name('view-jammu-survey');
Route::post('/jammu/import-site-survey', [SwpSurveyController::class, 'siteImport'])->name('import-jammu-survey');

//JammuController
Route::get('/add-site-registration', [JammuController::class, 'index'])->name('add-jk-registration');
Route::post('/save-site-registration', [JammuController::class, 'create'])->name('save-jk-registration');
Route::get('/view-jk-registration/{status?}', [JammuController::class, 'view_jk'])->name('view-jk-registration');
Route::get('/edit-site/{id}', [JammuController::class, 'edit'])->name('edit-jk');
Route::get('/get-modules', [JammuController::class, 'getModules'])->name('get-modules');
Route::post('/update-site', [JammuController::class, 'update_jk'])->name('update-jk');
Route::get('/delete-site/{id}', [JammuController::class, 'destroy'])->name('delete-jk');

Route::get('/phase-swp-data/{status}/{phase}',[JammuController::class, 'phase_swp_data']);
Route::get('/district-swp-data/{status}/{district}',[JammuController::class, 'district_swp_data']);
Route::get('/vendor-swp-jammu/{status}/{vendor}',[JammuController::class, 'vendor_swp_data']); 

Route::get('/srt-dashboard', [JammuController::class, 'dash'])->name('jammu-dash');
Route::get('/ssl-dashboard', [JammuController::class, 'ssldash'])->name('jammu-ssl-dash');
Route::get('/swp-dashboard', [JammuController::class, 'swpdash'])->name('jammu-swp-dash');

Route::get('/get-modules', [JammuController::class, 'getModules'])->name('get-modules');
Route::get('/jk/vendors', [JammuController::class, 'getVendorDetails'])->name('vendors');
Route::get('/print/{id}', [JammuController::class, 'print'])->name('print');


// UpController
Route::get('/kusum-b-dashboard', [UpController::class, 'dash'])->name('kusumb-dash');
Route::get('/kusum-c-dashboard', [UpController::class, 'c_dash'])->name('kusumc-dash');

// Kusumbsurvey
Route::get('/view-kusumb-survey/{status?}', [UpController::class, 'view_up'])->name('view-up');
Route::get('/phase-kusumb-data/{status}/{phase}',[UpController::class, 'phase_kusumb_data']);
Route::get('/district-kusumb-data/{status}/{district}',[UpController::class, 'district_kusumb_data']);
Route::get('/vendor-kusumb-data/{status}/{vendor}',[UpController::class, 'vendor_kusumb_data']); 

Route::get('/view-kusumc-survey/{status?}',[UpController::class, 'view_kusumc'])->name('view-kusum-C');
Route::get('/phase-kusumc-data/{status}/{phase}',[UpController::class, 'phase_kusumc_data']);
Route::get('/district-kusumc-data/{status?}/{district?}',[UpController::class, 'district_kusumc_data']);
Route::get('/vendor-kusumc-data/{status?}/{vendor?}',[UpController::class, 'vendor_kusumc_data']); 


// UpSSlController

Route::get('/add-up-ssl', [UpSSlController ::class, 'index'])->name('add-up-ssl');
Route::post('/save-up-ssl', [UpSSlController::class, 'create'])->name('save-upssl');
Route::get('/edit-up-ssl/{id}', [UpSSlController::class, 'edit'])->name('edit-upssl');
Route::post('/update-up-ssl', [UpSSlController::class, 'update'])->name('update-up-ssl');
Route::get('/view-up-ssl', [UpSSlController::class, 'view'])->name('view-up-ssl');

Route::get('/up-ssl-dashboard', [UpSSlController ::class, 'ssldashboard'])->name('up-ssl-dashboard');

Route::get('/district-upssl-data/{status}/{district}',[UpSSlController::class, 'district_upssl_data']);
Route::get('/vendor-upssl-data/{status}/{vendor}',[UpSSlController::class, 'vendor_upssl_data']); 
Route::get('/main-upssl-data/{status}',[UpSSlController::class, 'main_upssl_data']);  

// BKusumController

Route::get('/view-kusum-B',[BKusumController::class, 'view_kusum_b'])->name('view-kusum-B');
Route::get('/edit-kusum-B/{id}', [BKusumController::class, 'edit'])->name('edit-kusum-B');
Route::post('/update-kusum-B', [BKusumController::class, 'update_Kusum_b'])->name('update-kusum-B');



// CKusumController

Route::get('/add-kusum-C',[CKusumController::class, 'index'])->name('add-kusum-C');
Route::post('/save-kusum-C',[CKusumController::class, 'create'])->name('save-kusum-C');
Route::get('/edit-kusum-C/{id}', [CKusumController::class, 'edit'])->name('edit-kusum-C');
Route::post('/update-kusum-C', [CKusumController::class, 'update_CKusum'])->name('update-kusum-C');
Route::get('/get-ckusum-modules', [CKusumController::class, 'getModules'])->name('get-ckusum-modules');

// Start KsbComplaintController
Route::get('/kusumb/add-complaint', [KsbComplaintController::class, 'add_complaint'])->name('add-kusumb-complaint');
Route::post('/kusumb/save-complaint', [KsbComplaintController::class, 'create'])->name('save-kusumb-complaint');
Route::get('/kusumb/view-complaint', [KsbComplaintController::class, 'view_complaint'])->name('view-kusumb-complaint');
Route::get('/kusumb/view-eng-complaint', [KsbComplaintController::class, 'view_eng_complaint'])->name('view-eng-kusumb-complaint');
Route::get('/kusumb/resolved-complaint', [KsbComplaintController::class, 'final_complaint'])->name('final-kusumb-complaint');
Route::get('/kusumb/close/{id}', [KsbComplaintController::class, 'edit'])->name('close-kusumb');
Route::post('/kusumb/update-complaint', [KsbComplaintController::class, 'update'])->name('update-kusumb-complaint');
Route::get('/kusumb/approve/{id}', [KsbComplaintController::class, 'approve'])->name('approve-kusumb');
Route::post('/kusumb/approve-closing', [KsbComplaintController::class, 'approve_update'])->name('approve-kusumb-closing');
Route::get('/kusumb/final-approve/{id}', [KsbComplaintController::class, 'final_approve'])->name('final-kusumb-approve');
Route::post('/kusumb/final-update', [KsbComplaintController::class, 'final_approve_update'])->name('final-kusumb-update');
// End KsbComplaintController

// Start KscComplaintController
Route::get('/kusumc/add-complaint', [KscComplaintController::class, 'add_complaint'])->name('add-kusumc-complaint');
Route::post('/kusumc/save-complaint', [KscComplaintController::class, 'create'])->name('save-kusumc-complaint');
Route::get('/kusumc/view-complaint', [KscComplaintController::class, 'view_complaint'])->name('view-kusumc-complaint');
Route::get('/kusumc/view-eng-complaint', [KscComplaintController::class, 'view_eng_complaint'])->name('view-eng-kusumc-complaint');
Route::get('/kusumc/resolved-complaint', [KscComplaintController::class, 'final_complaint'])->name('final-kusumc-complaint');
Route::get('/kusumc/close/{id}', [KscComplaintController::class, 'edit'])->name('close-kusumc');
Route::post('/kusumc/update-complaint', [KscComplaintController::class, 'update'])->name('update-kusumc-complaint');
Route::get('/kusumc/approve/{id}', [KscComplaintController::class, 'approve'])->name('approve-kusumc');
Route::post('/kusumc/approve-closing', [KscComplaintController::class, 'approve_update'])->name('approve-kusumc-closing');
Route::get('/kusumc/final-approve/{id}', [KscComplaintController::class, 'final_approve'])->name('final-kusumc-approve');
Route::post('/kusumc/final-update', [KscComplaintController::class, 'final_approve_update'])->name('final-kusumc-update');

// End KscComplaintController

//JammuSrtController
Route::get('/add-jammu-srt', [JammuSrtController::class, 'index'])->name('add-jammu-srt');
Route::post('/save-jammu-srt', [JammuSrtController::class, 'create'])->name('save-jammu-srt');
Route::get('/view-jammu-srt', [JammuSrtController::class, 'view_jammu_srt'])->name('view-jammu-srt');
Route::get('/edit-jammu-srt/{id}', [JammuSrtController::class, 'edit'])->name('edit-jammu-srt');
Route::post('/update-jammu-srt', [JammuSrtController::class, 'update_jammu_srt'])->name('update-jammu-srt');
Route::get('/delete-jammu-srt/{id}', [JammuSrtController::class, 'destroy'])->name('delete-jammu-srt');

//MaterialStatusController
Route::get('/add-material', [MaterialStatusController::class, 'index'])->name('add-material');
Route::post('/save-material', [MaterialStatusController::class, 'create'])->name('save-material');
Route::get('/view-material', [MaterialStatusController::class, 'view_material'])->name('view-material');
Route::get('/edit-material/{id}', [MaterialStatusController::class, 'edit'])->name('edit-material');
Route::post('/update-material', [MaterialStatusController::class, 'update_material'])->name('update-material');
Route::get('/delete-material/{id}', [MaterialStatusController::class, 'destroy'])->name('delete-material');


//SSlController//

Route::get('/add-ssl', [SSlController::class, 'index'])->name('add-ssl');
Route::post('/save-ssl', [SSlController::class, 'create'])->name('save-ssl');
Route::get('/edit-ssl/{id}', [SSlController::class, 'edit'])->name('edit-ssl');
Route::post('/update-ssl', [SSlController::class, 'update'])->name('update-ssl');
Route::get('/view-ssl', [SSlController::class, 'view'])->name('view-ssl');
Route::get('/upload-ssl-data', [SSlController::class, 'upload_ssl'])->name('upload-ssl-data');
Route::post('/upload-ssl', [SSlController::class, 'upload'])->name('upload-ssl');


//SSlController//

//OngridController//

Route::get('/add-ongrid', [OngridController::class, 'index'])->name('add-ongrid');
Route::post('/save-ongrid', [OngridController::class, 'create'])->name('save-ongrid');
Route::get('/edit-ongrids/{id}', [OngridController::class, 'edit'])->name('edit-ongrids');
Route::post('/update-ongrid', [OngridController::class, 'update'])->name('update-ongrid');
Route::get('/view-ongrid', [OngridController::class, 'view'])->name('view-ongrid');
Route::get('/upload-ongrid-data', [OngridController::class, 'upload_ongrid'])->name('upload-ongrid-data');
Route::post('/upload-ongrid', [OngridController::class, 'upload'])->name('upload-ongrid');

Route::get('/ongrid-dashboard', [OngridController::class, 'ongriddash'])->name('ongrid-dash');


Route::get('/district-ongrid-data/{status}/{district}',[OngridController::class, 'district_ongrid_data']);
Route::get('/main-ongrid-data/{status}',[OngridController::class, 'main_ongrid_data']);  

//OngridController//



//OffgridController//

Route::get('/add-offgrid', [OffgridController::class, 'index'])->name('add-offgrid');
Route::post('/save-offgrid', [OffgridController::class, 'create'])->name('save-offgrid');
Route::get('/edit-offs/{id}', [OffgridController::class, 'edit'])->name('edit-offs');
Route::post('/update-offgrid', [OffgridController::class, 'update'])->name('update-offgrid');
Route::get('/view-offgrid', [OffgridController::class, 'view'])->name('view-offgrid');
Route::get('/upload-offgrid-data', [OffgridController::class, 'upload_offgrid'])->name('upload-offgrid-data');
Route::post('/upload-offgrid', [OffgridController::class, 'upload'])->name('upload-offgrid');

Route::get('/offgrid-dashboard', [OffgridController::class, 'offgriddash'])->name('offgrid-dash');
Route::get('/district-offgrid-data/{status}/{district}',[OffgridController::class, 'district_offgrid_data']);
Route::get('/main-offgrid-data/{status}',[OffgridController::class, 'main_offgrid_data']);  

//OffgridController//



//PowerPackController//

Route::get('/add-power', [PowerPackController::class, 'index'])->name('add-power');
Route::post('/save-power', [PowerPackController::class, 'create'])->name('save-power');
Route::get('/edit-power/{id}', [PowerPackController::class, 'edit'])->name('edit-power');
Route::post('/update-power', [PowerPackController::class, 'update'])->name('update-power');
Route::get('/view-power', [PowerPackController::class, 'view'])->name('view-power');
Route::get('/upload-powerpack-data', [PowerPackController::class, 'upload_power'])->name('upload-powerpack-data');
Route::post('/upload-powerpack', [PowerPackController::class, 'upload'])->name('upload-powerpack');


Route::get('/powerpack-dashboard', [PowerPackController::class, 'powerpackdash'])->name('powerpack-dash');
Route::get('/district-powerpack-data/{status}/{district}',[PowerPackController::class, 'district_powerpack_data']);
Route::get('/main-powerpack-data/{status}',[PowerPackController::class, 'main_powerpack_data']);  

//PowerPackController//

//BiharsslController//

Route::get('/add-bssl', [BiharsslController::class, 'index'])->name('add-bssl');
Route::post('/save-bssl', [BiharsslController::class, 'create'])->name('save-bssl');
Route::get('/view-bssl', [BiharsslController::class, 'view'])->name('view-bssl');
Route::get('/edit-bssl/{id}', [BiharsslController::class, 'edit'])->name('edit-bssl');
Route::post('/update-bssl', [BiharsslController::class, 'update'])->name('update-bssl');
Route::get('/upload-biharssl-data', [BiharsslController::class, 'upload_bssl'])->name('upload-biharssl-data');
Route::post('/upload-biharssl', [BiharsslController::class, 'upload'])->name('upload-biharssl');
Route::get('/bssl-dashboard', [BiharsslController::class, 'ssldashbaord'])->name('bssl-dashboard');


Route::get('/district-ssl-data/{status}/{district}',[BiharsslController::class, 'district_ssl_data']);
Route::get('/vendor-ssl-data/{status}/{vendor}',[BiharsslController::class, 'vendor_ssl_data']); 
Route::get('/main-ssl-data/{status}',[BiharsslController::class, 'main_ssl_data']);  

//BiharsslController//

// VendorController
Route::get('/vendor-dashboard',[VendorController::class, 'vendordashboard'])->name('vendor-dashboard');
Route::get('/add-vendor',[VendorController::class, 'add_vendor'])->name('add-vendor'); 
Route::post('/save-vendor',[VendorController::class, 'create'])->name('save-vendor');
Route::get('/view-vendor',[VendorController::class, 'view_vendor'])->name('view-vendor');
Route::get('/update-vendor/{id}', [VendorController::class, 'edit'])->name('edit-vendor');
Route::put('/update-vendor/{id}',[VendorController::class, 'update'])->name('update-vendor');
Route::get('/delete-vendor', [VendorController::class, 'destroy'])->name('delete-vendor');

// WorkOrderController

Route::get('/vendor/add-workorder', [WorkOrderController::class, 'index'])->name('add-workorder');
Route::post('/save-workorder', [WorkOrderController::class, 'create'])->name('save-workorder');
Route::get('/vendor/view-workorder', [WorkOrderController::class, 'view'])->name('view-workorder');
Route::get('/edit-workorder/{id}', [WorkOrderController::class, 'edit'])->name('edit-workorder');
Route::post('/update-workorders', [WorkOrderController::class, 'update'])->name('update-workorder');
Route::get('/delete-workorder/{id}', [WorkOrderController::class, 'destroy'])->name('delete-workorder');

Route::get('/vendor/add-workorder-assign', [WorkOrderController::class, 'wo_assign'])->name('add-workorder-assign');
Route::post('/save-workorder-assign', [WorkOrderController::class, 'create_wo_assign'])->name('save-workassign');
Route::get('/vendor/view-workorder-assign', [WorkOrderController::class, 'view_wo_assign'])->name('view-workorder-assign');

Route::get('/vendor/add-workorder-report', [WoreportController::class, 'index'])->name('add-workorder-report');
Route::post('/save-workorder-report', [WoreportController::class, 'create'])->name('save-workorder-report');
Route::get('/view-workorder-report', [WoreportController::class, 'view_wo_report'])->name('view-workorder-report');

Route::get('/vendor/view-rm-request',[VendorproductrequestController::class, 'view'])->name('view-request');
Route::post('/action-request',[VendorproductrequestController::class, 'accept_request'])->name('action-request');


Route::get('/view-vendor-complaint',[VendorComplaintController::class, 'view'])->name('view-vendor-complaint');
Route::get('/edit-vendor-complaint/{id}',[VendorComplaintController::class, 'edit'])->name('edit-vendor-complaint');
Route::post('/update-vendor-complaint',[VendorComplaintController::class, 'update'])->name('update-vendor-complaint');
Route::any('/save-assignvendor-complaint',[VendorComplaintController::class, 'assign'])->name('save-assignvendor-complaint');
Route::any('/save-approvevendor-complaint',[VendorComplaintController::class, 'approve'])->name('save-approvevendor-complaint');

Route::any('/view-vendor-progress',[VendorProgressController::class, 'vendorprogress'])->name('view-vendor-progress');
Route::any('/view-daily-progress',[VendorProgressController::class, 'dailyprogress'])->name('view-daily-progress');
Route::get('/getdetails', [VendorProgressController::class, 'getDetails']);

Route::get('/view-payment',[PaymentController::class, 'view'])->name('view-payment');
Route::get('/edit-payment/{id}',[PaymentController::class, 'edit'])->name('edit-payment');
Route::post('/update-payment',[PaymentController::class, 'update'])->name('update-payment');
Route::get('/delete-payment/{id}',[PaymentController::class, 'destroy'])->name('delete-payment');


});




