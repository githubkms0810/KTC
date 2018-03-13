<section class="home-hero">
    <h2 class="home-hero-title">대한민국 대표<br>언어 전문 서비스 기업</h2>
    <p class="home-hero-des">
        코리아 통번역 센터는 전문 번역 서비스는 물론<br>
        소프트웨어 현지화, 국제 회의 맞춤 통역 서비스 등을 제공하는<br>
        대한민국 대표 언어 전문 서비스 기업입니다
    </p>
    <a href="/translation_order/selectType" class="home-btn">프로젝트 의뢰하기</a>
</section>
<section class="home-logo">
    <div class="home-logo__wrap">
        <ul class="home-logo--list">
            <div>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-1.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-2.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-3.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-4.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-5.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-6.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-7.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-8.png">
                </li>
            </div>
            <div>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-1.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-2.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-3.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-4.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-5.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-6.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-7.png">
                </li>
                <li class="home-logo--list__item">
                    <img src="/public/images/logo-8.png">
                </li>
            </div>
        </ul>
    </div>
</section>
<section class="home-section home-section_padding">
    <div class="bc-container">
        <div>
            <h2 class="home-title">통번역 산업<sapn>의 표준화</sapn></h2>
            <p class="home-des">
                코리아 통번역 센터는 대한민국의 통번역 산업의 표준화를 위해 노력하고 있습니다<br>
                전시적 언어 자원 관리 시스템, 인재 데이터베이스, 전 프로젝트 PM을 통한<br>
                책임 공정 및 상시 CS팀 운영 등으로 주먹구구식 운영을 지양하고,<br>
                프로젝트 통합 관리 시스템을 도입함으로 통번역 산업의 표준화에 앞장서고 있습니다
            </p>
        </div>
        <img src="/public/images/peolple.png">
    </div>
</section>
<section class="home-section home-section__portfolio">
    <div class="bc-container">
        <h2 class="home-title">포트폴리오</h2>
        <p class="home-des">기밀 유지를 원하는 프로젝트의 정보는 공개하지 않습니다</p>
        <ul class="home-portfolio">
        <?php foreach ( $portfolioes as $portfolio ): ?>
            <li class="home-portfolio__item">
                <img src="<?=$portfolio->image?>">
                <a href="/translation_order/<?=$portfolio->id?>">열람하기</a>
            </li>
            
        <?php endforeach; ?>
        </ul>
        <a href="/translation_order/list" class="home-btn">다른 프로젝트 보기</a>
    </div>
</section>