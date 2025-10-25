// js/ejercicio3.js
let tareas = [];

function agregarTarea() {
    const input = document.getElementById('tareaInput');
    const texto = input.value.trim();
    
    if (texto === '') {
        alert('Por favor, escribe una tarea');
        return;
    }
    
    const tarea = {
        id: Date.now(),
        texto: texto,
        completada: false
    };
    
    tareas.push(tarea);
    input.value = '';
    renderizarTareas();
    actualizarContador();
}

function renderizarTareas() {
    const lista = document.getElementById('listaTareas');
    lista.innerHTML = '';
    
    tareas.forEach(tarea => {
        const li = document.createElement('li');
        li.className = `tarea-item ${tarea.completada ? 'completada' : ''}`;
        
        li.innerHTML = `
            <span class="tarea-texto" onclick="toggleCompletada(${tarea.id})">
                ${tarea.completada ? '✅' : '⭕'} ${tarea.texto}
            </span>
            <div class="tarea-acciones">
                <button class="btn-completar" onclick="toggleCompletada(${tarea.id})">
                    ${tarea.completada ? '↶' : '✓'}
                </button>
                <button class="btn-eliminar" onclick="eliminarTarea(${tarea.id})">
                    🗑
                </button>
            </div>
        `;
        
        lista.appendChild(li);
    });
}

function toggleCompletada(id) {
    tareas = tareas.map(tarea => 
        tarea.id === id ? {...tarea, completada: !tarea.completada} : tarea
    );
    renderizarTareas();
    actualizarContador();
}

function eliminarTarea(id) {
    const tareaElement = document.querySelector(`[onclick="eliminarTarea(${id})"]`).closest('.tarea-item');
    tareaElement.classList.add('eliminando');
    
    setTimeout(() => {
        tareas = tareas.filter(tarea => tarea.id !== id);
        renderizarTareas();
        actualizarContador();
    }, 300);
}

function actualizarContador() {
    const contador = document.getElementById('contador');
    const pendientes = tareas.filter(t => !t.completada).length;
    contador.textContent = `Tareas pendientes: ${pendientes}`;
    
    // Cambiar color según cantidad de tareas pendientes
    if (pendientes === 0) {
        contador.style.background = 'rgba(46, 204, 113, 0.3)';
    } else if (pendientes > 3) {
        contador.style.background = 'rgba(231, 76, 60, 0.3)';
    } else {
        contador.style.background = 'rgba(255, 255, 255, 0.2)';
    }
}

// Agregar tarea con Enter
document.getElementById('tareaInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        agregarTarea();
    }
});