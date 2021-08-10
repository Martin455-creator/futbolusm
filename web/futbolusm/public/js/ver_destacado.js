const cargarTabla=(destacado)=>{





    let tbody=document.querySelector("#tbody-destacado");
    
    for (let i=0; i<destacado.lenght; ++i){
        let tr=document.createElement("tr");
        
         let tdJugador=document.createElement("td");
         tdJugador.innerText=destacado[i].jugador;
         let tdEdad2=document.createElement("td");
         tdEdad2.innerText=destacado[i].edad2;
         let tdDivision1=document.createElement("td");
         tdDivision1.innerText=destacado[i].division1;
         let tdAcciones2=document.createElement("td");
         let botonEliminar2=document.createElement("button");
         botonEliminar2.innerText="Eliminar";
         botonEliminar2.classList.add("btn","btn-danger");
         botonEliminar2.idJugador=destacado[i].id;
         tdAcciones2.appendChild(botonEliminar);
    
    tr.appendChild(tdJugador);
    tr.appendChild(tdEdad2);
    tr.appendChild(tdDivision1);
    tr.appendChild(tdAcciones2);
    
    tbody.appendChild(tr);
    
    
        }
    
    
    
    
    
    };