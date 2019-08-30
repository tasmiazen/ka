  <script src="{{ URL::asset( '_backend/js/vendor.js') }}"></script>
  <script src="{{ URL::asset( '_backend/js/app.js') }}"></script>

  <script>
    $( document ).ready(function() {
      $('#sidebar-menu li ul li a ').each(function(i, el){
        if ($(el).attr('href') == document.URL ) {

          $(el).parent('li').parent('ul').parent('li').addClass('active open');
          $(el).parent('li').addClass('active');
          $(el).parent('li').parent('ul').removeClass();
          $(el).parent('li').parent('ul').addClass('sidebar-nav collapse in');
          return false;
        }
      });

      $('#sidebar-menu li a ').each(function(i, el){
        if ($(el).attr('href') == document.URL ) {
          $(el).parent().addClass('active');
          return false;
        }
      });
    });
  </script>



            <script>
              $(document).ready(function () {
                $('.itemRemove').click(function(){
                  $(this).parent().remove();
                }); 

                $('.rawAddBtn').click(function () {

         // var conceptName = $('#aioConceptName').find(":selected").text();

               $name = $('#add_recipyOption').find(":selected").text();
               $value = $('#add_recipyOption').find(":selected").val();

               $unit = '00.00';

   //console.log( $value );

                  $('#add_recipyOption').find(":selected").remove();


                $html = '<div class="form-group row">' +
                    '<label for="item'+ $value +'" class="col-sm-4 col-form-label">'+ $name +'</label>' + 

                       '<div class="col-sm-7">' +
                    '<input type="number" name="itemid_'+ $value +'" value="' + $unit+ '" class="form-control">' +
                       '</div>' + 
                       '<small class="itemRemove" >remove</small>' +
                  '</div>';
               $('#inserInput').append( $html );



                  $(this).parent('select option');
                });
                //


                //
              });





            </script>


  @yield('footer_asset')