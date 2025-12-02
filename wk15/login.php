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

// POST로 전송된 로그인 정보 받기
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

   // 사용자 정보 조회 쿼리 실행
  $sql = "SELECT * FROM users WHERE username='$username'";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {	// 사용자가 존재하는 경우
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {// 비밀번호확인
      echo "로그인 성공!";
      // 여기에서 세션을 시작하는 등의 작업을 수행한다.
    } else { // 비밀번호 불일치
      echo "비밀번호가 일치하지 않습니다.";
    }
  } else { 	// 사용자가 존재하지 않는 경우
    echo "사용자가 존재하지 않습니다.";
  }
  $conn->close();
}
?>


