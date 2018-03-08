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
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<title>Mediumish - A Medium style template by WowThemes.net</title>
<!-- Bootstrap core CSS -->
<link href="/public/subpage/css/002_sub/customer/bootstrap.min.css" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="/public/subpage/css/002_sub/customer/mediumish.css" rel="stylesheet">



<!--projectform-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/public/subpage/css/005_project/style.css"> <!-- Resource style -->
	<script src="/public/subpage/js/005_project/modernizr.js"></script> <!-- Modernizr -->
  
<!--freesupport form-->



</head>
<body>
	<form action="/translation_order/add" method="post" class="project_form floating-labels" >
		<fieldset>
			
			<legend><?=$type?></legend>
			<!-- 예제 시작-->
			<?php if ( $type === "통역" ): ?>
			<div>
				통역장비 input폼이 들어갈 자라입니다.
			</div>
			<!-- 예제 끝-->
			<?php endif; ?>
			<script>

				$(document).ready(function() {
                  
				  //검색하고 나서 결과를 보여줄때 검색 조건을 그대로 노출
				  //if("${buyer}" == "회사"){ //buyer 가 회사 일 경우 셋팅
				  if("buyer" == "회사"){
					
					  //라디오 버튼 값으로 선택
					  $('input:radio[name="buyer"][value="회사"]').prop('checked', true);
					  //개인 hide
					  $( "#viewPersonal" ).hide();
					  //회사 show
					  $( "#viewCompany" ).show();
				  }

				$("input[name='buyer']:radio").change(function () {
					//라디오 버튼 값을 가져온다.
					var buyer = this.value;
									  
					if(buyer == "회사"){//회사인 경우
						//회사 일때 개인 hide
						$( "#viewPersonal" ).hide();
						//회사 일때 회사 카테고리 show
						$( "#viewCompany" ).show();
					}
					else if(buyer == "개인"){//개인인 경우
						//개인 일때 개인 카테고리 show
						$( "#viewPersonal" ).show();
						//개인 일때 회사 카테고리 hide
						$( "#viewCompany" ).hide();
					}
									  
					});
				});
				
			</script>
			<div>
				<h4>Project type</h4>

				<ul class="project_form-list">
					<li>
						<input type="radio" name="buyer" value="회사" <?=set_checkbox("buyer","회사",true)?> id="project_select-1">
						<label for="project_select-1">회사</label>
					</li>
					<li>
						<input type="radio" name="buyer" value="개인" <?=set_checkbox("buyer","개인")?> id="project_select-2">
						<label for="project_select-2">개인</label>
					</li>
				</ul>
			</div>

			<div id="viewCompany">

			<div class="icon">
				<label class="project_label" for="company">회사</label>
				<input class="company" type="text" name="company" value="<?=DEBUG === false ? set_value("company") : "회사이름테스트" ?>" id="project_company" required>
			</div> 
			
			<div class="icon">
				<label class="project_label" for="department">부서</label>
				<input class="company" type="text" name="department" value="<?=DEBUG === false ? set_value("department") : "부서이름테스트" ?>" id="project_depart" required>
			</div>
			
			<div class="icon">
				<label class="project_label" for="manager">담당자</label>
				<input class="user" type="text" name="manager"  value="<?=DEBUG === false ? set_value("manager") : "매니저이름 테스트" ?>" id="project_name" required>
			</div> 

			<div>
				<h4>회사 전화번호</h4>
	
				<p class="project_select icon">
					<select name="company_phone_first" style="width:32.5%; display:inline-block;" class="budget">
						<option <?=set_select("company_phone_first","010")?>>010</option>
						<option <?=set_select("company_phone_first","011")?>>011</option>
						<option <?=set_select("company_phone_first","019")?>>019</option>
						<option <?=set_select("company_phone_first","018")?>>018</option>
					</select>
					<input value="<?=DEBUG === false ? set_value("company_phone_second") : "회사번호2" ?>" placeholder="1234" style="width:33%; display:inline-block;" class="budget" type="text" name="company_phone_second" id="project_name" required>
					<input value="<?=DEBUG === false ? set_value("company_phone_third") : "회사번호3" ?>" placeholder="5678" style="width:33%; display:inline-block;" class="budget" type="text" name="company_phone_third" id="project_name" required>
				</p>
			</div>

			<div>
				<h4>담당자 전화번호</h4>
	
				<p class="project_select icon">
					<select name="manager_phone_first" style="width:32.5%; display:inline-block;" class="budget">
						<option <?=set_select("manager_phone_first","010")?>>010</option>
						<option <?=set_select("manager_phone_first","010")?>>011</option>
						<option <?=set_select("manager_phone_first","010")?>>019</option>
						<option <?=set_select("manager_phone_first","010")?>>018</option>
					</select>
					<input value="<?=DEBUG === false ? set_value("company_phone_second") : "매니저번호2" ?>" placeholder="1234" style="width:33%; display:inline-block;" class="budget" type="text" name="manager_phone_second" id="project_name" required>
					<input value="<?=DEBUG === false ? set_value("company_phone_second") : "매니저번호3" ?>" placeholder="5678" style="width:33%; display:inline-block;" class="budget" type="text" name="manager_phone_third" id="project_name" required>
				</p>
			</div>
			</div>
			<!--개인일때-->
			<div  id="viewPersonal">
			<div class="icon">
				<label class="project_label" for="personal_name">이름</label>
				<input value="<?=DEBUG === false ? set_value("personal_name") : "개인이름테스트" ?>" class="user" type="text" name="personal_name" id="project_alonename" required>
			</div> 

			<div>
				<h4>전화번호</h4>
	
				<p class="project_select icon">
					<select name="personal_phone_first" style="width:32.5%; display:inline-block;" class="budget">
						<option <?=set_select("personal_phone_first","010")?>>010</option>
						<option <?=set_select("personal_phone_first","010")?>>011</option>
						<option <?=set_select("personal_phone_first","010")?>>019</option>
						<option <?=set_select("personal_phone_first","010")?>>018</option>
					</select>
					<input value="<?=DEBUG === false ? set_value("personal_phone_second") : "개인번호2" ?>" placeholder="1234" style="width:33%; display:inline-block;" class="budget" type="text" name="personal_phone_second" id="project_name" required>
					<input value="<?=DEBUG === false ? set_value("personal_phone_third") : "개인번호3" ?>" placeholder="5678" style="width:33%; display:inline-block;" class="budget" type="text" name="personal_phone_third" id="project_name" required>
				</p>
			</div>
			</div>
		</fieldset>
	
		<fieldset>
			<legend>공통사항</legend>

			<div>
				<h4>FAX</h4>
				<p class="project_select icon">
					<select name="fax_first" style="width:32.5%; display:inline-block;" class="budget">
						<option <?=set_select("fax_first","010")?>>010</option>
						<option <?=set_select("fax_first","010")?>>011</option>
						<option <?=set_select("fax_first","010")?>>019</option>
						<option <?=set_select("fax_first","010")?>>018</option>
					</select>
					<input  value="<?=DEBUG === false ? set_value("fax_second") : "팩스번호2" ?>"  placeholder="1234" style="width:33%; display:inline-block;" class="budget" type="text" name="fax_second" id="project_name" required>
					<input  value="<?=DEBUG === false ? set_value("fax_third") : "팩스번호3" ?>"  placeholder="5678" style="width:33%; display:inline-block;" class="budget" type="text" name="fax_third" id="project_name" required>
				</p>
				<ul class="project_form-list">
					<li>
						<input type="checkbox" name="is_exist_fax" value="0" <?=set_checkbox("is_exist_fax","0")?> id="project_fax-1">
						<label for="project_fax-1">없음</label>
					</li>
				</ul>
			</div>

			<div class="icon">
				<label style="width:45%;" class="project_label" for="project_email">Email</label>
				<input value="<?=DEBUG === false ? set_value("email_first") : "emailtest@test.com" ?>" style="width:51.22%; display:inline-block;" class="email" type="email" name="email_first" id="project_email">
				@
				<select style="width:45%; display:inline-block;" class="email">
					<option <?=set_select("email_second")?>>naver.com</option>
					<option <?=set_select("email_second")?>>gmail.com</option>
					<option <?=set_select("email_second")?>>hanmail.net</option>
					<option <?=set_select("email_second")?>>daum.net</option>
				</select>
			
			</div>

			<?php if ( $type === "통역" ): ?>
			<div>

			<div>
				<h4>통역 형태</h4>
	
				<p class="project_select icon">
					<select name="interpret_kind" class="budget">
						<option value="">통역형태</option>
						<option <?=DEBUG === true ? "selected" : ""?> <?=set_select("interpret_kind")?>>포도</option>
						<option <?=set_select("interpret_kind")?>>사과</option>
						<option <?=set_select("interpret_kind")?>>오렌지</option>
					</select>
				</p>
			</div> 

			<div>
				<h4>통역 사항</h4>
				<p class="project_select icon">
					<select name="translation_kind" class="budget">
						<option value="">통역형태</option>
						<option  <?=set_select("translation_kind")?>>이것</option>
						<option <?=DEBUG === true ? "selected" : ""?> <?=set_select("translation_kind")?>>저것</option>
						<option <?=set_select("translation_kind")?>>그것</option>
					</select>
				</p>
			</div>

			</div>
			<?php endif; ?>

			<?php if ( $type === "번역" ): ?>
			<div>

			<div>
				<h4>통역 사항</h4>
				<p class="project_select icon">
					<select name="translation_kind" class="budget">
						<option value="">통역형태</option>
						<option  <?=set_select("translation_kind")?>>이것</option>
						<option <?=DEBUG === true ? "selected" : ""?> <?=set_select("translation_kind")?>>저것</option>
						<option <?=set_select("translation_kind")?>>그것</option>
					</select>
				</p>
			</div>

			</div>
			<?php endif; ?>


			<div>
				<h4>번역 언어쌍</h4>
	
				<p class="project_select icon">
					<select name="translation_before" class="budget" style="width:49.7%; display:inline-block;">
						<option value="">시작언어</option>
						<option <?=set_select("translation_before")?>>포도</option>
						<option  <?=set_select("translation_before")?>>사과</option>
						<option <?=DEBUG === true ? "selected" : ""?> <?=set_select("translation_before")?>>오렌지</option>
					</select>
					<select name="translation_after" class="budget" style="width:49.6%; display:inline-block;">
						<option value="">번역언어</option>
						<option <?=DEBUG === true ? "selected" : ""?> <?=set_select("translation_after")?>>포도</option>
						<option <?=set_select("translation_after")?>>사과</option>
						<option <?=set_select("translation_after")?>>오렌지</option>
					</select>
					<div class="project_form" style="width:20%; margin-top:1px;">
						<button class="projectlang_add">추가</button>
				  </div>
				</p>
			</div>

			<?php if ( $type === "통역" ): ?>
			<div>

			<div>
				<h4>통역 장소</h4>
				<div class="icon" style="width:79.31%; display:inline-block; margin-top:1px; margin-bottom:1px;">
					<label class="project_label" for="project_address">주소</label>
					<input value="<?=DEBUG === false ? set_value("interpret_address") : "주소테스트" ?>" class="email" type="text" name="interpret_address" id="project_address" readonly>
				</div>
				<div style="width:20%; display:inline-block; margin-bottom:1px;" class="project_form">
					<button class="projectlang_add">추가</button>
				</div>
				<div class="icon" style="margin-top:1px;">
					<label class="project_label" for="project_detailaddress">상세 주소</label>
					<input value="<?=DEBUG === false ? set_value("interpret_address_detail") : "상세주소테스트" ?>" class="email" type="text" name="interpret_address_detail" id="project_detailaddress">
				</div>
			</div>

			<div>
				<h4>통역 일정</h4>

				<div class="icon">
					<input type="text" value="<?=DEBUG === false ? set_value("interpret_start_date") : "시작날짜테스트" ?>" placeholder="시작 날짜" style="width:48.5%; display:inline-block;" class="email" name="interpret_start_date" id="project_startdate">
					~
					<input type="text" value="<?=DEBUG === false ? set_value("interpret_end_date") : "종료날자테스트" ?>" placeholder="종료 날짜" style="width:48.5%; display:inline-block;" class="email" name="interpret_end_date" id="project_enddate">
			
				</div>
			</div>

			<div>
				<h4>통역예산</h4>
	
				<div class="icon" style="margin-bottom:10px;">
					<input type="text" value="<?=DEBUG === false ? set_value("budget") : "예산테스트" ?>" placeholder="$1,000" class="email" name="budget" id="project_budget">			
				</div>
					<ul class="project_form-list">
						<li>
							<input class="project_form-list" type="checkbox" name="is_exist_budget" value="0" <?=set_checkbox("is_exist_budget","0")?> id="project_budgetyet">
							<label for="project_budgetyet">미정</label>
						</li>
					</ul>
			

			</div>

			<div style="margin-bottom:1px;">
				<h4>통역 장비</h4>
	
				<ul class="project_form-list" style="margin-bottom:1px;">
					<li>
						<input type="radio" name="is_need_equiment" value="1" onclick="div_OnOff(this.value,'equip_num');" <?=set_checkbox("is_need_equiment","1",true)?> id="project_want-1">
						<label for="project_want-1"><?php $equipment="요청"?>요청</label>
					</li>
						
					<li>
						<input type="radio" name="is_need_equiment" value="0" onclick="div_OnOff(this.value,'equip_num');" <?=set_checkbox("is_need_equiment","0")?> id="project_want-2" checked>
						<label for="project_want-2"><?php $equipment="미요청"?>미요청</label>
					</li>
				</ul>
				
			</div>
			
			<div id="equip_num" style="display:none; margin-top:1px; margin-bottom:50px;">
				<h4>장비갯수</h4>
				<select name="num_equiment">
					<?php for ( $i = 1 ; $i <= 10 ; $i++ ): ?>
						<option><?=$i?></option>
					<?php endfor; ?>
				</select>
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

			<div>
				<h4>통역사 프로필</h4>
	
				<ul class="project_form-list">
					<li>
						<input type="radio" name="is_need_profile" value="1" <?=set_checkbox("is_need_profile","1")?> id="project_profile-1" checked>
						<label for="project_profile-1">요청</label>
					</li>
						
					<li>
						<input type="radio" name="is_need_profile" value="0" <?=set_checkbox("is_need_profile","0")?> id="project_profile-2">
						<label for="project_profile-2">미요청</label>
					</li>
				</ul>
			</div>

			</div>
			<?php endif; ?>

			<?php if ( $type === "번역" ): ?>
			<div>

			<div>
				<h4>희망 납기일</h4>

				<div class="icon">
					<input type="text" value="<?=DEBUG === false ? set_value("interpret_pay_date") : "납기일테스트" ?>" placeholder="희망 납기일" class="email" name="interpret_pay_date" id="project_paydate">
				</div>
			</div>

			</div>

			<div>
				<h4>번역 예산</h4>
	
				<div class="icon" style="margin-bottom:10px;">
					<input type="text" value="<?=DEBUG === false ? set_value("budget") : "예산테스트" ?>" placeholder="$1,000" class="email" name="budget" id="project_budget">			
				</div>
					<ul class="project_form-list">
						<li>
							<input class="project_form-list" type="checkbox" name="is_exist_budget" value="0" <?=set_checkbox("is_exist_budget","0")?> id="project_budgetyet">
							<label for="project_budgetyet">미정</label>
						</li>
					</ul>
			
			</div>

			<?php endif; ?>


			<div>
				<h4>요구사항</h4>

				<div class="icon">
					<input type="text" placeholder="내용" class="budget" name="requirements" value="<?=DEBUG === false ? set_value("requirements") : "요구사항테스트" ?>" id="project_reque">
				</div>
			</div>
	
			<div>
				<ul class="project_form-list">
					<li>
						<input type="checkbox" name="is_get_tax_bill" value="1" <?=set_checkbox("is_get_tax_bill","1")?> id="project_checkbox-1">
						<label for="project_checkbox-1">세금 계산서</label>
					</li>
	
					<li>
						<input type="checkbox" name="is_get_cash_receipt" value="1" <?=set_checkbox("is_get_cash_receipt","1")?> id="project_checkbox-2">
						<label for="project_checkbox-2">현금 영수증</label>
					</li>
	
					<li>
						<input type="checkbox" name="is_use_confidential" value="1" <?=set_checkbox("is_use_confidential","1")?> id="project_checkbox-3">
						<label for="project_checkbox-3">기밀 유지</label>
					</li>
				</ul>
			</div>
	
			<div class="icon">
				<label class="project_label" for="project_textarea">Project description</label>
				  <textarea class="message" name="message" id="project_textarea" required><?=DEBUG === false ? set_value("message") : "메세지테스트" ?></textarea>
			</div>
	
			<div>
				  <input type="submit" value="Send Message">
			</div>
		</fieldset>
	</form>



<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/public/subpage/js/002_sub/customer/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="/public/subpage/js/002_sub/customer/bootstrap.min.js"></script>
<script src="/public/subpage/js/002_sub/customer/ie10-viewport-bug-workaround.js"></script>
<script src="/public/subpage/js/005_project/jquery-2.1.1.js"></script>
<script src="/public/subpage/js/005_project/main.js"></script>
</body>
</html>
