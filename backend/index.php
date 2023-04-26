<?

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');

include 'conect.php';

$id = rand(1, 999);
$uname = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$query = 'INSERT INTO messages(id, uname, email, coment) VALUES ('$id', '$uname', '$email', '$comment')';

if ($link->query($query) === TRUE){
    echo 'NEW RECORD CREATED SUCCESFULLY';
} else {
    echo 'ERROR: ' . $link->error;
}

?>