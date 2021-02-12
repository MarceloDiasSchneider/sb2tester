// Call the dataTables jQuery plugin
// function loadDatatables() {
  $.getJSON("json/dataTables.json",function(json){
    $('#dataTable').DataTable({
      data: json,
      columns: [
          { data: 'name' },
          { data: 'position' },
          { data: 'office' },
          { data: 'age' },
          { data: 'start date'},
          { data: 'salary' },
          { data: 'email' }
      ],
      "dom": 'QBrlftipPR',
      searching: true,
      ordering:  true,
      paging: true,
      processing: true,
      lengthChange: true,
      info: true,
      scrollX: true,
      scrollY: '',
      scrollCollapse: true,
      colReorder: true,
      select: true,
      fixedHeader: {
        header: false,
        footer: false
      },
      keys: {
        columns: ':not(:first-child)',
        className: 'text-warning bg-secondary',
        clipboard: true,
      },
      fixedColumns: {
        leftColumns: 1
      },
      searchPanes: {
        cascadePanes: true,
        // viewTotal: true,
        layout: 'columns-3',
      },
      columnDefs: [
        {
            searchPanes: {
                show: true
            },
            targets: [1, 2, 3, 4, 5]
        }
      ],
      buttons: [
        {
          extend: 'collection',
          text: 'Hidden',
          buttons: [
            {
              text: 'Position',
              action: function ( e, dt, node, config ) {
                dt.column( -6 ).visible( ! dt.column( -6 ).visible() );
              }
            },{
              text: 'Office',
              action: function ( e, dt, node, config ) {
                dt.column( -5 ).visible( ! dt.column( -5 ).visible() );
              }
            },{
              text: 'Age',
              action: function ( e, dt, node, config ) {
                dt.column( -4 ).visible( ! dt.column( -4 ).visible() );
              }
            },{
              text: 'Start date',
              action: function ( e, dt, node, config ) {
                dt.column( -3 ).visible( ! dt.column( -3 ).visible() );
              }
            },{
              text: 'Salary',
              action: function ( e, dt, node, config ) {
                dt.column( -2 ).visible( ! dt.column( -2 ).visible() );
              }
            },{
              text: 'Email',
              action: function ( e, dt, node, config ) {
                dt.column( -1 ).visible( ! dt.column( -1 ).visible() );
              }
            }
          ]
        },
        'copy',
        'print',
        'csv',
      ],
    })
  })
// }
