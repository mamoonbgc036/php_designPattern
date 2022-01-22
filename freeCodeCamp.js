//reverse a statement
function reverse(str){
  let newStr = str.split(' ')
  let newString = ''
  let word = ''
  for(let i = 0; i < newStr.length; i++){
    for(let j = newStr[i].length-1; j >= 0; j--){
        word += newStr[i][j]
    }
    newString += ' '+word
    word = ''
  }
  console.log(newString)
}

reverse('mamoon is a good boy')

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

//finding longest word in a sentences
let str = "Bangladesh is our country";

function test(str){
  let arry = str.split(" ");
  let bigger = (arry[0].length>arry[1].length) ? arry[0] : arry[1];
  for(let i = 2; i < arry.length; i++){
    bigger = (bigger.length>arry[i].length) ? bigger : arry[i];
  }
  console.log(bigger);
}

test(str)

//check whether end of a string is matched with the target
function confirmEnding(str, target) {
  let testLen = '';
  let tarLen = target.length;
  if(str.indexOf(' ')>=0){
    let arry = str.split(' ');
    let mword = arry[arry.length-1];
    for(let i = mword.length-tarLen; i < mword.length ; i++ ){
      testLen += mword[i];
    }
    if(testLen==target){
      console.log('yes')
    }else{
      console.log('no');
    }
  }else{
    for(let i = str.length-tarLen; i < str.length ; i++ ){
      testLen += str[i];
    }
    if(testLen==target){
      console.log('yes')
    }else{
      console.log('no');
    }
  }
  return str;
}

confirmEnding("Open sesame", "same");//return yes

function truncateString(str, num) {
  let newStr = '';
  if(str.length > num){
    for(let i =0; i < num; i++){
      newStr += str[i];
    }
    newStr += '...';
    return newStr;
  } else{
    return str;
  }
}

let y = truncateString("A-tisket a-tasket A green and yellow basket", "A-tisket a-tasket A green and yellow basket".length)

console.log(y);

function findElement(arr, func) {
  for(let i = 0; i < arr.length; i++){
    let testedElement = func(arr[i]);
      if(testedElement === true){
        return arr[i];
      }
  }
}

let tested = findElement([1, 3, 5, 9], function(num) { return num % 2 === 0; })

function booWho(bool) {
  if(bool == true || bool == false){
    return 'true';
  } else{
    return 'false';
  }
}

console.log(booWho(false));

function titleCase(str){
  let convertedArry = str.split(' ');
  let result = convertedArry.map(val=>val.replace(val.charAt(0), val.charAt(0).toUpperCase()));
  let x = result.join(' ');
  return x;
}

console.log(titleCase("I'm a little tea pot"));

function reverseWord(word){
  let newWord = '';
  for(let i = word.length-1;i >= 0; i--){
    newWord += word[i];
  }
  return newWord;
}

console.log(reverseWord('mamoon'))

function reverseWord(word){
  let newWord = '';
  for(let i = word.length-1;i >= 0; i--){
    newWord += word[i];
  }
  if(newWord==word){
    return 'this is palindrom';
  }else{
    return 'this is not palindrom';
  }
}

console.log(reverseWord('aba'))

function sumAll(arr) {
  let sum = 0;
  if(arr[0]<arr[1]){
    for(let i = arr[0]; i <= arr[1]; i++){
      sum += i;
    }
  }else{
    for(let i = arr[1]; i <= arr[0]; i++){
      sum += i;
    }
  }

  return sum;
}

console.log(sumAll([1, 4]));

function destroyer(...arr) {
  let test = arr.shift()
  for(let i = 0; i < arr.length; i++){
    for(let j = 0; j < test.length; j++){
      if(arr[i] === test[j]){
        test.splice(j,1)
      }
    }
  }
  console.log(test)
}

destroyer([1, 2, 3, 1, 2, 3], 10, 3);

