/*========================================
Slider
==========================================*/
if(document.querySelector('.contenedor-slider')){

    let index=1;
    let selectedIndex=1;

    const slides=document.querySelector('.slider');
    const slide=slides.children;
    const slidesTotal=slides.childElementCount;

    const dots=document.querySelector('.dots');
    const prev=document.querySelector('.prev');
    const next=document.querySelector('.next');


    for (let i = 0; i < slidesTotal; i++) {
        dots.innerHTML +='<span class="dot"></span>';
    }
    

    mostrarSlider(index);


    setInterval(()=>{
        mostrarSlider(index=selectedIndex);
    },30000); 

    function mostrarSlider(num){
        if(selectedIndex > slidesTotal){
            selectedIndex=1;
        }else{
            selectedIndex++;
        }

        if(num > slidesTotal){
            index=1;
        }

        if(num<1){
            index=slidesTotal;
        }

        for(let i=0; i<slidesTotal;i++){
            slide[i].classList.remove('active');
        }


        for (let x = 0; x < dots.children.length; x++) {
            dots.children[x].classList.remove('active');
        }

        slide[index-1].classList.add('active');

        dots.children[index-1].classList.add('active');

        
    }

    next.addEventListener('click',(e)=>{
        mostrarSlider(index +=1);
        selectedIndex=index;
    });

    prev.addEventListener('click',(e)=>{
        mostrarSlider(index +=-1);
        selectedIndex=index;
    });

    for (let y = 0; y < dots.children.length; y++) {
        
        dots.children[y].addEventListener('click',()=>{
            mostrarSlider(index=y+1);
            selectedIndex=y+1;
        });
    }

}


/*========================================
Tabs Formulario
==========================================*/
const tabLink=document.querySelectorAll('.tab-link');
const formularios=document.querySelectorAll('.formulario');

for (let x = 0; x < tabLink.length; x++) {
    
    tabLink[x].addEventListener('click',()=>{

        tabLink.forEach((tab)=> tab.classList.remove('active'));

        tabLink[x].classList.add('active');



        formularios.forEach((form)=>form.classList.remove('active'));
        formularios[x].classList.add('active');
       
    })
}

/*========================================
Mostrar contraseña
==========================================*/
const mostrarClave=document.querySelectorAll('.mostrarClave');
const inputPass=document.querySelectorAll('.clave');

for (let i = 0; i < mostrarClave.length; i++) {
    
    mostrarClave[i].addEventListener('click',()=>{

        if(inputPass[i].type==="password"){

            inputPass[i].setAttribute('type','text');

            mostrarClave[i].classList.remove('fa-eye');

            mostrarClave[i].classList.add('fa-eye-slash');

            mostrarClave[i].classList.add('active');

        }else{

            inputPass[i].setAttribute('type','password');

             mostrarClave[i].classList.remove('fa-eye-slash');

             mostrarClave[i].classList.add('fa-eye');
 
             mostrarClave[i].classList.remove('active');
 
        }

    });
}


