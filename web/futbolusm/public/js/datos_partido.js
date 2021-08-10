const cargarTabla=(partido)=>{

    let tbody=document.querySelector("#tbody-partido");
    
    for (let i=0; i<partido.lenght; ++i){
        let tr=document.createElement("tr");
        
         let tdRival=document.createElement("td");
         tdRival.innerText=partido[i].rival;
         let tdCancha=document.createElement("td");
         tdCancha.innerText=partido[i].cancha;
         let tdCategoria=document.createElement("td");
         tdCategoria.innerText=partido[i].categoria;
         let tdAcciones3=document.createElement("td");
         let botonEliminar3=document.createElement("button");
         botonEliminar3.innerText="Eliminar";
         botonEliminar3.classList.add("btn","btn-danger");
         botonEliminar3.idJugador=partido[i].id;
         tdAcciones3.appendChild(botonEliminar);
    
    tr.appendChild(tdRival);
    tr.appendChild(tdCancha);
    tr.appendChild(tdCategoria);
    tr.appendChild(tdAcciones3);
    
    tbody.appendChild(tr);
    
    
        }
    
    
    
    
    
    };