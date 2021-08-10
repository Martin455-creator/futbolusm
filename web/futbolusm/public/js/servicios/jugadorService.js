const getJugador=async()=>{
    let resp=await axios.get("api/jugador/get");
    return resp.data;

};
const crearJugador=async(jugador)=>{
let resp=await axios.post("api/jugador/post", jugador,{
   headers: {
       'Content-Type': 'application/json'
   
   
   
}
 });
 return resp.data;
};