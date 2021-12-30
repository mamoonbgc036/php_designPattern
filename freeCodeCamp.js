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

//recursion for summing array without for loop
function sum(arr, n) {
  if(n <= 0) {
    return 0;
  } else {
    return sum(arr, n - 1) + arr[n - 1];
  }
}

console.log(sum([1,2,3], 3));

//nested for loop

const arr = [
  [1,2], [3,4], [5,6]
];

function multiply(arr){
  let product = 1;
  for (let i = 0; i < arr.length; i++){
  for (let j = 0; j < arr[i].length; j++){
    product *= arr[i][j];
  }
}
return product;
}

console.log(multiply(arr));

const myStr = "Socratics say that \"Honesty is the best policy\"."; // Change this line
console.log(myStr);

// Setup
let processed = 0;

function processArg(num) {
  return (num + 3) / 5;
}

// Only change code below this line

processed = processArg(25);
console.log(processed)

const myDog = {
  "name": "Happy Coder",
  "legs": 4,
  "tails": 1,
  "friends": ["freeCodeCamp Campers"]
};

myDog.language = 'paython, java';

console.log(myDog);

const measure = {
  'height' : 24,
  'age' : 35,
  'weight' : 80,
}

const myFun = (measur) => measur.age + measur.weight;

console.log(myFun(measure));

class Human{
   name;
  constructor(nam){
    this.name = nam;
  }

   getName(){
     return this.name;
  }
}

const x = new Human('noman');
console.log(x.getName())

let myString = "Hello, World!";
let myRegex = /Hello/;
let x = myRegex.test(myString);
console.log(x)

//reverse string
function reverseString(str) {
  let newStr = '';
  for (let i = str.length-1; i >= 0; i--){
    newStr += str[i];
  }
  return newStr;
}

let x = reverseString("hello");
console.log(x);

//factorial
function factorialize(num) {
  let mul = 1;
  for(let i = num; i>0; i--){
    mul *= i;
  }
  return mul;
}

let x = factorialize(5);
console.log(x);
