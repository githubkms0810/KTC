<link rel="stylesheet" type="text/css" media="all" href="/public/subpage/css/004_freesupport/form_styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="/public/subpage/css/004_freesupport/form_switchery.min.css">
  <script type="text/javascript" src="/public/subpage/js/004_freesupport/form_switchery.min.js"></script>
  <script type="text/javascript" src="/public/subpage/js/004_freesupport/jquery.js"></script>

<!--프리랜서지원폼 시작-->

<div id="free_wrapper">
	<form action="/freelancer/add" method="post" class="freesupport" onsubmit="" style="max-width: 1024px; margin: 0 auto;">
	<div class="free_col-2">
	  <label style="padding: 20px 20px 10px; margin-top:2px;">
		이름
		<input name="name" value="<?=set_value('name')?>" placeholder="What is your full name?" id="free_name" tabindex="1" style="width: 100%;">
		<!-- <input name="name" value="<?=DEBUG === false ? set_value('name') : "이름테스트"?>" placeholder="What is your full name?" id="free_name" tabindex="1" style="width: 100%;"> -->
		<?=form_error("name")?>
		</label>
	</div>
	<div class="free_col-2">
	  <label style="padding: 20px 20px 23px;">
		생년월일</br>
		<select  name="birth_year" tabindex="2" style="width: 50%;">
			<option value="">연도</option>
			<option  <?=DEBUG === false ? set_select("birth_year","1939") : "selected"?>>1939</option>
			<option  <?=set_select("birth_year","1940")?>>1940</option>
			</select>
			
		  <select name="birth_month" tabindex="3" style="width: 24%;">
			<option value="">월</option>
			<?php for ( $i = 1 ; $i <=12 ; $i++ ): ?>
					<option <?=DEBUG === false ? set_select("birth_month",$i) : "selected"?>><?=$i?></option>
			<?php endfor; ?>
			</select>
			
		  <select name="birth_day" tabindex="4" style="width: 24%;">
			<option value="">일</option>
			<?php for ( $i = 1 ; $i <=31 ; $i++ ): ?>
				<option <?=DEBUG === false ? set_select("birth_day",$i) : "selected"?>><?=$i?></option>
			<?php endfor; ?>
		  </select>
	  </label>
	</div>



	<div class="free_col-3">
		<label style="padding: 20px 20px 14px;">성별
			<ul class="free_form-list" style="margin-bottom:11px">
	    	<li>
		  		<input type="radio" name="sex" value="남성" <?=set_checkbox("sex","남성",true)?> id="free_radio_sex1" >
		  		<label for="free_radio_sex1">남성</label>
		  	</li>
				<li>
		  			<input type="radio" name="sex" value="여성" <?=set_checkbox("sex","여성")?> id="free_radio_sex2">
		  			<label for="free_radio_sex2">여성</label>
				</li>
			</ul>
		</label>
	  </div>	
	<div class="free_col-3">
	  <label style="padding: 20px 20px 11px;">
		전화번호
		<?=form_error_one_of_multiple(["phone_first","phone_second","phone_third"])?>
	</br>
		<select name="phone_first" tabindex="5" style="width: 30%;">
			<option <?=set_select("phone_first","010")?> value="010">010</option>
			<option <?=set_select("phone_first","011")?> value="011">011</option>
			<option <?=set_select("phone_first","019")?> value="019">019</option>
		  </select>
		<input name="phone_second" value="<?=DEBUG === false ? set_value("phone_second") : "1234"?>"placeholder="1234" id="free_phone" tabindex="6" style="width: 33%;">
		<input name="phone_third" value="<?=DEBUG === false ? set_value("phone_third") : "5125"?>" placeholder="5678" id="free_phone"  tabindex="7" style="width: 33%;">
	  </label>
	</div>
	<div class="free_col-3">
	  <label style="padding: 20px 20px 11px;">
		Email<br/>
		<input name="email_first" value="<?=DEBUG === false ? set_value("email_first") : "emailtestr"?>" placeholder="your id" id="free_email" tabindex="8" style="width: 50%;">
		@
		<select name="email_second" tabindex="9" style="width: 40%;">
			<option value="naver.com" <?=set_select("email_second","naver.com")?>>naver.com</option>
			<option value="gmail.com" <?=set_select("email_second","gmail.com")?>>gmail.com</option>
			<option value="daum.net" <?=set_select("email_second","daum.net")?>>daum.net</option>
		  </select>
	</label>
	</div>



	<div class="free_col-3">
		<label style="padding: 20px 20px 10px;">
			주소
			<?=form_error_one_of_multiple(["address","address_detail"])?>
		</br>
		  <input  name="address" value="<?=DEBUG === false ? set_value("address") : "주소테스트"?>" placeholder="주소" readonly id="free_address" tabindex="10" style="width: 70%;">
		  <button style="width:25%;">찾기</button>
		  <input name="address_detail" value="<?=DEBUG === false ? set_value("address_detail") : "상세주소테스트"?>" placeholder="상세 주소" id="free_address" tabindex="11">		  
		</label>
	  </div>
	<div class="free_col-3">
		<label style="padding: 20px 20px 10px;">지원 분야
		<?=form_error("apply_field")?>		
	</br></br>
			<ul class="free_form-list" style="margin-bottom:14px">
			<!-- 		<center style="padding-bottom:10px; position:relative; margin-bottom:9px;">
