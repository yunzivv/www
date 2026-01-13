<?php require_once __DIR__ . '/../app/head.php';
require_once __DIR__ . '/../app/header.php'; ?>

<main id="location" class="mv-page">

    <div class="lo-wrap mv-reveal">
        <h1 class="mv-h1">오시는길</h1>
        <div class="lo-desc">
            아래 지도와 안내를 통해 회사 위치 및 교통편을 확인하실 수 있습니다.
        </div>

        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.549459063372!2d127.12072232524511!3d37.49495700080584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca58edc65c09f%3A0x3407e4467a7edf23!2zKOyjvCnsoJzsnbTtiKzsl6DthYztgazrhoDroZzsp4A!5e0!3m2!1sko!2skr!4v1625809878610!5m2!1sko!2skr"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>


    <div class="location-card">
        <div class="direction">
            <div class="dir-column">
                <h2>회사위치 및 연락처</h2>
                <div class="info-list">
                    <p><span class="strong">주소</span> 서울특별시 송파구 중대로 135 (가락동,아이티벤처타워)</p>
                    <p><span class="strong">메일</span> assist@assist.com</p>
                    <p><span class="strong">전화</span> 070-7137-5521</p>
                </div>
            </div>

            <div class="dir-column">
                <h2>버스</h2>
                <div class="info-list">
                    <p>경찰병원, 서울동부고용노동지청에서 하차</p>
                    <div class="transport-row">
                        <span class="bus bus-g">지선</span> 3319 3416 &nbsp;&nbsp;
                        <span class="bus bus-b">간선</span> 301 401
                    </div>

                    <p>경찰병원, KT가락지사에서 하차</p>
                    <div class="transport-row">
                        <span class="bus bus-g">지선</span> 3322 3416
                    </div>
                </div>
            </div>

            <div class="dir-column">
                <h2>지하철</h2>
                <div class="info-list">
                    <div class="transport-row">
                        <span class="subway">3호선</span>
                        <span class="strong">경찰병원역</span>
                    </div>
                    <p class="guide-text">경찰병원역 1번 출구(도보 1분)</p>
                </div>
            </div>
        </div>
    </div>
</main>


<?php require_once __DIR__ . '/../app/footer.php'; ?>
