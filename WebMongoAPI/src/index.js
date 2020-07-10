const mongoose = require('mongoose');
const express = require('express');
const bodyParser = require('body-parser');

var schemaa;

const app = express();
app.use(bodyParser.json());

mongoose.Promise = global.Promise;
mongoose.connect('mongodb://localhost/webmongo',{
    useNewUrlParser:true,
    useUnifiedTopology:true
}).then(()=>{
    console.log("Mongo conectado");
}).catch((err)=>{
    console.log("Houve um erro ao se conectar:"+err);
});

app.post('/schema',(req,res)=>{
  const {user_name,schema} = req.body;
  
  mongoose.connection.db.listCollections().toArray(function (err, names) {
    const result = names.find(item => item.name == user_name);
    console.log("result",result);
});
  const UserSchema = new  mongoose.Schema(schema);
  mongoose.model(user_name,UserSchema);
  res.send(schema);
});


app.post('/create',(req,res)=>{
const {user_name,dados} = req.body;
schemaa = mongoose.model(user_name);
console.log(schemaa);
 new schemaa(dados).save().then(()=>{
     res.status(201).send("Efetuado com sucesso");
 }).catch((err)=>{
    res.status(400).send("Erro ao cadastrar");
 });
 
});

// function collection_exist(req,res,next){
//   const {user_name} = req.body;

//     schemaa = mongoose.Collection(user_name);
//     if(schemaa){
//       mongoose.connection.dropCollection(user_name);
//       return next();
//     }else{
//       res.send("error ao encontrar schema");
//     }
// }

// const db = mongoose.connection;
// schemaa = mongoose.Collection(user_name);
// if(schemaa){
//   db.dropCollection(user_name,()=>{
//     console.log("collection foi embora");
//   });
// }else{
//   res.send("error ao encontrar schema");
// }

app.listen(3333);



  
