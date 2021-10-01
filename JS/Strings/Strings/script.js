let userInfoOutput = document.getElementById("main");
let user = {firstName:"John", lastName:"Doe"};
 userInfoOutput.innerHTML += `<h2>User information</h2><p>Vartotojo vardas yra ${user.firstName} o pavarde ${user.lastName}</p>`;