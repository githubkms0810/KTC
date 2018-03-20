<section class="home-hero-portfolio">
    <div class="animated fadeInUp">
    <h2 class="home-hero-title-portfolio">포트폴리오</h2>
    <p class="home-hero-des-portfolio">
        코리아 통번역 센터는 다년간의 노하우로<br class="br_portfolio">
        총 <b class="count"><?=$num_translation?></b>개의 번역과 <b class="count"><?=$num_interpert?></b>건의 통역 프로젝트를<br class="br_portfolio">
        성공적으로 마무리하였습니다.
    </p>
    <a href="/translation_order/selectType" class="home-btn">프로젝트 의뢰하기</a></div>
</section>
<section class="home-section home-section__portfolio">
    <div class="bc-container" >
        <ul class="home-portfolio-list" id="jscroll-wapper">
                <a href="/translation_order/listWithJscroll?offset=0&limit=<?=$this->limit?>" class="jscroll-next"></a>
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
				loadingHtml: '<img src="/public/images/loading.gif" alt="Loading" />',
				nextSelector: 'a.jscroll-next:last',
                autoTriggerUntil : <?=$num_pages?>,
			});
		});
</script>
<!-- 무한스크롤 스크립트 끝 -->

<script>
    // Changing the defaults
window.sr = ScrollReveal({ reset: true });

// Customizing a reveal set
sr.reveal('.home-portfolio-list', { duration: 1500 });

</script>
<script>
    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
