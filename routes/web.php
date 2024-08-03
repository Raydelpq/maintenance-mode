<?php

use Illuminate\Support\Facades\Route;
use Raydelpq\MaintenanceMode\Http\Controllers\MaintenanceController;

Route::get('maintenance/enable', [MaintenanceController::class, 'enable']);
Route::get('maintenance/disable', [MaintenanceController::class, 'disable']);
