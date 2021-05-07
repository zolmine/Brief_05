$(document).ready(function () {

    $('.delete_costumer').click(function(){

        var id = $(this).attr('id');
        var func = "del_customer";
        if (confirm("Sure you want to delete this Customer?")) {
            $.ajax({
                type: "POST",
                url: "../Controllers/del_customer.php",
                data: {id: id, func:func},
            });
        }
    });



    $('.delete_room').click(function(){

        var id = $(this).attr('id');
        var func = "del_room";
        if (confirm("Sure you want to delete this Product? There is NO undo!")) {

            $.ajax({
                type: "POST",
                url: "../Controllers/del_customer.php",
                data: {id: id,func:func},
            });
        }
    })
})