<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
/****************************************************************************************************************/
/****************************************************************************************************************/
/****************************************************************************************************************/

use App\Http\Controllers\RemoveRoleFromUserController;
use App\Http\Controllers\RevokePermissionFromRoleController;
use App\Http\Controllers\RevokePermissionFromUserController;
/****************************************************************************************************************/
/****************************************************************************************************************/
/****************************************************************************************************************/

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

/****************************************************************************************************************/
/****************************************************************************************************************/
/****************************************************************************************************************/

use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Partner\PartnerController;
use App\Http\Controllers\Person\PersonController;
use App\Http\Controllers\Store\StoreController;

use App\Http\Controllers\Alert\AlertController;


use App\Http\Controllers\Store\StoreLocationController;
use App\Http\Controllers\Transaction\TransactionController;
use App\Http\Controllers\Transaction\TransactiondetailController;

use App\Http\Controllers\Support\SupportController;


use App\Http\Controllers\Platform\PlatformStoreController;

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Atc\AtcController;

use App\Http\Controllers\Contabilidad\ContabilidadController;
use App\Http\Controllers\King\KingController;
use App\Http\Controllers\Platform\PlatformController;
use App\Http\Controllers\Utility\UtilityController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/****************************************************************************************************************/
/***************************************  Detalle  Partners   ***************************************************/
/****************************************************************************************************************/

Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
Route::post('/partners', [PartnerController::class, 'store'])->name('partners.store');
Route::put('/partners/{id}', [PartnerController::class, 'update'])->name('partners.update');
Route::delete('/partners/{id}', [PartnerController::class, 'destroy'])->name('partners.destroy');

Route::get('/partnersfilter', [PartnerController::class, 'filterByDate'])->name('alerts.filter');
Route::get('/partnersfilterbydate', [PartnerController::class, 'filterByDateRange'])->name('alerts.filter.dates');
Route::post('/partnersimport', [PartnerController::class, 'import'])->name('alerts.import');

/****************************************************************************************************************/
/***************************************  Detalle  Partners   ***************************************************/
/****************************************************************************************************************/

Route::get('/alerts', [AlertController::class, 'index'])->name('alerts.index');
Route::post('/alerts', [AlertController::class, 'store'])->name('alerts.store');
Route::put('/alerts/{id}', [AlertController::class, 'update'])->name('alerts.update');
Route::delete('/alerts/{id}', [AlertController::class, 'destroy'])->name('alerts.destroy');

Route::get('/alertsfilter', [AlertController::class, 'filterByDate'])->name('alerts.filter');
Route::get('/alertsfilterbydate', [AlertController::class, 'filterByDateRange'])->name('alerts.filter.dates');
Route::post('/alertsimport', [PartnerController::class, 'import'])->name('alerts.import');
/****************************************************************************************************************/
/***************************************  Detalle  Clientes   ***************************************************/
/****************************************************************************************************************/

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

Route::get('/clientsfilter', [ClientController::class, 'filterByDate'])->name('alerts.filter');
Route::get('/clientsfilterbydate', [ClientController::class, 'filterByDateRange'])->name('alerts.filter.dates');
Route::post('/clientsimport', [ClientController::class, 'import'])->name('alerts.import');

/*****************************************************************************************************************/
/******************************** Interesados (Personas)**********************************************************/
/*****************************************************************************************************************/

Route::get('/persons', [PersonController::class, 'index'])->name('persons.index');
Route::post('/persons', [PersonController::class, 'store'])->name('persons.store');
Route::put('/persons/{id}', [PersonController::class, 'update'])->name('persons.update');
Route::delete('/persons/{id}', [PersonController::class, 'destroy'])->name('persons.destroy');

Route::get('/personsfilter', [PersonController::class, 'filterByDate'])->name('alerts.filter');
Route::get('/personsfilterbydate', [PersonController::class, 'filterByDateRange'])->name('alerts.filter.dates');
Route::post('/personsimport', [PersonController::class, 'import'])->name('alerts.import');

/****************************************************************************************************************/
/******************************* Sedes controler ***********************************************************/
/****************************************************************************************************************/

Route::get('/stores', [StoreController::class, 'index'])->name('stores.index');
Route::post('/stores', [StoreController::class, 'store'])->name('stores.index');
Route::put('/stores/{id}', [StoreController::class, 'update'])->name('stores.update');
Route::delete('/stores/{id}', [StoreController::class, 'destroy'])->name('stores.destroy');

