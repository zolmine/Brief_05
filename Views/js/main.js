
// let choices = document.querySelector('#choices');
// let image = document.querySelector('#room_img');
let ext = ".jpg";
let path = "Views/img/";
let initialise = "<option value='null' disabled selected>Select an option</option>";
// let options = document.querySelector('#options');
// let double_room_choice = document.querySelector('#choices_chambre_double');
// let pension_type_location = document.querySelector('#choices_demi_pension');
// let pension_options = document.querySelector('#options_pension');
// let rooms_number = document.querySelector('#rooms_number');
// let rooms_counter = document.querySelector('#rooms_counter');
// let display = document.querySelector('.display');
// let add = document.querySelector('.add');
let kids = document.querySelector('#baby');
let adult = document.querySelector('#adult');
let first = document.querySelector('.first_one');
let guests = document.querySelector('#guests');


    var html = '';

        html += '<button type="button" name="add" class="btn btn-success btn-xs add" style="float: right;"><span class="glyphicon glyphicon-plus"></span></button>';

        html += '<br><br>';

        html += '<select name="room_' + 0 + '" class="testp" id="other_options"><option  value="null" disabled selected>Select an option</option>"' ;

        html += ' </select>';
        
        html += '<select class="type" id="other_choices" name="room_type_' + 0 + '" style="display: none;">';
        html += '<option value="null" disabled  selected>Select an option</option>';
        html += '</select>';

        html += '<select id="other_choices_chambre_double" name="room_view_' + 0 + '" style="display: none;">';
        html += '<option value="null" disabled  selected>Please select an option</option>';
        html += '</select>';

        html += '<select class="pension" style="display:none" name="pension_' + 0 + '" id="options_pension">';
        html += ' <option value="null" disabled selected>Select an option</option>';
        html += '</select>';

        html += '<select name="pension_type_' + 0 + '" id="pension_type" style="display:none;">';
        html += '<option value="null" disabled  selected>Please select an option</option>';
        html += '</select>';

        html += '<img id="room_img" src="" style="width:140px; " alt=""></div>';

        html += '<hr>';

        first.innerHTML = html;
        
        $.ajax(
            'Controllers/fill_rooms.con.php',
            {
                success: function(data) {

                  $('.testp').append(data);

                },
                error: function() {
                  alert('There was some error performing the AJAX call!');
                }
             }
          );
  
          $.ajax(
            'Controllers/fill_pension.con.php',
            {
                success: function(data) {
  
                  $('.pension').append(data);
                  
                },
                error: function() {
                  alert('There was some error performing the AJAX call!');
                }
             }
          );
          var other_options = document.querySelectorAll('#other_options');
          var options_pension = document.querySelectorAll('#options_pension');


          other_options.forEach(item => {

            item.onchange = () => {


                    if (item.value == 1){

                        guests.style = "display:block";

                    }


                item.nextSibling.nextSibling.style = "display:none";
                item.nextSibling.style = "display:inline;";
                item.nextSibling.innerHTML = initialise;
                item.nextSibling.nextSibling.nextSibling.style = "display:inline";
                  var test = '';
                  var id = item.value;
                  $.ajax({
                    url:"Controllers/fill_types.con.php",
                    method:"POST",
                    data:{id : id},
                    success:function(data)
                    {

                      test = data;
                      item.nextSibling.innerHTML += data;
                      if (data == "") {

                        item.nextSibling.style = "display:none;";
                        item.nextSibling.nextSibling.style = "display:inline";
                        item.nextSibling.nextSibling.innerHTML = initialise;
                        var room_id1 = item.value;
                        var type_id1 = item.nextSibling.value;

                        $.ajax({
                          url:"Controllers/fill_view.con.php",
                          method:"POST",
                          data:{room_id1 : room_id1, type_id1 : type_id1},
                          success:function(data1)
                          {
                          item.nextSibling.nextSibling.innerHTML += data1;
                          
                          },
                          error: function() {
                            alert('There was some error performing the AJAX call!');
                          }
                        })

                      }

                    },
                    error: function() {
                      alert('There was some error performing the AJAX call!');
                    }
                  })

                item.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.src = path + item.value + ext;            }
            item.nextSibling.onchange = () => {
              

                
                item.nextSibling.nextSibling.style = "display:inline";
                item.nextSibling.nextSibling.innerHTML = initialise;

                var room_id1 = item.value;
                var type_id1 = item.nextSibling.value;

                $.ajax({

                  url:"Controllers/fill_view.con.php",

                  method:"POST",

                  data:{room_id1 : room_id1, type_id1 : type_id1},

                  success:function(data)
                  {
                    
                  item.nextSibling.nextSibling.innerHTML = initialise
                  item.nextSibling.nextSibling.innerHTML += data;
                  
                  },
                  error: function() {

                    alert('There was some error performing the AJAX call!');
                  
                  }
                })
        
                
              }
            
        });
        
        options_pension.forEach(item => {

          item.onchange = () => {

            var id = item.value;
            
            $.ajax({

              url:"Controllers/fill_pension_type.con.php",

              method:"POST",

              data:{id},

              success:function(data1)
              {

              item.nextSibling.style = "display:inline";
              item.nextSibling.innerHTML = initialise;
              item.nextSibling.innerHTML += data1;
              if (data1 == "") {
                
                item.nextSibling.style = "display:none";

              }
              
              },
              error: function() {

                alert('There was some error performing the AJAX call!');

              }
            })

          }

        })
        var babys_room = ["with lit", "without lit"];
        var babys_id   = [4,5]

        var adulte_room = ["add room simple", "with lit"];
        var adulte_id   = [1,2]

        kids.oninput = () => {

            if (kids.value > 0) {
                kids.nextElementSibling.innerHTML = initialise;
                kids.nextElementSibling.style = "display:inline";
                for(i = 0; i < babys_room.length; i++){

                    kids.nextElementSibling.innerHTML += "<option value='" + babys_id[i] + "'>" + babys_room[i] + "</option>";

                }

            }else{
                kids.nextElementSibling.style = "display:none";
            }

        }

        adult.oninput = () => {

            if (adult.value > 0) {
                adult.nextElementSibling.innerHTML = initialise;
                adult.nextElementSibling.style = "display:inline";
                for(i = 0; i < adulte_room.length; i++){

                    adult.nextElementSibling.innerHTML += "<option value='" + adulte_id[i] + "'>" + adulte_room[i] + "</option>";

                }

            }else{
                adult.nextElementSibling.style = "display:none";
            }

        }