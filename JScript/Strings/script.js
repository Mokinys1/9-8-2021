let userInfoOutput = document.getElementById("main");
let user = {firstName:"Name", lastName:"Surename"};
 userInfoOutput.innerHTML += `<h2>User information</h2><p>Vartotojo vardas yra ${user.firstName} o pavarde ${user.lastName}</p>`;

function buttFunc() {
let userInfoOutput = document.getElementById("createInfo");
let user = {firstName:"Name", lastName:"Surename"};
userInfoOutput.innerHTML += `<h2>User information</h2><p>Vartotojo vardas yra ${user.firstName} o pavarde ${user.lastName}</p>`;
}

document.getElementById("butt").onclick=function(){
buttFunc();
}
