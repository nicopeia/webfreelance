// validar formulario 

const btnEnviar = document.querySelector('#enviar');
const nombre = document.querySelector('#nombre');
const email = document.querySelector('#email');
const mensaje = document.querySelector('#mensaje');
const formulario = document.querySelector('#formulario');
const er= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
btnEnviar.classList.add('btn','btn-danger');
eventListeners();

function eventListeners(){
    document.addEventListener('DOMContentLoaded',iniciarApp);

    nombre.addEventListener('blur', validarForm);
    email.addEventListener('blur', validarForm);
    mensaje.addEventListener('blur', validarForm);
}

function iniciarApp(){
    
    btnEnviar.disabled= true;

  
}


function validarForm(e){

     

    if(e.target.value.length > 0){
      
        const error =  document.querySelector('p.error');
        if(error){
            error.remove();
        }
       

        
        e.target.style.borderColor = 'green';

      
    }else{
       e.target.style.borderColor = 'red';
        
        mostrarError('*Uno o mas campos son incorrectos o estan vacios');
    
    }
  
   if(e.target.type === 'email'){
      

   
       if( er.test(e.target.value)){

        const error =  document.querySelector('p.error');
        if(error){
            error.remove();
            e.target.style.borderColor = 'green';
        }
       
       }else{
        
        e.target.style.borderColor = 'red';
        mostrarError('*Email no valido');
       
      
       
       }
   }


if(nombre.value !== '' && er.test(email.value) !== '' && mensaje.value !== '' ){

    btnEnviar.disabled= false;
    btnEnviar.classList.remove('btn','btn-danger');
    btnEnviar.classList.add('btn','btn-success');

}else{
    btnEnviar.classList.add('btn','btn-danger');
    btnEnviar.disabled= true;
}




}


function mostrarError(mensaje){
const mensajeError= document.createElement('p');
mensajeError.textContent= mensaje;
mensajeError.style.Color = 'white';
mensajeError.style.backgroundColor='red';
mensajeError.style.padding='4px';
mensajeError.classList.add('error');
const errores = document.querySelectorAll('.error');
if(errores.length===0){
    //mostrar el error arriba del formulario 
    formulario.insertBefore(mensajeError,document.querySelector('#before'));
    
     
      
        
       



    }
    //mostrar el error abajo del formulario 
    //formulario.appendChild(mensajeError);
}



