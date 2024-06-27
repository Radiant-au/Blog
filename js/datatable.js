document.addEventListener('DOMContentLoaded', function() {
    const table = document.getElementById('cat_table');
    if (table) {
        // Initialize DataTables
        const dataTable = new DataTable(table);
    }
});