<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Evidencias</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 antialiased">
    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="flex items-center justify-between mb-10">
            <div>
                <h1 class="text-3xl font-bold text-white">Evidencias</h1>
                <p class="text-slate-400 mt-1">Gestiona las evidencias académicas</p>
            </div>
            <a href="{{ route('admin.tenants.create') }}" class="px-5 py-2.5 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium rounded-xl hover:from-blue-500 hover:to-purple-500 transition-all text-sm">
                + Nueva Evidencia
            </a>
        </div>

        @if (session('success'))
            <div class="mb-6 px-5 py-3 bg-emerald-500/10 border border-emerald-500/30 rounded-xl text-emerald-300 text-sm">
                {{ session('success') }}
            </div>
        @endif

        @if ($tenants->isEmpty())
            <div class="text-center py-20">
                <div class="text-5xl mb-4">📋</div>
                <p class="text-slate-400">No hay evidencias registradas.</p>
                <a href="{{ route('admin.tenants.create') }}" class="inline-block mt-4 text-blue-400 hover:text-blue-300">Crear la primera</a>
            </div>
        @else
            <div class="space-y-3">
                @foreach ($tenants as $tenant)
                    <div class="glass-card rounded-xl p-5 flex items-center justify-between">
                        <div>
                            <div class="flex items-center gap-3">
                                <h3 class="text-white font-semibold">{{ $tenant->name }}</h3>
                                @if ($tenant->published)
                                    <span class="px-2 py-0.5 text-xs bg-emerald-500/20 text-emerald-300 rounded-full">Publicado</span>
                                @else
                                    <span class="px-2 py-0.5 text-xs bg-slate-500/20 text-slate-400 rounded-full">Borrador</span>
                                @endif
                            </div>
                            <p class="text-sm text-slate-400 mt-1">
                                Slug: <code class="text-blue-300">/e/{{ $tenant->slug }}</code>
                                @if ($tenant->subject)
                                    · {{ $tenant->subject }}
                                @endif
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="/e/{{ $tenant->slug }}" target="_blank" class="px-3 py-1.5 text-xs text-slate-300 hover:text-white hover:bg-white/10 rounded-lg transition-all">Ver</a>
                            <a href="{{ route('admin.tenants.edit', $tenant) }}" class="px-3 py-1.5 text-xs text-blue-300 hover:text-blue-200 hover:bg-blue-500/10 rounded-lg transition-all">Editar</a>
                            <form action="{{ route('admin.tenants.destroy', $tenant) }}" method="POST" onsubmit="return confirm('¿Eliminar esta evidencia?')">
                                @csrf @method('DELETE')
                                <button class="px-3 py-1.5 text-xs text-red-300 hover:text-red-200 hover:bg-red-500/10 rounded-lg transition-all">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="mt-10 pt-6 border-t border-white/5 text-center">
            <a href="/" class="text-sm text-slate-500 hover:text-slate-300 transition-colors">? Volver al inicio</a>
        </div>
    </div>

    <style>
        .glass-card {
            background: rgba(30, 41, 59, 0.8);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.3s ease;
        }
        .glass-card:hover {
            border-color: rgba(59, 130, 246, 0.4);
        }
    </style>
</body>
</html>
