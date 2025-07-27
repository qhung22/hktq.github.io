let captchaValue;

function generateCaptcha() {
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let captcha = '';
    for (let i = 0; i < 6; i++) {
        captcha += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    const captchaDisplay = document.getElementById('captchaCode');
    const captchaInput = document.getElementById('registerCaptcha');
    if (captchaDisplay) captchaDisplay.textContent = captcha;
    captchaValue = captcha;
    if (captchaInput) {
        captchaInput.classList.remove('is-invalid', 'is-valid');
        captchaInput.value = '';
        const feedback = captchaInput.closest('.input-group').querySelector('.invalid-feedback');
        if (feedback) feedback.textContent = 'Vui lòng nhập đúng mã bảo mật.';
    }
    return captcha;
}

(function() {
    'use strict';
    if (document.getElementById('captchaCode')) {
        captchaValue = generateCaptcha();
    }

    var combinedModal = document.getElementById('combinedModal');
    if (combinedModal) {
        combinedModal.addEventListener('shown.bs.modal', function(event) {
            if (document.getElementById('captchaCode')) {
                captchaValue = generateCaptcha();
            }
            resetFormValidation(document.getElementById('loginForm'));
            resetFormValidation(document.getElementById('registerForm'));
        });
    }

    function resetFormValidation(form) {
        if (!form) return;
        form.classList.remove('was-validated');
        const inputs = form.querySelectorAll('.form-control, .form-select, .form-check-input');
        inputs.forEach(input => {
            input.classList.remove('is-invalid', 'is-valid');
        });
        const generalError = form.querySelector('[id$="ErrorGeneral"]');
        if (generalError) generalError.textContent = '';
        clearSpecificError('registerEmailTakenFeedback');
        clearSpecificError('registerConfirmPasswordError');
        clearSpecificError('loginErrorGeneral');
    }

    function clearSpecificError(elementId) {
        const el = document.getElementById(elementId);
        if (el) el.textContent = '';
    }

    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();
            event.stopPropagation();
            clearSpecificError('loginErrorGeneral');
            let isFormValid = loginForm.checkValidity();
            if (isFormValid) {
                const email = document.getElementById('loginEmail').value;
                const password = document.getElementById('loginPassword').value;
                console.log('Login form valid (front-end). Simulating server call...');
                setTimeout(() => {
                    if (email === 'test@example.com' && password === 'password123') {
                        alert('Đăng nhập thành công!');
                    } else {
                        document.getElementById('loginEmail').classList.add('is-invalid');
                        document.getElementById('loginPassword').classList.add('is-invalid');
                        document.getElementById('loginErrorGeneral').textContent = 'Email hoặc mật khẩu không đúng.';
                        isFormValid = false;
                    }
                }, 500);
            }
            loginForm.classList.add('was-validated');
        }, false);
    }

    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function(event) {
            event.preventDefault();
            event.stopPropagation();
            clearSpecificError('registerErrorGeneral');
            clearSpecificError('registerEmailTakenFeedback');
            clearSpecificError('registerConfirmPasswordError');
            document.getElementById('registerEmail').classList.remove('is-invalid');
            let isFormValid = registerForm.checkValidity();

            const password = document.getElementById('registerPassword');
            const confirmPassword = document.getElementById('registerConfirmPassword');
            const confirmPasswordErrorDiv = document.getElementById('registerConfirmPasswordError');
            confirmPassword.classList.remove('is-invalid');
            confirmPasswordErrorDiv.textContent = '';
            if (password.value !== confirmPassword.value) {
                confirmPassword.classList.add('is-invalid');
                confirmPasswordErrorDiv.textContent = 'Mật khẩu xác nhận không khớp.';
                isFormValid = false;
            }

            const captchaInput = document.getElementById('registerCaptcha');
            const captchaFeedback = captchaInput.closest('.input-group').querySelector('.invalid-feedback');
            captchaInput.classList.remove('is-invalid');
            if (!captchaInput.value || captchaInput.value.trim().toLowerCase() !== String(captchaValue).toLowerCase()) {
                captchaInput.classList.add('is-invalid');
                if (captchaFeedback) captchaFeedback.textContent = 'Mã bảo mật không đúng.';
                isFormValid = false;
                generateCaptcha();
                captchaInput.focus();
            }

            if (isFormValid) {
                const email = document.getElementById('registerEmail').value;
                console.log('Register form valid (front-end). Simulating server call...');
                setTimeout(() => {
                    const storedUser = localStorage.getItem(email);
                    if (storedUser) {
                        document.getElementById('registerEmail').classList.add('is-invalid');
                        document.getElementById('registerEmailTakenFeedback').textContent = 'Email này đã được sử dụng.';
                        document.getElementById('registerErrorGeneral').textContent = 'Đăng ký thất bại, vui lòng kiểm tra lại.';
                        isFormValid = false;
                        registerForm.classList.add('was-validated');
                    } else {
                        const passwordVal = document.getElementById('registerPassword').value;
                        localStorage.setItem(email, JSON.stringify({ password: passwordVal }));
                        alert('Đăng ký thành công! Bây giờ bạn có thể đăng nhập.');
                
                        // Chuyển sang tab đăng nhập (nếu có)
                        const loginTab = new bootstrap.Tab(document.getElementById('login-tab-modal'));
                        loginTab.show();
                    }
                }, 500);                
            }
            if (!isFormValid) {
                registerForm.classList.add('was-validated');
            }
        }, false);
    }
})();

function switchTab(event) {
    event.preventDefault();
    const loginTab = document.getElementById('login-tab-modal');
    const registerTab = document.getElementById('register-tab-modal');
    const bsLoginTab = new bootstrap.Tab(loginTab);
    const bsRegisterTab = new bootstrap.Tab(registerTab);
    if (loginTab.classList.contains('active')) {
        bsRegisterTab.show();
    } else {
        bsLoginTab.show();
    }
    resetFormValidation(document.getElementById('loginForm'));
    resetFormValidation(document.getElementById('registerForm'));
}

function resetFormValidation(form) {
    if (!form) return;
    form.classList.remove('was-validated');
    const inputs = form.querySelectorAll('.form-control, .form-select, .form-check-input');
    inputs.forEach(input => {
        input.classList.remove('is-invalid', 'is-valid');
    });
    const generalError = form.querySelector('[id$="ErrorGeneral"]');
    if (generalError) generalError.textContent = '';
    clearSpecificError('registerEmailTakenFeedback');
    clearSpecificError('registerConfirmPasswordError');
    clearSpecificError('loginErrorGeneral');
}

function clearSpecificError(elementId) {
    const el = document.getElementById(elementId);
    if (el) el.textContent = '';
}