const getPartido=async()=>{
    let resp=await axios.get("api/partido/get");
    return resp.data;

};
const crearPartido=async(partido)=>{
let resp=await axios.post("api/partido/post", partido,{
   headers: {
       'Content-Type': 'application/json'
   
   
   
}
 });
 return resp.data;
};