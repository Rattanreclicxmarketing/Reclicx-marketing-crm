<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',
    [DashboardController::class,'index'])
    ->middleware(['auth','verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');

Route::get('/leads/create', [LeadController::class, 'create'])->name('leads.create');

Route::post('/leads/store', [LeadController::class, 'store'])->name('leads.store');

Route::post('/leads/assign-tl/{id}', [LeadController::class, 'assignTL'])
    ->name('leads.assignTL');

Route::post('/leads/assign-agent/{id}', [LeadController::class, 'assignAgent'])
    ->name('leads.assignAgent');

Route::get('/leads/{id}', [LeadController::class, 'show'])
    ->name('leads.show');

Route::post('/leads/remark/{id}', [LeadController::class, 'addRemark'])
    ->name('leads.addRemark');

Route::post('/leads/update-status/{id}',
    [LeadController::class, 'updateStatus'])
    ->name('leads.updateStatus');

Route::get('/teamleader', function () {

    return 'Team Leader Dashboard';

})->middleware(['auth','role:team_leader']);

Route::get('/agent', function () {

    $leads = \App\Models\Lead::where('agent_id',auth()->id())
    ->where('status','assigned_to_agent')

    ->when(request('search'), function($query){

        $query->where('customer_name','like','%'.request('search').'%')
            ->orWhere('phone','like','%'.request('search').'%');

    })

    

    ->when(request('status'), function($query){

        $query->where('status', request('status'));

    })

    ->when(request('date'), function($query){

        $query->whereDate('created_at', request('date'));

    })

    ->latest()

    ->get();

    $totalLeads = \App\Models\Lead::where('agent_id',auth()->id())->count();

    $interested = \App\Models\Lead::where('agent_id',auth()->id())
        ->where('status','interested')
        ->count();

    $verified = \App\Models\Lead::where('agent_id',auth()->id())
        ->where('status','verified')
        ->count();

    $delivered = \App\Models\Lead::where('agent_id',auth()->id())
        ->where('status','delivered')
        ->count();
    $revenue = \App\Models\Lead::where('agent_id',auth()->id())
    ->where('status','delivered')
    ->sum('amount');

$hold = \App\Models\Lead::where('agent_id',auth()->id())
    ->where('status','hold')
    ->count();

$cancelled = \App\Models\Lead::where('agent_id',auth()->id())
    ->where('status','cancelled')
    ->count();

$rto = \App\Models\Lead::where('agent_id',auth()->id())
    ->where('status','rto')
    ->count();

$dispatch = \App\Models\Lead::where('agent_id',auth()->id())
    ->where('status','dispatch')
    ->count();

    return view('agent', compact(
        'leads',
        'totalLeads',
        'interested',
        'verified',
        'delivered',
'revenue',
'hold',
'cancelled',
'rto',
'dispatch'

    ));

})->middleware(['auth','role:agent']);

Route::get('/agent/leads', function () {

    $leads = \App\Models\Lead::where('agent_id',auth()->id())

        ->whereIn('status',[
            'order_placed',
            'ringing',
            'call_back'
        ])

        ->latest()

        ->get();

    return view('agent-leads', compact('leads'));

})->middleware(['auth','role:agent']);

Route::get('/agent/verification', function () {

    $leads = \App\Models\Lead::where('agent_id',auth()->id())

        ->where('status','verified')

        ->latest()

        ->get();

    return view('agent-verification', compact('leads'));

})->middleware(['auth','role:agent']);



Route::get('/agent/dispatch', function () {

    $leads = \App\Models\Lead::where('agent_id',auth()->id())

        ->whereIn('status',[
            'dispatch',
            'delivered'
        ])

        ->latest()

        ->get();

    return view('agent-dispatch', compact('leads'));

})->middleware(['auth','role:agent']);



Route::get('/agent/hold', function () {

    $leads = \App\Models\Lead::where('agent_id',auth()->id())

        ->whereIn('status',[
            'hold',
            'cancelled'
        ])

        ->latest()

        ->get();

    return view('agent-hold', compact('leads'));

})->middleware(['auth','role:agent']);



Route::get('/agent/ndr', function () {

    $leads = \App\Models\Lead::where('agent_id',auth()->id())

        ->where('status','rto')

        ->latest()

        ->get();

    return view('agent-ndr', compact('leads'));

})->middleware(['auth','role:agent']);

Route::get('/verification',
    [LeadController::class,'verification'])
    ->middleware(['auth'])
    ->name('verification');

Route::get('/dispatch', function () {

    $leads = \App\Models\Lead::where('status','dispatch')
        ->latest()
        ->get();

    return view('dispatch', compact('leads'));

})->name('dispatch');

Route::get('/ndr', function () {

    $leads = \App\Models\Lead::where('status','rto')
        ->latest()
        ->get();

    return view('ndr', compact('leads'));

})->name('ndr');

Route::get('/admin', [AdminController::class,'dashboard'])
    ->middleware(['auth','role:admin']);

Route::get('/export-leads', [AdminController::class, 'export']);

Route::get('/leads/edit/{id}',
    [LeadController::class,'edit'])
    ->name('leads.edit');

Route::post('/leads/update/{id}',
    [LeadController::class,'update'])
    ->name('leads.update');

    Route::get('/leads/delete/{id}',
    [LeadController::class,'delete'])
    ->name('leads.delete');

    Route::get('/users',
    [UserController::class,'index'])
    ->name('users.index');

Route::get('/users/create',
    [UserController::class,'create'])
    ->name('users.create');

Route::post('/users/store',
    [UserController::class,'store'])
    ->name('users.store');

Route::get('/users/edit/{id}',
    [UserController::class,'edit'])
    ->name('users.edit');

Route::post('/users/update/{id}',
    [UserController::class,'update'])
    ->name('users.update');

Route::get('/users/delete/{id}',
    [UserController::class,'delete'])
    ->name('users.delete');

Route::get('/landing', function () {

    return view('landing');

});

Route::post('/landing-lead',
    [LeadController::class,'landingLead']);

require __DIR__.'/auth.php';
