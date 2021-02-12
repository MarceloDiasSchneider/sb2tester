// Call the dataTables jQuery plugin
$('#dataTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        "url": "php/load-data-to-datatables-large.php",
        "type": "POST"
    },
    columns: [
        { data: "first_name" },
        { data: "last_name" },
        { data: "email" },
        { data: "gender" },
        { data: "country" },
        { data: "created" },
        { data: "status" }
    ]
})