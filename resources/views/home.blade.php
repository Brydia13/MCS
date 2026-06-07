<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidencias Académicas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-gradient {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
        }
        .glass-card {
            background: rgba(30, 41, 59, 0.8);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.3s ease;
        }
        .glass-card:hover { border-color: rgba(59, 130, 246, 0.4); transform: translateY(-2px); }
        .gradient-text {
            background: linear-gradient(135deg, #60a5fa, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 antialiased min-h-screen">
    <div class="hero-gradient relative min-h-screen">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-500/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-4 py-20">
            <div class="text-center mb-16 pt-16">
                <div class="inline-block mb-6">
                    <span class="px-4 py-2 text-xs font-medium tracking-widest uppercase bg-white/5 rounded-full border border-white/10 text-blue-300">Portafolio de Evidencias</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4">Evidencias Académicas</h1>
                <p class="text-lg text-slate-400 max-w-xl mx-auto">Explora las evidencias académicas organizadas por tema y materia.</p>
            </div>

            @if ($tenants->isEmpty())
                <div class="text-center py-20">
                    <div class="text-5xl mb-4">📭</div>
                    <p class="text-slate-400">No hay evidencias publicadas aún.</p>
                </div>
            @else
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach ($tenants as $tenant)
                        <a href="/e/{{ $tenant->slug }}" class="glass-card rounded-2xl p-6 block group">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-3xl">📄</span>
                                <span class="text-xs text-slate-500">{{ $tenant->date ? $tenant->date->format('d/m/Y') : '' }}</span>
                            </div>
                            <h3 class="text-white font-semibold text-lg group-hover:text-blue-300 transition-colors">{{ $tenant->name }}</h3>
                            @if ($tenant->subject)
                                <p class="text-sm text-slate-400 mt-1">{{ $tenant->subject }}</p>
                            @endif
                            <div class="flex items-center gap-3 mt-4 text-xs text-slate-500">
                                @if ($tenant->student)
                                    <span>{{ $tenant->student }}</span>
                                @endif
                                @if ($tenant->professor)
                                    <span>· {{ $tenant->professor }}</span>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif

            <div class="text-center mt-16">
                <a href="/admin/tenants" class="text-sm text-slate-500 hover:text-slate-300 transition-colors">Administrar evidencias ?</a>
            </div>
        </div>
    </div>
</body>
</html>
