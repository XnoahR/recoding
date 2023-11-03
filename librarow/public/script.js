let isRegister = false;
const classChange = document.getElementById('change_class');

const bannerAnim = document.getElementById('banner_anim');

classChanger = () => {
    if (isRegister) {
        // Remove the animation name by setting it to an empty string
        
        bannerAnim.style.backgroundImage = "url('./img/lib.jpg')";
    } else {
        // Change the animation name to "new-animation"

        bannerAnim.style.animationName = "white"; // Reset the background image
    }
    isRegister = !isRegister; // Toggle the flag
};
