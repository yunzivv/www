<?php
require_once __DIR__ . '/../../app/head.php';
require_once __DIR__ . '/../../app/header.php';
?>

<main>
    <!-- Spendit × MontaVista 톤으로 재구성 (기존 mv-* 컴포넌트 재사용) -->
    <section class="mv-hero" aria-labelledby="ci-title">
        <div class="mv-shell">
            <div>
                <p class="mv-kicker">FLEXERA · REVENERA</p>
                <h1 id="ci-title" class="mv-title">FlexNet Code Insight</h1>
                <p class="mv-lead">
                    오픈소스 라이선스 컴플라이언스와 보안 취약점(CVE) 관리를 한 번에.
                    SBOM 기반으로 탐지·추적·정책 적용·리포팅을 자동화합니다.
                </p>

                <div class="mv-hero-cta">
                    <a class="mv-rbtn primary" href="codeinsight_ds.pdf" target="_blank" rel="noopener noreferrer">
                        DATA SHEET
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 4v10"/><path d="M8 10l4 4 4-4"/><path d="M6 20h12"/>
                        </svg>
                    </a>
                    <a class="mv-rbtn" href="https://www.revenera.com/protect/products/flexnet-code-insight.html" target="_blank"
                       rel="noopener noreferrer">
                        제품 페이지
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                             viewBox="0 0 24 24" fill="none" stroke="#0B1220" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M7 17L17 7"/><path d="M9 7h8v8"/>
                        </svg>
                    </a>
                </div>

                <ul class="mv-pills" aria-label="Key highlights">
                    <li>14M+ Knowledge Base</li>
                    <li>25+ Languages</li>
                    <li>70+ Extensions</li>
                    <li>SBOM &amp; Policy</li>
                </ul>
            </div>

            <div class="mv-hero-visual" aria-hidden="true">
                <img src="/assets/img/flexera03.jpg" alt="FlexNet Code Insight overview">
                <div class="mv-glass">
                    <div class="mv-glass-title">Unified Compliance &amp; Security</div>
                    <div class="mv-glass-desc">Detect • Monitor • Govern</div>
                </div>
            </div>
        </div>
    </section>

    <section class="mv-section">
        <div class="mv-shell">
            <div class="mv-split">
                <div class="mv-card">
                    <h2 class="mv-h2">About Revenera</h2>
                    <p>
                        <strong>Revenera</strong>는 Flexera의 Software Supply division으로,
                        라이선싱/컴플라이언스 영역에서 다양한 제품군을 제공합니다.
                        오픈소스 리스크 관리 및 거버넌스 체계를 구축하는 데 활용됩니다.
                    </p>
                    <p class="mv-desc">에이시스트는 Revenera 공식 대리점으로 국내 판매·기술지원을 제공합니다.</p>
                </div>

                <div class="mv-media">
                    <img src="/assets/img/flexera01.png" alt="Revenera">
                </div>
            </div>
        </div>
    </section>

    <section class="mv-section">
        <div class="mv-shell">
            <div class="mv-split mv-split-reverse">
                <div class="mv-media">
                    <img src="/assets/img/flexera02.jpg" alt="FlexNet Code Insight">
                </div>

                <div class="mv-card">
                    <h2 class="mv-h2">무엇을 해결하나요?</h2>
                    <p>
                        배포 전후 전 과정에서 오픈소스 구성요소를 식별하고,
                        라이선스 의무사항과 취약점 정보를 함께 관리합니다.
                        감사 대응, 릴리스 승인, 보안 우선순위 조정까지 한 흐름으로 연결합니다.
                    </p>
                    <ul class="mv-pills" aria-label="Capabilities">
                        <li>Discovery</li>
                        <li>License Compliance</li>
                        <li>CVE Monitoring</li>
                        <li>Reporting</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sec sec--dark">
        <div class="sec-inner">
            <div class="section-head">
                <h2 class="h2">주요 기능</h2>
            </div>

            <div class="cards">
                <article class="card">
                    <div class="ico">🧭</div>
                    <h3 class="h3">오픈소스 탐지/추적</h3>
                    <p class="text">구성요소 식별, 버전/사용 위치 추적</p></article>
                <article class="card">
                    <div class="ico">🛡️</div><h3 class="h3">CVE 모니터링</h3>
                    <p class="text">지속 모니터링과 우선순위 기반 대응</p></article>
                <article class="card">
                    <div class="ico">📜</div>
                    <h3 class="h3">컴플라이언스 관리</h3>
                    <p class="text">의무사항 관리 및 릴리스 전 점검 표준화</p></article>
                <article class="card">
                    <div class="ico">⚙️</div>
                    <h3 class="h3">자동화</h3>
                    <p class="text">검토 과정 자동화, 정책 수립 데이터 추출</p></article>
                <article class="card">
                    <div class="ico">🔗</div>
                    <h3 class="h3">DevOps 통합</h3>
                    <p class="text">기존 프로세스/빌드 파이프라인과 통합</p></article>
                <article class="card">
                    <div class="ico">📊</div>
                    <h3 class="h3">리포트/대시보드</h3>
                    <p class="text">감사·대응·의사결정 시각화 제공</p></article>

                <article class="card card--wide">
                    <div class="ico">🧩</div>
                    <h3 class="h3">프로필 기반 유연한 분석</h3>
                    <p class="text">상황에 맞게 탐지/분석 깊이를 선택</p>
                    <ul class="pills">
                        <li class="pill">Package Discovery</li>
                        <li class="pill">Standard Scan</li>
                        <li class="pill">Comprehensive Scan</li>
                    </ul>
                </article>
            </div>

            <figure class="figure">
                <img src="/assets/img/flexera_chartbox.jpg" alt=""/>
            </figure>
        </div>
    </section>

    <section class="mv-section">
        <div class="mv-shell">
            <div class="mv-cta-block">
                <div class="mv-cta-copy">
                    <p class="mv-kicker">· RESOURCES</p>
                    <h2 class="mv-h2">Datasheets &amp; Links</h2>
                    <p class="mv-muted">제품 검토에 필요한 문서를 바로 확인하세요.</p>
                </div>

                <div class="mv-cta-actions">
                    <a class="mv-rbtn" href="https://www.revenera.com/protect/products/flexnet-code-insight.html" target="_blank"
                       rel="noopener noreferrer">Revenera
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none"
                             stroke="#0B1220" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <path d="M7 17L17 7"/>
                            <path d="M9 7h8v8"/>
                        </svg>
                    </a>
                    <a class="mv-rbtn primary" href="codeinsight_ds.pdf" target="_blank" rel="noopener noreferrer">
                        DATA SHEET
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             viewBox="0 0 24 24" fill="none"
                             stroke="#fff" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <path d="M12 4v10"/>
                            <path d="M8 10l4 4 4-4"/>
                            <path d="M6 20h12"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/../../app/footer.php'; ?>
