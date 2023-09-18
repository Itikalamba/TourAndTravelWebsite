const overlaybanner=document.querySelector('.overlay-banner');
const bannercontent=document.querySelector('.banner-content');
const cross=document.querySelector('.cross');
window.addEventListener('load',function(){
    showoverlay();
})
overlaybanner.addEventListener('click',function(){
    hideoverlay();
})
cross.addEventListener('click',function(){
    hideoverlay();
})



// functions starts here....
function showoverlay(){
    overlaybanner.style.opacity=".48";
    overlaybanner.style.visibility="visible";
    bannercontent.style.opacity="1";
    bannercontent.style.visibility="visible";
}
function hideoverlay(){
    overlaybanner.style.opacity="0";
    overlaybanner.style.visibility="hidden";
    bannercontent.style.opacity="0";
    bannercontent.style.visibility="hidden";
}

// here is slider js
// var swiper=new swiper(".product-slider",{
//     loop:true,
//     grabCursor:true,
//     navigation: {
//         nextE1:".swiper-button.next",
//         prevE1:".swiper-button-prev",
//     },
//     breakpoints:{
//         0:{
//             slidesPerView:1,
//         },
//         640:{
//             slidesPerView:2,
//         },
//         768:{
//             slidesPerView:3,
            
//         },
//         1024:{
//             slidesPerView:4,
//         }
//     }
// })
