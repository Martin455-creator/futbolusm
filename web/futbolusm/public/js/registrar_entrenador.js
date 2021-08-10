const cargarDivision=async()=>{

    let resultado=await axios.get("api/division/get");
    let division = resultado.data;
    let divisionSelect=document.querySelector("#division-select");
    
    division.forEach(d =>{
        let option=document.createElement("option");
        option.innerText=d;
        divisionSelect.appendChild(option);
    });
    

};
document.addEventListener("DOMContentLoaded", ()=>{
cargarDivision();
});
document.querySelector("#registrar-btn1").addEventListener("click", async ()=>{
     let nombre=document.querySelector("#nombre-tx1t").value;
     let edad=document.querySelector("#edad-txt1").value;
     let division=document.querySelector("#division-select").value;
     let entrenador ={};
     entrenador.nombre=nombre;
     entrenador.edad=edad;
     entrenador.division=division;
     let res=await crearEntrenador(entrenador);

     window.location.href="ver_entrenador";
});