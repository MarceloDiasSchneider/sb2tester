// Call the dataTables jQuery plugin
function loadDatatables(json) {
  $("#ricerca").slideUp()
  json = JSON.parse(json);
  console.log(json)
  // $.getJSON("js/demo/dataTables.json",function(json){
    $('#dataTable').DataTable({
      data: json,
      columns: [
          { data: 'sellersku' },
          { data: 'orderitemid' },
          { data: 'amazonorderid' },
          { data: 'date' },
          { data: 'title'},
          { data: 'quantityordered' },
          { data: 'productinfo_numberofitems' },
          { data: 'conditionid' },
          { data: 'itemprice_amount' },
          { data: 'carrier' },
          { data: 'shippingprice_amount' },
          { data: 'tracking_number' }
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
        layout: 'columns-4',
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
              text: 'sellersku',
              action: function ( e, dt, node, config ) {
                dt.column( -12 ).visible( ! dt.column( -12 ).visible() );
              }
            },{
              text: 'orderitemid',
              action: function ( e, dt, node, config ) {
                dt.column( -11 ).visible( ! dt.column( -11 ).visible() );
              }
            },{
              text: 'amazonorderid',
              action: function ( e, dt, node, config ) {
                dt.column( -10 ).visible( ! dt.column( -10 ).visible() );
              }
            },{
              text: 'date',
              action: function ( e, dt, node, config ) {
                dt.column( -9 ).visible( ! dt.column( -9 ).visible() );
              }
            },{
              text: 'title',
              action: function ( e, dt, node, config ) {
                dt.column( -8 ).visible( ! dt.column( -8 ).visible() );
              }
            },{
              text: 'quantityordered',
              action: function ( e, dt, node, config ) {
                dt.column( -7 ).visible( ! dt.column( -7 ).visible() );
              }
            },{
              text: 'productinfo_numberofitems',
              action: function ( e, dt, node, config ) {
                dt.column( -6 ).visible( ! dt.column( -6 ).visible() );
              }
            },{
              text: 'conditionid',
              action: function ( e, dt, node, config ) {
                dt.column( -5 ).visible( ! dt.column( -5 ).visible() );
              }
            },{
              text: 'itemprice_amount',
              action: function ( e, dt, node, config ) {
                dt.column( -4 ).visible( ! dt.column( -4 ).visible() );
              }
            },{
              text: 'carrier',
              action: function ( e, dt, node, config ) {
                dt.column( -3 ).visible( ! dt.column( -3 ).visible() );
              }
            },{
              text: 'shippingprice_amount',
              action: function ( e, dt, node, config ) {
                dt.column( -2 ).visible( ! dt.column( -2 ).visible() );
              }
            },{
              text: 'tracking_number',
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
  // })
}
