<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class AdminTenantController extends Controller
{
    public function index()
    {
        $tenants = Tenant::latest()->get();
        return view('admin.tenants.index', compact('tenants'));
    }

    public function create()
    {
        return view('admin.tenants.form', ['tenant' => null]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'slug' => 'required|alpha_dash|unique:tenants,slug',
            'name' => 'required|string|max:255',
            'subject' => 'nullable|string|max:255',
            'professor' => 'nullable|string|max:255',
            'student' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'introduccion' => 'nullable|string',
            'evidencia' => 'nullable|string',
            'conclusiones' => 'nullable|string',
            'referencias' => 'nullable|string',
            'published' => 'boolean',
        ]);

        Tenant::create($data);

        return redirect()->route('admin.tenants.index')
            ->with('success', 'Evidencia creada correctamente.');
    }

    public function edit(Tenant $tenant)
    {
        return view('admin.tenants.form', compact('tenant'));
    }

    public function update(Request $request, Tenant $tenant)
    {
        $data = $request->validate([
            'slug' => 'required|alpha_dash|unique:tenants,slug,' . $tenant->id,
            'name' => 'required|string|max:255',
            'subject' => 'nullable|string|max:255',
            'professor' => 'nullable|string|max:255',
            'student' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'introduccion' => 'nullable|string',
            'evidencia' => 'nullable|string',
            'conclusiones' => 'nullable|string',
            'referencias' => 'nullable|string',
            'published' => 'boolean',
        ]);

        $tenant->update($data);

        return redirect()->route('admin.tenants.index')
            ->with('success', 'Evidencia actualizada correctamente.');
    }

    public function destroy(Tenant $tenant)
    {
        $tenant->delete();

        return redirect()->route('admin.tenants.index')
            ->with('success', 'Evidencia eliminada.');
    }
}
