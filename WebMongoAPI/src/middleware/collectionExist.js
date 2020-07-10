const mongoose = require('../model/database/connection');

module.exports = (req,res,next) => {
  const {user_name} = req.body;
  mongoose.connection.db.listCollections().toArray(function (err, names) {
    const result = names.find(item => item.name == user_name);
     if(result){
       mongoose.connection.dropCollection(user_name);
      }
    });
    return next();
}