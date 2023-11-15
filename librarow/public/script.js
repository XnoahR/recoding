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
let regBannerCheck = true;
const registerBanner = document.getElementById('register-banner')
const registerButton= document.getElementById('register-button')
const registerForm = document.getElementById('register-form')
registerButton.addEventListener('click',()=>{
  if(!regBannerCheck){
  const bgRemoval = document.styleSheets[0].addRule('.reg-banner::before', 'animation-name: reg-banners-in'); 
  
  }
  else{
    const bgRemoval = document.styleSheets[0].addRule('.reg-banner::before', 'animation-name: reg-banners-out');
    registerButton.classList.add('hidden');
    registerBanner.classList.remove('justify-end');
    registerBanner.classList.add('justify-center');
    setTimeout(()=>{
      registerForm.classList.remove('hidden');
    }, 1250)
  }
  regBannerCheck = !regBannerCheck;
});