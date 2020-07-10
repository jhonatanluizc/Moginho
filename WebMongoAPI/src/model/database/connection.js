const mongoose = require('mongoose');

mongoose.Promise = global.Promise;
mongoose.connect('mongodb://localhost/webmongo',{
    useNewUrlParser:true,
    useUnifiedTopology:true
}).then(()=>{
    console.log("Mongo conectado");
}).catch((err)=>{
    console.log("Houve um erro ao se conectar:"+err);
});
module.exports = mongoose;
