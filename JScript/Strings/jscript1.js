// Parašykite funkciją checkNumber, turinčią vieną parametrą, kuri:


	
// Patikrins skaičius nuo 1 iki (begalybės - 1)
	
// Jei skaičius dalijamas iš 3, pamatysime "Skaičius dalijasi iš 3"
	
// Jei skaičius dalijamas iš 5, pamatysime "Skaičius dalijasi iš 5"
	
// Jei skaičius dalijamas iš 3 ir 5, pamatysime "Skaičius dalijasi iš 3 ir iš 5"
	
// Jei skaičius nesidalija iš 3 arba 5, pamatysime Skaičius "Skaičius nesidalija nei iš 3 nei iš 5"


// Iškvietus: console.log(checkNumber(15));

// Rezultatas: "Skaičius dalijasi iš 3 ir iš 5".

// function checkNumber() {

// 	let  theNumb ;
// 	if (15 / 3) {
// 		theNumb = 'dalijasi is 3';
// 	}else {
// 		theNumb = false
// 	}
// 	return theNumb;
// }
// document.getElementById('activator').onclick=function(){
// console.log(checkNumber(1));

// }



    
    
   let checkNumber = digit => {
  if ((digit % 3 === 0) && (digit % 5 === 0)) {
    return 'Skaičius dalijasi iš 3 ir iš 5';
  }
  else if (digit % 3 == 0){
    return 'Skaičius dalijasi iš 3';
  }
  else if (digit % 5 == 0){
    return 'Skaičius dalijasi iš 5';
  }
  else {
    return 'Skaičius nesidalija nei iš 3 nei iš 5';
  }
}
console.log(checkNumber(9999));

// function makeParagraph(text = 'text here',backgroundColor = 'grey', fontSize = '50px', color = 'blue' , ) {

//     document.write(`<p style=" color:${color};font-size: ${fontSize};background-color: ${backgroundColor};">${text}</p>`);
 
// }
//     makeParagraph()
//     console.assert(document.body.children.length === 1);
//     console.assert(document.body.querySelector('p') !== null);


