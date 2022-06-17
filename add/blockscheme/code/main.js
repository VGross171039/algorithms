let a=1,b=-2,c=-3;
let D = b*b-4*a*c;
if(D<0) {
  console.log("Корней нет");
} else if(D==0) {
  let x = -b/2*a;
  console.log("x="+x);
} else {
  let x1 = (-b+Math.sqrt(D))/2*a;
  let x2 = (-b-Math.sqrt(D))/2*a;
  console.log("x1="+x1+" ; x2="+x2);
}
console.log("Дискриминант="+D);
