// Importujemy bibliotekę bootstrap-datepicker
import 'bootstrap-datepicker';
import 'bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css';

/**
 * Reszta kodu pozostaje taka sama
 */

// Inicjalizujemy datepicker na polu input
on('DOMContentLoaded', function() {
    $('#date').datepicker({
        format: 'yyyy-mm-dd', // Format daty (np. 'yyyy-mm-dd' = 'YYYY-MM-DD')
        autoclose: true // Zamyka datepicker po wybraniu daty
    });
});