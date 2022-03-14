
<?php

$conn = mysqli_connect("localhost","root","","my_db");

if($conn){
$user_messages = mysqli_real_escape_string($conn, $_POST['messageValue']);

$query = "SELECT * FROM chatbot WHERE messages LIKE '%$user_messages%'";
$runQuery = mysqli_query($conn, $query);
 
if(mysqli_num_rows($runQuery) > 0){
    // fetch result
    $result = mysqli_fetch_assoc($runQuery);
    // echo result
    echo $result['response'];
}else{
    echo ' <a href="https://meet.jit.si/UVMhlaqLTYjuSOozKsCEATiqLJWdTR "> Müşteri temsilcisine bağlanmak için tıklayınız!</a>';
}
}else{
    echo "connection Failed " . mysqli_connect_errno();
}
?>