<footer class="site-footer">
    <div class="footWrap">
        <div class="footCnt footer-inner">
            <address>
                <span>에이시스트㈜</span>
                <span>주소. 서울특별시 송파구 중대로 135(가락동, 아이티벤처타워)</span>
                <span>전화. 070-7137-5521</span>
                <span>메일.<a href="mailto:assist@assist.com">assist@assist.com</a></span>
            </address>

            <a href="/privacy.php" class="privacy">개인정보처리방침</a>
            <p class="copy">Copyright © 2026 Assist. All rights reserved.</p>
        </div>
    </div>
</footer>


</body>
<button class="btn-top" aria-label="맨 위로 이동">↑</button>

<script>
    (() => {
        const btn = document.querySelector('.btn-top');
        if (!btn) return;

        const toggleBtn = () => {
            btn.classList.toggle('show', window.scrollY > 300);
        };

        window.addEventListener('scroll', toggleBtn, { passive: true });
        toggleBtn();

        btn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    })();
</script>

</html>