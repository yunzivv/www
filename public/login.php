<?php require_once __DIR__ . '/../app/head.php';
require_once __DIR__ . '/../app/header.php'; ?>

<body>
<main class="auth">

    <div class="auth-card" role="region" aria-label="Assist Login">

        <form class="auth-form" id="fakeLogin" action="login.php" method="post" novalidate>
            <label class="auth-label" for="username">Username</label>
            <input class="auth-input" type="text" id="username" name="username" autocomplete="off"
                   placeholder="아이디를 입력하세요">

            <label class="auth-label" for="password">Password</label>
            <input class="auth-input" type="password" id="password" name="password" autocomplete="off"
                   placeholder="비밀번호를 입력하세요">

            <button class="auth-btn" type="submit">확인</button>

            <p class="auth-note" id="fakeMsg" aria-live="polite"></p>
        </form>
    </div>
</main>

<script>
    (function () {
        const form = document.getElementById('fakeLogin');
        if (!form) return;

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            return false;
        });

        form.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                return false;
            }
        });
    })();
</script>
</body>

</html>
