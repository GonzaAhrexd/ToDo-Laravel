import './bootstrap';

function setEdit(id, title, description) {
    console.log(`Editando tarea con ID: ${id}, Título: ${title}, Descripción: ${description}`);
    
    // Mostrar el formulario de edición
    document.getElementById('edit').style.display = "block";
    
    // Rellenar el formulario con los datos actuales
    document.getElementById('edit-title').value = title;
    document.getElementById('edit-description').value = description;
    
    // Configurar el formulario para enviar la actualización
    document.getElementById('edit-form').action = `/tareas/${id}`;
}

// Asegúrate de que la función esté disponible globalmente
window.setEdit = setEdit;