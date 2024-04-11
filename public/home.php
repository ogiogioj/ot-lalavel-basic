<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인화면</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/main.css"> 
    
</head>

<body>

    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">DeexKorea</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active " aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link ">회사소개</a></li>
                <li class="nav-item"><a href="#" class="nav-link">게시판</a></li>
                <li class="nav-item"><a href="#" class="nav-link">로그인</a></li>
                <li class="nav-item"><a href="#" class="nav-link">문의사항</a></li>
            </ul>
        </header>
    </div>

    <section>
        <div class="mainCon" >
            <div class="registerTitle">회원가입</div>
            <br>
            <div class="registerBox">
                <form action="member_process.php?mode=register" method="post">
                    <input type="hidden" name="id" value="register">
                    <table class="registerTable">
                        <tr>
                            <td>아이디</td>
                            <td><input type="text" name="userid" required></td>
                            <td><input type="button" value="중복확인"></td>
                        </tr>
                        <tr>
                            <td>비밀번호</td>
                            <td><input type="password" name="pw1" required></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>비밀번호 확인</td>
                            <td><input type="password" name="pw2" required></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>이름</td>
                            <td><input type="text" name="name" required></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>성별</td>
                            <td><input type="checkbox" name="sex" value="male" checked>남&nbsp;&nbsp;
                                <input type="checkbox" name="sex" value="female">여
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>전화번호</td>
                            <td><input type="text" name="tel" placeholder="010-1234-5678"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>이메일</td>
                            <td><input type="text" name="email" required></td>
                            <td></td>
                        </tr>
                    </table>
                    <div class="registerSubmit">
                        <input type="submit" value="가입"></input>
                        <button onClick="history.back(-1)">취소</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">&copy; 2024 Company, Inc</p>
  </footer>
</div>
</body>


</html>