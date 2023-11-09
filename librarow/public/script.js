const jawirButton = document.getElementById('jawirButton');
const jawirElement = document.querySelector('.jawir');
const sirButton = document.getElementById('sirButton');
const defaultColor = window.getComputedStyle(jawirElement, ':before').getPropertyValue('background-color');
jawirButton.addEventListener('click', () => {
  // Change the background color of the :before pseudo-element
  const jawirStyle = document.styleSheets[0].addRule('.jawir::before', 'background-color: rgb(255, 255, 255)');
});

sirButton.addEventListener('click', () => {
    // Change the background color of the :before pseudo-element
    const jawirStyle = document.styleSheets[0].addRule('.jawir::before', `background-color: ${defaultColor}`);
    });