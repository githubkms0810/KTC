<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>KTC</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="all" href="/public/subpage/css/reset/styles.css">
        <link rel="stylesheet" href="/public/css/beautiful.css">
        <link href="//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSans-kr.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
        <script src="/public/js/beautiful.js"></script>
    </head>
    <body class="home">
        <header  class="home-header">
            <div class="bc-container">
                <h1 class="home-header__logo">
                    <a href="/" style="font-size: 28px !important;"><img src="/public/images/logo.png" style="vertical-align: baseline;" alt="KTC"></a>
                </h1>
                <span class="home-nav--btn">
                    <img src="/public/images/menu.png" alt="nav">
                </span>
                <nav class="home-nav">
                    <ul class="home-nav__list">
                        <li>
                            <a href="/small/about_us">회사 소개</a>
                        </li>
                        <li>
                            <a href="/translation_order/list">포트폴리오</a>
                        </li>
                        <li class="home-nav__item">
                            <a href="#">함께하기</a>
                            <ul>
                                <li>
                                    <a style="font-size:12px;" href="/freelancer/add">프리랜서 지원</a>
                                    <a style="font-size:12px;" href="/contact/add">업무 제휴 문의</a>
                                    <a style="font-size:12px;" href="/small/security">기밀 유지 정책</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/content/list?board_key=notice">고객센터</a>
                        </li>
                        <li>
                            <a href="/translation_order/selectType">의뢰하기</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <?=$this->load->views($content_view)?>
        <footer class="home-footer">
            <div class="bc-container">
                <div class="home-footer__sitemap">
                    <h4><b>SITEMAP</b></h4>
                    <div>
                        <a href="/">메인</a>
                        <a href="/small/about_us">회사 소개</a>
                        <a href="/small/portfolio_list">포트폴리오</a>
                        <a href="/translation_order/selectType">프로젝트 의뢰</a>
                        <a href="/freelancer/add">프리랜서 지원</a>
                    </div>
                    <div>
                        <a href="/small/partnership">업무 제휴 문의</a>
                        <a href="/small/security">기밀 유지 정책</a>
                        <a href="/content/list?board_key=notice">고객센터</a>
                    </div>
                </div>
                <div class="home-footer__info">
                    <h4><b>CONTACT</b></h4>
                    <p><span><b>TEL</b></span>&nbsp;&nbsp;&nbsp;02-6738-8220</p>
                    <p><span><b>FAX</b></span>&nbsp;&nbsp;&nbsp;02-6499-8220</p>
                    <p><span><b>E-MAIL</b></span>&nbsp;&nbsp;&nbsp;ktx@ktrans.kr</p>
                </div>
                <div class="home-footer__info">
                    <h4><b>INFORMATION</b></h4>
                    <p><span><b>상호</b></span>&nbsp;&nbsp;&nbsp;코리아 통번역 센터</p>
                    <p><span><b>대표</b></span>&nbsp;&nbsp;&nbsp;조승우</p>
                    <p><span><b>사업자 등록 번호</b></span>&nbsp;&nbsp;&nbsp;113-22-52693</p>
                    <p><span><b>통신 판매업 신고</b></span>&nbsp;&nbsp;&nbsp;제2012-서울구로-0538호</p>
                </div>
            </div>
            <div class="home-footer__copy">
                &copy; 2017 <b>KTC</b>. All Rights Reserved.
            </div>
        </footer>
    </body>
</html>