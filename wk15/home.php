<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>야옹이의 홈 페이지</title>
    <style>
        /* 1. 전체 페이지 기본 스타일 */
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #333;
            color: #FFF;
        }

        /* 2. 중앙 1열 레이아웃 컨테이너 */
        #content-wrapper {
            width: 100%;
            max-width: 800px;      /* 전체 폭 중앙 고정 */
            margin: 0 auto;        /* 페이지 가운데 배치 */
            text-align: center;    /* 내부 텍스트/인라인 요소 가운데 */
            padding-bottom: 50px;
            display: flex;
            flex-direction: column; /* 모든 요소를 위에서 아래로 1열 배치 */
            align-items: center;    /* 자식 요소들 가로축 가운데 정렬 */
        }

        /* 3. 이미지 중앙 정렬 */
        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            display: block;
            margin: 20px auto;
        }

        /* 4. 링크 스타일 */
        a {
            color: #99FFFF;
            text-decoration: none;
            font-weight: bold;
        }

        /* 5. main 내부의 모든 요소 간격統一 */
        main > * {
            margin: 15px 0;
            width: 100%;           /* 모든 요소를 같은 열에서 꽉 차게 */
        }

        header, footer {
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="content-wrapper">
        <header>
            <h1>야옹이의 홈 페이지</h1>
        </header>

        <main>
            <p>안녕하세요! 이곳은 나의 홈 페이지입니다. 환영합니다!</p>

            <img src="cat.png" alt="나의 이미지">

            <p>나에 대한 더 많은 정보는 <a href="https://www.example.com">여기</a>에서 확인할 수 있습니다.</p>

            <p>
                <?php echo "Hello World!"; ?>
            </p>
        </main>

        <footer>
            <p>&copy; 2024 나의 홈 페이지. 모든 권리 보유됨.</p>
        </footer>
    </div>

    <?php phpinfo(); ?>
</body>
</html>

