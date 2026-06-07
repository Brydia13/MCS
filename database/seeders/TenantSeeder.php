<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    public function run(): void
    {
        Tenant::create([
            'slug' => 'toma-decisiones-mcs',
            'name' => 'Toma de Decisiones Basada en el Método Centrado en Soluciones',
            'subject' => 'TUTORÍA IX',
            'professor' => 'Mtro. Juan Pérez',
            'student' => 'Brayan [Apellido]',
            'date' => '2026-06-07',
            'introduccion' => 'El Método Centrado en Soluciones (MCS) es un enfoque de intervención y toma de decisiones que se originó en la psicoterapia breve y que ha sido adoptado exitosamente en el ámbito organizacional y de gestión empresarial.

A diferencia de los métodos tradicionales que se enfocan en analizar los problemas a profundidad (sus causas, historia y consecuencias), el MCS dirige la atención hacia la construcción de soluciones. En lugar de preguntar "¿cuál es el problema?", el MCS pregunta "¿qué funciona?" y "¿cómo podemos hacer más de lo que funciona?".

Este enfoque se fundamenta en la premisa de que las soluciones no están necesariamente relacionadas con los problemas, y que los individuos y organizaciones ya poseen los recursos y capacidades necesarios para resolver sus desafíos.

Conceptos Clave:
- Construir soluciones en lugar de resolver problemas
- Enfocarse en el futuro deseado más que en el pasado problemático
- Identificar y ampliar las excepciones al problema
- Utilizar preguntas orientadas a soluciones
- Valorar los pequeños cambios como catalizadores de transformaciones mayores',
            'evidencia' => '<h2>Principios Fundamentales del MCS</h2>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.25rem; margin: 1.5rem 0;">
    <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 0.75rem; padding: 1.5rem;">
        <div style="font-size: 2rem; margin-bottom: 0.75rem;">??</div>
        <h3 style="color: #fff; font-weight: 600; margin-bottom: 0.5rem;">Orientación al Futuro</h3>
        <p style="color: #94a3b8; font-size: 0.875rem;">Las decisiones se basan en la visión del futuro deseado, no en el análisis del pasado problemático.</p>
    </div>
    <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 0.75rem; padding: 1.5rem;">
        <div style="font-size: 2rem; margin-bottom: 0.75rem;">??</div>
        <h3 style="color: #fff; font-weight: 600; margin-bottom: 0.5rem;">Excepciones como Puertas</h3>
        <p style="color: #94a3b8; font-size: 0.875rem;">Identificar momentos donde el problema no ocurre revela recursos y estrategias efectivas.</p>
    </div>
    <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 0.75rem; padding: 1.5rem;">
        <div style="font-size: 2rem; margin-bottom: 0.75rem;">???</div>
        <h3 style="color: #fff; font-weight: 600; margin-bottom: 0.5rem;">Si funciona, haz más</h3>
        <p style="color: #94a3b8; font-size: 0.875rem;">Ampliar las soluciones existentes es más eficiente que crear nuevas desde cero.</p>
    </div>
    <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 0.75rem; padding: 1.5rem;">
        <div style="font-size: 2rem; margin-bottom: 0.75rem;">??</div>
        <h3 style="color: #fff; font-weight: 600; margin-bottom: 0.5rem;">Si no funciona, prueba algo diferente</h3>
        <p style="color: #94a3b8; font-size: 0.875rem;">Evitar repetir patrones ineficaces; la flexibilidad es clave para encontrar soluciones.</p>
    </div>
    <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 0.75rem; padding: 1.5rem;">
        <div style="font-size: 2rem; margin-bottom: 0.75rem;">?</div>
        <h3 style="color: #fff; font-weight: 600; margin-bottom: 0.5rem;">Pequeños cambios, grandes resultados</h3>
        <p style="color: #94a3b8; font-size: 0.875rem;">Un cambio mínimo puede generar transformaciones significativas y duraderas.</p>
    </div>
    <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 0.75rem; padding: 1.5rem;">
        <div style="font-size: 2rem; margin-bottom: 0.75rem;">??</div>
        <h3 style="color: #fff; font-weight: 600; margin-bottom: 0.5rem;">Colaboración activa</h3>
        <p style="color: #94a3b8; font-size: 0.875rem;">Las soluciones se co-construyen con los involucrados, valorando su experiencia.</p>
    </div>
</div>

<h2>Proceso de Toma de Decisiones con MCS</h2>

<div style="position: relative; padding-left: 2rem; margin: 2rem 0;">
    <div style="position: relative; margin-bottom: 2rem;">
        <div style="width: 16px; height: 16px; background: linear-gradient(135deg, #3b82f6, #8b5cf6); border-radius: 50%; position: absolute; left: -1.5rem; top: 0.25rem; box-shadow: 0 0 20px rgba(59,130,246,0.4);"></div>
        <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 0.75rem; padding: 1.5rem; margin-left: 1.5rem;">
            <span style="font-size: 0.75rem; font-weight: 600; color: #a78bfa; text-transform: uppercase;">Paso 1</span>
            <h3 style="color: #fff; font-weight: 600; margin-top: 0.25rem;">Describir el futuro deseado</h3>
            <p style="color: #94a3b8; font-size: 0.875rem; margin-top: 0.5rem;">En lugar de detallar el problema, se define cómo se vería la situación si estuviera resuelta. Se usa la "pregunta milagro": <em style="color: #93c5fd;">"Si mientras duermes ocurriera un milagro y el problema se resolviera, ¿qué notarías diferente al despertar?"</em></p>
        </div>
    </div>
    <div style="position: relative; margin-bottom: 2rem;">
        <div style="width: 16px; height: 16px; background: linear-gradient(135deg, #3b82f6, #8b5cf6); border-radius: 50%; position: absolute; left: -1.5rem; top: 0.25rem; box-shadow: 0 0 20px rgba(59,130,246,0.4);"></div>
        <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 0.75rem; padding: 1.5rem; margin-left: 1.5rem;">
            <span style="font-size: 0.75rem; font-weight: 600; color: #a78bfa; text-transform: uppercase;">Paso 2</span>
            <h3 style="color: #fff; font-weight: 600; margin-top: 0.25rem;">Identificar excepciones</h3>
            <p style="color: #94a3b8; font-size: 0.875rem; margin-top: 0.5rem;">Se buscan momentos donde el problema no está presente o es menos severo. Estas excepciones contienen las semillas de la solución.</p>
        </div>
    </div>
    <div style="position: relative; margin-bottom: 2rem;">
        <div style="width: 16px; height: 16px; background: linear-gradient(135deg, #3b82f6, #8b5cf6); border-radius: 50%; position: absolute; left: -1.5rem; top: 0.25rem; box-shadow: 0 0 20px rgba(59,130,246,0.4);"></div>
        <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 0.75rem; padding: 1.5rem; margin-left: 1.5rem;">
            <span style="font-size: 0.75rem; font-weight: 600; color: #a78bfa; text-transform: uppercase;">Paso 3</span>
            <h3 style="color: #fff; font-weight: 600; margin-top: 0.25rem;">Amplificar lo que funciona</h3>
            <p style="color: #94a3b8; font-size: 0.875rem; margin-top: 0.5rem;">Se diseñan acciones para incrementar la frecuencia, duración o intensidad de las excepciones identificadas.</p>
        </div>
    </div>
    <div style="position: relative; margin-bottom: 2rem;">
        <div style="width: 16px; height: 16px; background: linear-gradient(135deg, #3b82f6, #8b5cf6); border-radius: 50%; position: absolute; left: -1.5rem; top: 0.25rem; box-shadow: 0 0 20px rgba(59,130,246,0.4);"></div>
        <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 0.75rem; padding: 1.5rem; margin-left: 1.5rem;">
            <span style="font-size: 0.75rem; font-weight: 600; color: #a78bfa; text-transform: uppercase;">Paso 4</span>
            <h3 style="color: #fff; font-weight: 600; margin-top: 0.25rem;">Evaluar progreso con escalas</h3>
            <p style="color: #94a3b8; font-size: 0.875rem; margin-top: 0.5rem;">Usar preguntas de escala (1-10) para medir avances.</p>
        </div>
    </div>
    <div style="position: relative;">
        <div style="width: 16px; height: 16px; background: linear-gradient(135deg, #3b82f6, #8b5cf6); border-radius: 50%; position: absolute; left: -1.5rem; top: 0.25rem; box-shadow: 0 0 20px rgba(59,130,246,0.4);"></div>
        <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 0.75rem; padding: 1.5rem; margin-left: 1.5rem;">
            <span style="font-size: 0.75rem; font-weight: 600; color: #a78bfa; text-transform: uppercase;">Paso 5</span>
            <h3 style="color: #fff; font-weight: 600; margin-top: 0.25rem;">Celebrar pequeños avances</h3>
            <p style="color: #94a3b8; font-size: 0.875rem; margin-top: 0.5rem;">Reconocer y consolidar cada progreso como evidencia de que el cambio es posible.</p>
        </div>
    </div>
</div>

<h2>Ejemplo Práctico: Bajo rendimiento en ventas</h2>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin: 1.5rem 0;">
    <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(239,68,68,0.2); border-radius: 0.75rem; padding: 1.5rem;">
        <h3 style="color: #fca5a5; font-weight: 600; margin-bottom: 1rem;">? Enfoque Tradicional</h3>
        <ul style="color: #94a3b8; font-size: 0.875rem;">
            <li style="margin-bottom: 0.5rem;">Analizar por qué las ventas han caído</li>
            <li style="margin-bottom: 0.5rem;">Investigar errores del equipo</li>
            <li style="margin-bottom: 0.5rem;">Revisar historial de bajo rendimiento</li>
            <li>Identificar culpables</li>
        </ul>
    </div>
    <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(52,211,153,0.2); border-radius: 0.75rem; padding: 1.5rem;">
        <h3 style="color: #6ee7b7; font-weight: 600; margin-bottom: 1rem;">? MCS (Centrado en Soluciones)</h3>
        <ul style="color: #94a3b8; font-size: 0.875rem;">
            <li style="margin-bottom: 0.5rem;">¿Cuándo fue la última vez que las ventas fueron mejores?</li>
            <li style="margin-bottom: 0.5rem;">¿Qué hizo diferente el equipo ese día?</li>
            <li style="margin-bottom: 0.5rem;">¿Qué recursos están disponibles para repetir ese éxito?</li>
            <li>¿Qué pequeño cambio podría mejorar el rendimiento mañana?</li>
        </ul>
    </div>
</div>

<h2>Diagrama Comparativo</h2>
<div style="display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap; margin: 1.5rem 0;">
    <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 0.75rem; padding: 1.25rem; flex: 1; min-width: 200px; text-align: center;">
        <p style="color: #60a5fa; font-weight: 600; margin-bottom: 0.75rem;">Centrado en Problemas</p>
        <ul style="color: #94a3b8; font-size: 0.8rem; list-style: none; padding: 0;">
            <li style="margin-bottom: 0.25rem;">Analiza causas pasadas</li>
            <li style="margin-bottom: 0.25rem;">Busca culpables</li>
            <li style="margin-bottom: 0.25rem;">Se enfoca en déficits</li>
            <li>Puede generar parálisis</li>
        </ul>
    </div>
    <div style="display: flex; align-items: center; font-size: 1.5rem; color: #64748b; font-weight: bold;">n</div>
    <div style="background: rgba(30,41,59,0.8); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.08); border-radius: 0.75rem; padding: 1.25rem; flex: 1; min-width: 200px; text-align: center;">
        <p style="color: #a78bfa; font-weight: 600; margin-bottom: 0.75rem;">MCS</p>
        <ul style="color: #94a3b8; font-size: 0.8rem; list-style: none; padding: 0;">
            <li style="margin-bottom: 0.25rem;">Construye soluciones</li>
            <li style="margin-bottom: 0.25rem;">Identifica recursos</li>
            <li style="margin-bottom: 0.25rem;">Se enfoca en excepciones</li>
            <li>Genera acción inmediata</li>
        </ul>
    </div>
</div>',
            'conclusiones' => '?? El Método Centrado en Soluciones representa un cambio de paradigma en la toma de decisiones organizacionales: pasar de preguntar "¿qué está mal?" a "¿qué funciona y cómo podemos hacer más de eso?"

?? Las organizaciones que adoptan este enfoque desarrollan una cultura de posibilidad donde los errores se convierten en aprendizajes y los problemas en oportunidades para innovar.

? La efectividad del MCS radica en su simplicidad práctica: no requiere diagnósticos exhaustivos ni largos procesos de análisis, lo que permite a las organizaciones actuar con rapidez y confianza.

?? En un mundo cada vez más complejo y cambiante, el MCS ofrece una brújula clara: preguntarnos constantemente "¿qué queremos lograr?" y "¿qué estamos haciendo que ya funciona?" nos mantiene enfocados en la acción efectiva.

?? Como futuros profesionales, incorporar el MCS en nuestro repertorio de herramientas nos permite facilitar cambios significativos en las organizaciones, potenciando la colaboración, la creatividad y la resiliencia de los equipos.',
            'referencias' => 'de Shazer, S. (1985). Keys to Solution in Brief Therapy. W. W. Norton & Company.

Berg, I. K., & Miller, S. D. (1992). Working with the Problem Drinker: A Solution-Focused Approach. W. W. Norton & Company.

Jackson, P. Z., & McKergow, M. (2007). The Solutions Focus: Making Coaching and Change SIMPLE (2nd ed.). Nicholas Brealey Publishing.

O\'Connell, B. (2012). Solution-Focused Therapy (3rd ed.). SAGE Publications.

Cauffman, L. (2017). Solution-Focused Coaching: Managing People in a Complex World. Routledge.

Ratner, H., George, E., & Iveson, C. (2012). Solution Focused Brief Therapy: 100 Key Points and Techniques. Routledge.',
            'published' => true,
        ]);
    }
}