Route::get('/storesfilter', [StoreController::class, 'filterByDate'])->name('alerts.filter');
Route::get('/storesfilterbydate', [StoreController::class, 'filterByDateRange'])->name('alerts.filter.dates');
Route::post('/storesimport', [StoreController::class, 'import'])->name('alerts.import');

/****************************************************************************************************************/
/****************************** Transacciones Controller **********************************************************/
/****************************************************************************************************************/

Route::get('/transaction', [TransactionController::class, 'store'])->name('transaction.store');
Route::post('/transaction', [TransactionController::class, 'store'])->name('transaction.store');
Route::put('/transaction/{id}', [TransactionController::class, 'update'])->name('transaction.update');
Route::delete('/transaction/{id}', [TransactionController::class, 'destroy'])->name('transaction.destroy');

Route::get('/transactionfilter', [TransactionController::class, 'filterByDate'])->name('alerts.filter');
Route::get('/transactionfilterbydate', [TransactionController::class, 'filterByDateRange'])->name('alerts.filter.dates');
Route::post('/transactionimport', [TransactionController::class, 'import'])->name('alerts.import');

/****************************************************************************************************************/
/************************************ Deatlle Transacciones ****************************************************/
/****************************************************************************************************************/

Route::get('/transactiondetail', [TransactiondetailController::class, 'index'])->name('transactiondetail.index');
Route::post('/transactiondetail', [TransactiondetailController::class, 'store'])->name('transactiondetail.store');
Route::put('/transactiondetail/{id}', [TransactiondetailController::class, 'update'])->name('transactiondetail.update');
Route::delete('/transactiondetail/{id}', [TransactiondetailController::class, 'destroy'])->name('transactiondetail.destroy');

Route::get('/transactiondetailfilter', [TransactiondetailController::class, 'filterByDate'])->name('alerts.filter');
Route::get('/transactiondetailfilterbydate', [TransactiondetailController::class, 'filterByDateRange'])->name('alerts.filter.dates');
Route::post('/transactiondetailimport', [TransactiondetailController::class, 'import'])->name('alerts.import');

/****************************************************************************************************************/
/********************************* Utilidades **************************************************************/
/****************************************************************************************************************/
Route::get('/utility', [UtilityController::class, 'index'])->name('utility.index');
Route::post('/utility', [UtilityController::class, 'store'])->name('utility.store');
Route::put('/utility/{id}', [UtilityController::class, 'update'])->name('utility.update');
Route::delete('/utility/{id}', [UtilityController::class, 'destroy'])->name('utility.destroy');


Route::get('/transactiondetailfilter', [UtilityController::class, 'filterByDate'])->name('alerts.filter');
Route::get('/transactiondetailfilterbydate', [UtilityController::class, 'filterByDateRange'])->name('alerts.filter.dates');
Route::post('/transactiondetailimport', [UtilityController::class, 'import'])->name('alerts.import');

/****************************************************************************************************************/
/**************************************** Ubicaion Sede ***********************************************************/
/****************************************************************************************************************/

Route::get('/locationlocal', [StoreLocationController::class, 'index'])->name('locationlocal.destroy');
Route::post('/locationlocal', [StoreLocationController::class, 'store'])->name('locationlocal.destroy');
Route::put('/locationlocal/{id}', [StoreLocationController::class, 'update'])->name('locationlocal.destroy');
Route::delete('/locationlocal/{id}', [StoreLocationController::class, 'destroy'])->name('locationlocal.destroy');

Route::get('/locationlocalfilter', [StoreLocationController::class, 'filterByDate'])->name('locationlocal.filter');
Route::get('/locationlocalfilterbydate', [StoreLocationController::class, 'filterByDateRange'])->name('locationlocal.filter.dates');
Route::post('/locationlocalimport', [StoreLocationController::class, 'import'])->name('locationlocal.import');

/****************************************************************************************************************/
/*****************************  Plataformas Sedes Tabla  ******************************************************/
/****************************************************************************************************************/

Route::get('/platformstore', [PlatformStoreController::class, 'index'])->name('platformstore.index');
Route::post('/platformstore', [PlatformStoreController::class, 'store'])->name('platformstore.store');
Route::put('/platformstore/{id}', [PlatformStoreController::class, 'update'])->name('platformstore.update');
Route::delete('/platformstore/{id}', [PlatformStoreController::class, 'destroy'])->name('platformstore.destroy');

