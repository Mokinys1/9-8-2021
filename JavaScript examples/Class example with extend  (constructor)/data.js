let cars = [
new Car("Audi","A1",1889),
new Car("Audi", "A2",2018)
]

for(let c of cars){
console.log(`${c.getIntroduction()} yra ${c.getAgeText()} (${c.getAge()})`);
}


let moto = [
	 new Motorcycle('BMW', 'K 1', 1989, 2),
]

for(let m of moto){	
 	console.log(`${m.getIntroduction()}${m.getWheelsNumber()}`)
// console.log(m.getWheelsNumber())
}




