<section class="home-hero">
    <h2 class="home-hero-title">대한민국 대표<br>언어 전문<br class="display"> 서비스 기업</h2>
    <p class="home-hero-des" style="color:white;">
        코리아 통번역 센터는 전문 번역 서비스는 물론<br>
        소프트웨어 현지화, 국제 회의 맞춤 통역 서비스 등을 제공하는<br>
        대한민국 대표 언어 전문 서비스 기업입니다.
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
        <img src="/public/images/peolple.png">
        <div>
            <h2 class="home-title"><span>완벽한 </span>통번역<span>의 중요성</span></h2>
            <p class="home-des" style="font-size:16px">
                코리아 통번역 센터는 는 영어, 일본어, 중국어 등 <br class="br">
                사용도가 높은 언어는 물론 다문화 사회로 나아가는 과도기에 <br class="br">
                점점 증가하는 다국 언어까지, 전 세계 120개 국가, <br class="br">
                50개 이상의 언어로 현지화 서비스를 지원합니다.
            </p>
        </div>
    </div>
</section>
<section class="home-section home-section__project">
    <div class="bc-container">
        <h2 class="home-title">프로젝트 진행 절차</h2>
        <ul class="home-list">
            <li class="home-list__item">
                <div class="home-list__num">
                    <span>1</span>
                </div>
                <h4 class="home-list__title">고객 상담</h4>
                <p class="home-list__des">
                    통번역 전문 PM이 일시, 장소, 내용 등<br class="br">
                    고객의 요구를 정확히 분석합니다.
                </p>
            </li>
            <li class="home-list__item">
                <div class="home-list__num">
                    <span>2</span>
                </div>
                <h4 class="home-list__title">고객 상담</h4>
                <p class="home-list__des">
                    통번역 전문 PM이 일시, 장소, 내용 등<br class="br">
                    고객의 요구를 정확히 분석합니다.
                </p>
            </li>
            <li class="home-list__item">
                <div class="home-list__num">
                    <span>3</span>
                </div>
                <h4 class="home-list__title">고객 상담</h4>
                <p class="home-list__des">
                    통번역 전문 PM이 일시, 장소, 내용 등<br class="br">
                    고객의 요구를 정확히 분석합니다.
                </p>
            </li>
        </ul>
    </div>
</section>
<section class="home-map">
    <style>
      #map {
        height: 500px;
        width: 100%;
       }
    </style>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 37.616217, lng: 126.834748};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom:15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKbIHosDBHBNIkoV-t6x-Fl1EpBE-rQc4&callback=initMap">
    </script>
</section>
<section class="home-section home-section__portfolio">
    <div class="bc-container">
        <h2 class="home-title">포트폴리오</h2>
        <p class="home-des">기밀 유지를 원하는 프로젝트의 정보는 공개하지 않습니다.</p>
        <ul class="home-portfolio">
        <?php foreach ( $portfolioes as $portfolio ): ?>
            <li class="home-portfolio__item" style="cursor:pointer;" onclick="location.href='/translation_order/<?=$portfolio->id?>'">
                <img src="<?=$portfolio->image?>">
                <a href="/translation_order/<?=$portfolio->id?>">열람하기</a>
            </li>
            
        <?php endforeach; ?>
        </ul>
        <a href="/translation_order/list" class="home-btn">다른 프로젝트 보기</a>
    </div>
</section>