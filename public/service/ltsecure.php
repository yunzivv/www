<?php require_once __DIR__ . '/../../app/head.php';
require_once __DIR__ . '/../../app/header.php'; ?>

<main id="ltsecure-page" class="lt-page">

    <!--    hero-->
    <section class="lt-hero">
        <div class="service-title">
            LTSecure
        </div>
        <div class="wrap lt-hero-grid">
            <div class="lt-hero-copy">
                <h1 class="lt-title">CentOS를
                    <br><span class="text-highlight2">아직 사용하고 계시나요?</span></h1>
                <p class="lt-lead">
                    커뮤니티 지원이 종료된 CentOS는 심각한 보안 취약점이 발견되더라도 <br/>
                    이에 대한 패치가 제공되지 않습니다. 지금 바로 대책이 필요합니다. <br/>
                    LTSecure는 소규모 인프라를 운영하는 고객을 위한 <br/>
                    <span class="text-highlight">고객 맞춤형 CentOS 연장지원</span>
                    서비스입니다.
                </p>
                <ul class="pills" aria-label="">
                    <li>최신 CVE 대응</li>
                    <li>10년 장기지원</li>
                    <li>보안보고서 제공</li>
                    <li>전문가 기술지원</li>
                </ul>
            </div>
            <div class="lt-hero-visual" aria-hidden="true">
                <img src="../assets/img/CentOS%20LTS.png" alt="LTSecure 이미지"/>
            </div>
        </div>
    </section>


    <!--    risk-->
    <section class="lt-sec sec--dark">
        <div class="lt-risk-wrap wrap">
            <div class="lt-head">
                <h3 class="lt-sub">CentOS EOL 버전을 계속 사용할 경우</h3>
                <h2 class="lt-h2">발생할 수 있는 위험</h2>
            </div>

            <div class="lt-risk-grid">
                <article class="lt-risk">
                    <span class="lt-risk-no">01</span>
                    <span>새로운 보안 취약점에<strong> 대응하지 못함</strong></span>
                    <img class="lt-risk-img" src="/../assets/img/ltsecure_risk01.png" alt="">
                </article>
                <article class="lt-risk">
                    <span class="lt-risk-no">02</span>
                    <span>ISMS-P 등 다양한<strong> 보안 인증 심사에서 결함 판단</strong></span>
                    <img class="lt-risk-img" src="/../assets/img/ltsecure_risk02.png" alt="">
                </article>
                <article class="lt-risk">
                    <span class="lt-risk-no">03</span>
                    <span>최신 애플리케이션과의<strong> 호환성 문제</strong></span>
                    <img class="lt-risk-img" src="/../assets/img/ltsecure_risk03.png" alt="">
                </article>
                <article class="lt-risk">
                    <span class="lt-risk-no">04</span>
                    <span>문제 발생시,<strong> 커뮤니티 기술 지원 불가</strong></span>
                    <img class="lt-risk-img" src="/../assets/img/ltsecure_risk04.png" alt="">
                </article>
            </div>
        </div>
    </section>

    <!--    solution-->
    <section class="journey">
        <section class="wrap">
            <header class="head">
                <div class="title">CentOS EOL 버전을 <span class="text-highlight2">안전하게 사용하는 최적 솔루션</span>
                    <br>
                    <span class="hero-title-accent lts-title">LTSecure</span>
                </div>
                <div class="feature-desc">EOL 시점으로부터 10년 (LTM 5년 + ELTM 5년) 간의 장기 유지보수를 보장하여 안정적인 운영환경을 제공합니다.
                    <br>
                    소규모 인프라를 운영 중인 고객을 위해 비용 부담을 줄인 가격정책을 제시합니다.
                </div>
                <img class="cycle-dot" src="../assets/img/mvshield_info08.png" alt="">
            </header>
            <span class="cycle">LTSecure 수명주기</span>

            <div class="">
                <img src="../assets/img/centoslts_info03.png" alt="">
                <div class="mvshield-desc">
                    <img src="../assets/img/centoslts_info04.png" alt="">
                    <div class="desc">
                        *EOL : End Of Life (제품 수명 종료)
                        *LTM : Long Term Maintenace (장기 유지 보수) <br>
                        *ELTM : Extended LTM (연장 LTM)
                        *Sustaining Support : ELTM 이후 추가 연장이 필요한 경우, 고객이 원하는 시점까지 연장 지원
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!--    os-->
    <section id="os-support">
        <div class="wrap">
            <header class="head">
                <div class="lt-h2">지원 OS</div>
            </header>

            <div class="grid four">
                <article class="os">
                    <div class="logo">
                        <img src="/../assets/img/rockyLinux_ci.png" alt="Rocky Linux">
                    </div>
                    <div class="name">
                        <strong>Rocky Linux All versions</strong>
                    </div>
                </article>

                <article class="os os-centos">
                    <div class="logo">
                        <img src="/../assets/img/centOs_ci.png" alt="CentOS">
                    </div>
                    <div class="name">
                        <div>
                            <strong>CentOS</strong>
                        </div>
                        <div class="chips">
                            <span class="chip version">5</span>
                            <span class="chip version">6</span>
                            <span class="chip version">7</span>
                            <span class="chip version">8</span>
                        </div>
                    </div>
                </article>

                <article class="os">
                    <div class="logo">
                        <img src="/../assets/img/almaLinux_logo.png" alt="">
                    </div>
                    <div class="name">
                        <strong>AlmaLinux</strong>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!--    composition-->
    <section class="lt-sec">
        <div class="wrap">
            <div class="lt-head">
                <h2 class="lt-h2"><span class="text-highlight2">LTSecure</span> 서비스 구성</h2>
                <p class="lt-sub composition"><span>
						보안위협 및 인증심사 대비를 위한 업데이트 및 보안 패치를 제공합니다.
					</span></p>
            </div>

            <div class="lt-compare">
                <div class="lt-compare-desktop" role="region" aria-label="비교표 (데스크톱)">
                    <table class="lt-table">
                        <thead>
                        <tr>
                            <th>항목</th>
                            <th>CentOS EOL 상태</th>
                            <th><span class="lt-th-accent">LTSecure</span></th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td class="lt-td-title">CVE보안패치</td>
                            <td>미제공</td>
                            <td>최신 보안 취약점 대응</td>
                        </tr>
                        <tr>
                            <td class="lt-td-title">업데이트</td>
                            <td>불가능</td>
                            <td>필수 시스템 컴포넌트 유지보수 (커널 및 필수 패키지)</td>
                        </tr>
                        <tr>
                            <td class="lt-td-title">장기지원</td>
                            <td>불가능</td>
                            <td>EOL 시점으로부터 10년 보장</td>
                        </tr>
                        <tr>
                            <td class="lt-td-title">보안보고서</td>
                            <td>없음</td>
                            <td>인증심사 대응용 보고서 제공</td>
                        </tr>
                        <tr>
                            <td class="lt-td-title">기술지원</td>
                            <td>없음</td>
                            <td>전문가 기술지원, 신속대응</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Mobile swiper -->
                <div class="lt-compare-mobile">
                    <div class="swiper lt-compare-swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide lt-compare-card">
                                <div class="lt-compare-card-head">
                                    <div class="lt-compare-pill">LTSecure</div>
                                    <div class="lt-compare-item">CVE보안패치</div>
                                </div>
                                <div class="lt-compare-card-body">
                                    <div class="lt-compare-row">
                                        <div class="lt-compare-k">CentOS EOL 상태</div>
                                        <div class="lt-compare-k">미제공</div>
                                    </div>
                                    <div class="lt-compare-row">
                                        <div class="lt-compare-v">LTSecure</div>
                                        <div class="lt-compare-v">최신 보안 취약점 대응</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide lt-compare-card">
                                <div class="lt-compare-card-head">
                                    <div class="lt-compare-pill">LTSecure</div>
                                    <div class="lt-compare-item">업데이트</div>
                                </div>
                                <div class="lt-compare-card-body">
                                    <div class="lt-compare-row">
                                        <div class="lt-compare-k">CentOS EOL 상태</div>
                                        <div class="lt-compare-k">불가능</div>
                                    </div>
                                    <div class="lt-compare-row">
                                        <div class="lt-compare-v">LTSecure</div>
                                        <div class="lt-compare-v">필수 시스템 컴포넌트 유지보수 (커널 및 필수 패키지)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide lt-compare-card">
                                <div class="lt-compare-card-head">
                                    <div class="lt-compare-pill">LTSecure</div>
                                    <div class="lt-compare-item">장기지원</div>
                                </div>
                                <div class="lt-compare-card-body">
                                    <div class="lt-compare-row">
                                        <div class="lt-compare-k">CentOS EOL 상태</div>
                                        <div class="lt-compare-k">불가능</div>
                                    </div>
                                    <div class="lt-compare-row">
                                        <div class="lt-compare-v">LTSecure</div>
                                        <div class="lt-compare-v">EOL 시점으로부터 10년 보장</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide lt-compare-card">
                                <div class="lt-compare-card-head">
                                    <div class="lt-compare-pill">LTSecure</div>
                                    <div class="lt-compare-item">보안보고서</div>
                                </div>
                                <div class="lt-compare-card-body">
                                    <div class="lt-compare-row">
                                        <div class="lt-compare-k">CentOS EOL 상태</div>
                                        <div class="lt-compare-k">없음</div>
                                    </div>
                                    <div class="lt-compare-row">
                                        <div class="lt-compare-v">LTSecure</div>
                                        <div class="lt-compare-v">인증심사 대응용 보고서 제공</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide lt-compare-card">
                                <div class="lt-compare-card-head">
                                    <div class="lt-compare-pill">LTSecure</div>
                                    <div class="lt-compare-item">기술지원</div>
                                </div>
                                <div class="lt-compare-card-body">
                                    <div class="lt-compare-row">
                                        <div class="lt-compare-k">CentOS EOL 상태</div>
                                        <div class="lt-compare-k">없음</div>
                                    </div>
                                    <div class="lt-compare-row">
                                        <div class="lt-compare-v">LTSecure</div>
                                        <div class="lt-compare-v">전문가 기술지원, 신속대응</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination lt-compare-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    why-->
    <section class="lt-sec sec--dark">
        <div class="wrap">
            <div class="lt-head lt-head--dark">
                <h2 class="lt-h2">Why <span class="hero-title-accent3">LTSecure?</span></h2>
            </div>

            <div class="lt-why-desktop">
                <div class="lt-why-tabs" role="tablist" aria-label="Why LTSecure">
                    <button type="button" role="tab" aria-selected="false">
                        <span class="lt-why-icn" aria-hidden="true">
                            <img src="/../assets/img/ltsecure01_off.svg" alt="" class="lt-why-icn__img is-off">
                            <img src="/../assets/img/ltsecure01_on.svg" alt="" class="lt-why-icn__img is-on">
                        </span>
                        최신 보안패치 제공 <br> (CVE대응)
                    </button>

                    <button type="button" role="tab" aria-selected="false">
                        <span class="lt-why-icn" aria-hidden="true">
                            <img src="/../assets/img/ltsecure02_off.svg" alt="" class="lt-why-icn__img is-off">
                            <img src="/../assets/img/ltsecure02_on.svg" alt="" class="lt-why-icn__img is-on">
                        </span>
                        산업 맞춤형 <br>보안패치
                    </button>

                    <button type="button" role="tab" aria-selected="false">
                        <span class="lt-why-icn" aria-hidden="true">
                            <img src="/../assets/img/ltsecure03_off.svg" alt="" class="lt-why-icn__img is-off">
                            <img src="/../assets/img/ltsecure03_on.svg" alt="" class="lt-why-icn__img is-on">
                        </span>
                        자체 업데이트 <br>레포지토리 운영
                    </button>

                    <button type="button" role="tab" aria-selected="false">
                        <span class="lt-why-icn" aria-hidden="true">
                            <img src="/../assets/img/ltsecure04_off.svg" alt="" class="lt-why-icn__img is-off">
                            <img src="/../assets/img/ltsecure04_on.svg" alt="" class="lt-why-icn__img is-on">
                        </span>
                        보안컨설팅 및 <br>기술지원
                    </button>

                    <button type="button" role="tab" aria-selected="false">
                        <span class="lt-why-icn" aria-hidden="true">
                            <img src="/../assets/img/ltsecure05_off.svg" alt="" class="lt-why-icn__img is-off">
                            <img src="/../assets/img/ltsecure05_on.svg" alt="" class="lt-why-icn__img is-on">
                        </span>
                        Rocky Linux<br> 마이그레이션
                    </button>
                </div>
            </div>

            <div class="lt-why-body">
                <div class="swiper lt-why-swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="lt-why-card">
                                <p>CentOS EOL 버전에 대해 최신 보안패치를 제공합니다. MontaVista MVShield, Redhat CVE Tracker, NVD 등
                                    업계표준 데이터베이스를 모니터링하여 CVE정보를 지속적으로 수집, 추가 패치를 제공합니다.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lt-why-card">
                                <p>금융,의료,공공기관 등 각 산업의 보안규제(PCI-DSS, HIPAA, NIST등)를 준수하는 맞춤형 패치를 지원합니다.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lt-why-card">
                                <p>CentOS EOL 이전에 사용하던 방식 그대로 사용이 가능합니다. LTSecure Update Repository를 연결하는 것만으로 최신
                                    패치를 적용할 수 있습니다. (Yum/ dnf update ) 서비스이용을 위한 원격 agent 나 추가로 설치해야 하는 도구는 일체
                                    없습니다.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lt-why-card">
                                <p>전문 엔지니어가 보안 취약점 분석 및 대응 전략을 제공합니다. 긴급 패치 대응, 시스템 최적화, 장기 운영 전략까지 함께 고민합니다.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lt-why-card">
                                <p>CentOS 이후 Rocky Linux로의 마이그레이션을 지원 합니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- mobile accordion -->
        <div class="lt-why-mobile wrap">
            <details class="lt-details">
                <summary>
                    <span class="lt-why-icn" aria-hidden="true">
                        <img src="../assets/img/ltsecure01_off.svg" alt="" class="lt-why-icn__img is-off">
                        <img src="../assets/img/ltsecure01_on.svg" alt="" class="lt-why-icn__img is-on">
                    </span>
                    최신 보안패치 제공 (CVE대응)
                </summary>
                <div class="lt-details-body">CentOS EOL 버전에 대해 최신 보안패치를 제공합니다. <br>
                    MontaVista MVShield, Redhat CVE
                    Tracker, NVD 등 업계표준 데이터베이스를 모니터링하여 CVE정보를 지속적으로 수집, 추가 패치를 제공합니다.
                </div>
            </details>
            <details class="lt-details">
                <summary>
                    <span class="lt-why-icn" aria-hidden="true">
                        <img src="../assets/img/ltsecure02_off.svg" alt="" class="lt-why-icn__img is-off">
                        <img src="../assets/img/ltsecure02_on.svg" alt="" class="lt-why-icn__img is-on">
                    </span>
                    산업 맞춤형 보안패치
                </summary>
                <div class="lt-details-body">금융,의료,공공기관 등 각 산업의 보안규제(PCI-DSS, HIPAA, NIST등)를 준수하는 맞춤형 패치를 지원합니다.
                </div>
            </details>
            <details class="lt-details">
                <summary>
                    <span class="lt-why-icn" aria-hidden="true">
                        <img src="../assets/img/ltsecure03_off.svg" alt="" class="lt-why-icn__img is-off">
                        <img src="../assets/img/ltsecure03_on.svg" alt="" class="lt-why-icn__img is-on">
                    </span>
                    자체 업데이트 레포지토리 운영
                </summary>
                <div class="lt-details-body">CentOS EOL 이전에 사용하던 방식 그대로 사용이 가능합니다. <br>
                    LTSecure Update Repository를 연결하는
                    것만으로 최신 패치를 적용할 수 있습니다. (Yum/ dnf update ) 서비스이용을 위한 원격 agent 나 추가로 설치해야 하는 도구는 일체 없습니다.
                </div>
            </details>
            <details class="lt-details">
                <summary>
                    <span class="lt-why-icn" aria-hidden="true">
                        <img src="../assets/img/ltsecure04_off.svg" alt="" class="lt-why-icn__img is-off">
                        <img src="../assets/img/ltsecure04_on.svg" alt="" class="lt-why-icn__img is-on">
                    </span>
                    보안컨설팅 및 기술지원
                </summary>
                <div class="lt-details-body">전문 엔지니어가 보안 취약점 분석 및 대응 전략을 제공합니다. <br>
                    긴급 패치 대응, 시스템 최적화, 장기 운영 전략까지 함께
                    고민합니다.
                </div>
            </details>
            <details class="lt-details">
                <summary>
                    <span class="lt-why-icn" aria-hidden="true">
                        <img src="../assets/img/ltsecure05_off.svg" alt="" class="lt-why-icn__img is-off">
                        <img src="../assets/img/ltsecure05_on.svg" alt="" class="lt-why-icn__img is-on">
                    </span>
                    Rocky Linux 마이그레이션
                </summary>
                <div class="lt-details-body">CentOS 이후 Rocky Linux로의 마이그레이션을 지원 합니다.</div>
            </details>
        </div>
        </div>
    </section>

    <!-- target -->
    <div class="lts-target">
        <div class="wrap">
            <div class="lts-target-title">대상 고객</div>
            <ul>
                <li><img src="/../assets/img/check.svg" alt="">금융, 공공기관, 제조업 등 CentOS 기반 시스템을 장기간 운영해야 하는 기업 및 기관</li>
                <li><img src="/../assets/img/check.svg" alt="">보안이 중요한 미션 크리티컬 시스템 운영 기업</li>
                <li><img src="/../assets/img/check.svg" alt="">소규모 인프라 운영 고객 대상 (설치 서버 기준 25대 미만)</li>
            </ul>
        </div>
    </div>

    <!-- process -->
    <section class="lt-sec">
        <div class="wrap">
            <div class="lt-head">
                <h2 class="lt-h2">서비스 신청 및 개시절차</h2>
            </div>

            <div class="lt-process">
                <div class="lt-process-visual">
                    <picture>
                        <source media="(max-width: 640px)" srcset="/../assets/img/centoslts_info08_mo.png"/>
                        <source media="(max-width: 1024px)"
                                srcset="/../assets/img/centoslts_info08_tab.png"/>
                        <img src="/../assets/img/centoslts_info08.png" alt="">
                    </picture>
                </div>

                <div class="lt-process-body">
                    <ul class="lt-check">
                        <li><img src="/../assets/img/check.svg" alt="">
                            업데이트 및 보안보고서 매 분기 제공
                        </li>
                        <li>
                            <img src="/../assets/img/check.svg" alt="">
                            서비스 개시 직후 EOL 시점으로부터의 누적 업데이트 및 보안보고서 제공
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- faq -->
    <section class="lt-sec sec--soft">
        <div class="wrap">
            <div class="lt-head">
                <h2 class="lt-h2">자주 묻는 질문</h2>
            </div>

            <div class="lt-faq">

                <details class="lt-details">
                    <summary class="faq"><span class="lt-q">Q</span>MVShield 서비스와 LTSecure 서비스의 차이점이 무엇인가요?</summary>
                    <div class="lt-details-body"><span class="lt-a">A</span>
                        <span>MVShield는 MontaVista Software의 Enterprise
                        Linux 유지보수 및 기술지원 서비스입니다. <br>
                            주로 대규모 서버 인프라를 보유한 글로벌 고객을 대상으로 합니다. 현재 Active 한 배포판은 물론 모든 EOL 버전을 지원하며, <br>
                            고객의 요구사항에 맞춘 완전한 맞춤형 서비스를 제공합니다. <br>
                            LTSecure는 MontaVista 의 한국 공식 기술지원 파트너인 에이시스트에서 제공하는
                        &#x27;CentOS 연장지원&#x27;서비스입니다. <br>
                            CentOS EOL 버전에 대한 CVE (보안취약점) 패치 제공에 초점을 맞춰, 소규모 IT 인프라를 운영 하는 기업및 기관을 대상으로, <br>
                            각종 인증심사에 대비할 수 있도록 지원하는 서비스입니다.</span>
                    </div>
                </details>
                <details class="lt-details">
                    <summary class="faq"><span class="lt-q">Q</span>MVShield 에서 제공하는 업데이트 패치가 LTSecure 서비스에도 포함 되나요?
                    </summary>
                    <div class="lt-details-body"><span class="lt-a">A</span>네. LTSecure 서비스는 MVShield 는 물론, Redhat CVE
                        Tracker, NVD 등 다양한 공공데이터베이스를 모니터링하여 <br>
                        CVE 정보를 지속적으로 수집, 추가 패치를 제공합니다.
                    </div>
                </details>
                <details class="lt-details">
                    <summary class="faq"><span class="lt-q">Q</span>LTSecure 패치를 적용하면 기존 시스템과 충돌이 발생할 가능성은 없나요?
                    </summary>
                    <div class="lt-details-body"><span class="lt-a">A</span>패치는 철저한 사전 테스트 후 배포되며, 기존 환경과의 호환성을 유지하는 것을
                        최우선으로 합니다. <br>패치 적용 전후의 백업 및 롤백 가이드를 제공하여 안전한 업데이트가 가능합니다.
                    </div>
                </details>
                <details class="lt-details">
                    <summary class="faq"><span class="lt-q">Q</span>CentOS 이외에 다른 배포판도 지원하나요?</summary>
                    <div class="lt-details-body"><span class="lt-a">A</span>현재 CentOS EOL 버전과 Rocky Linux, AlmaLinux 일부
                        EOL버전을 지원합니다. <br>필요에 따라 다른 RHEL 호환 배포판에 대한 지원도 가능합니다. (AlmaLinux, Oracle Linux 등)
                    </div>
                </details>
                <details class="lt-details">
                    <summary class="faq"><span class="lt-q">Q</span>MVShield나 LTSecure는 임시방편이고, 결국 상위버전의 RHEL이나 Rocky
                        Linux로 마이그레이션
                        해야 하는 것 아닌가요?
                    </summary>
                    <div class="lt-details-body"><span class="lt-a">A</span>아닙니다. MVShield는 글로벌 리눅스 벤더인 MontaVista
                        Software의 솔루션입니다.<br> EOL OS 에 대한 지속적인 업데이트/풀빌드/QA 를 통해, 상용 OS와 동일한 수준의 품질을 보장하고, 주기적인 업데이트 릴리즈를
                        제공합니다. <br>불필요한 OS 업그레이드를 회피하고 기존 CentOS 기반 서비스 운영을 안정적으로 지속할 수 있습니다. MVShield는 이미 많은 국내외 대기업에서
                        사용
                        중인, 검증된 서비스입니다. <br>LTSecure는 MVShield 에 구성요소 중 패치지원에 중점을 둔 서비스입니다.
                    </div>
                </details>
                <details class="lt-details">
                    <summary class="faq"><span class="lt-q">Q</span>LTSecure 서비스를 사용하다가 Rocky Linux로 Migration 이 필요한 경우
                        지원이 가능한가요?
                    </summary>
                    <div class="lt-details-body"><span class="lt-a">A</span>네. 가능합니다. Rocky Linux Migration 서비스 페이지를
                        참고하시기 바랍니다.
                    </div>
                </details>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const root = document.querySelector('#ltsecure-page');
        if (!root) return;

        const desktop = root.querySelector('.lt-why-desktop');
        const tabs = [...root.querySelectorAll('.lt-why-tabs [role="tab"]')];
        const prevBtn = root.querySelector('.lt-why-nav .prev');
        const nextBtn = root.querySelector('.lt-why-nav .next');

        const isDesktopVisible = desktop && getComputedStyle(desktop).display !== 'none';
        if (!isDesktopVisible) return;

        function setActiveTab(index) {
            tabs.forEach((btn, i) => {
                const active = i === index;
                btn.classList.toggle('is-active', active);
                btn.setAttribute('aria-selected', active ? 'true' : 'false');
                btn.tabIndex = active ? 0 : -1;
            });
        }

        if (typeof Swiper === 'function') {
            const swiper = new Swiper(root.querySelector('.lt-why-swiper'), {
                slidesPerView: 1,
                speed: 420,
                autoHeight: true,
                effect: 'slide',
                navigation: {
                    prevEl: prevBtn,
                    nextEl: nextBtn,
                },
                on: {
                    init(s) {
                        setActiveTab(s.realIndex);
                    },
                    slideChange(s) {
                        setActiveTab(s.realIndex);
                    },
                }
            });

            tabs.forEach((btn, i) => {
                btn.addEventListener('click', () => swiper.slideTo(i));
                btn.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        swiper.slideTo(i);
                    }
                    if (e.key === 'ArrowDown') {
                        e.preventDefault();
                        swiper.slideTo(Math.min(i + 1, tabs.length - 1));
                    }
                    if (e.key === 'ArrowUp') {
                        e.preventDefault();
                        swiper.slideTo(Math.max(i - 1, 0));
                    }
                });
            });

        } else {
            const slides = [...root.querySelectorAll('.lt-why-swiper .swiper-slide')];
            slides.forEach((s, i) => {
                if (i !== 0) s.style.display = 'none';
            });
            setActiveTab(0);

            tabs.forEach((btn, i) => {
                btn.addEventListener('click', () => {
                    slides.forEach((s, idx) => s.style.display = (idx === i ? '' : 'none'));
                    setActiveTab(i);
                });
            });

            if (prevBtn) prevBtn.addEventListener('click', () => {
                const cur = tabs.findIndex(b => b.classList.contains('is-active'));
                const next = Math.max(cur - 1, 0);
                tabs[next].click();
            });
            if (nextBtn) nextBtn.addEventListener('click', () => {
                const cur = tabs.findIndex(b => b.classList.contains('is-active'));
                const next = Math.min(cur + 1, tabs.length - 1);
                tabs[next].click();
            });
        }
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const accordionItems = document.querySelectorAll('.lt-why-mobile .lt-details');
        if (accordionItems.length > 0) {
            accordionItems.forEach(item => {
                item.addEventListener('toggle', (event) => {
                    if (item.open) {
                        accordionItems.forEach(otherItem => {
                            if (otherItem !== item) {
                                otherItem.removeAttribute('open');
                            }
                        });
                    }
                });
            });
        }
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const compareEl = document.querySelector('#ltsecure-page .lt-compare-swiper');
        if (compareEl && window.Swiper) {
            new Swiper(compareEl, {
                slidesPerView: 'auto',
                spaceBetween: 14,
                centeredSlides: false,
                loop: false,
                pagination: {
                    el: '#ltsecure-page .lt-compare-pagination',
                    clickable: true
                }
            });
        }

        const whyEl = document.querySelector('#ltsecure-page .lt-why-swiper');
        const tabs = Array.from(document.querySelectorAll('#ltsecure-page .lt-why-tabs button'));
        if (whyEl && window.Swiper) {
            const whySwiper = new Swiper(whyEl, {
                slidesPerView: 1,
                effect: 'fade',
                fadeEffect: {crossFade: true},
                loop: true,
                speed: 0,
                navigation: {
                    prevEl: '#ltsecure-page .lt-why-nav .prev',
                    nextEl: '#ltsecure-page .lt-why-nav .next',
                },
                on: {
                    slideChange: function () {
                        const real = this.realIndex ?? 0;
                        tabs.forEach((b, i) => b.classList.toggle('is-active', i === real));
                    }
                }
            });

            tabs.forEach((btn, idx) => {
                btn.addEventListener('click', () => {
                    whySwiper.slideToLoop(idx, 0);
                    tabs.forEach((b, i) => b.classList.toggle('is-active', i === idx));
                });
            });

            tabs.forEach((b, i) => b.classList.toggle('is-active', i === 0));
        }
    });
</script>


<?php require_once __DIR__ . '/../../app/footer.php'; ?>
