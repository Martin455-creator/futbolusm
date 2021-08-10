const cargarPosicion=async()=>{

    let resultado=await axios.get("api/posicion/get");
    let posicion = resultado.data;
    let posicionSelect=document.querySelector("#posicion-select");
    
    posicion.forEach(m =>{
        let option=document.createElement("option");
        option.innerText=m;
        posicionSelect.appendChild(option);
    });
    

};
document.addEventListener("DOMContentLoaded", ()=>{
cargarPosicion();
});
document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
     let nombre=document.querySelector("#nombre-txt").value;
     let edad=document.querySelector("#edad-txt").value;
     let posicion=document.querySelector("#posicion-select").value;
     let jugador ={};
     jugador.nombre=nombre;
     jugador.edad=edad;
     jugador.posicion=posicion;
     let res=await crearJugador(jugador);

     window.location.href="ver_jugador";
});