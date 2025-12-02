<?php
// 데이터베이스 연결 설정
$servername = "localhost";
$username = "admin";
$password = "1234";
$dbname = "my_database";
// 데이터베이스에 연결
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { // 연결 확인
   die("Connection failed: " . $conn->connect_error);
}
// POST로 전송된 회원가입 정보 받기
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   // 비밀번호 해싱
   $hashed_password = password_hash($password, PASSWORD_DEFAULT);
   // 사용자 정보 삽입 쿼리 실행
   $sql = "INSERT INTO users (username, email, password) VALUES 
             ('$username', '$email', '$hashed_password')";
   if ($conn->query($sql) === TRUE) {
      echo "회원가입이 완료되었습니다!";
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }
   $conn->close();
}
?>


