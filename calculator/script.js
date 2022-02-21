/*
Logic:
empty stack:
If click is number store it in string "num" till operator is clicked, when click operator cast string to integer and push the integer to stack first then the operator to stack .
if click is opreator discard it.
stack having number:
If click is number store it in string "num" till operator is clicked, when click operator cast string to integer and perform the operation of previous expression  and push current operator with that number.

stack is array with 3 elements.1st element is result of expression.
*/

var stack = [];
stack[0] = -1;
var num_str = "";
var num;
var t;
var operator;
var num2;
var res;

//function called on click of every number or .
function fun1(e) {
  t = e.getAttribute("name");
  num_str += t;
  document.getElementById("result").innerHTML = num_str;
}

//function called when operator is clicked
function fun2(e) {
  if (num_str != "") {
    num = Number(num_str);
    num_str = "";
    t = e.getAttribute("name");
    if (stack[0] == -1) {
      stack.pop();
      stack.push(num);
      stack.push(t);
      document.getElementById("result").innerHTML = num;
    } else {
      operator = stack.pop();
      num2 = stack.pop();
      switch (operator) {
        case "+":
          res = num2 + num;
          stack.push(res);
          break;
        case "-":
          res = num2 - num;
          stack.push(res);
          break;
        case "*":
          res = num2 * num;
          stack.push(res);
          break;
        case "/":
          res = num2 / num;
          stack.push(res);
          break;
        default:
          console.log("Break");
      }

      stack.push(t);
      document.getElementById("result").innerHTML = res;

    }
  }
}

