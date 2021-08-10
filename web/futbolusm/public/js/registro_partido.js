const cargarCategoria=async()=>{

    let resultado=await axios.get("api/categoria/get");
    let categoria = resultado.data;
    let categoriaSelect=document.querySelector("#categoria-select");
    
    categoria.forEach(n =>{
        let option=document.createElement("option");
        option.innerText=n;
        categoriaSelect.appendChild(option);
    });
    

};
document.addEventListener("DOMContentLoaded", ()=>{
cargarCategoria();
});
document.querySelector("#registrar-btn3").addEventListener("click", async ()=>{
     let rival=document.querySelector("#rival-txt").value;
     let cancha=document.querySelector("#cancha-txt").value;
     let categoria=document.querySelector("#categoria-select").value;
     let partido ={};
     partido.rival=rival;
     partido.cancha=cancha;
     partido.categoria=categoria;
     let res=await crearPartido(partido);

     window.location.href="datos_partido";
});