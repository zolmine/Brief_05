$(document).ready(function(){

      var counter = document.querySelector('#counter');
      var count = 0;

      $(document).on('click', '.add', function(){
        count++;
        var html = '';
        html += '<td>';
        html += '<hr>';
        html += '<select name="room_' + count + '" class="testp'+count+'" id="other_options"><option value="null" disabled selected>Select an option</option>"' ;

        html += ' </select>';
        
        html += '<select class="type'+count+'" id="other_choices" name="room_type_' + count + '" style="display: none;">';
        html += '<option value="null" disabled  selected>Select an option</option>';
        html += '</select>';

        html += '<select id="other_choices_chambre_double" name="room_view_' + count + '" style="display: none;">';
        html += '<option value="null" disabled  selected>Please select an option</option>';
        html += '</select>';

        html += '<select class="pension'+count+'" style="display:none" name="pension_' + count + '" id="options_pension">';
        html += ' <option value="null" disabled selected>Select an option</option>';
        html += '</select>';

        html += '<select name="pension_type_' + count + '" id="choices_demi_pension" style="display:none;">';
        html += '<option value="null" disabled  selected>Please select an option</option>';
        html += '</select>';

        html += '<img id="room_img" src="" style="width:140px; " alt="">';

        html += '<button type="button" name="remove" class="btn btn-danger btn-xs remove"><span class="glyphicon glyphicon-minus"></span></button></td>';

        $.ajax(
          'Controllers/fill_rooms.con.php',
          {
              success: function(data) {
                $('.testp'+count).append(data);

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

                $('.pension'+count).append(data);
                
              },
              error: function() {
                alert('There was some error performing the AJAX call!');
              }
           }
        );

        counter.value = count;
        console.log(counter.value)

        $('.display').append(html);
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

                item.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.src = path + item.value + ext;

                // image.src = path + item.value + ext;
            }
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
      });

      $(document).on('click', '.remove', function(){
        $(this).closest('td').remove();
        count--;
        counter.value = count;
          console.log(counter.value)

      });
    });



