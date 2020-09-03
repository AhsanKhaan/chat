var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    $('#uStatus').html("<?php echo $name; ?> <span style='color:green;'>[active]</span>");
};

conn.onmessage = function(e) {
    $('#chatingIn').append("<p><span id='user2'>"+e.data+"</span></p>");
      $('#chating').animate({scrollTop:$('#chatingIn').height()}, 0);
};
$("#msgField").keypress(function(e) {	  
e.preventDefault;
var key = e.which;
var msgField = $("#msgField").val();
if(key == 13) 
  {
    $("#chatingIn").append("<p align='right'><span id='user'>"+msgField+"</span></p>");
    conn.send(msgField);
    $("#msgField").val("");
    $('#chating').animate({scrollTop:$('#chatingIn').height()}, 0); 
    return false;
  }
});
    $("#RunServer").on('click',function(){

        $.ajax({url: "run-server.php", success: function(result){
          location.reload();
        }});
    });
    $("#StopServer").on('click',function(){

        $.ajax({url: "stop-server.php", success: function(result){
            location.reload();
        }});
    });
