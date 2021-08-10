const cargarTabla=(entrenador)=>{





    let tbody=document.querySelector("#tbody-entrenador");
    
    for (let i=0; i<entrenador.lenght; ++i){
        let tr=document.createElement("tr");
        
         let tdNombre1=document.createElement("td");
         tdNombre1.innerText=entrenador[i].nombre1;
         let tdEdad1=document.createElement("td");
         tdEdad1.innerText=entrenador[i].edad1;
         let tdDivision=document.createElement("td");
         tdDivision.innerText=entrenador[i].division;
         let tdAcciones1=document.createElement("td");
         let botonEliminar1=document.createElement("button");
         botonEliminar1.innerText="Eliminar";
         botonEliminar1.classList.add("btn","btn-danger");
         botonEliminar1.idJugador=entrenador[i].id;
         tdAcciones1.appendChild(botonEliminar);
    
    tr.appendChild(tdNombre1);
    tr.appendChild(tdEdad1);
    tr.appendChild(tdDivision);
    tr.appendChild(tdAcciones1);
    
    tbody.appendChild(tr);
    
    
        }
    
    
    
    
    
    };