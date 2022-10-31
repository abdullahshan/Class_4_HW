

<h2>Class_4 HW</h2>

<?php



$password = 'cit@123';

$pwhash = password_hash($password, PASSWORD_BCRYPT);

echo($pwhash); 

echo "<br>";

$pw_veryfy = password_verify('cit@123', $pwhash);

var_dump($pw_veryfy);

echo "<br>";

function get($word){

    global $password;
    global $pw_veryfy;

if($password==$word and $pw_veryfy==true){

    echo "Your are login";
}else{
    echo "Wrong password";
}

}
get('cit@123');
//get('cist@d123');


$badwords = [

    'kharap',
    'bad',
    'fao'
];

$gdwords = [

    'good',
    'joss',
    'nice'
];

$review = "This is very Bad product";

echo "<br>";

echo str_ireplace($badwords, $gdwords, $review);


