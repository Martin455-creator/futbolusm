const getEntrenador=async()=>{
    let resp=await axios.get("api/entrenador/get");
    return resp.data;

};
const crearEntrenador=async(entrenador)=>{
let resp=await axios.post("api/entrenador/post", entrenador,{
   headers: {
       'Content-Type': 'application/json'
   
   
   
}
 });
 return resp.data;
};