Route::get('/platformstorefilter', [PlatformStoreController::class, 'filterByDate'])->name('platformstore.filter');
Route::get('/platformstorefilterbydate', [PlatformStoreController::class, 'filterByDateRange'])->name('platformstore.filter.dates');
Route::post('/platformstoreimport', [PlatformStoreController::class, 'import'])->name('platformstore.import');
/****************************************************************************************************************/
/*********************************** Plataformas tabla ************************************************************/
/****************************************************************************************************************/



Route::get('/platforms', [PlatformController::class, 'index'])->name('platforms.index');
Route::post('/platforms', [PlatformController::class, 'store'])->name('platforms.store');
Route::put('/platforms/{id}', [PlatformController::class, 'update'])->name('platforms.update');
Route::delete('/platforms/{id}', [PlatformController::class, 'destroy'])->name('platforms.destroy');

Route::get('/platformsfilter', [PlatformController::class, 'filterByDate'])->name('platforms.filter');
Route::get('/platformsfilterbydate', [PlatformController::class, 'filterByDateRange'])->name('platforms.filter.dates');
Route::post('/platformsimport', [PlatformController::class, 'import'])->name('platforms.import');

/****************************************************************************************************************/
/*********************************** Tabla cLientes ************************************************************/
/****************************************************************************************************************/


    Route::get('/supadmin', [KingController::class, 'index'])->name('king.index');
    Route::get('/soporte', [SupportController::class, 'index'])->name('soporte.index');
    Route::get('/contabilidad', [ContabilidadController::class, 'index'])->name('contabilidad.index');
    Route::get('/dash', [DashboardController::class, 'index'])->name('reportes.index');
    Route::get('/atc', [AtcController::class, 'index'])->name('atc.index');
    //Route::get('/atc', [SoporteController::class, 'index'])->name('atc.index');


/****************************************************************************************************************/
/****************************************************************************************************************/
/****************************************************************************************************************/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

/****************************************************************************************************************/
/****************************************************************************************************************/
/****************************************************************************************************************/
/****************************************************************************************************************/
Route::resource('/users', UserController::class);
Route::resource('/roles', RoleController::class);
Route::resource('/permissions', PermissionController::class);
Route::resource('/posts', PostController::class);

/****************************************************************************************************************/
/****************************************************************************************************************/
/****************************************************************************************************************/

Route::delete('/roles/{role}/permissions/{permission}', RevokePermissionFromRoleController::class)
    ->name('roles.permissions.destroy');
Route::delete('/users/{user}/permissions/{permission}', RevokePermissionFromUserController::class)
    ->name('users.permissions.destroy');
Route::delete('/users/{user}/roles/{role}', RemoveRoleFromUserController::class)
    ->name('users.roles.destroy');

/****************************************************************************************************************/
/****************************************************************************************************************/
/****************************************************************************************************************/

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    // Route::middleware(RoleMiddleware::class . ':admin')->group(function () {
    //     Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // });

    // Route::middleware(RoleMiddleware::class . ':atencion')->group(function () {
    //     Route::get('/atc', [AtcController::class, 'index'])->name('atc.index');
    // });

    // Route::middleware(RoleMiddleware::class . ':contabilidad')->group(function () {
    //     Route::get('/contabilidad', [ContabilidadController::class, 'index'])->name('contabilidad.index');
    // });

    // Route::middleware(RoleMiddleware::class . ':soporte')->group(function () {
    //     Route::get('/soporte', [SoporteController::class, 'index'])->name('soporte.index');
    // });

});
/****************************************************************************************************************/
/****************************************************************************************************************/
/****************************************************************************************************************/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/****************************************************************************************************************/
/******************************************** Roles *************************************************************/
/****************************************************************************************************************/

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
// });


/****************************************************************************************************************/
/****************************************************************************************************************/
/****************************************************************************************************************/

require __DIR__ . '/auth.php';

/****************************************************************************************************************/
/****************************************************************************************************************/
/****************************************************************************************************************/

        // Route::get('/transaction', [TransactionController::class, 'index'])->name('transactions.index');
        // Route::get('/transactiondetail', [TransactionController::class, 'index'])->name('transactionsdetail.index');
        // Route::get('/platform', [PlatformController::class, 'index'])->name('platforms.index');
        // Route::get('/utility', [UtilityController::class, 'index'])->name('utilitys.index');
        // Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
        // Route::get('/persons', [PersonController::class, 'index'])->name('persons.index');
        // Route::put('/persons/{cliepersonsnte}', [PersonController::class, 'update'])->name('persons.update');
        // Route::delete('/persons/{persons}', [PersonController::class, 'destroy'])->name('persons.destroy');

/****************************************************************************************************************/
/****************************************************************************************************************/
/****************************************************************************************************************/
