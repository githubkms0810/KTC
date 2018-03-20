



<div class="container-contact100" style="margin-top:1px; position:fixed;display:none;">
		

		<div  class="wrap-contact100" >
			<button class="contact100-btn-hide" onclick="$('.container-contact100').css('display','none')">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form action="/contact/add" method="post" class="contact100-form validate-form">
				<span class="contact100-form-title" style="font-weight:bold;">
					제휴 문의
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="회사명을 입력해주세요.">
					<span class="label-input100">회사</span>
					<input class="input100" type="text" name="company_name" value="<?=DEBUG === true ? "테스트회사명": ""?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "E-mail을 입력해주세요.">
					<span class="label-input100">E-mail</span>
					<input class="input100" type="text" name="email" value="<?=DEBUG === true ? "test@email.com": ""?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="담당자를 입력해주세요.">
					<span class="label-input100">담당자</span>
					<input class="input100" type="text" name="manager" value="<?=DEBUG === true ? "테스트 담당자명": ""?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="담당자 연락처를 입력해주세요.">
					<span class="label-input100">담당자 연락처</span>
					<input class="input100" type="text" name="manager_phone" value="<?=DEBUG === true ? "테스트 담당자 연락처": ""?>">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "내용을 입력해주세요.">
					<span class="label-input100">내용</span>
					<textarea class="input100" name="desc"><?=DEBUG === true ? "테스트메세지": ""?></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							문의하기
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>

			<span class="contact100-more">
				빠른 답변을 원하시면 전화로 문의해주세요! <span class="contact100-more-highlight">02-6738-8220</span>
			</span>
		</div>
	</div>


	<div id="dropDownSelect1"></div>




<?php foreach ( $portfolioes as $portfolio ): ?>
<!-- <li class="home-portfolio__itemlist" style="cursor:pointer;" onclick="location.href='/translation_order/<?=$portfolio->id?>';"> -->
<li class="home-portfolio__itemlist" style="cursor:pointer;" onclick="$('.wrap-contact100').css('display','block'); $('.container-contact100').css('display','block');return false;" >
    <img src="<?=$portfolio->image?>">
    <!-- <a href="/translation_order/<?=$portfolio->id?>">열람하기</a> -->
    <a href="#">열람하기</a>
    <?php if ( DEBUG === true ): ?>
        <h1><?=$portfolio->id?></h1>
    <?php endif; ?>
</li>
<?php endforeach; ?>
<div>
    <a href="/translation_order/listWithJscroll?offset=<?=$offset+$limit?>&limit=<?=$limit?>" class="jscroll-next"></a>
</div>

<script>
    // Changing the defaults
window.sr = ScrollReveal({ reset: true });

// Customizing a reveal set
sr.reveal('.home-portfolio__itemlist', { duration: 1500 });
</script>