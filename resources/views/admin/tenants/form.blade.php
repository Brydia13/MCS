<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tenant ? 'Editar' : 'Crear' }} Evidencia</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', sans-serif; }
        .glass-card {
            background: rgba(30, 41, 59, 0.8);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 antialiased">
    <div class="max-w-4xl mx-auto px-4 py-12">
        <h1 class="text-3xl font-bold text-white mb-2">{{ $tenant ? 'Editar' : 'Nueva' }} Evidencia</h1>
        <p class="text-slate-400 mb-10">Completa los campos para {{ $tenant ? 'actualizar la' : 'crear una nueva' }} evidencia académica.</p>

        <form action="{{ $tenant ? route('admin.tenants.update', $tenant) : route('admin.tenants.store') }}" method="POST" class="space-y-6">
            @csrf
            @if ($tenant) @method('PUT') @endif

            <div class="glass-card rounded-xl p-6 space-y-5">
                <h2 class="text-lg font-semibold text-white">Información General</h2>

                <div class="grid sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-1.5">Nombre del tema *</label>
                        <input type="text" name="name" value="{{ old('name', $tenant->name ?? '') }}" required
                               class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all"
                               placeholder="Ej: Toma de Decisiones MCS">
                        @error('name') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-1.5">Slug (URL) *</label>
                        <input type="text" name="slug" value="{{ old('slug', $tenant->slug ?? '') }}" required
                               class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all"
                               placeholder="Ej: toma-decisiones-mcs">
                        @error('slug') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid sm:grid-cols-3 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-1.5">Materia</label>
                        <input type="text" name="subject" value="{{ old('subject', $tenant->subject ?? '') }}"
                               class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all"
                               placeholder="TUTORÍA IX">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-1.5">Profesor</label>
                        <input type="text" name="professor" value="{{ old('professor', $tenant->professor ?? '') }}"
                               class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-1.5">Estudiante</label>
                        <input type="text" name="student" value="{{ old('student', $tenant->student ?? '') }}"
                               class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Fecha</label>
                    <input type="date" name="date" value="{{ old('date', $tenant->date ?? '') }}"
                           class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all">
                </div>
            </div>

            <div class="glass-card rounded-xl p-6 space-y-5">
                <h2 class="text-lg font-semibold text-white">Contenido</h2>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Introducción / Resumen</label>
                    <textarea name="introduccion" rows="6"
                              class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all">{{ old('introduccion', $tenant->introduccion ?? '') }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Evidencia Libre (HTML permitido)</label>
                    <textarea name="evidencia" rows="12"
                              class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all font-mono">{{ old('evidencia', $tenant->evidencia ?? '') }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Conclusiones</label>
                    <textarea name="conclusiones" rows="6"
                              class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all">{{ old('conclusiones', $tenant->conclusiones ?? '') }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Referencias</label>
                    <textarea name="referencias" rows="6"
                              class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all">{{ old('referencias', $tenant->referencias ?? '') }}</textarea>
                </div>
            </div>

            <div class="glass-card rounded-xl p-6 flex items-center justify-between">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="hidden" name="published" value="0">
                    <input type="checkbox" name="published" value="1" {{ old('published', $tenant->published ?? false) ? 'checked' : '' }}
                           class="w-4 h-4 rounded bg-slate-800 border-slate-600 text-blue-600 focus:ring-blue-500">
                    <span class="text-sm text-slate-300">Publicar esta evidencia</span>
                </label>
                <div class="flex gap-3">
                    <a href="{{ route('admin.tenants.index') }}" class="px-5 py-2.5 text-sm text-slate-300 hover:text-white bg-white/5 hover:bg-white/10 rounded-xl transition-all">Cancelar</a>
                    <button type="submit" class="px-5 py-2.5 text-sm text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 rounded-xl transition-all font-medium">
                        {{ $tenant ? 'Actualizar' : 'Crear' }} Evidencia
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
