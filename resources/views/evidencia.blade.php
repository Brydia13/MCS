<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tenant->name }} - Evidencia Académica</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --primary: {{ $palette['primary'] }};
            --accent: {{ $palette['accent'] }};
            --primary-rgb: {{ $palette['primary_rgb'] }};
            --accent-rgb: {{ $palette['accent_rgb'] }};
        }
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; }
        .hero-gradient { background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%); }
        .hero-gradient::before {
            content: ""; position: absolute; inset: 0;
            background: radial-gradient(circle at 20% 50%, rgba(var(--primary-rgb), 0.15) 0%, transparent 50%),
                        radial-gradient(circle at 80% 50%, rgba(var(--accent-rgb), 0.15) 0%, transparent 50%);
            pointer-events: none;
        }
        .glass { background: rgba(255,255,255,0.05); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1); }
        .glass-card { background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); transition: all 0.3s ease; }
        .glass-card:hover { border-color: rgba(var(--primary-rgb), 0.4); transform: translateY(-2px); }
        .section-divider { background: linear-gradient(90deg, transparent, rgba(var(--primary-rgb), 0.5), transparent); height: 1px; }
        .gradient-text { background: linear-gradient(135deg, var(--primary), var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .fade-in-section { opacity: 0; transform: translateY(30px); transition: opacity 0.6s ease-out, transform 0.6s ease-out; }
        .fade-in-section.is-visible { opacity: 1; transform: translateY(0); }
        .floating { animation: float 6s ease-in-out infinite; }
        @keyframes float { 0%,100% { transform: translateY(0px); } 50% { transform: translateY(-20px); } }
        .evidencia-content h2 { font-size: 1.5rem; font-weight: 700; color: #fff; margin-top: 2rem; margin-bottom: 1rem; }
        .evidencia-content h3 { font-size: 1.25rem; font-weight: 600; color: #e2e8f0; margin-top: 1.5rem; margin-bottom: 0.75rem; }
        .evidencia-content p { color: #94a3b8; line-height: 1.75; margin-bottom: 1rem; }
        .evidencia-content ul, .evidencia-content ol { color: #94a3b8; padding-left: 1.5rem; margin-bottom: 1rem; }
        .evidencia-content li { margin-bottom: 0.5rem; }
        .evidencia-content strong { color: #f1f5f9; }
        .evidencia-content em { color: var(--primary); }
        .evidencia-content blockquote { border-left: 3px solid var(--primary); padding-left: 1rem; margin: 1rem 0; color: #cbd5e1; font-style: italic; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 antialiased">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 glass">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="/" class="text-sm font-semibold tracking-tight text-white/90">Evidencias</a>
                <div class="hidden md:flex space-x-1">
                    <a href="#portada" class="px-3 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-white/10 rounded-lg transition-all">Portada</a>
                    <a href="#introduccion" class="px-3 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-white/10 rounded-lg transition-all">Introducción</a>
                    <a href="#evidencia" class="px-3 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-white/10 rounded-lg transition-all">Evidencia</a>
                    <a href="#conclusiones" class="px-3 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-white/10 rounded-lg transition-all">Conclusiones</a>

                </div>
            </div>
        </div>
    </nav>

    <!-- PORTADA -->
    <section id="portada" class="hero-gradient relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 rounded-full blur-3xl" style="background: rgba(var(--primary-rgb), 0.1);"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 rounded-full blur-3xl" style="background: rgba(var(--accent-rgb), 0.1);"></div>
        </div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <div class="inline-block mb-6">
                <span class="px-4 py-2 text-xs font-medium tracking-widest uppercase bg-white/5 rounded-full border border-white/10 {{ $palette['label'] }}">
                    {{ $tenant->subject ?? 'Evidencia Académica' }}
                </span>
            </div>
            <h1 class="text-4xl md:text-7xl lg:text-8xl font-extrabold tracking-tight mb-6 leading-tight">
                {{ $tenant->name }}
            </h1>
            <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto mb-12 leading-relaxed">
                Evidencia académica presentada como página web interactiva.
            </p>
            <a href="#introduccion" class="inline-flex items-center gap-2 px-8 py-3 text-white font-semibold rounded-xl transition-all shadow-lg" style="background: linear-gradient(135deg, var(--primary), var(--accent)); box-shadow: 0 10px 15px -3px rgba(var(--primary-rgb), 0.25);">
                Explorar evidencia
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            </a>
            <div class="mt-16 flex flex-wrap justify-center gap-4 text-sm text-slate-400">
                @if ($tenant->student)
                    <div class="glass-card rounded-xl px-5 py-3">{{ $tenant->student }}</div>
                @endif
                @if ($tenant->professor)
                    <div class="glass-card rounded-xl px-5 py-3">{{ $tenant->professor }}</div>
                @endif
                @if ($tenant->date)
                    <div class="glass-card rounded-xl px-5 py-3">{{ $tenant->date->format('d/m/Y') }}</div>
                @endif
            </div>
        </div>
    </section>

    <!-- INTRODUCCIÓN -->
    <section id="introduccion" class="py-24 md:py-32 px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-xs font-semibold tracking-widest uppercase {{ $palette['label'] }}">Resumen</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-3">Introducción</h2>
                <div class="section-divider w-24 mx-auto mt-4"></div>
            </div>
            <div class="prose prose-invert max-w-none evidencia-content">
                {!! nl2br(e($tenant->introduccion)) !!}
            </div>
        </div>
    </section>

    <!-- EVIDENCIA LIBRE -->
    <section id="evidencia" class="py-24 md:py-32 px-4 bg-slate-900/50">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-xs font-semibold tracking-widest uppercase" style="color: var(--accent);">Evidencia Libre</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-3">Desarrollo del Contenido</h2>
                <div class="section-divider w-24 mx-auto mt-4"></div>
            </div>
            <div class="evidencia-content">
                {!! $tenant->evidencia !!}
            </div>
        </div>
    </section>

    <!-- CONCLUSIONES -->
    <section id="conclusiones" class="py-24 md:py-32 px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-xs font-semibold tracking-widest uppercase text-amber-400">Reflexión Final</span>
                <h2 class="text-3xl md:text-5xl font-bold mt-3">Conclusiones</h2>
                <div class="section-divider w-24 mx-auto mt-4"></div>
            </div>
            <div class="evidencia-content">
                {!! nl2br(e($tenant->conclusiones)) !!}
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="py-8 px-4 border-t border-white/5">
        <div class="max-w-4xl mx-auto text-center text-sm text-slate-500">
            <p>{{ $tenant->name }} &mdash; {{ $tenant->subject ?? 'Evidencia Académica' }}</p>
            <p class="mt-1">
                @if ($tenant->student) {{ $tenant->student }} · @endif
                @if ($tenant->professor) {{ $tenant->professor }} · @endif
                {{ $tenant->date ? $tenant->date->format('d/m/Y') : '' }}
            </p>
        </div>
    </footer>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('is-visible');
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.glass-card').forEach(el => {
            el.classList.add('fade-in-section'); observer.observe(el);
        });
    </script>
</body>
</html>
