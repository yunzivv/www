<?php
// app/header.php
?>
<header class="site-header" id="siteHeader">
    <div class="header-inner">
        <a class="brand" href="/index.php" aria-label="Go to home">
            <img src="/assets/img/assist_logo.png" alt="assist logo">
        </a>

        <nav class="gnb">
            <ul class="gnb-list">
                <!-- solutions -->
                <li class="gnb-item dropdown">
                    <a class="gnb-link dropdown-trigger" href="/solutions/montavista.php" aria-expanded="false">
                        SOLUTION
                    </a>

                    <div class="dropdown-panel" role="menu">
                        <a class="dropdown-item" href="/solutions/montavista.php" role="menuitem">MontaVista Linux</a>
                        <a class="dropdown-item" href="/solutions/mvshield.php" role="menuitem">MVShield</a>
                        <a class="dropdown-item" href="/solutions/flexera.php" role="menuitem">FlexNet Code Insight</a>
                    </div>
                </li>

                <!-- service -->
                <li class="gnb-item dropdown">
                    <a class="gnb-link dropdown-trigger" href="/service/ltsecure.php" aria-expanded="false">
                        SERVICE
                    </a>

                    <div class="dropdown-panel" role="menu">
                        <a class="dropdown-item" href="/service/ltsecure.php" role="menuitem">LTSecure</a>
                        <a class="dropdown-item" href="/service/migration.php" role="menuitem">Rocky Linux Migration</a>
                        <a class="dropdown-item" href="/service/ossAudit.php" role="menuitem">OSS Audit Service</a>
                    </div>
                </li>

                <li class="gnb-item">
                    <a class="gnb-link" href="/about.php">ABOUT US</a>
                </li>

                <li class="gnb-item">
                    <a class="gnb-link" href="/location.php">CONTACT US</a>
                </li>

                <li class="gnb-item login">
                    <a class="gnb-link" href="/login.php">SURPORT LOGIN</a>
                </li>
            </ul>
        </nav>

        <div class="m-menu">
            <a class="gnb-link support-link-mobile login" href="/login.php">SURPORT LOGIN</a>
            <button class="mnav-toggle" type="button" aria-label="메뉴 열기" aria-controls="mobileNav"
                    aria-expanded="false">
                <span class="mnav-bar"></span>
                <span class="mnav-bar"></span>
                <span class="mnav-bar"></span>
            </button>
        </div>
        <div class="mnav" id="mobileNav" aria-hidden="true">
            <div class="mnav-backdrop" data-mnav-close></div>

            <aside class="mnav-panel" role="dialog" aria-modal="true" aria-label="모바일 메뉴">
                <div class="mnav-head">
                    <a class="mnav-brand" href="/index.php">ASSIST</a>
                    <button class="mnav-close" type="button" aria-label="메뉴 닫기" data-mnav-close>✕</button>
                </div>

                <nav class="mnav-body" aria-label="Mobile navigation">
                    <ul class="mnav-list">
                        <li class="mnav-item">
                            <button class="mnav-acc" type="button" aria-expanded="false">
                                SOLUTION
                                <span class="mnav-chevron">▾</span>
                            </button>
                            <div class="mnav-sub">
                                <a href="/solutions/montavista.php">MontaVista Linux</a>
                                <a href="/solutions/mvshield.php">MVShield</a>
                                <a href="/solutions/flexera.php">FlexNet Code Insight</a>
                            </div>
                        </li>

                        <li class="mnav-item">
                            <button class="mnav-acc" type="button" aria-expanded="false">
                                SERVICE
                                <span class="mnav-chevron">▾</span>
                            </button>
                            <div class="mnav-sub">
                                <a href="/service/ltsecure.php">LTSecure</a>
                                <a href="/service/migration.php">Rocky Linux Migration</a>
                                <a href="/service/ossAudit.php">OSS Audit Service</a>
                            </div>
                        </li>

                        <li class="mnav-link"><a href="/about.php">ABOUT US</a></li>
                        <li class="mnav-item">
                            <button class="mnav-acc" type="button" aria-expanded="false">
                                CONTACT
                                <span class="mnav-chevron">▾</span>
                            </button>
                            <div class="mnav-sub">
                                <a href="mailto:assist@assist.com">Contact Us</a>
                                <a href="/location.php">오시는 길</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </aside>
        </div>


    </div>
</header>

<script>
    (() => {
        const header = document.getElementById('siteHeader');
        if (!header) return;

        const triggers = header.querySelectorAll('.dropdown-trigger');

        // 스크롤
        const setScrolled = () => {
            const scrolled = window.scrollY > 12;
            header.classList.toggle('is-scrolled', scrolled);
        };
        setScrolled();
        window.addEventListener('scroll', setScrolled, {passive: true});

        const closeAll = () => {
            triggers.forEach(a => a.setAttribute('aria-expanded', 'false'));
            header.querySelectorAll('.dropdown').forEach(li => li.classList.remove('open'));
        };

        triggers.forEach(a => {
            a.addEventListener('click', (e) => {
                e.preventDefault();

                const li = e.currentTarget.closest('.dropdown');
                if (!li) return;

                const isOpen = li.classList.contains('open');
                closeAll();

                if (!isOpen) {
                    li.classList.add('open');
                    a.setAttribute('aria-expanded', 'true');
                }
            });

            a.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeAll();
            });
        });

        // 바깥 클릭 시 닫기
        document.addEventListener('click', (e) => {
            if (!header.contains(e.target)) closeAll();
        });

        // ESC로 닫기
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeAll();
        });
    })();
</script>
<script>
    (() => {
        const header = document.getElementById('siteHeader');
        if (!header) return;

        const mToggle = header.querySelector('.mnav-toggle');
        const mNav = document.getElementById('mobileNav');
        if (!mToggle || !mNav) return;

        const open = () => {
            mNav.classList.add('is-open');
            mNav.setAttribute('aria-hidden', 'false');
            mToggle.setAttribute('aria-expanded', 'true');
            document.documentElement.style.overflow = 'hidden';
        };

        const close = () => {
            mNav.classList.remove('is-open');
            mNav.setAttribute('aria-hidden', 'true');
            mToggle.setAttribute('aria-expanded', 'false');
            document.documentElement.style.overflow = '';
        };

        mToggle.addEventListener('click', () => {
            mNav.classList.contains('is-open') ? close() : open();
        });

        mNav.addEventListener('click', (e) => {
            if (e.target.closest('[data-mnav-close]')) close();
        });

        // ESC 닫기
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mNav.classList.contains('is-open')) close();
        });

        // 아코디언
        mNav.querySelectorAll('.mnav-acc').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.closest('.mnav-item');
                const isOpen = item.classList.contains('open');

                // 한 번에 하나만 열리게
                mNav.querySelectorAll('.mnav-item').forEach(li => {
                    li.classList.remove('open');
                    const b = li.querySelector('.mnav-acc');
                    if (b) b.setAttribute('aria-expanded', 'false');
                });

                if (!isOpen) {
                    item.classList.add('open');
                    btn.setAttribute('aria-expanded', 'true');
                }
            });
        });

        // 모바일 메뉴에서 링크 클릭하면 닫기
        mNav.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => close());
        });
    })();
</script>
