<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\AdminTenantController;

// Landing page - list all published tenants
Route::get('/', [TenantController::class, 'index']);

// Tenant public page
Route::get('/e/{tenant}', [TenantController::class, 'show']);

// Admin routes for managing tenants
Route::prefix('admin')->group(function () {
    Route::get('tenants', [AdminTenantController::class, 'index'])->name('admin.tenants.index');
    Route::get('tenants/create', [AdminTenantController::class, 'create'])->name('admin.tenants.create');
    Route::post('tenants', [AdminTenantController::class, 'store'])->name('admin.tenants.store');
    Route::get('tenants/{tenant}/edit', [AdminTenantController::class, 'edit'])->name('admin.tenants.edit');
    Route::put('tenants/{tenant}', [AdminTenantController::class, 'update'])->name('admin.tenants.update');
    Route::delete('tenants/{tenant}', [AdminTenantController::class, 'destroy'])->name('admin.tenants.destroy');
});
