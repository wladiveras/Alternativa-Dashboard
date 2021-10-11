<?php

use Illuminate\Support\Facades\Route;
use HTMLMin\HTMLMin\Http\Middleware\MinifyMiddleware;
use App\Http\Controllers\PusherNotificationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\User;

// @info :: Adiciona as rotas das paginas
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\NewOrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
    // ! ##############################################################
    // ! App:: Routers Management                                     #
    // ! ##############################################################

    Route::get('/', function () 
    {
        $id = session('session_order');

        if($id)
        {
            return redirect('/order');
        }

        return view('order_login')->with('title', 'Acessar pedido');
    })
    ->name('home');

    // todo: Deployment by github webhook
    Route::post('deploy', 
        [DeployController::class, 'deploy'])
        ->name('Deployment'); 

    // ! ##############################################################
    // ! Order:: Routers Management                                   #
    // ! ##############################################################

    Route::get('/order', 
        [OrderController::class, 'index'])
        ->name('Order');

    Route::post('/order/aprove', 
        [OrderController::class, 'aprove'])
        ->name('OrderAprove');

    Route::post('/order/insert', [
        OrderController::class, 'insert'])
        ->name('OrderInsert');

    Route::post('/order/delete', 
        [OrderController::class, 'delete'])
        ->name('OrderDelelete');
        
    Route::post('/order/clear', 
        [OrderController::class, 'clear'])
        ->name('OrderClear');

    Route::post('/order/auth/access', 
        [OrderController::class, 'Access'])
        ->name('OrderAccess');

    Route::post('/order/auth/Logout', 
    [OrderController::class, 'Logout'])
    ->name('OrderLogout');
    
    Route::get('/print', function () 
    {
        return view('print')->with('title', 'um titulo');
    });

    // ! ##############################################################
    // ! Dashboard:: Routers Management                               #
    // ! ##############################################################

    Route::get('dashboard/login', function () 
    {
        return view('login')->with('title', 'Login');
    })
    ->middleware('guest')->name('login');

    // todo: Methods Post
    Route::post('/dashboard/login',  
        [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest');

    Route::post('/dashboard/logout', 
        [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth')->name('logout');
    
    // todo: Methods Get
    Route::get('/dashboard',                      
        [DashboardController::class,'index'])
        ->middleware('auth')->name('dash:index');

    Route::get('/dashboard/cards',                
        [NewOrderController::class, 'cardFront'])
        ->middleware('auth')->name('dash:card_front');

    Route::get('/dashboard/cards/{frontid}',      
        [NewOrderController::class, 'cardBack'])
        ->middleware('auth')->name('dash:card_back');

    Route::get('/dashboard/order/{front}/{back}', 
        [NewOrderController::class, 'index'])
        ->middleware('auth')->name('dash:orders');

    Route::post('/dashboard/order/add',           
        [NewOrderController::class, 'AddOrder'])
        ->middleware('auth')->name('dash:addorder');

    Route::get('/dashboard/export/{id}', 
        [NewOrderController::class, 'ExportOrders'])
        ->middleware('auth')
        ->name('OrdersExport');

    Route::get('/dashboard/download/{id}', 
        [NewOrderController::class, 'DownloadOrders'])
        ->middleware('auth')
        ->name('OrdersDownload');
    
    Route::post('/dashboard/import', 
        [NewOrderController::class, 'ImportOrders'])
        ->middleware('auth')
        ->name('ImportOrders');

  





























    Route::get('/websocket', function () 
    {
        return event(new App\Events\RealTimeMessage('Hello World'));
    });

    
    Route::get('/websocket/private/{id}/{msg}', function ($id, $msg) 
    {

        $user = User::where('id', $id)->first();
        $user->notify(new \App\Notifications\usersNotification($msg .' || ID: '. $user->name));
        
        return $msg;
    });
 




 
    Route::get('/wizard', function () {
        return view('wizard')->with('title', 'Assistente');
    });
    
    Route::get('/invoice', function () {
        return view('invoice')->with('title', 'Pedido');
    });
    
    Route::get('/pricing', function () {
        return view('pricing')->with('title', 'Oferta unica');
    });
    
    Route::get('/error', function () {
        return view('error')->with('title', 'Aconteceu algo de errado');
    });








/*
Route::get('/scout1', [RegisteredUserController::class, 'create' ])->name('consultor')->middleware('user');
Route::get('/scout2', [RegisteredUserController::class, 'create' ])->name('supervisor')->middleware('mgr');
Route::get('/scout3', [RegisteredUserController::class, 'create' ])->name('juridico')->middleware('juri');
Route::get('/scout4', [RegisteredUserController::class, 'create' ])->name('moderador')->middleware('mod');
Route::get('/scout5', [RegisteredUserController::class, 'create' ])->name('administrador')->middleware('admin');
Route::get('/scout6', [RegisteredUserController::class, 'create' ])->name('Super Administrador')->middleware('super');
 */
Route::get('/clear-cache', function () {

    $configCache = Artisan::call('config:cache');
    $clearCache = Artisan::call('cache:clear');
    $clearCache = Artisan::call('config:clear');

    // return what you want
});

//require __DIR__ . '/auth.php';
