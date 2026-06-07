<?php

namespace App\Http\Controllers;

use App\Models\Tenant;

class TenantController extends Controller
{
    public function index()
    {
        $tenants = Tenant::where('published', true)->get();
        return view('home', compact('tenants'));
    }

    public function show(Tenant $tenant)
    {
        if (!$tenant->published) {
            abort(404);
        }

        $palettes = [
            'toma-decisiones-mcs' => [
                'primary' => '#3b82f6',
                'accent' => '#8b5cf6',
                'primary_rgb' => '59,130,246',
                'accent_rgb' => '139,92,246',
                'label' => 'text-blue-400',
                'gradient' => 'from-blue-600 to-purple-600',
            ],
            'admin-proyectos-software-cap1' => [
                'primary' => '#059669',
                'accent' => '#0d9488',
                'primary_rgb' => '5,150,105',
                'accent_rgb' => '13,148,136',
                'label' => 'text-emerald-400',
                'gradient' => 'from-emerald-600 to-teal-600',
            ],
        ];

        $palette = $palettes[$tenant->slug] ?? $palettes['toma-decisiones-mcs'];

        return view('evidencia', compact('tenant', 'palette'));
    }
}
