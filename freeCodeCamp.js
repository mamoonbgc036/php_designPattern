//trenary operator
function check(a, b){
  return (a===b) ? 'a and b is equal' : (a < b) ? 'a is smaller' : 'b is smaller';
}

console.log( check(10, 8) )

//convert string to number
parseInt('12');
//generate random number
function randomRange(myMin, myMax) {
  const test = Math.floor(Math.random() * (myMax - myMin + 1)) + myMin;
  return test;
}

console.log( randomRange(10, 1000) );

//JAVASCRIPT LOOKUP
// Setup
const contacts = [
  {
    firstName: "Akira",
    lastName: "Laine",
    number: "0543236543",
    likes: ["Pizza", "Coding", "Brownie Points"],
  },
  {
    firstName: "Harry",
    lastName: "Potter",
    number: "0994372684",
    likes: ["Hogwarts", "Magic", "Hagrid"],
  },
  {
    firstName: "Sherlock",
    lastName: "Holmes",
    number: "0487345643",
    likes: ["Intriguing Cases", "Violin"],
  },
  {
    firstName: "Kristian",
    lastName: "Vos",
    number: "unknown",
    likes: [ 'Intriguing Cases', 'Violin' ],
  },
];

function lookUpProfile( name, prop ){
  const x = contacts.filter(con => con.firstName === name );
  return x.length ? x[0][prop] ? x[0][prop] : 'No such property' : 'No such contact';
}
console.log(lookUpProfile("Sherlock", "likes"));

//recursion that replace for loop
function rangeOfNumbers(startNum, endNum) {
  if(startNum === endNum){
    return arry;
  };
  console.log(startNum);
  startNum++;
  rangeOfNumbers(startNum, endNum );
};

rangeOfNumbers(1,10);
