use App\Models\crud;
use App\Http\Controllers\crudcontroller;
use Illuminate\Support\Facades\Route;

// Route to display the index page
Route::get('index', [crudcontroller::class, 'index']);

// Route to store new data (create)
Route::post('store', [crudcontroller::class, 'store']);

// Route to show all users or data
Route::get('show', [crudcontroller::class, 'show']);

// Route to show the form for editing a user by ID
Route::get('crud/{id}/edit', [crudcontroller::class, 'edit'])->name('crud.edit');

// Route to update the user data
Route::put('crud/{id}', [crudcontroller::class, 'update'])->name('crud.update');
