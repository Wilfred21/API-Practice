use App\Http\Controllers\ApiController;

Route::get('/GetUsers', [ApiController::class, 'index']);