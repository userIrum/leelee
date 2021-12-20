<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HASEM</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
  <!-- CDN방식 -->

  <link rel="stylesheet" href="./css/main_footer_centerd.css">


<link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Pacifico&display=swap" rel="stylesheet">
  <style media="screen">
      .SEJOONGIS {
      /* position:fixed; */
      position: absolute;
      right:30px;
      /* left:500px; */
      bottom:0px;
      /* height:60px; */
      /* width:100%; */
      /* background:grey; */
      color: black; }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="content">
<div class="login-box">
  <div class="login-logo">
    <section>
      <h2 style="font-family: 'Black Han Sans', sans-serif;" id="example11"></h2>
    </section>
    <body class="hold-transition login-page" style="background-image: url('./pages/img/technology_bg01.png');">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"> ID와 비밀번호를 사용해 로그인222</p>

<!-- 데이터 이동 폼 시작 -->
      <form action="./login.php" method="post">
        <div class="input-group mb-3">
          <input name="id" type="text" class="form-control" placeholder="ID">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="pwval" name="passwd" type="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>

            </div>

          </div>

        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <!-- 로그인 버튼 -->
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
      <div class="row">

        <!-- /.col -->
      </div>
      <!-- row -->
    </div>
    <!-- /.login-card-body -->
  </div>
  <!-- card -->
</div>
<!-- /.login-box -->
</div>
<footer class="footer-basic-centered">
<span id="passwdstyle" style="color:#FFFFFF; font-size:8px;">비밀번호는 영문+숫자+특수기호 8자리 이상으로 입력하셔야 합니다.</span>
    <p class="footer-company-motto" style="text-align: center;"><span style="color:black;">H<span style="color:#FFFFFF;">ealth</span>  A<span style="color:#FFFFFF;">nd</span>  S<span style="color:#FFFFFF;">ustainability</span>
  E<span style="color:#FFFFFF;">quipment</span>  M<span style="color:#FFFFFF;">anufacture</span></span></p>

    <p class="footer-links" style="text-align:center;">
      <a href="http://hasemkorea.com/">HASEM</a>
      <!-- ·
      <a href="http://www.SEJOONGIS .co.kr/">SEJOONGIS </a>
      ·
      <a href="https://www.e-waterkorea.com/">WATERKOREA</a>
      ·
      <a href='tel:010-8670-0247'>HOTLINE</a> -->
    </p>

    <div class="SEJOONGIS ">
      <p class="footer-company-name">COPYRIGHT ⓒ SEJOONGIS </p>
    </div>


  </footer>


<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<script src="js/typeit.min.js"></script>

<script>

  new TypeIt("#example11", {
    speed: 50,
    waitUntilVisible: true,
    loop: false
  })
  .type("EM")
  .pause(100)
  .move(-4)
  .pause(500)
  .type("HA")
  .pause(500)
  .move(4)
  .delete(4)
  .pause(500)

  .type("HASEM")
  .pause(1000)
  .move(1)
  .go();
</script>




<script type="text/javascript">

$("#passwdstyle").hide();
$("#pwval").keydown(function (event) {
		//엔터키를 클릭시
$("#passwdstyle").show();
});
var test = 'ddd';
$("#passwdstyle").hide();
</script>
</body>
</html>
