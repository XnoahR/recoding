const logBanner = document.getElementById('login-banner');
const registerForm = document.getElementById('register-form');
const createAccount = document.getElementById('create-account');
const regBanner = document.getElementById('register-banner');


createAccount.addEventListener('click', () => {
  logBanner.classList.add('log-banner');
  logBanner.classList.remove('justify-end');
  logBanner.classList.add('justify-center');
  regBanner.classList.add('reg-banner');
  createAccount.classList.add('hidden');
  // Wait for 1 second (1000 milliseconds) before revealing the registerForm
  setTimeout(() => {
      registerForm.classList.remove('hidden');
  }, 1000); // 1000 milliseconds (1 second)
});
