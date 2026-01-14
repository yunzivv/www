<?php require_once __DIR__ . '/../app/head.php';
require_once __DIR__ . '/../app/header.php'; ?>

<main id="about-page">

    <section class="about-sec reveal">
        <div class="hero-flex wrap">
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
    <section class="wrap" aria-labelledby="about-biz">
            <header class="about-head" data-reveal>
                <h2 class="about-title" id="about-biz">사업영역</h2>
            </header>

            <div class="about-grid">
                <article class="about-card" data-reveal>
                    <div class="about-icn" aria-hidden="true">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <h3 class="about-card__title">솔루션 공급</h3>
                    <p class="about-card__desc">
                        MontaVista Linux, FlexNet Code
                        Insight, Hashicorp 등 업계 최고의
                        솔루션과 관련 기술지원 서비스 제공
                    </p>
                </article>

                <article class="about-card" data-reveal>
                    <div class="about-icn" aria-hidden="true">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="about-card__title">OSS 기술지원</h3>
                    <p class="about-card__desc">
                        CentOS, Ubuntu, Clear Linux,
                        Yocto 등 오픈소스 기반의 운영체제 및
                        오픈소스 컨테이너(Docker CE)에
                        대한 상용 기술지원 제공
                    </p>
                </article>

                <article class="about-card" data-reveal>
                    <div class="about-icn" aria-hidden="true">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="about-card__title">교육</h3>
                    <p class="about-card__desc">
                        임베디드 시스템 개발자를 위해
                        최적화된 Linux 교육 제공. 기본
                        교육과정외 고객의 개발환경에 최적화된
                        Custom 교육과정 진행 가능
                    </p>
                </article>
            </div>


            <article class="about-eng" data-reveal>
                <div class="about-eng__head">
                    <div>
                        <h3 class="about-card__title eng">엔지니어링 서비스</h3>
                    </div>
                </div>

                <div class="about-eng__list">
                    <div class="about-eng__item">
                        <div class="about-eng__t">Linux BSP 개발/QA/유지보수</div>
                        <p class="about-card__desc">고객의 타겟 하드웨어를 위한 Linux BSP 개발 및 검증, 사후 유지보수 서비스(버그픽스, 보안패치)</p>
                    </div>

                    <div class="about-eng__item">
                        <div class="about-eng__t">운영체제 Migration 서비스</div>
                        <p class="about-card__desc">Vxworks to Linux, Windows to Linux, RHEL to CentOS 등 기존 운영체제에 대한 Linux
                            Migration 서비스 제공</p>
                    </div>

                    <div class="about-eng__item">
                        <div class="about-eng__t">Linux 시스템 성능 개선</div>
                        <p class="about-card__desc">부팅타임 최소화, 실시간 성능 보장, 네트워크 대역폭 최대화 및 지연 최소화</p>
                    </div>

                    <div class="about-eng__item">
                        <div class="about-eng__t">시스템 보안성 강화 기능</div>
                        <p class="about-card__desc">Secure boot, TPM, TEE/Trustzone, Address Space, Layout Randomization</p>
                    </div>
                </div>
            </article>
    </section>


    <!-- CLIENTS -->
    <section class="wrap about-client">
        <header class="about-head" data-reveal>
            <h2 class="about-title" id="about-clients">주요고객</h2>
        </header>

        <figure class="about-clients" data-reveal>
            <div class="figure-wrap">
                <picture>
                    <source media="(max-width: 640px)" srcset="/assets/img/aboutus_img02_mo.jpg">
                    <img src="/assets/img/aboutus_img02.jpg" alt="에이시스트 주요 고객사">
                </picture>
            </div>
        </figure>
    </section>

</main>

<script>
    (() => {
        const items = document.querySelectorAll('#about-page [data-reveal]');
        if (!items.length) return;

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
        }, {threshold: 0.12, rootMargin: '0px 0px -10% 0px'});

        items.forEach(el => io.observe(el));
    })();
</script>


<?php require_once __DIR__ . '/../app/footer.php'; ?>
