let firstMovie = new Movie(
    '"Brannigan"',
    1975,
    '"Douglas Hickox"\n',
    10000,
    100001);

let secondMovie = new Movie(
    '"Yellow curtains"',
    2010,
    '"Lamp Desktop"\n',
    90000,
    100000);

console.log(firstMovie.getIntroduction(), firstMovie.getProfit());
console.log(secondMovie.getIntroduction(), secondMovie.getProfit());