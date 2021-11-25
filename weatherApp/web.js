const http = require('http');
const _= require

module.exports = http.createServer(function(request, response) {
	response.end('hello world');
}).on('Listening', function() {
	console.log(`Started at ${this.address().port} port`)	
})
