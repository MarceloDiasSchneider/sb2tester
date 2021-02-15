let loadData = document.querySelector("#load-data")
loadData.addEventListener("click", ()=> {
    loadData.disabled = true
    loadDataFromBD()
})

function loadDataFromBD(){
    // getting data from input tables.php
    let dateStart = document.querySelector('#date-start').value
    let dateEnd = document.querySelector('#date-end').value
    // let azienda = document.querySelector('#azienda').value
    // let marketplace = document.querySelector('#marketplace').value

    // setting a object to send to php 
    let dataToSearch = {
        ds : dateStart,
        de : dateEnd,
        // a : azienda,
        // m : marketplace
    }

    /* using jQuery to comunicate with PHP */
    $.post('php/load-data-to-datatables.php', dataToSearch, function(phpReturns, state){
        if(state == 'success'){
            loadDatatables(phpReturns)
        } else {
            console.log('problem to load data from php =>'+ phpReturns)
        }
    })
}