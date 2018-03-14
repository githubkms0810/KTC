
<!--projectform-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/public/subpage/css/005_project/style.css"> <!-- Resource style -->
<script src="/public/subpage/js/005_project/modernizr.js"></script> <!-- Modernizr -->
<!--// jQuery UI CSS파일--> 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" />  
<!--// jQuery 기본 js파일-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
<!--jQuery UI 라이브러리 js파일-->
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script> 


<!--프리랜서지원폼 시작-->
<section class="home-hero-freelancer">
    <h2 class="home-hero-title-freelancer">프리랜서 지원하기</h2>
    <p class="home-hero-des-freelancer">
        코리아 통번역 센터와 함께<br class="br_free">
        더 좋은 번역 산업의 미래를 만들어가고 싶으시다면<br class="br_free">
        아래 지원서를 작성해주세요
    </p>
    <a href="/translation_order/list" class="home-btn">포트폴리오 보러가기</a>
</section>
<div id="free_wrapper">
<form action="/translation_order/add" method="post"  enctype="multipart/form-data" class="project_form floating-labels" >
<fieldset>
	
	<legend>프리랜서 지원</legend>

	

	<!--개인일때-->
	<div class="icon">
		<label class="project_label" for="personal_name">이름</label>
		<input value="<?=DEBUG === false ? set_value("personal_name") : "개인이름테스트" ?>" class="user" type="text" name="personal_name" id="project_alonename" required>
	</div> 

	<div>
		<h4>생년월일</h4>

		<p class="project_select icon">
			<input value="<?=DEBUG === false ? set_value("personal_phone_third") : "개인번호3" ?>" placeholder="5678" class="budget" type="text" name="personal_phone_third" id="project_name" required>
		</p>
	</div>

  <div>
		<h4>성별</h4>

		<ul class="project_form-list">
			<li>
				<input type="radio" name="sex" value="남성" <?=set_checkbox("sex","남성",true)?> id="free_sex-1">
				<label for="free_sex-1">남성</label>
			</li>
			<li>
				<input type="radio" name="sex" value="여성" <?=set_checkbox("sex","여성")?> id="free_sex-2">
				<label for="free_sex-2">여성</label>
			</li>
		</ul>
	</div>

	<div>
		<h4>전화번호</h4>

		<p class="project_select icon">
			<input value="<?=DEBUG === false ? set_value("personal_phone_third") : "개인번호3" ?>" placeholder="5678" class="budget" type="text" name="personal_phone_third" id="project_name" required>
		</p>
	</div>

	<div class="icon">
		<label style="width:45%;" class="project_label" for="email">Email</label>
		<input value="<?=DEBUG === false ? set_value("email_first") : "emailtest@test.com" ?>" style="width:51.22%; display:inline-block;" class="email" type="email" name="email_first" id="project_email">
		&nbsp;
		<select style="width:45%; display:inline-block;" class="email" name="email_second">
			<option <?=set_select("email_second")?>>@naver.com</option>
			<option <?=set_select("email_second")?>>@gmail.com</option>
			<option <?=set_select("email_second")?>>@hanmail.net</option>
			<option <?=set_select("email_second")?>>@daum.net</option>
		</select>
	
	</div>

	<div>
		<div class="icon" style="width:79.31%; display:inline-block; margin-top:1px; margin-bottom:1px;">
			<label class="project_label" for="project_address">주소</label>
			<input value="<?=DEBUG === false ? set_value("interpret_new_address") : "주소테스트" ?>" class="email" type="text" name="interpret_new_address" id="sample4_roadAddress" readonly>
			<input value="<?=DEBUG === false ? set_value("interpret_old_address") : "지번주소테스트" ?>" id="sample4_jibunAddress"type="hidden" name="interpret_old_address">
			<input value="<?=DEBUG === false ? set_value("interpret_post_number") : "우편번호테스트" ?>" id="sample4_postcode"type="hidden" name="interpret_post_number">
		</div>
		<div style="width:20%; display:inline-block; margin-bottom:1px;" class="project_form">
			<button type="button " onclick="sample4_execDaumPostcode(); return false;" class="projectlang_add">추가</button>
		</div>
		<div class="icon" style="margin-top:20px;">
			<label class="project_label" for="project_detailaddress">상세 주소</label>
			<input value="<?=DEBUG === false ? set_value("interpret_address_detail") : "상세주소테스트" ?>" class="email" type="text" name="interpret_address_detail" id="project_detailaddress">
		</div>
	</div>

	<div>
		<h4>지원분야</h4>

		<ul class="project_form-list">
			<li>
				<input type="radio" name="translation" value="통역" <?=set_checkbox("translation","통역",true)?> id="free_translation-1">
				<label for="free_translation-1">통역</label>
			</li>
			<li>
				<input type="radio" name="translation" value="번역" <?=set_checkbox("translation","번역")?> id="free_translation-2">
				<label for="free_translation-2">번역</label>
			</li>
		</ul>
	</div>

	<div>
		<h4>계좌정보</h4>
		<p class="project_select icon">
			<input  value="<?=DEBUG === false ? set_value("fax_third") : "팩스번호3" ?>"  placeholder="111-1111-1111111" class="budget" type="text" name="fax_third" id="project_name" required>
		</p>
	</div>

		<div >
		<h4>사용언어</h4>
		<?=form_error("languages[]")?>
		<ul class="project_form-list">
			<?php $i=1; foreach ( $languages as $language ): ?>
			<li>
			<input type="checkbox" name="languages[]" value="<?=$language?>" <?=DEBUG === false ? set_checkbox("languages[]",$language) : "unchecked"?> id="free_checkbox-<?=$i?>">
			<label for="free_checkbox-<?=$i?>"><?=$language?></label>
		</li>
		<?php $i++; endforeach; ?>
		</ul>
	</div>

	<div>
		<h4>언어방향</h4>

		<ul class="project_form-list">
		<li>
		<input type="radio" name="translation_direction" value="외국어->한국어" <?=set_checkbox("translation_direction","외국어->한국어")?> checked id="free_radio_1">
		<label for="free_radio_1">외국어->한국어</label>
		</li>
	<li>
		<input type="radio" name="translation_direction" value="한국어->외국어" <?=set_checkbox("translation_direction","한국어->외국어")?> id="free_radio_2">
		<label for="free_radio_2">한국어->외국어</label>
	</li>
	<li>
		<input type="radio" name="translation_direction" value="외국어<->한국어" <?=set_checkbox("translation_direction","외국어<->한국어")?> id="free_radio_3">
		<label for="free_radio_3">외국어<->한국어</label>
	</li>
		</ul>
	</div>

	<div>
		<h4>재직유무</h4>

		<ul class="project_form-list">
		<li>
			<input type="radio" name="is_employed" value="유" <?=set_checkbox("is_employed","유")?> id="is_employed-1">
			<label for="is_employed-1">유</label>
		</li>
		<li>
			<input type="radio" name="is_employed" value="무" <?=set_checkbox("is_employed","무")?> id="is_employed-2">
			<label for="is_employed-2">무</label>
		</li>
		</ul>
	</div>






	<div>
		<h4>학력 사항</h4>

		<ul class="project_form-list" style="margin-bottom:1px;">
				  <li>
					  <input type="radio" name="is_school_graduate" value="1" onclick="div_OnOff(this.value,'school');" <?=set_checkbox("is_school_graduate","1",true)?> id="free_want-1">
					  <label for="free_want-1"><?php $equipment="요청"?>대학원</label>
				  </li>
					  
				  <li>
					  <input type="radio" name="is_school_graduate" value="0" onclick="div_OnOff(this.value,'school');" <?=set_checkbox("is_school_graduate","0")?> id="free_want-2" checked>
					  <label for="free_want-2"><?php $equipment="미요청"?>대학교</label>
				  </li>
			  </ul>

		<div class="icon">
		  <label class="project_label" for="company">대학명</label>
		  <input class="company" type="text" name="company" value="<?=DEBUG === false ? set_value("university") : "대학교이름 테스트"?>" id="free_schoolname">
		</div> 

		<div class="icon">
		  <label class="project_label" for="company">전공명</label>
		  <input class="company" type="text" name="company" value="<?=DEBUG === false ? set_value("university_major") : "대학교전공 테스트"?>" id="free_subname">
		</div>


		  <div id="school" style="display:none;">
			<div class="icon">
				<label style="width:45%;" class="project_label" for="company">대학원명</label>
				<input class="company" type="text" name="company" value="<?=DEBUG === false ? set_value("graduate_school") : "대학원이름 테스트"?>" style="width:51.22%; display:inline-block;" id="free_graduate_schoolname">
				&nbsp;
				<select style="width:45%; display:inline-block;" class="email" name="email_second">
					<option <?=set_select("email_second")?>>학위</option>	
					<option <?=set_select("email_second")?>>석사</option>
					<option <?=set_select("email_second")?>>박사</option>
					<option <?=set_select("email_second")?>>학사</option>
					<option <?=set_select("email_second")?>>헤헤</option>
				</select>
			</div>
			<div class="icon">
		  		<label class="project_label" for="company">전공명</label>
		  		<input class="company" type="text" name="company" value="<?=DEBUG === false ? set_value("graduate_school_major") : "대학원전공 테스트"?>" id="free_graduate_schoolsubname">
			</div>

		</div>

		  <script>
			  function div_OnOff(v,id){
				   // 라디오 버튼 value 값 조건 비교
				   if(v == "1"){
					   document.getElementById(id).style.display = ""; // 보여줌
				   }
				   else{
					   document.getElementById(id).style.display = "none"; // 숨김
				   }
			  }
		  </script>

	<!--첨부파일폼시작-->
	<div class="row">
		<div class="col s12">
			<input multiple="multiple" type="file" name="files[]" />
			<!-- <iframe class="iframe_dynamic_height" height="100px;" width="100%" maginwidth="0" marginheight="0" frameborder="0"  scrolling="no"  src="/file/upload" ></iframe>
			<script  src="/public/subpage/js/000_fileuproad/iframe-dynmic-height.js"></script> -->
		</div>
	</div>
	<!--첨부파일폼 끝-->

	<div>
		<input type="submit" value="신청">
	</div>
