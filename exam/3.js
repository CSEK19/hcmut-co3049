var x = '10';
function f() {
  var x = '4';
  console.log(this.x);
  function g() {
    console.log(x); 
  }
  g();
}
f();
