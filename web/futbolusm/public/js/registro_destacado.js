const cargarPosicion=async()=>{

    let resultado=await axios.get("api/division/get");
    let division1 = resultado.data;
    let division1Select=document.querySelector("#division-select1");
    
    division1.forEach(b =>{
        let option=document.createElement("option");
        option.innerText=b;
        division1Select.appendChild(option);
    });
    

};
document.addEventListener("DOMContentLoaded", ()=>{
cargarDivision1();
});
document.querySelector("#registrar-btn2").addEventListener("click", async ()=>{
     let nombre=document.querySelector("#jugador-txt").value;
     let edad=document.querySelector("#edad-txt2").value;
     let division=document.querySelector("#division-select1").value;
     let destacado ={};
     destacado.nombre=nombre;
     destacado.edad=edad;
     destacado.division=division;
     let res=await crearDestacado(destacado);

     window.location.href="ver_destacado";
});