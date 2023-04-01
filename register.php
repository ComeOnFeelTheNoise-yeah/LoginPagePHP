<?php
$servername = "127.0.0.1"; // MariaDB 서버 이름
$username = "root"; // MariaDB 사용자 이름
$password = "55555"; // MariaDB 비밀번호
$dbname = "login page"; // 데이터베이스 이름

// MariaDB 연결 생성
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	$sql = "INSERT INTO members (name, email, password) VALUES ('$name','$email','$password')";
}

if($conn->query($sql) == TRUE){
	echo "Signup success!";
} else {
	echo "Invalid username or password".$conn->error;
}


$conn->close();
?>
