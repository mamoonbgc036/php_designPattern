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
