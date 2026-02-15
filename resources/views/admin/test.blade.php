<<<<<<< HEAD
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Auth\TeamsLoginController;


/*
|--------------------------------------------------------------------------
| URL
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('login');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/hardware', function () {
        return view('admin.hardware');
    });
    Route::get('/network', function () {
        return view('admin.network');
    });

    Route::get('/viewAccounts', function () {
        return view('admin.viewAccounts');
    });
    Route::get('/laptop', function () {
    return view('admin.laptop');
    });
    Route::get('/desktop', function () {
        return view('admin.desktop');
    });
    Route::get('/desktopPeripheral', function () {
        return view('admin.desktopPeripherals');
    });
    Route::get('/roles', function () {
        return view('admin.roles');
    });

    Route::get('/software', function () {
        return view('admin.software');
    });

    Route::get('printer', function () {
    return view('admin.printer');
    });

    Route::get('/toner', function () {
        return view('admin.toners');
    });
    Route::get('/ink', function () {
        return view('admin.ink');
    });
       Route::get('/ComputerEquipment', function () {
    return view('admin.desktopPeripheral');
    });
    Route::get('/overall', function () {
        return view('admin.overall');
    });
    Route::get('/telephone', function () {
        return view('admin.telephone');
    });
});


Route::prefix('maintenance')->group(function () {
    Route::get('m_laptop', function () {
        return view('maintenance.m_laptop');
    });
    Route::get('m_desktop', function () {
        return view('maintenance.m_desktop');
    });
    Route::get('m_printer', function () {
        return view('maintenance.m_printer');
    });
});

Route::prefix('transfer')->group(function () {
    Route::get('computer_peripheral', function () {
        return view('transfer.computer_peripheral');
    });

});
Route::prefix('endorsements')->group(function () {
    Route::get('printer', function () {
        return view('endorsements.endorsementprinter');
    });
    Route::get('ink', function () {
        return view('maintenance.m_desktop');
    });
    Route::get('toner', function () {
        return view('endorsements.endorsementtoners');
    });
});
/*
|--------------------------------------------------------------------------
| Posts
|--------------------------------------------------------------------------
*/

Route::post('/users/store', [RegisteredUserController::class, 'store'])->name('users.store');


/*
|--------------------------------------------------------------------------
| Microsoft Login Routes
|--------------------------------------------------------------------------
*/

Route::get('/login/microsoft', [TeamsLoginController::class, 'microsoft'])->name('azure.login');
Route::get('/login/microsoft/callback', [TeamsLoginController::class, 'microsoftRedirect'])->name('azure.callback');





/* Nigga
Route::get('/login/microsoft', [TeamsLoginController::class, 'microsoft'])->name('microsoft.login');
Route::get('/login/microsoft/callback', [TeamsLoginController::class, 'microsoftRedirect'])->name('microsoft.callback');
Route::get('/login/microsoft/callback', function () {
     return view('admin.dashboard');
    });
*/




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
=======
hahahahahahahahahahahahah
>>>>>>> db8f4d44e4422a84cb1f281a5d94d731077bed4c
