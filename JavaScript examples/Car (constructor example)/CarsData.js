let cars = [
new Car("Audi","A1",1889),
new Car("Audi", "A2",2018)
]

for(let c of cars){
console.log(`${c.getIntroduction()} yra ${c.getAgeText()} (${c.getAge()})`);
}
