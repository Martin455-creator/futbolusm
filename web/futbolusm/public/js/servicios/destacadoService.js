const getDestacado=async()=>{
    let resp=await axios.get("api/destacado/get");
    return resp.data;

};
const crearDestacado=async(destacado)=>{
let resp=await axios.post("api/destacado/post", destacado,{
   headers: {
       'Content-Type': 'application/json'
   
   
   
}
 });
 return resp.data;
};