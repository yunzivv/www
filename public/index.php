<?php require_once __DIR__ . '/../app/head.php';
require_once __DIR__ . '/../app/header.php'; ?>

<main>
    <section class="hero">
        <img class="bg" src="assets/img/main_bg01.jpg" alt="main background1"/>

        <div class="hero-inner wrap">

                <div class="hero-copy">
                    <p class="hero-eyebrow">JOURNEY TO THE MOST</p>

                    <h1 class="main-hero-title">
                        최고를 향한 여정에 <br/>
                        동반자가 되겠습니다.
                    </h1>

                    <p class="hero-desc">
                        에이시스트는 글로벌 리눅스 전문기업인 MontaVista Software LLC 의 한국 공식 기술지원 파트너입니다. <br/>
                        리눅스 기술지원·컨설팅 전문기업으로서 임베디드시스템 개발을 위한 <br/>
                        리눅스 개발환경 구축, 엔터프라이즈 리눅스에 대한 기술지원, 장기유지보수서비스를 제공합니다.
                    </p>

                    <ul class="hero-chips" aria-label="핵심 제공 분야">
                        <li>Linux 기술지원</li>
                        <li>컨설팅</li>
                        <li>장기 유지보수</li>
                        <li>엔터프라이즈 지원</li>
                    </ul>
                </div>
        </div>
    </section>


    <section id="highlights" class="main-section ">
        <div class="wrap">
            <header class="section-head">
                <h1 class="kicker text-highlight-gr2">· HIGHLIGHTS</h1>
            </header>

            <div class="card-grid">
                <a href="/service/ltsecure.php" class="card">
                    <div class="card-media">
                        <img src="assets/img/highlight01.png" alt="LTSecure"/>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">LTSecure (연장지원)</h3>
                        <p class="card-desc">
                            CentOS EOL 로 인해 OS를 변경할 필요는 없습니다. <br/>
                            CentOS의 수명주기를 연장하여 고객의 안정적인 인프라 운영을 돕습니다.
                        </p>
                    </div>
                </a>

                <a href="/solutions/montavista.php" class="card">
                    <div class="card-media">
                        <img src="assets/img/highlight02.png" alt="Carrier Grade eXpress"/>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Carrier Grade eXpress</h3>
                        <p class="card-desc">
                            MontaVista Linux CGX는 세계최고의 상용 임베디드 리눅스 배포판입니다.
                            통신, 의료, 가전, 우주항공, 산업용 장비 개발을 위한 완전한 리눅스 개발환경을 제공합니다.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="solutions">
        <header class="solution-head wrap">
            <p class="kicker">· SOLUTIONS</p>
            <div class="main-title ">
                에이시스트가 제공하는 <br>
                <strong class="hero-title-accent3">최고의 솔루션을 소개</strong>합니다.
            </div>
        </header>
        <div class="solutions-page wrap">
            <div class="solutions-shell">
                <div>
                    <h2 class="title1">
                        Linux is<br/>
                        Everywhere
                    </h2>
                    <p class="desc">
                        셀 수 없이 많은 지능형 장치들이 리눅스 기반으로 개발됩니다.<br/>
                        MontaVista Linux는 상용 제품에 가장 많이 적용된 <br/>
                        Realtime Embedded Linux 배포판입니다.
                    </p>

                    <div class="solutions-cta">
                        <a class="btn primary" href="solutions/montavista.php">MontaVista Linux&nbsp;&nbsp;&nbsp;→</a>
                    </div>

                    <ul class="solutions-pills">
                        <li>Realtime</li>
                        <li>Enterprise Support</li>
                        <li>Embedded Focus</li>
                    </ul>
                </div>

                <div class="solutions-visual">
                    <img src="assets/img/main_solution01.png" alt="MontaVista Linux"/>
                </div>
            </div>
        </div>

        <div class="solutions-page wrap">
            <div class="solutions-shell">
                <div>
<!--                    <p class="kicker">· SOLUTIONS</p>-->
                    <h2 class="title1">
                        Know what’s in<br/>
                        your code.
                    </h2>
                    <p class="desc">
                        오픈소스소프트웨어(OSS) 컴플라이언스 및 보안위협 점검을 위한<br/>
                        최고의 통합솔루션인 FlexNet Code Insight를 소개합니다.
                    </p>

                    <div class="solutions-cta">
                        <a class="btn primary" href="solutions/flexera.php">FlexNet Code Insight&nbsp;&nbsp;&nbsp;→</a>
                    </div>

                    <ul class="solutions-pills">
                        <li>OSS Compliance</li>
                        <li>flexera</li>
                        <li>revenera</li>
                    </ul>
                </div>

                <div class="solutions-visual">
                    <img src="assets/img/main_solution02.png" alt="FlexNet Code Insight"/>
                </div>
            </div>
        </div>
    </section>


    <section id="service" class="service-section">
        <div class="container wrap">

            <header class="service-head">
                <p class="kicker">· SERVICE</p>
                <div class="text-highlight-gr main-title">
                    에이시스트가 제공하는 <br>
                    <strong class="hero-title-accent2">최고의 서비스를 소개</strong>합니다.
                </div>
            </header>

            <div class="service-list">
                <article class="service-item" style="--bg:url('img/main_service01.png')">
                    <div class="service-index">01</div>
                    <div class="service-content">
                        <h2>CentOS EOL Support & Maintenance</h2>
                        <p class="desc">
                            CentOS에 대한 상용 기술지원을 제공합니다.<br/>
                            특정 고객을 위한 전용 CentOS Branch를 구성합니다.
                        </p>
                    </div>
                    <a href="/service/ltsecure.php">자세히 보기 →</a>
                </article>

                <article class="service-item" style="--bg:url('img/main_service02.png')">
                    <div class="service-index">02</div>
                    <div class="service-content">
                        <h2>OpenSource Audit Service</h2>
                        <p class="desc">
                            오픈소스 컨설팅 전문기업으로<br/>
                            직접 OpenSource Audit Service를 수행합니다.
                        </p>
                    </div>
                    <a href="/service/ossAudit.php">자세히 보기 →</a>
                </article>
            </div>

        </div>
    </section>


    <section id="contact" class="main-section contact-cta">
        <div class="contact-bg"></div>

        <div class="container wrap">
            <header class="section-head section-head--light">
                <h2 class="kicker text-highlight0">CONTACT US</h2>
                <div class="main-title">
                    에이시스트의 전문가에게 문의하세요. <br />
                    신속하게 연락드리겠습니다.
                </div>
            </header>

            <a class="btn btn-ghost-dark" href="mailto:assist@assist.com">CONTACT US &nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none"
                     stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     aria-hidden="true" focusable="false">
                    <rect x="3" y="6" width="18" height="12" rx="2" ry="2"/>
                    <path d="M3 7l9 7 9-7"/>
                </svg>
            </a>
            <a class="btn btn-ghost-dark" href="/location.php">오시는 길 &nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none"
                     stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     aria-hidden="true" focusable="false">
                    <path d="M12 22s7-7.2 7-12a7 7 0 1 0-14 0c0 4.8 7 12 7 12z"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
            </a>

        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../app/footer.php'; ?>
