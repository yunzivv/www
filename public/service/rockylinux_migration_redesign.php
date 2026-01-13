<?php require_once __DIR__ . '/../../app/head.php';
require_once __DIR__ . '/../../app/header.php'; ?>

<main id="rlmig-page" class="rl-page">

  <!-- HERO -->
  <section class="rl-hero" aria-labelledby="rl-title">
    <div class="rl-wrap rl-hero__grid">
      <div class="rl-hero__copy" data-reveal>
        <p class="rl-eyebrow">Rocky Linux Migration</p>
        <h1 class="rl-h1" id="rl-title">Why <br><span class="rl-accent">Rocky Linux?</span> </h1>
        <p class="rl-lead">
            Rocky Linux는 Red Hat Enterprise Linux®와 100% 호환되도록 설계된
            오픈소스 엔터프라이즈 운영 체제입니다.
            Rocky Linux는 이미 방대한 커뮤니티를 구성하여 집중적으로 개발되고 있으며,
            CentOS 의 뒤를 이어 현재 가장 많이 사용되는 순수한 오프소스 기반의 엔터프라이즈
            리눅스 배포판입니다.
            Rocky Linux는 RHEL에서 직접 소스를 rebuild 하므로 어떤 경우에 사용하든 상관없이
            매우 안정적인 환경을 제공할 수 있습니다.
        </p>

        <div class="rl-badges" data-reveal>
          <span class="rl-badge">스크립트 기반 전환</span>
          <span class="rl-badge">서비스 영향 최소화</span>
          <span class="rl-badge">검증/정보 제공</span>
        </div>
      </div>

      <figure class="rl-hero__media" data-reveal>
        <img src="/images/sub/rockylinux_img01.jpg" alt="Rocky Linux Migration" />
      </figure>
    </div>
  </section>

    <section class="mv-section" id="safe-migration">
        <div class="mv-shell">
            <div class="mv-split mv-split-reverse">
                <div class="mv-media mv-reveal">
                    <picture>
                        <source media="(max-width: 640px)" srcset="/images/sub/m_rockylinux_info02_img_con_img01.png">
                        <source media="(max-width: 1024px)"
                                srcset="/images/sub/tab_rockylinux_info02_img_con_img01.png">
                        <img src="/images/sub/rockylinux_info02_img_con_img01.png" alt="컨텐츠 이미지"/>
                    </picture>
                </div>

                <div class="mv-card mv-reveal">
                    <p class="mv-kicker">Migration</p>
                    <h2 class="mv-h2">CentOS에서 Rocky Linux로의 <br/>
                        안전한 <span class="hero-title-accent">마이그레이션</span> 지원</h2>
                    <p class="mv-desc">CentOS 7/8 버전을 Rocky Linux로 마이그레이션하고 시스템의 안정적인 장기 운영을 위해 Rocky Linux 기술지원 및 연장지원
                        서비스를 제공합니다.</p>
                    <div class="rk-chiprow">
                        <span class="mv-pill">스크립트 기반 전환</span>
                        <span class="mv-pill">서비스 안정성 확인</span>
                        <span class="mv-pill">호환성 테스트</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- TARGET VERSIONS -->
  <section class="rl-section" aria-labelledby="rl-target">
    <div class="rl-wrap">
      <header class="rl-head" data-reveal>
        <h2 class="rl-h2" id="rl-target">마이그레이션 대상 버전</h2>
        <p class="rl-muted">현재 운영 중인 CentOS 7/8 환경을 Rocky Linux로 전환하는 흐름을 안내합니다.</p>
      </header>

      <figure class="rl-figure" data-reveal>
        <picture>
          <source media="(max-width: 640px)" srcset="/images/sub/m_rockylinux_info03_img_con_img01.png">
          <img src="/images/sub/rockylinux_info03_img_con_img01.png" alt="마이그레이션 대상 버전" />
        </picture>
      </figure>
    </div>
  </section>

  <!-- SERVICE PLANS -->
  <section class="rl-section rl-section--plans" aria-labelledby="rl-plans">
    <div class="rl-wrap">
      <header class="rl-head" data-reveal>
        <h2 class="rl-h2" id="rl-plans">서비스 구성 및 내용</h2>
        <p class="rl-muted">전환 범위(단순 전환 → 서비스 보장 → 장기 유지보수)에 맞춰 선택할 수 있습니다.</p>
      </header>

      <div class="rl-plans">
        <article class="rl-plan" data-reveal>
          <div class="rl-plan__top">
            <div>
              <div class="rl-tag">Level 1</div>
              <h3 class="rl-h3">L1 서비스 (Level 1)</h3>
            </div>
            <div class="rl-icn" aria-hidden="true">
              <!-- swap with your SVG if needed -->
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M7 12h10M12 7v10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
          </div>

          <p class="rl-plan__desc">단순 배포판 변경 기존 CentOS 환경의 운영 설정을 유지하면서 배포판을 전환하는서비스 시스템의 전체적인 구조 유지</p>

          <div class="rl-plan__cols">
            <div class="rl-col">
              <div class="rl-col__t">지원 내용</div>
              <div class="rl-k">스크립트를 통한 마이그레이션</div>
