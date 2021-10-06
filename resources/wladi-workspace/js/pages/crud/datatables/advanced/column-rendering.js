"use strict";

const { xor } = require("lodash");

var KTDatatablesAdvancedColumnRendering = function () {

    var init = function () {
        var table = $('#kt_datatable');

        // begin first table
        table.DataTable({
            responsive: true,
            paging: true,
            columnDefs: [
				{
					title: '',
                    targets: 0,
                    render: function (data, type, full, meta) {
						 var output = `>>`;
                        return output;
                    },
                },
				
				{
					title: 'Detalhes',
                    targets: 1,
                    render: function (data, type, full, meta) {
                        var user_img = data;
                        var output;

                        output = `
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50 flex-shrink-0">
                                    <img class="zoom" src="` + user_img + `" alt="Foto">
                                </div>
                                <div class="ml-3">
                                    <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">` + full[2] + `</span>
                                    <a href="#" class="text-muted text-hover-primary">` + full[3] + `</a>
                                </div>
                            </div>`;

                        return output;
                    },
                },
                {
                    targets: 1,
                    render: function (data, type, full, meta) {
                        return '<a class="text-dark-50 text-hover-primary">' + data + '</a>';
                    },
                },

            ],
			language: {
                decimal: "",
                emptyTable: "Nenhuma informação disponivel",
                info: "_START_ a _END_ de um total de _TOTAL_ resultados",
                infoEmpty: "Nenhuma informação",
                infoFiltered: "(_MAX_ dados Disponiveis )",
                infoPostFix: "",
                thousands: ",",
                lengthMenu: " Exibindo _MENU_ Resultados",
                loadingRecords: "Carregando...",
                processing: "Processando...",
                search: "Pesquisar:",
                zeroRecords: "Nenhuma informação encontrada",
                paginate: {
                    first: "Primeiro",
                    last: "Ultimo",
                    previous: "Voltar",
                    next: "Proximo",
                },
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                }
            }
        });

        $('#kt_datatable_search_status').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_search_type').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
    };

    return {
        //main function to initiate the module
        init: function () {
            init();
        }
    };
}();


var KTDatatablesAdvancedColumnRenderingClear= function () {

    var init = function () {
        var table = $('#kt_datatable_clear');

        // begin first table
        table.DataTable({
            responsive: true,
            paging: true,

			language: {
                decimal: "",
                emptyTable: "Nenhuma informação disponivel",
                info: "_START_ a _END_ de um total de _TOTAL_ resultados",
                infoEmpty: "Nenhuma informação",
                infoFiltered: "(_MAX_ dados Disponiveis )",
                infoPostFix: "",
                thousands: ",",
                lengthMenu: " Exibindo _MENU_ Resultados",
                loadingRecords: "Carregando...",
                processing: "Processando...",
                search: "Pesquisar:",
                zeroRecords: "Nenhuma informação encontrada",
                paginate: {
                    first: "Primeiro",
                    last: "Ultimo",
                    previous: "Voltar",
                    next: "Proximo",
                },
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                }
            }
        });

        $('#kt_datatable_search_status').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_search_type').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
    };

    return {
        //main function to initiate the module
        init: function () {
            init();
        }
    };
}();



jQuery(document).ready(function () {
    KTDatatablesAdvancedColumnRendering.init();
    KTDatatablesAdvancedColumnRenderingClear.init();
});
