<?php include __DIR__ . "/header.php"; ?>

    <div id="wrap" class="sub go_wrap">
        <div class="overlay"></div>

        <!-- header-->
        <div id="header" class="scroll">
            <div class="headerWrap">
                <div class="inner">
                    <h1><a href="/index.php"><img src="../images/common/logo.png" alt="에이시스트㈜"><img
                                    src="../images/common/logo_w.png" class="logo_w" alt="에이시스트㈜"><span
                                    class="blind">에이시스트㈜</span></a></h1>
                    <!-- navigation jquery -->
                    <div id="topmenu">
                        <ul>
                            <li><a href="/solutions/montavista.php">SOLUTIONS</a></li>
                            <li><a href="/service/centos.php">SERVICE</a></li>
                            <li class="active"><a href="/aboutus/aboutus.php">ABOUT US</a></li>
                            <li>
                                <a href="/bbs/board.php?tbl=contact&amp;mode=WRITE">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="btn_con">
                    <a href="http://technical.j2mtech.com:7800/" target="_blank">
                        SUPPORT LOGIN
                    </a>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#topmenu').topmenu({d1: 0, d2: 0});
                    });
                </script>
            </div>

            <div class="allmenu_wrap" style="display: none;">
                <div id="allmenu">
                    <div class="allmenuWrap">
                        <dl>
                            <dd style="display: none;">
                                <ul>
                                    <li><a href="/solutions/montavista.php">MontaVista Linux</a></li>
                                    <li><a href="/solutions/mvshield.php">MVShield</a></li>
                                    <li><a href="/solutions/flexera.php">FlexNet Code Insight</a></li>
                                </ul>
                            </dd>
                        </dl>
                        <dl>
                            <dd style="display: none;">
                                <ul>
                                    <li><a href="/service/centoslts.php">LTSecure</a></li>
                                    <li><a href="/service/rockylinux.php">Rocky Linux Migration</a></li>
                                    <li><a href="/service/ossaudit.php">OSS Audit Service</a></li>
                                </ul>
                            </dd>
                        </dl>
                        <dl>
                        </dl>
                        <dl>
                            <dd style="display: none;">
                                <ul>
                                    <li>
                                        <a href="/bbs/board.php?tbl=contact&amp;mode=WRITE">Contact us</a>

                                    </li>
                                    <li><a href="/contact/location.php">오시는길</a></li>

                                </ul>
                            </dd>
                        </dl>

                    </div>

                    <div class="btn_con">
                        &nbsp;
                    </div>
                </div>
            </div>

            <div class="mobile-menu">
                <a href="javascript:;"></a>
            </div>


            <script>

                $("#topmenu ul li a").mouseenter(function () {
                    var idx = $(this).parent().index();
                    $("#header").addClass("on");
                    $(".allmenu_wrap").fadeIn("fast");
                    $(".allmenuWrap > dl > dd").hide();
                    $(".allmenuWrap > dl").eq(idx).find("dd").show();
                });
                $("#topmenu ul li a").mouseleave(function () {
                    $("#topmenu ul li a").removeClass("on");
                });
                $("#header").mouseleave(function () {
                    $(".allmenu_wrap").fadeOut("fast");
                    $("#header").removeClass("on");
                });

                $(".allmenuWrap dl").mouseenter(function () {
                    var idx = $(this).index();
                    $("#topmenu ul li a").removeClass("on");
                    $("#topmenu ul li").eq(idx).children("a").addClass("on");
                });
                $(".allmenuWrap dl").mouseleave(function () {
                    $("#topmenu ul li a").removeClass("on");
                });

            </script>
        </div>

        <div class="mobile-menu-contain">
            <div class="mmc-blind"></div>
            <div class="inmenu">
                <ul>
                    <li>
                        <a href="javascript:;">Solutions</a>
                        <div>
                            <a href="/solutions/montavista.php">Monta Vista Linux</a>
                            <a href="/solutions/mvshield.php">MVShield</a>
                            <a href="/solutions/flexera.php">FlexNet Code Insight</a>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;">Service</a>
                        <div>
                            <a href="/service/centoslts.php">LTSecure</a>
                            <a href="/service/rockylinux.php">Rocky Linux Migration</a>
                            <a href="/service/ossaudit.php">OSS Audit Service</a>
                        </div>
                    </li>
                    <li>
                        <a href="/aboutus/aboutus.php" class="unch">About us</a>
                    </li>
                    <li>
                        <a href="javascript:;">Contact</a>
                        <div>
                            <a href="/bbs/board.php?tbl=contact&amp;mode=WRITE">Contact us</a>
                            <a href="/contact/location.php">오시는길</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NM77XWN8"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>


        <script>
            $(".mobile-menu-contain ul li > a").click(function () {
                if (!$(this).parent().hasClass("on")) {
                    $(".mobile-menu-contain ul li div").slideUp("fast");
                    $(".mobile-menu-contain ul li").removeClass("on");
                }
                $(this).next().slideToggle("fast");
                $(this).parent().toggleClass("on");
            });

            $(".mobile-menu > a").click(function () {
                if (!$("#header").hasClass("mon")) {
                    $("#header").addClass("mon");
                    $(".mobile-menu-contain").show().stop().animate({"left": 0}, 250);
                } else {
                    $("#header").removeClass("mon");
                    $(".mobile-menu-contain").stop().animate({"left": "100%"}, 250, function () {
                        $(".mobile-menu-contain").hide();
                    });
                }
            });

        </script>

        <div id="subVisual" class="subVsal01">

        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#subVisual .subv-title span').animate({opacity: 1}, 800)
                $('.sub #contents').delay(400).animate({opacity: 1}, 800)
            });
        </script>

        <div id="container">

            <!-- /menu -->

            <div id="contents" style="opacity: 1;">


                <div class="sub-container">
                    <div class="inner">
                        <div class="aboutus-section1">
                            <div class="sub-untxt-area">
                                <div class="sub-title">“최고를 향한 여정에 동반자가 되겠습니다.”</div>
                                에이시스트㈜는 오픈소스소프트웨어(OSS) 및 기업용 소프트웨어 전문 기술지원ᆞ컨설팅 업체입니다.<br>
                                임베디드 시스템 개발을 위한 운영체제 및 소프트웨어 개발도구에서부터 클라우드 기반의<br>
                                IT 인프라스트럭처 구성을 위한 필수 소프트웨어 제품 및 솔루션을 공급하고 전문인력을 통한 기술지원을 제공합니다.<br>
                                '최고의 제품, 최대의 효율, 최고의 기업'을 향한 고객의 여정을 응원하며 언제나 든든한 동반자로서 함께 하겠습니다.
                            </div>

                            <div class="center">
                                <img src="/images/sub/aboutus_img01.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray">
                        <div class="inner">
                            <div class="in-setit center">사업영역</div>

                            <div class="whbox-thr-one">
                                <div>
                                    <i class="c1"></i>
                                    <span class="tit">솔루션 공급</span>
                                    <p class="txt">
                                        MontaVista Linux, FlexNet Code<br>
                                        Insight, Hashicorp 등 업계 최고의<br>
                                        솔루션과 관련 기술지원 서비스 제공
                                    </p>
                                </div>
                                <div>
                                    <i class="c2"></i>
                                    <span class="tit">OSS 기술지원</span>
                                    <p class="txt">
                                        CentOS, Ubuntu, Clear Linux,<br>
                                        Yocto 등 오픈소스 기반의 운영체제 및<br>
                                        오픈소스 컨테이너(Docker CE)에<br>
                                        대한 상용 기술지원 제공
                                    </p>
                                </div>
                                <div>
                                    <i class="c3"></i>
                                    <span class="tit">교육</span>
                                    <p class="txt">
                                        임베디드 시스템 개발자를 위해<br>
                                        최적화된 Linux 교육 제공. 기본<br>
                                        교육과정외 고객의 개발환경에 최적화된<br>
                                        Custom 교육과정 진행 가능<br>
                                    </p>
                                </div>
                                <div class="full">
                                    <div class="left">
                                        <i class="c4"></i>
                                        <span class="tit">엔지니어링 서비스</span>
                                    </div>
                                    <div class="ri-list">
                                        <ul>
                                            <li>
                                                <span>Linux BSP 개발/QA/유지보수</span>
                                                <p>
                                                    고객의 타겟 하드웨어를 위한 Linux BSP 개발 및 검증,
                                                    사후 유지보수 서비스(버그픽스, 보안패치)
                                                </p>
                                            </li>
                                            <li>
                                                <span>운영체제 Migration 서비스</span>
                                                <p>
                                                    Vxworks to Linux, Windows to Linux, RHEL to CentOS 등
                                                    기존 운영체제에 대한 Linux Migration 서비스 제공
                                                </p>
                                            </li>
                                            <li>
                                                <span>Linux 시스템 성능 개선</span>
                                                <p>
                                                    부팅타임 최소화, 실시간 성능 보장, 네트워크 대역폭
                                                    최대화 및 지연 최소화
                                                </p>
                                            </li>
                                            <li>
                                                <span>시스템 보안성 강화 기능</span>
                                                <p>
                                                    Secure boot, TPM, TEE/Trustzone, Address Space,
                                                    Layout Randomization
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inner">
                        <div class="aboutus-section2">
                            <div class="in-setit center">주요고객</div>
                            <div>
                                <img src="/images/sub/aboutus_img02.jpg" alt="" class="pcver">
                                <img src="/images/sub/aboutus_img02_mo.jpg" alt="" class="mover">
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
        <!-- foot-->
        <div id="foot">
            <script type="text/javascript">
                function toggle(layer_id, opt) {
                    var layer = document.getElementById(layer_id);

                    if (opt == "view") {
                        layer.style.display = "block";
                        document.fhead.mb_id.focus();
                    } else if (opt == "hide")
                        layer.style.display = "none";
                }

                function fhead_submit(f) {
                    if (!f.mb_id.value) {
                        alert("회원아이디를 입력하십시오.");
                        f.mb_id.focus();
                        return false;
                    }

                    if (!f.mb_pass.value) {
                        alert("패스워드를 입력하십시오.");
                        f.mb_pass.focus();
                        return false;
                    }

                    f.action = '/member/login.php';
                    return true;
                }
            </script>

            <!-- 로그인 전 외부로그인 시작 -->
            <form name="fhead" method="post" onsubmit="return fhead_submit(this);"
                  style="margin:0;padding:0; z-index:200;">
                <input type="hidden" name="URL" value="/aboutus/aboutus.php">
                <input type="hidden" name="mode" value="Login">
                <div class="divbox" id="box" style="display:none;">
                    <div class="login_center" name="login_body">
                        <div id="p_input">
                            <ul>
                                <li class="mgB5">
                                    <span class="label">아이디</span> <input name="mb_id" value="ID" type="text"
                                                                          maxlength="20" itemname="아이디"
                                                                          onmouseover="this.focus;"
                                                                          onfocus="this.value='';" tabindex="1"
                                                                          class="text">
                                </li>
                                <li>
                                    <span class="label">비밀번호</span> <input type="password" name="mb_pass"
                                                                           itemname="비밀번호" value="" maxlength="12"
                                                                           onmouseover="this.focus;"
                                                                           onfocus="this.value='';" class="text"
                                                                           xstyle="background-image:url('./skin/outlogin/login_v2/images/pw.gif');"
                                                                           tabindex="2">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div name="login_foot" class="login_foot">
                        <input type="submit" class="btn_red" value="LOGIN" onclick="">&nbsp;
                        <input type="button" class="btn_black rebod" value="CANCEL"
                               onclick="javascript:toggle('box', 'hide');">
                    </div>
                </div>
            </form>

            <div class="footWrap">
                <div class="footCnt">
                    <address>
                        <span>에이시스트㈜</span>
                        <span>주소. 서울특별시 송파구 중대로 135(가락동,아이티벤처타워)</span>
                        <span>전화. 070-7137-5521</span>
                        <span>메일. j2mtech@j2mtech.com</span>
                    </address>
                    <a href="/member/privacy.php" class="privacy">개인정보처리방침</a>
                    <p class="copy">(C) 2020 J2MTECHNOLOGY. ALL RIGHTS RESERVED. DESIGN BY <a href="http://way21.co.kr"
                                                                                              target="_way21">way21</a>
                        <span class="secret">
								<a href="javascript:toggle('box', 'view');">
								<img src="/images/common/icon/icon_secret_sub.png" alt="" class="imgC"></a>
			</span>
                    </p>
                </div>
            </div>

            <script>
                function move_scroll(item_class) {
                    var item = $("." + item_class);
                    var offset_item = item.offset();
                    var position_top = offset_item.top;

                    $('html,body').animate({scrollTop: position_top}, 500);
                }

            </script>
        </div>
    </div>

<?php include __DIR__ . "/footer.php"; ?>