<div class="rl-k">서비스 가동에 필요한 최소한의 변경 작업 수행</div>
<ul class="rl-ul"><li>커널 업그레이드</li><li>기본 패키지 업그레이드</li></ul>
            </div>
            <div class="rl-col">
              <div class="rl-col__t">검증 및 정보제공</div>
              <div class="rl-k">마이그레이션 여/부 체크</div>
<ul class="rl-ul"><li>배포판 이름/버전</li><li>시스템 커널 및 주요 OS 패키지의 버전 업그레이드</li><li>서버 재부팅 후 기본 동작</li><li>네트워크, 스토리지, 사용자 접근</li></ul>
            </div>
          </div>
        </article>

        <article class="rl-plan rl-plan--mid" data-reveal>
          <div class="rl-plan__top">
            <div>
              <div class="rl-tag rl-tag--accent">Recommended</div>
              <h3 class="rl-h3">L2 서비스 (Level 2)</h3>
            </div>
            <div class="rl-icn" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M12 3l7 3v6c0 5-3 8.5-7 9.3C8 20.5 5 17 5 12V6l7-3z"
                      stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <path d="M9.5 12.2l1.7 1.7 3.7-4"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>

          <p class="rl-plan__desc">서비스 보장 수준의 배포판 변경 L1서비스 포함 기존 CentOS 환경에서 운영중이던 서비스 (프로세스)의 동작을 보장하면서 배포판을 전환하는 서비스</p>

          <div class="rl-plan__cols">
            <div class="rl-col">
              <div class="rl-col__t">지원 내용</div>
              <div class="rl-k">배포판 업그레이드 및 기존 패키지에 대응하는 업데이트</div>
<ul class="rl-ul"><li>CentOS에서 운영 중이던 패키지 목록 추출</li><li>Rocky Linux에서 지원하는 버전으로 해당 패키지 업그레이드</li><li>지원이 안 되는 패키지는 고객에 통보</li></ul>
<div class="rl-k">주요 어플리케이션 및 서비스의 동작 확인</div>
<ul class="rl-ul"><li>WEB / WAS, DB, Network 관련</li><li>필요시 서비스 재구성 및 설정 수정</li><li>방화벽 / SELinux</li><li>패키지 의존성</li></ul>
            </div>
            <div class="rl-col">
              <div class="rl-col__t">검증 및 정보제공</div>
              <div class="rl-k">기존 시스템과의 호환성을 보장을 위한 테스트</div>
<ul class="rl-ul"><li>기존 설정/네트워크/보안 등이 유지 확인</li><li>서비스(WEB/WAS, DB, Network 등) 정상 가동 및 패키지 연동 확인 1) 프로세스 상태 2) 패키지 호환성</li></ul>
            </div>
          </div>
        </article>

        <article class="rl-plan" data-reveal>
          <div class="rl-plan__top">
            <div>
              <div class="rl-tag">Long-term</div>
              <h3 class="rl-h3">LTM 서비스 (장기유지보수)</h3>
            </div>
            <div class="rl-icn" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M21 12a9 9 0 1 1-3.2-6.9" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
          </div>

          <p class="rl-plan__desc">MontaVista MVShield for Rocky Linux L2 서비스로 전환 후, 해당 버전에 대한 장기유지보수 * Rocky Linux는 latest version이 릴리즈 되면 이전 버전의 지원 종료</p>

          <div class="rl-plan__cols">
            <div class="rl-col">
              <div class="rl-col__t">지원 내용</div>
              <div class="rl-k">CVE Patch, Bug Fix 등을 고객이 원할 때까지 지원</div>
<ul class="rl-ul"><li>Update 리포지토리 제공 (공중망 이용)</li><li>cf ) 고객 환경에 따라 로컬 리포지토리 구성 제공 가능</li></ul>
<div class="rl-k">분기별 업데이트 제공</div>
<div class="rl-k">긴급 지원 및 패치 지원</div>
<div class="rl-k">SLA에 따른 응답 시간 및 지원 레벨 보장</div>
              <div class="rl-k">SLA 기반 응답/지원 레벨 보장</div>
            </div>
            <div class="rl-col">
              <div class="rl-col__t">검증 및 정보제공</div>
              <div class="rl-k">정기 CVE-Pach/Bug-Fix 안내 (메일 또는 유선)</div>
<div class="rl-k">정기 패치 릴리즈 리포트 문서 제공</div>
<div class="rl-k">Patch URL 및 매뉴얼/교육 제공</div>
            </div>
          </div>
        </article>
      </div>

      <div class="rl-cta" data-reveal>
        <div>
          <h3 class="rl-h3" style="margin:0 0 6px;">환경에 맞는 전환 범위를 같이 설계해드립니다.</h3>
          <p class="rl-muted" style="margin:0;">현재 CentOS 버전, 주요 서비스 구성, 보안 요구사항을 알려주시면 최적의 경로를 제안합니다.</p>
        </div>
        <a class="rl-btn rl-btn--solid" href="/contact">컨설팅 요청</a>
      </div>
    </div>
  </section>

</main>

<script>
(() => {
  const items = document.querySelectorAll('#rlmig-page [data-reveal]');
  if (!items.length) return;

  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    items.forEach(el => el.classList.add('is-in'));
    return;
  }

  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('is-in');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -10% 0px' });

  items.forEach(el => io.observe(el));
})();
</script>

<?php require_once __DIR__ . '/../../app/footer.php'; ?>
