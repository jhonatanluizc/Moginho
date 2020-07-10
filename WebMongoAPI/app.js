const {MongoClient} = require('mongodb');

async function main(){
const url = "mongodb+srv://creeday:E0OzdRjqGyEX6hDX@cluster0-xlbs2.mongodb.net/webmongo?retryWrites=true&w=majority";
const client = new MongoClient(url, { useNewUrlParser: true ,useUnifiedTopology: true});
try{
    await client.connect(err => {
      const collection = client.db("test").collection("devices");
    });
  }catch(e){
    console.error(e);
  }finally{
    await client.close();
  }
}
main().catch(console.err);