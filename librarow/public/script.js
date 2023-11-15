// const jawirButton = document.getElementById('jawirButton');
// const jawirElement = document.querySelector('.jawir');
// const sirButton = document.getElementById('sirButton');
// const defaultColor = window.getComputedStyle(jawirElement, ':before').getPropertyValue('background-color');
// jawirButton.addEventListener('click', () => {
//   // Change the background color of the :before pseudo-element
//   const jawirStyle = document.styleSheets[0].addRule('.jawir::before', 'background-color: rgb(255, 255, 255)');
// });

// sirButton.addEventListener('click', () => {
//     // Change the background color of the :before pseudo-element
//     const jawirStyle = document.styleSheets[0].addRule('.jawir::before', `background-color: ${defaultColor}`);
//     });

//Register Banner
let regBannerCheck = false;
const registerBanner = document.getElementById('register-banner')
const registerButton= document.getElementById('register-button')
const registerForm = document.getElementById('register-form')

//Login Banner
let loginBannerCheck = true;
const loginBanner = document.getElementById('login-banner')
const loginButton = document.getElementById('login-button')
const loginContent = document.getElementById('login-content')

let loginMode = () => {
}


registerButton.addEventListener('click',()=>{
  if(!regBannerCheck){
  const registerBannerIn = document.styleSheets[0].addRule('.reg-banner::before', 'animation-name: reg-banners-out'); 
  const LoginBannerOut = document.styleSheets[0].addRule('.log-banner::before', 'animation-name: reg-banners-in');
  registerButton.classList.add('hidden');
  registerBanner.classList.remove('justify-end');
  registerBanner.classList.add('justify-center');
  
  setTimeout(()=>{
    registerForm.classList.remove('hidden');
  }, 1250)
  loginBannerCheck = !loginBannerCheck;
  regBannerCheck = !regBannerCheck;
  }
});

loginButton.addEventListener('click',()=>{
  if(!loginBannerCheck){
  const loginBannerIn = document.styleSheets[0].addRule('.log-banner::before', 'animation-name: reg-banners-out'); 
  const registerBannerOut = document.styleSheets[0].addRule('.reg-banner::before', 'animation-name: reg-banners-in');
  loginButton.classList.add('hidden');
  loginBanner.classList.remove('justify-end');
  loginBanner.classList.add('justify-center');
  setTimeout(()=>{
    loginContent.classList.remove('hidden');
  }, 1250)
  loginBannerCheck = !loginBannerCheck;
  regBannerCheck = !regBannerCheck;
  }
});



// loginButton.addEventListener('click',()=>{
//   if(!loginBannerCheck){
//   const bgRemoval = document.styleSheets[0].addRule('.log-banner::before', 'animation-name: reg-banners-in'); 
  
//   }
//   else{
//     const bgRemoval = document.styleSheets[0].addRule('.log-banner::before', 'animation-name: reg-banners-out');
//     loginButton.classList.add('hidden');
//     loginBanner.classList.remove('justify-end');
//     loginBanner.classList.add('justify-center');
//     setTimeout(()=>{
//       loginContent.classList.remove('hidden');
//     }, 1250)
//   }
//   loginBannerCheck = !loginBannerCheck;
// });