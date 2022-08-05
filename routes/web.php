<?php

use App\Http\Livewire\Admin\AddFlightDetails;
use App\Http\Livewire\Admin\AddMessage;
use App\Http\Livewire\Admin\FeedBackList;
use App\Http\Livewire\Admin\Graph;
use App\Http\Livewire\Admin\SeatsDetails;
use App\Http\Livewire\Admin\Stats;
use App\Http\Livewire\Admin\TicketsHistory;
use App\Http\Livewire\Admin\UsersList;
use App\Http\Livewire\BookTickets;
use App\Http\Livewire\FeedBack;
use App\Http\Livewire\History;
use App\Http\Livewire\Home;
use App\Http\Livewire\ViewTickets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\type;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // user
    
  
       
  

  
 


// admin

});
Route::middleware(['user'])->group(function(){
    Route::get('/viewhistory',History::class)->name('history');
    Route::get('/viewtickets',ViewTickets::class)->name('viewTickets');
    Route::get('/booktickets/{flight_id}',BookTickets::class)->name('booktickets');
    Route::get('/viewhistory',History::class)->name('history');
   });
   Route::middleware(['admin'])->group(function(){
    Route::get('/addflightdetails',AddFlightDetails::class)->name('addfligtdetails');
    Route::get('/feedbacklist',FeedBackList::class)->name('feedbacklist');
    Route::get('/userslist',UsersList::class)->name('userlist');
    Route::get('/ticketshistory',TicketsHistory::class)->name('ticketsall');
    Route::get('/seats',SeatsDetails::class)->name('seats');
    Route::get('/addalertmessage',AddMessage::class)->name('addalertmessage');
    Route::get('/stats',Stats::class)->name('stats');

   });



Route::get('/',Home::class)->name('home');

Route::get('/feedback',FeedBack::class)->name('feedback');