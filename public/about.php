<?php require_once __DIR__ . '/../app/head.php';
require_once __DIR__ . '/../app/header.php'; ?>

<main id="about-page">

    <section class="about-sec reveal">
        <div class="hero-flex">
            <div class="hero-text-wrap">
                <div class="hero-quote">“최고를 향한 여정에 동반자가 되겠습니다.”</div>
                <div class="about-desc">
                    에이시스트는 오픈소스소프트웨어(OSS) 및 기업용 소프트웨어 전문 기술지원ᆞ컨설팅 업체입니다. <br>
                    임베디드 시스템 개발을 위한 운영체제 및 소프트웨어 개발도구에서부터 클라우드 기반의
                    IT 인프라스트럭처 구성을 위한 필수 소프트웨어 제품 및 솔루션을 공급하고 전문인력을 통한 기술지원을 제공합니다.
                </div>
            </div>
            <div class="hero-img-wrap">
                <img src="/assets/img/aboutus01.jpg" alt="About Assist">
            </div>
        </div>
    </section>


    <!-- BUSINESS -->
    <section class="mv-section" aria-labelledby="about-biz">
        <div class="mv-shell">
            <header class="about-head" data-reveal>
                <h2 class="mv-h2" id="about-biz">사업영역</h2>
                <p class="mv-muted">제품 공급부터 기술지원·교육·엔지니어링까지 한 팀으로 제공합니다.</p>
            </header>

            <div class="about-cards">
                <article class="mv-card about-card" data-reveal>
                    <div class="about-icn" aria-hidden="true">
                        <!-- svg: package/solution -->
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M4 7.5l8 4 8-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4 7.5v9l8 4 8-4v-9" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M12 11.5v9" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="about-card__title">솔루션 공급</h3>
                    <p class="mv-muted">
                        MontaVista Linux, FlexNet Code Insight, Hashicorp 등 업계 최고의 솔루션과 관련 기술지원 서비스 제공
                    </p>
                </article>

                <article class="mv-card about-card" data-reveal>
                    <div class="about-icn" aria-hidden="true">
                        <!-- svg: oss/support -->
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M7 10a5 5 0 0 1 10 0v3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <path d="M6 12h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2z"
                                  stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M17 12h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2z"
                                  stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="about-card__title">OSS 기술지원</h3>
                    <p class="mv-muted">
                        CentOS, Ubuntu, Clear Linux, Yocto 등 오픈소스 기반 OS 및 Docker CE에 대한 상용 기술지원 제공
                    </p>
                </article>

                <article class="mv-card about-card" data-reveal>
                    <div class="about-icn" aria-hidden="true">
                        <!-- svg: education -->
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M4 6.5l8-3 8 3-8 3-8-3z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M6 10v6.5c0 .7.4 1.3 1 1.6 1.7.9 3.6 1.4 5 1.4s3.3-.5 5-1.4c.6-.3 1-1 1-1.6V10"
                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="about-card__title">교육</h3>
                    <p class="mv-muted">
                        임베디드 시스템 개발자를 위해 최적화된 Linux 교육 제공. 고객 환경에 맞춘 Custom 과정 진행 가능
                    </p>
                </article>
            </div>

            <article class="mv-card about-eng" data-reveal>
                <header class="about-eng__top">
                    <div class="about-icn" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M14 7l3 3-7.5 7.5H6.5V14.5L14 7z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M13 8l3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <path d="M20 20H4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="about-card__title">엔지니어링 서비스</h3>
                        <p class="mv-muted" style="margin:0;">개발·검증·마이그레이션·성능·보안까지 프로젝트 단위로 지원합니다.</p>
                    </div>
                </header>

                <div class="about-acc">
                    <details open>
                        <summary>Linux BSP 개발/QA/유지보수</summary>
                        <p class="mv-muted">고객 타겟 하드웨어를 위한 Linux BSP 개발 및 검증, 사후 유지보수(버그픽스, 보안패치)</p>
                    </details>
                    <details>
                        <summary>운영체제 Migration 서비스</summary>
                        <p class="mv-muted">VxWorks→Linux, Windows→Linux, RHEL→CentOS 등 기존 OS 기반 마이그레이션</p>
                    </details>
                    <details>
                        <summary>Linux 시스템 성능 개선</summary>
                        <p class="mv-muted">부팅타임 최소화, 실시간 성능 보장, 네트워크 대역폭/지연 최적화</p>
                    </details>
                    <details>
                        <summary>시스템 보안성 강화 기능</summary>
                        <p class="mv-muted">Secure Boot, TPM, TEE/TrustZone, ASLR 등 보안 기능 설계/적용</p>
                    </details>
                </div>
            </article>
        </div>
    </section>


    <!-- CLIENTS -->
    <section class="mv-section" aria-labelledby="about-clients">
        <div class="mv-shell">
            <header class="about-head" data-reveal>
                <h2 class="mv-h2" id="about-clients">주요고객</h2>
                <p class="mv-muted">다양한 산업군에서 안정적인 운영과 전환을 함께하고 있습니다.</p>
            </header>

            <figure class=" about-clients" data-reveal>
                <div class="figure-wrap">
                    <picture>
                        <source media="(max-width: 640px)" srcset="/assets/img/aboutus_img02_mo.jpg">
                        <img src="/assets/img/aboutus_img02.jpg" alt="에이시스트 주요 고객사">
                    </picture>
                </div>
            </figure>
        </div>
    </section>

</main>

<script>
    (() => {
        const items = document.querySelectorAll('#about-page [data-reveal]');
        if (!items.length) return;

        // reduced motion이면 바로 표시
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            items.forEach(el => el.classList.add('is-in'));
            return;
        }

        const io = new IntersectionObserver((entries) => {
            entries.forEach((e) => {
                if (e.isIntersecting) {
                    e.target.classList.add('is-in');
                    io.unobserve(e.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -10% 0px' });

        items.forEach(el => io.observe(el));
    })();
</script>


<?php require_once __DIR__ . '/../app/footer.php'; ?>
