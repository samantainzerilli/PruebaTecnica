import './bootstrap';
import 'fullcalendar/dist/fullcalendar.css';
import 'fullcalendar';

$(document).ready(function() {
  // Evento para abrir el modal y agregar un nuevo evento
  $('#addEventButton').click(function() {
    $('#eventModalLabel').text('Agregar Evento');
    $('#eventForm')[0].reset(); // Limpiar el formulario
    $('#eventModal').modal('show');
  });

  // Evento para enviar el formulario y guardar un nuevo evento
  $('#eventForm').submit(function(e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      url: '/events',
      type: 'POST',
      data: formData,
      success: function(response) {
        $('#eventModal').modal('hide');
        // Aquí puedes agregar la lógica para actualizar el calendario con el nuevo evento
      },
      error: function(xhr) {
        // Manejar errores de validación o cualquier otro error
      }
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      events: '/calendario'
    });
    calendar.render();
  });
});

