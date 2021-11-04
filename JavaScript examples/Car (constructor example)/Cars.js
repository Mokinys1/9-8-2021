
// Naudojant ES6 klases sukurkite automobilių objektų kūrimo konstruktorių (Car), 


    
// kuris turės šias savybes: 
           
// make
        
// model
        
// year
    
       
// ir metodus:
// getIntroduction, kuris grąžins pilną pavadinimą (su make ir model).
        
// getAge, kuris gražins “10 metų arba naujesnis”, jei automobilio amžius yra 10 metų arba naujesnis arba “11 metų arba senesnis”, 
// jei automobilio amžius yra 11 metų arba senesnis (šio metodo logikai naudokite ternary operatorių ir Date() metodą)

class Car {

    constructor(make, model, year){
        this.make=make;
        this.model=model;
        this.year=year;
    }

    getIntroduction(){
        return `"${this.make} ${this.model}"`
    }

    getAge(){
        return (new Date).getFullYear() - this.year;
    }

    getAgeText(){
        if (this.getAge() <=10){
            return "10 menu arba naujesnis";
        }else {
            return"11 metu arba senesnis";
        }
    }
}