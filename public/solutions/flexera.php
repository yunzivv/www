<?php
require_once __DIR__ . '/../../app/head.php';
require_once __DIR__ . '/../../app/header.php';
?>
<main id="flexera-page">

<!--    about revena -->
    <section class="fl-hero">
        <div class="service-title" data-reveal>
            FlexNet Code Insight
        </div>
        <div class="wrap">
            <div class="mv-split">
                <div class="fl-card" data-reveal>
                    <span class="fl-sub-title">About</span>
                    <div class="fl-sec-title">Revenera</div>
                    <span class="fl-sub-title">(Software Supply division of Flexera)</span>
                    <p>
                        Revenera는 Flexera의 Software Supply division으로,
                        Revenara는 글로벌 소프트웨어업체인 Flexera 사의 소프트웨어 부서입니다.
                        Flexera 는 소프트웨어라이센싱 및 컴플라이언스 업계에서 30년이상의 역사를 가진 굴지의 소프트웨어기업입니다.
                        대표적인 제품으로는 InstallShield, Code Insight, Entitlement Management, Monetization Solution 등이 있으며,
                        전세계에 약 50,000 여개사의 고객을 보유하고 있습니다.
                        <br>
                        에이시스트는 Revenara의 공식대리점으로, 국내 유수의 업체에 오픈소스검증 Tool인 FlexNet Code Insight 의 판매와 기술지원 서비스를 제공하고
                        있습니다.
                    </p>
                </div>
                <div class="fl-media" data-reveal>
                    <img alt="Revenera" src="/assets/img/flexera01.png"/>
                </div>
            </div>
        </div>
    </section>

<!--    code insight-->
    <section class="mv-section">
        <div class="wrap">
            <div class="mv-split mv-split-reverse">
                <div class="fl-media" data-reveal>
                    <img alt="FlexNet Code Insight" src="/assets/img/flexera02.jpg"/>
                </div>
                <div class="fl-card fl-card2" data-reveal>
                    <div class="fl-sec-title">FlexNet Code Insight</div>
                    <p>
                        FlexNet Code Insight는 오픈소스라이선스 컴플라이언스와 소프트웨어보안을 위한 통합 솔루션입니다.
                        개발과정을 포함한 전체 소프트웨어 수명주기동안 보안취약점 탐지가 가능하여, 보안관련위협을 최소화 할 수 있습니다.
                        <br>
                        자체개발 소프트웨어는 물론 제 3자로부터 제공받은 소프트웨어에 대한 오픈소스라이선스를 검증하고, 이 과정을 자동화할 수도 있습니다.
                        FlexNet Code Insight 는 오픈소스 거버넌스 수립과 오픈소스소프트웨어 관련 리스크 관리를 위한 최적의 솔루션입니다.
                    </p>
                </div>
            </div>
        </div>
    </section>

<!--    chart-->
    <div class="fl-section3 mv-section wrap">
        <div class="" data-reveal>
            <div class="fl-title3">“The Largest Open Source Knowledge Base”</div>
            <div class="fl-desc">
                With more than 14 million components and support for 25+ languages and 70+ extensions,<br>
                FlexNet Code Insight gives you access to vulnerability data from multiple sources, including NVD and
                Secunia Research.&nbsp;
            </div>
        </div>

        <div class="fl-img-wrapper" data-reveal>
            <picture>
                <source media="(max-width: 640px)" srcset="/assets/img/flexera03_mo.jpg">
                <img src="/assets/img/flexera03.jpg" alt="">
            </picture>
        </div>
    </div>

