<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/public/subpage/partnership/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/public/subpage/partnership/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/public/subpage/partnership/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/public/subpage/partnership/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/public/subpage/partnership/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/public/subpage/partnership/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/public/subpage/partnership/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/public/subpage/partnership/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/public/subpage/partnership/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/public/subpage/partnership/css/util.css">
	<link rel="stylesheet" type="text/css" href="/public/subpage/partnership/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<button class="contact100-btn-show">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</button>

		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form action="/contact/add" method="post" class="contact100-form validate-form">
				<span class="contact100-form-title">
					제휴 문의
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="회사명을 입력해주세요.">
					<span class="label-input100">회사</span>
					<input class="input100" type="text" name="company_name" placeholder="회사명" value="<?=DEBUG === true ? "테스트회사명": ""?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "이메일을 입력해주세요. 예)example@email.com">
					<span class="label-input100">이메일</span>
					<input class="input100" type="text" name="email" placeholder="이메일" value="<?=DEBUG === true ? "test@email.com": ""?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="담당자명을 입력해주세요.">
					<span class="label-input100">담당자 이름</span>
					<input class="input100" type="text" name="manager" placeholder="담당자명" value="<?=DEBUG === true ? "테스트 담당자명": ""?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="담당자 연락처를 입력해주세요.">
					<span class="label-input100">담당자 연락처</span>
					<input class="input100" type="text" name="manager_phone" placeholder="담당자 연락처" value="<?=DEBUG === true ? "테스트 담당자 연락처": ""?>">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "내용을 입력해주세요.">
					<span class="label-input100">내용</span>
					<textarea class="input100" name="desc" placeholder="내용을 입력해주세요."><?=DEBUG === true ? "테스트메세지": ""?></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>

			<span class="contact100-more">
				For any question contact our 24/7 call center: <span class="contact100-more-highlight">+001 345 6889</span>
			</span>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="/public/subpage/partnership/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/public/subpage/partnership/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/public/subpage/partnership/vendor/bootstrap/js/popper.js"></script>
	<script src="/public/subpage/partnership/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/public/subpage/partnership/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/public/subpage/partnership/vendor/daterangepicker/moment.min.js"></script>
	<script src="/public/subpage/partnership/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/public/subpage/partnership/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="/public/subpage/partnership/js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="/public/subpage/partnership/js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
