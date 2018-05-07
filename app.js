/* 8 kyu
Counting sheep...
JavaScript: */
  function countSheeps(arrayOfSheep) {
  let i = 0;

  arrayOfSheep.forEach(v => v ? i++ : v);

  return i;
  }


/* 7 kyu
Get the Middle Character
JavaScript: */
function getMiddle(s)
{
  return s.length % 2 ? s.substr(s.length / 2, 1) : s.substr((s.length / 2) - 1, 2);
}

getMiddle('test');

/* 8 kyu
Grasshopper - Summation
JavaScript: */
var summation = function (num) {
let i = 1;
let k = 0;
  for(i>1;i<= num; i++){
    k += i;
    
  }
  return k;
}

summation(4);