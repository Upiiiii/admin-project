<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;

Route::get('/', function () {
    return view('admin.main');
});

Route::get('/campaign', [CampaignController::class, 'index'])->name('campaign.index');