</fieldset>
</form>
	</div>
  <script type="text/javascript">
  var elems = Array.prototype.slice.call(document.querySelectorAll('.free_js-switch'));
  
  elems.forEach(function(html) {
	var switchery = new Switchery(html);
  });
  </script>
<!--프리랜서지원폼 끝-->  
<script src="/public/subpage/js/005_project/main.js"></script>

<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
<script>
  //본 예제에서는 도로명 주소 표기 방식에 대한 법령에 따라, 내려오는 데이터를 조합하여 올바른 주소를 구성하는 방법을 설명합니다.
  function sample4_execDaumPostcode() {
	  new daum.Postcode({
		  oncomplete: function(data) {
			  // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

			  // 도로명 주소의 노출 규칙에 따라 주소를 조합한다.
			  // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
			  var fullRoadAddr = data.roadAddress; // 도로명 주소 변수
			  var extraRoadAddr = ''; // 도로명 조합형 주소 변수

			  // 법정동명이 있을 경우 추가한다. (법정리는 제외)
			  // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
			  if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
				  extraRoadAddr += data.bname;
			  }
			  // 건물명이 있고, 공동주택일 경우 추가한다.
			  if(data.buildingName !== '' && data.apartment === 'Y'){
				 extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
			  }
			  // 도로명, 지번 조합형 주소가 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
			  if(extraRoadAddr !== ''){
				  extraRoadAddr = ' (' + extraRoadAddr + ')';
			  }
			  // 도로명, 지번 주소의 유무에 따라 해당 조합형 주소를 추가한다.
			  if(fullRoadAddr !== ''){
				  fullRoadAddr += extraRoadAddr;
			  }

			  // 우편번호와 주소 정보를 해당 필드에 넣는다.
			  document.getElementById('sample4_postcode').value = data.zonecode; //5자리 새우편번호 사용
			  document.getElementById('sample4_roadAddress').value = fullRoadAddr;
			  document.getElementById('sample4_jibunAddress').value = data.jibunAddress;

			  // 사용자가 '선택 안함'을 클릭한 경우, 예상 주소라는 표시를 해준다.
			  if(data.autoRoadAddress) {
				  //예상되는 도로명 주소에 조합형 주소를 추가한다.
				  var expRoadAddr = data.autoRoadAddress + extraRoadAddr;
				  document.getElementById('guide').innerHTML = '(예상 도로명 주소 : ' + expRoadAddr + ')';

			  } else if(data.autoJibunAddress) {
				  var expJibunAddr = data.autoJibunAddress;
				  document.getElementById('guide').innerHTML = '(예상 지번 주소 : ' + expJibunAddr + ')';

			  } else {
				  document.getElementById('guide').innerHTML = '';
			  }
		  }
	  }).open();
  }
</script>