function whatIsInAName(collection, source) {
  var srcKeys = Object.keys(source);

  return collection.filter(function(obj) {
    return srcKeys.every(function(key){
      return obj.hasOwnProperty(key) && obj[key] === source[key]
    })
  });
}
const result = whatIsInAName([{ first: "Romeo", last: "Montague" }, { first: "Mercutio", last: null }, { first: "Tybalt", last: "Capulet" }], { last: "Capulet" });

console.log(result)

function spinalCase(str) {
  let newStr = str.replaceAll(' ', '-')
  let conStr = newStr.toLowerCase()
  return conStr;
}

console.log(spinalCase('This Is Spinal Tap'));
//FIND THE MISSING LETTER
function fearNotLetter(str) {
  let strArr = str.split('')
  let firstCode = strArr[0].charCodeAt();
  for(let i = 1; i < strArr.length; i++){
      firstCode++
     let code = strArr[i].charCodeAt()
     if(code !== firstCode){
       var letter = String.fromCharCode(firstCode)
       break
     }
  }
  console.log(letter)
}


fearNotLetter("abcdefghijklmnopqrstuvwxyz");

function uniteUnique(...arr) {
  let arry = arr[0]
  let letter = []
  let count = 0;
  for(let i = 1; i < arr.length; i++){
    for(let j = 0; j < arr[i].length; j++){
        for(let k = 0; k < arry.length; k++){
          if(arry[k]===arr[i][j]){
            count++
          }
        }
        if(count >= 1){
          letter.push(arr[i][j])
          count = 0
        }
    }
     console.log(letter)
  }
}

uniteUnique([1, 3, 2], [5, 2, 1, 4], [2, 1]);

//compare the first with the second and find the ummatched elements and store it in a array and compare the store array with the third array and concat it with the first array


// find the union
function uniteUnique(...arr) {
  let arry = arr[0]
  let count = false;
  let newArry = []
  for(let i = 1; i < arr.length; i++){
    for(let j = 0; j < arr[i].length; j++){
      for(let k = 0; k < arry.length; k++){
          if(arry[k]===arr[i][j]){
            count = true;
          }
      }
      if(count === false){
         newArry.push(arr[i][j])
      }
      count = false
    }
  }

  let result = arry.concat(newArry)

  console.log(result)
}



uniteUnique([1, 2, 3], [5, 2, 1, 4], [2, 1], [6, 7, 8])
//find sum of all odd Fibonacci number upto a given number
function sumFibs(num) {
  let x = [1,1]
  let sum = x[0]+x[1]
  for(; x[1] <= num;){
    let z = x[0]+x[1]
    if(x[1]%2===1){
      sum+=x[1]
    }
    x.shift()
    x.push(z)
  }
  sum--
  console.log(sum)
}

sumFibs(75025)

// prime number tester
function sumPrimes(num) {
  let len = num/2
  let finallen = Math.round(len)
  let count = false
  for(let i = 2; i < finallen; i++){
    if(num%i===0){
      count = true
    }
  }
  if(count !== true){
    console.log('yes')
  }

}


sumPrimes(2850);
//find all prime number upto a number
function sumPrimes(num) {

  for(let i = 4; i < num; i++){
    let len = i/2
    let finalLen = Math.round(len)
    let count = false
    for(let j = 2; j <= finalLen; j++){
      if(i%j===0){
        count = true
      }
    }
  
    if(count!==true){
      console.log(i)
    }
    count = false
  }
}


sumPrimes(20);

//find sum of all prime number upto a number
function sumPrimes(num) {
  let sum = 5
  let count = false
  for(let i = 4; i <= num; i++){
    let len = i/2
    let finalLen = Math.round(len)
    
    for(let j = 2; j <= finalLen; j++){
      if(i%j===0){
        count = true
      }
    }

    finalLen = 0
  
    if(count!==true){
      sum += i
    }
    count = false
  }
  console.log(sum)
}


sumPrimes(977);









