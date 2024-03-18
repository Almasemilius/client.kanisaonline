<?php

use App\Livewire\AddMember;
use App\Livewire\AddReport;
use App\Livewire\AddService;
use App\Livewire\AddTicket;
use App\Livewire\BookingList;
use App\Livewire\CompleteUserProfile;
use App\Livewire\EventsList;
use App\Livewire\ListServices;
use App\Livewire\ListUsers;
use App\Livewire\MemberList;
use App\Livewire\MemberReport;
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
use App\Livewire\Pages\PublicationManagement;
use App\Livewire\Pages\Settingpage;
use App\Livewire\Pages\ViewPublication;
use App\Livewire\Profile\UploadProfilePicture;
use App\Livewire\ViewEvent;
use App\Livewire\ViewService;
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
// Route::get('event-list/{categoryId}/{searchQuery?}', EventList::class)->name('event.list');
// Route::get('booking-show/{event}', BookingPage::class)->name('booking.show');
// Route::get('event-show/{event}', EventShow::class)->name('event.show');

// Route::view('dashboard', 'dashboard')category
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');

    Route::get('complete-user-profile', CompleteUserProfile::class)->name('complete.user.profile');
    Route::get('upload-profile-image', UploadProfilePicture::class)->name('upload.profile.image');


    Route::get('publication-management', PublicationManagement::class)->name('publication.management');
    Route::get('add-publication/{publication?}', AddPublication::class)->name('add.publication');
    Route::get('show-publication/{publication}', ViewPublication::class)->name('show.publication');


    Route::get('setting', Settingpage::class)->name('setting');

    Route::get('add-event/{event?}', AddEvent::class)->name('add.event');
    Route::get('events-list', EventsList::class)->name('events.list');
    Route::get('view-event/{churchEvent}', ViewEvent::class)->name('view.event');

    Route::get('add-service/{service?}', AddService::class)->name('add.service');
    Route::get('list-service', ListServices::class)->name('list.service');
    Route::get('view-service/{churchService}', ViewService::class)->name('view.service');

    Route::get('add-report', AddReport::class)->name('add.report');

    Route::get('add-member', AddMember::class)->name('add.member');

    Route::get('list-user', ListUsers::class)->name('list.users');
    Route::get('list-members', MemberList::class)->name('list.members');

    Route::get('member-report', MemberReport::class)->name('member.report');

    // Route::get('event-types/{eventType?}', EventTypes::class)->name('event.types');
    // Route::get('event-type-list', EventTypeList::class)->name('event.type.list');
    // Route::get('event-categories', EventCategory::class)->name('event.categories');
    // Route::get('categories-management', CategoryManagement::class)->name('categories.management');

    // Route::get('ticket-management/{event}', TicketManagement::class)->name('ticket.management');
    // Route::get('add-ticket/{event}/{ticket?}', AddTicket::class)->name('add.ticket');


    // Route::get('organizers/{organizer?}', Organizers::class)->name('organizers');
    // Route::get('organizer-list', OrganizerList::class)->name('organizer.list');

    // Route::get('partner-management', PartnerManagement::class)->name('partner.management');
    // Route::get('add-partner/{sponsor?}', AddPartner::class)->name('add.partner');
    

    // Route::get('booking-list', BookingList::class)->name('booking.list');
    // Route::get('add-partner/{sponsor?}', function(){
    //     dd('jj');
    // })->name('add.partner');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
