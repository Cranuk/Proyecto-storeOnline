window.addEventListener('load', function(){
    const url = import.meta.env.VITE_APP_URL;
    const buttonCancel = $('#button-cancel');
    const filter = $('#filter-button');
    const report = $('#report-button');

    const modal = $('#filter-modal');
    const form = $('#filter-form');
    const tableFilter = $('#table');

    function modalAction(table, action){
        tableFilter.val(table);
        form.attr('action', action);
        modal.removeClass('hide-modal').addClass('open-modal');
    }

    buttonCancel.on('click', function() {
        modal.removeClass('open-modal').addClass('hide-modal');
    });

    filter.on('click', function(){ // NOTE: si hace click a este enlace obtenes el data-table y le indicas que debe hacer con la info del modal
        let table = this.dataset.table;
        let action = url + '/filter/table';
        modalAction(table, action);
    });

    report.on('click', function(){
        let table = this.dataset.table;
        let action = url + '/report/pdf';
        modalAction(table, action);
    });
});