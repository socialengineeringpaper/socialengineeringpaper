<html>

<head>
  <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    var _data = '';
    jQuery(document).ready(function () {
      console.log('test');


      function ajax() {

      }

      //ajax();

      setInterval(function(){
        //console.log('test');
        $.ajax({
          url: 'ips.php',
          data: "",
          dataType: 'html',
          success: function (data) {
            console.log(data);
            jQuery('body').html(data);
            if(data != _data){
              var audio = new Audio('beep.wav');
              audio.play();
            }else{

            }
            _data = data;
          }
        });
      },2000);


    });
  </script>
</head>
<body>

</body>
</html>