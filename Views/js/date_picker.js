var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}

checkoutElem.onchange = () =>{


        var choosen_day = new Date(checkinElem.value);
        var days = (new Date(checkoutElem.value) - new Date(checkinElem.value)) / (1000 * 60 * 60 * 24);

        if (days < 0) {
            alert("please chooose the right date ");
            end = 0;

            days = 0;
            //document.getElementById("start").value = 0;
            checkoutElem.value = 0;
        }
        console.log(days)
        document.querySelector('#day_nbr').innerHTML = days;
        document.querySelector('#days').value = days;

}