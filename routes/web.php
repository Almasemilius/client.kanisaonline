<?php

use App\Livewire\AddTicket;
use App\Livewire\BookingList;
use App\Livewire\CompleteUserProfile;
use App\Livewire\OrganizerList;
use App\Livewire\Pages\AddEvent;
use App\Livewire\Pages\AddPartner;
use App\Livewire\Pages\AddPublication;
use App\Livewire\Pages\BookingPage;
use App\Livewire\Pages\CategoryManagement;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\EventCategory;
use App\Livewire\Pages\EventList;
use App\Livewire\Pages\EventManagement;
use App\Livewire\Pages\EventShow;
use App\Livewire\Pages\EventTypeList;
use App\Livewire\Pages\EventTypes;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\Organizers;
use App\Livewire\Pages\TicketManagement;
use App\Livewire\Pages\PartnerManagement;
use App\Livewire\Profile\UploadProfilePicture;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/','/login');
Route::get('event-list/{categoryId}/{searchQuery?}', EventList::class)->name('event.list');
Route::get('booking-show/{event}', BookingPage::class)->name('booking.show');
Route::get('event-show/{event}', EventShow::class)->name('event.show');

// Route::view('dashboard', 'dashboard')category
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');

    Route::get('complete-user-profile', CompleteUserProfile::class)->name('complete.user.profile');
    Route::get('upload-profile-image', UploadProfilePicture::class)->name('upload.profile.image');


    Route::get('events-management', EventManagement::class)->name('events.management');
    Route::get('add-publication/{event?}', AddPublication::class)->name('add.publication');
    Route::get('event-types/{eventType?}', EventTypes::class)->name('event.types');
    Route::get('event-type-list', EventTypeList::class)->name('event.type.list');
    Route::get('event-categories', EventCategory::class)->name('event.categories');
    Route::get('categories-management', CategoryManagement::class)->name('categories.management');

    Route::get('ticket-management/{event}', TicketManagement::class)->name('ticket.management');
    Route::get('add-ticket/{event}/{ticket?}', AddTicket::class)->name('add.ticket');


    Route::get('organizers/{organizer?}', Organizers::class)->name('organizers');
    Route::get('organizer-list', OrganizerList::class)->name('organizer.list');

    Route::get('partner-management', PartnerManagement::class)->name('partner.management');
    Route::get('add-partner/{sponsor?}', AddPartner::class)->name('add.partner');
    

    Route::get('booking-list', BookingList::class)->name('booking.list');
    // Route::get('add-partner/{sponsor?}', function(){
    //     dd('jj');
    // })->name('add.partner');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
