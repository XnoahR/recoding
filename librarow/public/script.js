const logBanner = document.getElementById("login-banner");
const loginHeader = document.getElementById("login-header");
const loginDesc = document.getElementById("login-desc");
const loginForm = document.getElementById("login-form");
const loginAccount = document.getElementById("login-account");
const registerForm = document.getElementById("register-form");
const createAccount = document.getElementById("create-account");
const regBanner = document.getElementById("register-banner");

createAccount.addEventListener("click", () => {
    logBanner.classList.add("log-banner");
    logBanner.classList.remove("justify-end");
    loginHeader.classList.add("hidden");
    loginDesc.classList.add("hidden");
    logBanner.classList.add("justify-center");
    loginForm.classList.add("hidden");
    regBanner.classList.add("reg-banner");
    regBanner.classList.remove("justify-center");
    regBanner.classList.remove("space-y-12");
    regBanner.classList.add("justify-end");
    createAccount.classList.add("hidden");
    // Wait for 1 second (1000 milliseconds) before revealing the registerForm
    setTimeout(() => {
        registerForm.classList.remove("hidden");
        loginAccount.classList.remove("hidden");
    }, 1000); // 1000 milliseconds (1 second)
});

loginAccount.addEventListener("click", () => {
    logBanner.classList.remove("log-banner");
    logBanner.classList.add("justify-end");
    loginHeader.classList.remove("hidden");
    loginDesc.classList.remove("hidden");
    logBanner.classList.remove("justify-center");
    loginForm.classList.remove("hidden");
    regBanner.classList.remove("reg-banner");
    regBanner.classList.add("justify-center");
    regBanner.classList.add("space-y-12");
    regBanner.classList.remove("justify-end");
    createAccount.classList.remove("hidden");
    registerForm.classList.add("hidden");
    loginAccount.classList.add("hidden");
});