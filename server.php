<?php 
$host="127.0.0.1";
$port=9051;
set_time_limit(0);
$sock=socket_create(AF_INET,SOCK_STREAM,0) or die("Could not create socket\n");
$result=socket_bind($sock,$host,$port) or die("Could not bind To socket");

$result=socket_listen($sock,3) or die("Could not setup socket listener");
echo "Listening for connections";


class Chat{
    function readline(){
        return rtrim(fgets(STDIN));
    }
}
do{
    $accept=socket_accept($sock) or die("Not accepting incoming connections");
    $msg=socket_read($accept,1024) or die("Could not read input \n");
    $msg=trim($msg);
    echo "Client Says\t".$msg."\n\n";

    $line=new Chat();
    echo "Enter Reply:\t";
    $reply=$line->readline();

    socket_write($accept,$reply,strlen($reply)) or die("Could not write output") ;
}while(true);
socket_close($accept,$sock);
?>