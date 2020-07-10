const mongoose = require('../model/database/connection');

class mongoController{
  
    newSchema(req,res){
      try {
        const {user_name, schema} = req.body
        const UserSchema = new mongoose.Schema(schema)
        mongoose.model(user_name, UserSchema)
        res.send(true)
      } catch (error) {
        res.send(false)
      }
    }

    store(req,res){
      try {
        const {user_name,dados} = req.body
        const schemaa = mongoose.model(user_name)
        schemaa.create(dados)
        res.send(true)
      } catch (error) {
        res.send(false)
      }
    }
    
    list(req, res){
      try {
        const {user_name} = req.body
        const Table = mongoose.model(user_name)
        Table.find().then((datas) => {
          res.send(datas)
        })
      } catch (error) {
        res.send(false)
      }    
    }

    update(req,res){
      const {user_name,data,id} = req.body;
      const table = mongoose.model(user_name);
      table.findByIdAndUpdate((id),data,(err,result)=>{
        if(err){
          res.send(err);
        }else{
          res.send("Alterado com sucesso: " + result);
        }
      })
    }

    delete(req,res){
      const {user_name, id} = req.body
      const Table = mongoose.model(user_name)
      Table.findOneAndDelete({"_id": id}).then(() => {
        res.send(true)
      }).catch(()=>{
        res.send(false)
      })
    }

    alter(req, res){
      const {user_name, id, dados} = req.body
      const Table = mongoose.model(user_name)
      Table.findByIdAndUpdate({_id: id}, dados).then(()=>{
          res.send(true)
      }).catch(() => {
        res.send(false)
      })   
    }

    find(req, res){
      const {user_name, find} = req.body
      const Table = mongoose.model(user_name)
      Table.find(find).then((data)=>{
        data.length > 0 ? res.send(data) : res.send(false)
      }).catch(() => {
        res.send(false)
      })  
    }
}



module.exports = new mongoController();