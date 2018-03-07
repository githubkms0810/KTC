<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="/public/subpage/img/favicon.ico">
<link rel="stylesheet" type="text/css" media="all" href="/public/subpage/css/reset/styles.css">
<link rel="stylesheet" type="text/css" media="all" href="/public/subpage/css/004_freesupport/form_styles.css">
<link rel="stylesheet" type="text/css" media="all" href="/public/subpage/css/004_freesupport/form_switchery.min.css">
<script type="text/javascript" src="/public/subpage/js/004_freesupport/form_switchery.min.js"></script>
<title>Mediumish - A Medium style template by WowThemes.net</title>
<!-- Bootstrap core CSS -->
<link href="/public/subpage/css/002_sub/customer/bootstrap.min.css" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="/public/subpage/css/002_sub/customer/mediumish.css" rel="stylesheet">


<!--freesupport form-->


</head>
<body>


<!--프리랜서지원폼 시작-->

<div id="free_wrapper">
	<h1 class="free_title">Horizontal Responsive Form</h1>
	<form action="/freerancer/add" method="post" class="freesupport" style="max-width: 1024px; margin: 0 auto;">
	<div class="free_col-2">
	  <label>
		이름
		<input name="name" placeholder="What is your full name?" id="free_name" tabindex="1" style="width: 100%;">
	  </label>
	</div>
	<div class="free_col-2">
	  <label>
		생년월일</br>
		<select  ame="birth_year" tabindex="2" style="width: 50%;">
			<option>연도</option>
			<option>1939</option>
			<option>1940</option>
		  </select>
		  <select name="birth_month" tabindex="3" style="width: 24%;">
			<option>월</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
		  </select>
		  <select name="birth_day" tabindex="4" style="width: 24%;">
			<option>일</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
			<option>25</option>
			<option>26</option>
			<option>27</option>
			<option>28</option>
			<option>29</option>
			<option>30</option>
			<option>31</option>
		  </select>
	  </label>
	</div>
	<div class="free_col-3">
		<label>성별</label>
				<center style="position:relative; margin-bottom:9px;">
				<!-- <input name="" type="checkbox" class="free_js-switch" style="width: 100%;"> -->
            남성<input type="radio" name ="sex" value="남성">
            여성<input type="radio" name ="sex" value="여성">
        </center>
	  </div>	
	<div class="free_col-3">
	  <label>
		전화번호</br>
		<select name="phone_first" tabindex="5" style="width: 30%;">
			<option>010</option>
			<option>011</option>
			<option>019</option>
		  </select>
		<input name="phone_second" placeholder="1234" id="free_phone" tabindex="6" style="width: 35%;">
		<input name="phone_third" placeholder="5678" id="free_phone"  tabindex="7" style="width: 35%;">
	  </label>
	</div>
	<div class="free_col-3">
	  <label>
		Email<br/>
		<input name="email_first" placeholder="your id" id="free_email" tabindex="8" style="width: 50%;">
		@
		<select name="email_second" tabindex="9" style="width: 40%;">
			<option>naver.com</option>
			<option>gmail.com</option>
			<option>daum.net</option>
		  </select>
	</label>
	</div>

	<div class="free_col-3">
		<label>
		  주소</br>
		  <input  name="address" placeholder="주소" readonly id="free_address" tabindex="10" style="width: 70%;">
		  <button style="width:30%;">찾기</button>
		  <input name="address_detail" placeholder="상세 주소" id="free_address" tabindex="11" style="width: 70%;">		  
		</label>
	  </div>
	<div class="free_col-3">
		<label>지원 분야</br></br></label>
		<center style="padding-bottom:10px; position:relative; margin-bottom:9px;">
			<!-- <input name="" type="checkbox" class="free_js-switch" style="width: 100%;"> -->
			번역<input type="radio" name="apply_field" value="번역">
			통역<input type="radio" name="apply_field" value="통역">
		</center>
	  </div>
	<div class="free_col-3">
		<label>
		  계좌정보</br></br>
		  <select name="account_bank" tabindex="11" style="width: 25%;" >
			  <option>은행</option>
			  <option>신한</option>
			  <option>국민</option>
			</select>
		  <input name="account_number" placeholder="계좌번호" id="free_phone" name="free_phone" tabindex="12" style="width: 50%;">
		  <input name="account_name" placeholder="예금주" id="free_phone" name="free_phone" tabindex="13" style="width:25%;">
		</label>
		</div>
	  <div class="free_col-2">
		<label>
			사용 언어
			<input name="language[]" value="영어" type="checkbox" >영어
			<input name="language[]" value="불어" type="checkbox"  >불어
		  <!-- <input name="" placeholder="What is your full name?" id="free_name" name="free_name" tabindex="1" style="width: 100%;"> -->
		</label>
	  </div>
	  <div class="free_col-2">
		<label>
		  언어 방향</br>

		  <ul class="free_form-list" style="margin-bottom:0px">
		<li>
		  <input type="radio" name="translation_direction" value="외국어->한국어" id="free_radio_1" style="width:33%">
		  <label for="free_radio">외국어->한국어</label>
		  </li>
		<li>
		  <input type="radio" name="translation_direction" value="한국어->외국어" id="free_radio_2" style="width:33%">
		  <label for="free_radio">한국어->외국어</label>
		</li>
		<li>
		  <input type="radio" name="translation_direction" value="외국어<->한국어" id="free_radio_3" style="width:33%">
		  <label for="free_radio">외국어<->한국어</label>
		</li>
	</ul>
		</label>
	  </div>
	  <div class="free_col-3">
			<label>재직유무</label>
			<center style="padding-botto	m:10px; position:relative; margin-bottom:9px;">
				<input type="checkbox" name="is_employed" value="1" class="free_js-switch" style="width: 100%;">
			</center>
		  </div>

	  <div class="free_col-3">
			<label>학력 사항</br>
			<label>대학교</br>
			<input name="university" placeholder="학교명" id="free_schoolname" tabindex="1" style="width: 65%;">
			<input name="university_major" placeholder="전공명" id="free_subname" tabindex="1" style="width: 35%;">
			</label>
			</label>
	  </div>
	  <div class="free_col-3">
			<label>대학원</br>
			<input name="graduate_school" placeholder="학교명" id="free_schoolname"  tabindex="1" style="width: 40%;">
			<select name="graduate_school_degree" tabindex="2" style="width: 25%;">
					<option>석사</option>
					<option>박사</option>
			</select>			
			<input name="graduate_school_major" placeholder="전공명" id="free_subname" tabindex="1" style="width: 35%;">
			</label>
	  </div>

	  <div class="free_col-2">
			<label>
			  첨부파일</br>
			  <input placeholder="파일명" readonly id="free_file" name="free_file" tabindex="1" style="width: 80%;">
			  <button style="width:20%;">첨부하기</button>
			</label>
		  </div>
		  <div class="free_col-2">
			<label>
				<input placeholder="파일명.jpg" id="free_filelist" name="free_filelist" tabindex="1" style="width: 80%;">
				<button style="width:20%;">삭제하기</button>
			</label>
		  </div>
	
	<div class="free_col-submit">
	  <button type="submit" class="free_submitbtn">Submit Form</button>
	</div>
	
	</form>
	</div>
  <script type="text/javascript">
  var elems = Array.prototype.slice.call(document.querySelectorAll('.free_js-switch'));
  
  elems.forEach(function(html) {
	var switchery = new Switchery(html);
  });
  </script>
<!--프리랜서지원폼 끝-->  





<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/public/subpage/js/002_sub/customer/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="/public/subpage/js/002_sub/customer/bootstrap.min.js"></script>
<script src="/public/subpage/js/002_sub/customer/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