<!--feature-->
    <section id="main-feature" class="sec--dark">
        <div class="wrap">
            <header data-reveal>
                <h1 class="flex-feature-title">주요 기능</h1>
            </header>

            <div class="flex-func">
                <article class="func-card" data-reveal>
                    <div class="func-icon">
                        <i class="fa-solid fa-chart-line" aria-hidden="true"></i>
                    </div>
                    <div>
                        <span class="f-card-title">모든 오픈소스 소프트웨어 탐지 및 추적 <br>
                        리포트 생성 및 대시보드 제공</span>
                    </div>
                </article>

                <article class="func-card" data-reveal>
                    <div class="func-icon">
                        <i class="fa-solid fa-eye" aria-hidden="true"></i>
                    </div>
                    <div>
                        <span class="f-card-title">능동적이고 지속적인 <br>오픈소스보안취약점(CVE) 모니터링</span>
                    </div>
                </article>

                <article class="func-card" data-reveal>
                    <div class="func-icon">
                        <i class="fa-solid fa-clipboard-list" aria-hidden="true"></i>

                    </div>
                    <div>
                        <span class="f-card-title">오픈소스 라이선스 컴플라이언스, <br>준수 의무사항 관리</span>
                    </div>
                </article>

                <article class="func-card" data-reveal>
                    <div class="func-icon">
                        <i class="fa-solid fa-gears" aria-hidden="true"></i>
                    </div>
                    <div>
                        <span class="f-card-title">검토과정 자동화, 오픈소스 정책 <br>수립을 위한 데이터 추출</span>
                    </div>
                </article>

                <article class="func-card" data-reveal>
                    <div class="func-icon">
                        <i class="fa-solid fa-plug" aria-hidden="true"></i>
                    </div>
                    <div>
                        <span class="f-card-title">기존 프로세스 및 소프트웨어 빌드<br> 과정에 통합가능, DevOps 환경 구축</span>
                    </div>
                </article>

                <article class="func-card" data-reveal>
                    <div class="func-icon">
                        <i class="fa-solid fa-sliders" aria-hidden="true"></i>
                    </div>
                    <div>
                        <span class="f-card-title">프로필 유형에 따른 유연한 <br>오픈소스 탐지 및 분석</span>
                        <ul class="f-card-pills">
                            <li>Package Discovery</li>
                            <li>Standard Scan</li>
                            <li>Comprehensive Scan</li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>

<!--    chart-->
    <figure class="mv-chart" data-reveal>
        <div class="wrap">
        <img alt="" src="/assets/img/flexera_chartbox.jpg"/>
        </div>
    </figure>

<!--    resource-->
    <section class="wrap flexera">
        <div class="resources">
            <div class="mv-cta-block" data-reveal>
                <div class="mv-cta-copy">
                    <p class="mv-kicker">· RESOURCES</p>
                    <h2 class="mv-h2">Datasheets &amp; Links</h2>
                    <p class="mv-muted">제품 검토에 필요한 문서를 바로 확인하세요.</p>
                </div>
                <div class="mv-cta-actions">
                    <a class="mv-rbtn" href="https://www.revenera.com/protect/products/flexnet-code-insight.html"
                       rel="noopener noreferrer" target="_blank">Revenera
                        <svg aria-hidden="true" fill="none" height="24" stroke="#0B1220" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17L17 7"></path>
                            <path d="M9 7h8v8"></path>
                        </svg>
                    </a>
                    <a class="mv-rbtn primary" href="codeinsight_ds.pdf" rel="noopener noreferrer" target="_blank">
                        DATA SHEET
                        <svg aria-hidden="true" fill="none" height="20" stroke="#fff" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4v10"></path>
                            <path d="M8 10l4 4 4-4"></path>
                            <path d="M6 20h12"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    (() => {
        const root = document.getElementById('flexera-page');
        if (!root) return;
        const items = root.querySelectorAll('[data-reveal]');
        if (!items.length) return;

        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            items.forEach(el => el.classList.add('is-in'));
            return;
        }

        const io = new IntersectionObserver((entries) => {
            for (const e of entries) {
                if (e.isIntersecting) {
                    e.target.classList.add('is-in');
                    io.unobserve(e.target);
                }
            }
        }, {threshold: 0.12, rootMargin: '0px 0px -10% 0px'});

        items.forEach(el => io.observe(el));
    })();
</script>

<?php require_once __DIR__ . '/../../app/footer.php'; ?>
