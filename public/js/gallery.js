let galleryItems = document.getElementsByClassName('gallery-item');
let modal = document.getElementById('modal');
let modalImg = document.getElementById('img01')

for(let i=0; i<15; i++){


    galleryItems[i].addEventListener('click',(e)=>{
        modal.style.display = "block";
        modalImg.src = e.target.src;
    })


}

let closeBtn = document.getElementById('close-btn');

closeBtn.addEventListener('click',()=>{

    modal.style.display= 'none';
})



