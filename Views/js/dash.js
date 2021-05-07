let customer_table = document.querySelector('#customer_table');
let reservation_table = document.querySelector('#reservation_table');
let room_table = document.querySelector('#room_table');
let pension_table = document.querySelector('#pension_table');

let customer = document.querySelector('.customer');
let reservation =document.querySelector('.reservation');
let room = document.querySelector('.room');
let pensions = document.querySelector('.pension');
block = "display:block";
none = "display:none";

customer.onclick = () =>{
    customer_table.style = block;
    customer.className = "list-group-item list-group-item-action bg-transparent second-text customer fw-bold active";
    reservation.className = "list-group-item list-group-item-action bg-transparent second-text reservation fw-bold ";
    room.className =  "list-group-item list-group-item-action bg-transparent second-text room fw-bold" ;
    pensions.className =  "list-group-item list-group-item-action bg-transparent second-text pension fw-bold" ;
    reservation_table.style = none;
    room_table.style = none;
    pension_table.style = none;
}
reservation.onclick = () =>{
    customer_table.style = none;
    customer.className = "list-group-item list-group-item-action bg-transparent second-text fw-bold customer";
    reservation.className += "list-group-item list-group-item-action bg-transparent second-text reservation fw-bold active";
    room.className =  "list-group-item list-group-item-action bg-transparent second-text room fw-bold" ;
    pensions.className =  "list-group-item list-group-item-action bg-transparent second-text pension fw-bold" ;
    reservation_table.style = block;
    room_table.style = none;
    pension_table.style = none;
}
room.onclick = () =>{
    customer_table.style = none;
    customer.className = "list-group-item list-group-item-action bg-transparent second-text fw-bold customer";
    reservation.className += "list-group-item list-group-item-action bg-transparent second-text reservation fw-bold ";
    room.className =  "list-group-item list-group-item-action bg-transparent second-text room fw-bold active" ;
    pensions.className =  "list-group-item list-group-item-action bg-transparent second-text pension fw-bold" ;
    reservation_table.style = none;
    room_table.style = block;
    pension_table.style = none;
}
pensions.onclick = () =>{
    customer_table.style = none;
    customer.className = "list-group-item list-group-item-action bg-transparent second-text fw-bold customer";
    reservation.className += "list-group-item list-group-item-action bg-transparent second-text reservation fw-bold ";
    room.className =  "list-group-item list-group-item-action bg-transparent second-text room fw-bold" ;
    pensions.className =  "list-group-item list-group-item-action bg-transparent second-text pension fw-bold active" ;
    reservation_table.style = none;
    room_table.style = none;
    pension_table.style = block;
}


