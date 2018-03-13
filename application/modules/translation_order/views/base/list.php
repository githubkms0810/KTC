<section class="home-hero-portfolio">
    <h2 class="home-hero-title-portfolio">포트폴리오</h2>
    <p class="home-hero-des-portfolio">
        코리아 통번역 센터는 다년간의 노하우로<br>
        총 3,125개의 프로젝트를<br>
        성공적으로 마무리하였습니다
    </p>
    <a href="/translation_order/selectType" class="home-btn">프로젝트 의뢰하기</a>
</section>
<section class="home-section home-section__portfolio">
    <div class="bc-container" >
        <h2 class="home-title">포트폴리오</h2>
        <p class="home-des">기밀 유지를 원하는 프로젝트의 정보는 공개하지 않습니다</p>
        <ul class="home-portfolio-list" id="jscroll-wapper">
            <div>
                <a href="/translation_order/listWithJscroll?offset=0&limit=<?=$this->limit?>" class="jscroll-next">끝</a>
            </div>
        </ul>
    </div>
</section>

<!-- 무한스크롤 스크립트 시작 -->
<script type="text/javascript" src="/public/libraries/jquery.jscroll.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#jscroll-wapper').jscroll({
				autoTrigger: true,
				padding: 0,
				loadingHtml: '<img src="public/images/loading.gif" alt="Loading" />',
				nextSelector: 'a.jscroll-next:last',
                autoTriggerUntil : <?=$num_pages?>,
			});
		});
</script>
<!-- 무한스크롤 스크립트 끝 -->