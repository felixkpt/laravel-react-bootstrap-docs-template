<?php

use App\Http\Controllers\Admin\Settings\RolePermissions\Permissions\RoutesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RoutesController::class, 'index'])->isHidden();