<input name="" type="checkbox" class="free_js-switch" style="width: 100%;"> -->
				<li>
					<input type="radio" name="apply_field" value="번역" <?=set_checkbox("apply_field","번역",true)?> id="free_radio_apply1">
					<label for="free_radio_apply1">번역</label>
				</li>
				<li>
					<input type="radio" name="apply_field" value="통역" <?=set_checkbox("apply_field","통역")?> id="free_fadio_apply2">
		  		<label for="free_radio_apply2">통역</label>
				</li>
			</ul>
		</label>
		</div>

	<div class="free_col-3">
		<label style="padding: 20px 20px 10px;">
			계좌정보
			<?=form_error_one_of_multiple(["account_bank","account_number","account_name"])?>
		</br></br>
		  <select name="account_bank" tabindex="11" style="width: 23%;" >
			  <option value="">은행</option>
			  <option value="신한" <?=DEBUG === false ? set_select("account_bank","신한") : "selected"?>>신한</option>
			  <option value="국민" <?=set_select("account_bank","국민")?>>국민</option>
			</select>
		  <input name="account_number" value="<?=DEBUG === false ? set_value("account_number") : "1245967"?>" placeholder="계좌번호" id="free_phone" name="free_phone" tabindex="12" style="width: 50%;">
		  <input name="account_name" value="<?=DEBUG === false ? set_value("account_name") : "예금주테스트"?>" placeholder="예금주" id="free_phone" name="free_phone" tabindex="13" style="width:23%;">
		</label>
		</div>



	  <div class="free_col-2">
		<label style="padding: 20px 20px 20px;">
			사용 언어
			<?=form_error("languages[]")?>
			<ul class="free_form-list">
				<li>
					<input type="checkbox" name="languages[]" value="영어" <?=DEBUG === false ? set_checkbox("languages[]","영어") : "checked"?> id="free_checkbox-1">
					<label for="free_checkbox-1">영어</label>
				</li>
				<li>
					<input type="checkbox" name="languages[]" value="불어" <?=set_checkbox("languages[]","불어")?> id="free_checkbox-2">
					<label for="free_checkbox-2">불어</label>
				</li>
				<li>
					<input type="checkbox" name="languages[]" value="홍어" <?=set_checkbox("languages[]","홍어")?> id="free_checkbox-3">
					<label for="free_checkbox-3">홍어</label>
				</li>
				<li>
					<input type="checkbox" name="languages[]" value="광어" <?=set_checkbox("languages[]","광어")?> id="free_checkbox-4">
					<label for="free_checkbox-4">광어</label>
				</li>
				<li>
					<input type="checkbox" name="languages[]" value="우어" <?=set_checkbox("languages[]","우어")?> id="free_checkbox-5">
					<label for="free_checkbox-5">우어</label>
				</li>
			</ul>
		  <!-- <input name="" placeholder="What is your full name?" id="free_name" name="free_name" tabindex="1" style="width: 100%;"> -->
		</label>

	  </div>
	  <div class="free_col-2">
		<label style="padding: 20px 20px 20px;">
			언어 방향
		<?=form_error("translation_direction")?>
		</br>
		  <ul class="free_form-list" style="margin-bottom:0px">
		<li>
		  <input type="radio" name="translation_direction" value="외국어->한국어" <?=set_checkbox("translation_direction","외국어->한국어")?> checked id="free_radio_1" style="width:33%">
		  <label for="free_radio_1">외국어->한국어</label>
		  </li>
		<li>
		  <input type="radio" name="translation_direction" value="한국어->외국어" <?=set_checkbox("translation_direction","한국어->외국어")?> id="free_radio_2" style="width:33%">
		  <label for="free_radio_2">한국어->외국어</label>
		</li>
		<li>
		  <input type="radio" name="translation_direction" value="외국어<->한국어" <?=set_checkbox("translation_direction","외국어<->한국어")?> id="free_radio_3" style="width:33%">
		  <label for="free_radio_3">외국어<->한국어</label>
		</li>
	</ul>
		</label>
	  </div>
	  <div class="free_col-3">
			<label style="padding: 20px 20px 10px;">재직유무</label>
			<center style="padding-botto	m:10px; position:relative; margin-bottom:9px;">
				<input type="checkbox" name="is_employed" value="1" <?=DEBUG === false ? set_checkbox("is_employed","1") : "checked"?> class="free_js-switch" style="width: 100%;">
			</center>
		  </div>

	  <div class="free_col-3">
			<label style="padding: 20px 20px 10px;">학력 사항</br>
			<label>대학교</br>
			<input name="university" value="<?=DEBUG === false ? set_value("university") : "대학교이름 테스트"?>" placeholder="학교명"  id="free_schoolname" tabindex="1" style="width: 63%;">
			<input name="university_major" value="<?=DEBUG === false ? set_value("university_major") : "대학교전공 테스트"?>" placeholder="전공명" id="free_subname" tabindex="1" style="width: 33%;">
			</label>
			</label>
	  </div>
	  <div class="free_col-3">
			<label style="padding: 20px 20px 10px;">대학원</br>
			<input name="graduate_school" value="<?=DEBUG === false ? set_value("graduate_school") : "대학원이름 테스트"?>" placeholder="학교명" id="free_schoolname"  tabindex="1" style="width: 40%;">
			<select name="graduate_school_degree" tabindex="2" style="width: 23%;">
					<option value="석사" <?=set_select("graduate_school_degree","석사")?>>석사</option>
					<option value="박사" <?=set_select("graduate_school_degree","박사")?>>박사</option>
			</select>			
			<input name="graduate_school_major" value="<?=DEBUG === false ? set_value("graduate_school_major") : "대학원전공명테스트"?>" placeholder="전공명" id="free_subname" tabindex="1" style="width: 33%;">
			</label>
	  </div>

	  <div class="free_col-2">
			<label style="padding: 20px 20px 10px;">
			  첨부파일</br>
			  <input placeholder="파일명" readonly id="free_file" name="free_file" tabindex="1" style="width: 80%;">
			  <button style="width:15%;">첨부하기</button>
			</label>
		  </div>
		  <div class="free_col-2">
			<label style="padding: 20px 20px 10px;">
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
