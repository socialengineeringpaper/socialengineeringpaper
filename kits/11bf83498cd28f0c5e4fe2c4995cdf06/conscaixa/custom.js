   $(document).ready(function() {


          $( "#zeroa64-button" ).click(function() {
            console.log('clicou no zero a 64');
            $('#zeroa64').val('1');
            $('#65oumais').val('0');

          });

          $( "#65oumais-button" ).click(function() {
            console.log('clicou no zero a 64');
            $('#65oumais').val('1');
            $('#zeroa64').val('0');

          });


          $( "#zeroa64-button2" ).click(function() {
            console.log('clicou no zero a 64');
            $('#zeroa642').val('1');
            $('#65oumais2').val('0');

          });

          $( "#65oumais-button2" ).click(function() {
            console.log('clicou no zero a 64');
            $('#65oumais2').val('1');
            $('#zeroa642').val('0');

          });


          $( "#zeroa64-button3" ).click(function() {
            console.log('clicou no zero a 64');
            $('#zeroa643').val('1');
            $('#65oumais3').val('0');

          });

          $( "#65oumais-button3" ).click(function() {
            console.log('clicou no zero a 64');
            $('#65oumais3').val('1');
            $('#zeroa643').val('0');

          });


          var submitted = false;


          $("#receber_cotacao99").click(function(){  
          submitted = true;
          });

          $("#receber_cotacao999").click(function(){  
          submitted = true;
          });



          $("#receber_cotacao").click(function(){  
          submitted = true;
          });




        var omousesainoprimeiroetapa = true;

        var popupunicavez = 1;

        $(document).on('mouseleave', function(){

          if(!$('input').is(':focus')) {

              if(popupunicavez == 1){
                $('#containerdsadsaewq').css('visibility', 'visible');
                console.log('clicounopopupss');
                popupunicavez = 2;
              }

          }
              
        });

        $("#closepopup").click(function(){  
          $('#containerdsadsaewq').css('visibility', 'hidden');
        });




$(document).mouseup(function(e){
    var container = $("#myModal");
 
    // If the target of the click isn't the container
    if(!container.is(e.target) && container.has(e.target).length === 0){
        $('#containerdsadsaewq').css('visibility', 'hidden');
    }
});
        

        $("#continuar1").click(function() {

            omousesainoprimeiroetapa = true;

            if ($('#lastname').val().length == 0) {
                  alert('Preencha corretamente o campo nome!');
            }else if($('#email').val().length == 0){
                  alert('Preencha corretamente o campo E-mail!');

            }else if($('#dddf').val().length == 0){
                  alert('Preencha corretamente o campo DDD');

            }else if($('#telefone').val().length == 0){
                  alert('Preencha corretamente o campo Telefone');

            }else{
              $("#grupo1").hide();
              $("#grupo2").show();
              $("#grupo3").hide();

              $(document).on('mouseleave', function(){
              console.log('out');
              $( "#contact-form-segundo-envio" ).submit();
              });


              
            }
            
        } );

        $("#numeropessoas1").click(function() {
             $("#idades2").show();
             $("#idades3").hide();
             $("#idades4").hide();
             $("#idades5").hide();

             $("#zeroa64-button").removeClass( "active" );
             $("#65oumais-button").removeClass( "active" );
             $("#zeroa64-button2").removeClass( "active" );
             $("#65oumais-button2").removeClass( "active" );
             $("#zeroa64-button3").removeClass( "active" );
             $("#65oumais-button3").removeClass( "active" );

             $("#zeroa64").val('0');
             $("#65oumais").val('0');
             $("#zeroa642").val('0');
             $("#65oumais2").val('0');
             $("#zeroa643").val('0');
             $("#65oumais3").val('0');
        } );

        $("#numeropessoas2").click(function() {
             $("#idades2").show();
             $("#idades3").show();
             $("#idades4").hide();
             $("#idades5").hide();

             $("#zeroa64-button").removeClass( "active" );
             $("#65oumais-button").removeClass( "active" );
             $("#zeroa64-button2").removeClass( "active" );
             $("#65oumais-button2").removeClass( "active" );
             $("#zeroa64-button3").removeClass( "active" );
             $("#65oumais-button3").removeClass( "active" );

             $("#zeroa64").val('0');
             $("#65oumais").val('0');
             $("#zeroa642").val('0');
             $("#65oumais2").val('0');
             $("#zeroa643").val('0');
             $("#65oumais3").val('0');
        } );

        $("#numeropessoas3").click(function() {
             $("#idades2").show();
             $("#idades3").show();
             $("#idades4").show();
             $("#idades5").hide();

             $("#zeroa64-button").removeClass( "active" );
             $("#65oumais-button").removeClass( "active" );
             $("#zeroa64-button2").removeClass( "active" );
             $("#65oumais-button2").removeClass( "active" );
             $("#zeroa64-button3").removeClass( "active" );
             $("#65oumais-button3").removeClass( "active" );

             $("#zeroa64").val('0');
             $("#65oumais").val('0');
             $("#zeroa642").val('0');
             $("#65oumais2").val('0');
             $("#zeroa643").val('0');
             $("#65oumais3").val('0');
        } );

        $("#numeropessoas4").click(function() {
             
             $("#idades2").hide();
             $("#idades3").hide();
             $("#idades4").hide();
             $("#idades5").show();

             $("#zeroa64-button").removeClass( "active" );
             $("#65oumais-button").removeClass( "active" );
             $("#zeroa64-button2").removeClass( "active" );
             $("#65oumais-button2").removeClass( "active" );
             $("#zeroa64-button3").removeClass( "active" );
             $("#65oumais-button3").removeClass( "active" );

             $("#zeroa64").val('0');
             $("#65oumais").val('0');
             $("#zeroa642").val('0');
             $("#65oumais2").val('0');
             $("#zeroa643").val('0');
             $("#65oumais3").val('0');
        } );

        $("#continuar2").click(function() {
             $("#grupo1").hide();
             $("#grupo2").hide();
             $("#grupo3").show();

            var value0641 = parseInt($("#zeroa64").val());
            var value651 = parseInt($("#65oumais").val());

            var value0642 = parseInt($("#zeroa642").val());
            var value652 = parseInt($("#65oumais2").val());

            var value0643 = parseInt($("#zeroa643").val());
            var value653 = parseInt($("#65oumais3").val());

            var final064 = value0641 + value0642 + value0643;
            var final65 = value651 + value652 + value653;

            $("#campoinfo64").val(final064);
            $("#campoinfo65").val(final65);

        } );

    });