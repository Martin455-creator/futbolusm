const cargarTabla=(jugador)=>{





let tbody=document.querySelector("#tbody-jugador");

for (let i=0; i<jugador.lenght; ++i){
    let tr=document.createElement("tr");
    
     let tdNombre=document.createElement("td");
     tdNombre.innerText=jugador[i].nombre;
     let tdEdad=document.createElement("td");
     tdEdad.innerText=jugador[i].edad;
     let tdPosicion=document.createElement("td");
     tdPosicion.innerText=jugador[i].posicion;
     let tdAcciones=document.createElement("td");
     let botonEliminar=document.createElement("button");
     botonEliminar.innerText="Eliminar";
     botonEliminar.classList.add("btn","btn-danger");
     botonEliminar.idJugador=jugador[i].id;
     tdAcciones.appendChild(botonEliminar);

tr.appendChild(tdNombre);
tr.appendChild(tdEdad);
tr.appendChild(tdPosicion);
tr.appendChild(tdAcciones);

tbody.appendChild(tr);


    }





};