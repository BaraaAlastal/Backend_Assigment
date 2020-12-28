
const express = require('express');
const app = express();
app.get('/greeting',function(req,res){
    const queryParams = req.query;
    console.log(queryParams);
    const name = req.query.name;
    res.send('Hello, ' + name);
});
app.listen(3000,function(){
    console.log('server run');
});