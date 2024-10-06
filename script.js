//form animation
const container = document.getElementById('container');
            const overlayCon = document.getElementById('overlayCon');
            constoverlayBtn = document.getElementById('overlayBtn');

            overlayBtn.addEventListener('click',()=>{
                container.classList.toggle('right-panel-active');

                overlayBtn.classList.remove('btnScaled');
                window.requestAnimationFrame( ()=>{
                    overlayBtn.classList.add('btnScaled');
                })
            })

            
//vidibility of password
document.querySelectorAll(".infield i").forEach((toggleBtn) =>{ 
  toggleBtn.addEventListener('click',() =>{
    const pswrdfield = toggleBtn.previousElementSibling;

    if(pswrdfield.type === "password"){
      pswrdfield.type = "text";
      toggleBtn.classList.add("active");
    }else{
      pswrdfield.type = "password";
      toggleBtn.classList.remove("active");
    }
  })
})



// Background audio
const audio = document.getElementById('background-audio');
audio.volume = 0.5;
audio.play();


//forms on smaller screen

document.addEventListener('DOMContentLoaded', () => {
    const resoSignUp = document.querySelector('.sign-in-container #reso a');
    const resoLogIn = document.querySelector('.sign-up-container #reso a');
    const signInContainer = document.querySelector('.sign-in-container');
    const signUpContainer = document.querySelector('.sign-up-container');

    resoSignUp.addEventListener('click', (e) => {
        e.preventDefault();
        signInContainer.style.display = 'none';
        signUpContainer.style.display = 'flex';
    });

    resoLogIn.addEventListener('click', (e) => {
        e.preventDefault();
        signUpContainer.style.display = 'none';
        signInContainer.style.display = 'flex';
    });
});
