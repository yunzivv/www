<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>에이시스트</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// header.php
?>
<header class="site-header" id="siteHeader">
    <div class="header-inner">

        <a class="brand" href="index.php" aria-label="Go to home">
            <!-- 로고 교체 -->
            <span class="brand-text">ACIST</span>
            <img src="" alt="acist logo">
        </a>


        <nav class="gnb" aria-label="Main navigation">
            <ul class="gnb-list">
                <!-- solutions -->
                <li class="gnb-item dropdown">
                    <a class="gnb-link dropdown-trigger" href="solutions/montavista.php" role="menuitem">
                        SOLUTION
                    </a>

                    <div class="dropdown-panel" role="menu">
                        <a class="dropdown-item" href="solutions/montavista.php" role="menuitem">MontaVista Linux</a>
                        <a class="dropdown-item" href="solutions/mvshield.php" role="menuitem">MVShield</a>
                        <a class="dropdown-item" href="solutions/flexera.php" role="menuitem">FlexNet Code Insight</a>
                    </div>
                </li>

                <!-- service -->
                <li class="gnb-item dropdown">
                    <a class="gnb-link dropdown-trigger" href="service/centos.php" role="menuitem">
                        SERVICE
                    </a>

                    <div class="dropdown-panel" role="menu">
                        <a class="dropdown-item" href="service/centos.php" role="menuitem">MontaVista MVShield</a>
                        <a class="dropdown-item" href="service/ltsecure.php" role="menuitem">LTSecure</a>
                        <a class="dropdown-item" href="service/migration.php" role="menuitem">Rocky Linux Migration</a>
                        <a class="dropdown-item" href="service/ossAudit.php" role="menuitem">OSS Audit Service</a>
                    </div>
                </li>

                <li class="gnb-item">
                    <a class="gnb-link" href="about.php">ABOUT US</a>
                </li>

                <li class="gnb-item">
                    <a class="gnb-link" href="contact.php">CONTACT</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<script>
    (() => {
        const header = document.getElementById('siteHeader');
        const triggers = header.querySelectorAll('.dropdown-trigger');

        // 스크롤
        const setScrolled = () => {
            const scrolled = window.scrollY > 12;
            header.classList.toggle('is-scrolled', scrolled);
        };
        setScrolled();
        window.addEventListener('scroll', setScrolled, { passive: true });

        // 드롭다운 토글 (모바일/키보드 접근용)
        const closeAll = () => {
            triggers.forEach(btn => btn.setAttribute('aria-expanded', 'false'));
            header.querySelectorAll('.dropdown').forEach(li => li.classList.remove('open'));
        };

        triggers.forEach(btn => {
            btn.addEventListener('click', (e) => {
                const li = e.currentTarget.closest('.dropdown');
                const isOpen = li.classList.contains('open');

                closeAll();
                if (!isOpen) {
                    li.classList.add('open');
                    btn.setAttribute('aria-expanded', 'true');
                }
            });

            btn.addEventListener('keydown', (e) => {
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

