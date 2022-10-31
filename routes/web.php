<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcarTurnoController;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TurnoController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('VistaPrincipal.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::middleware(['auth'])->group(function () {

Route::resource('ambiente', AmbienteController::class);
Route::resource('empleado', EmpleadoController::class);
Route::resource('marcar', MarcarTurnoController::class);
Route::resource('plan', PlaneController::class);
Route::resource('rol', RoleController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('cliente', ClienteController::class);
Route::get('pdf', [ClienteController::class, 'pdf'])->name('cliente.pdf');
Route::get('bitacora', [ClienteController::class, 'bitacora'])->name('Bitacora.pdf');

    /**Servicio */
    Route::resource('servicio', ServicioController::class);
    Route::get('seguro/create/{id}', [ServicioController::class, 'segurosCreate'])->name('seguro.create');
    Route::post('seguro', [ServicioController::class, 'segurosStore'])->name('seguro.store');
    Route::get('seguro/{id}/edit', [ServicioController::class, 'segurosEdit'])->name('seguro.edit');
    Route::put('seguro/{id}', [ServicioController::class, 'segurosUpdate'])->name('seguro.update');
    Route::delete('seguro/{id}', [ServicioController::class, 'segurosDestroy'])->name('seguro.destroy');
    /** */
    Route::resource('cliente', ClienteController::class);
});
