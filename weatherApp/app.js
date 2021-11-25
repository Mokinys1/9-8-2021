const express = require('express')
const app = express()
const port = 3000
const os = require('os')



app.get('/', (req, res) => {
  res.send('Hello World!')
})

app.get('/cpu', (req, res) => {
	res.send(JSON.stringify(os.cpus()));
});

app.get('/users/:user_id', function(request, response) {
	console.log(request, params);

	getUserFromDB(request.params.user_id);  //if taking from database

	response.send('users')
});


app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})