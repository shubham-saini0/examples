var completed = [];
var pending = [];

//function to add new task to pending part
function addTask() {
  var task = document.getElementById("new-task").value;
  pending.push(task);
  display_todo();
}

//function to dynamically create pending list
function display_pending() {
  for (var i = 0; i < pending.length; i++)
    document.getElementById("incomplete-tasks").innerHTML +=
      "<li><input type='checkbox' onchange='move1(this.value)' value='" +
      pending[i] +
      "'><label>" +
      pending[i] +
      "</label><input type='text'><button class='edit' onclick='edit_pending(this)' name='" +
      pending[i] +
      "'>Edit</button><button class='delete' name='" +
      pending[i] +
      "' onclick='delete_pending(this.name)'>Delete</button></li>";
}

//function to dynamically create completed list
function display_completed() {
  for (var i = 0; i < completed.length; i++)
    document.getElementById("completed-tasks").innerHTML +=
      "<li><input type='checkbox' onchange='move2(this.value)' value='" +
      completed[i] +
      "' checked><label>" +
      completed[i] +
      "</label><input type='text'><button class='edit' onclick='edit_completed(this)' name='" +
      completed[i] +
      "'>Edit</button><button class='delete' name='" +
      completed[i] +
      "' onclick='delete_completed(this.name)' >Delete</button></li>";
}

//function to display complete todo list
function display_todo() {
  document.getElementById("incomplete-tasks").innerHTML = "";
  document.getElementById("completed-tasks").innerHTML = "";
  display_pending();
  display_completed();
}

//function to move element from pending list to completed list
function move1(val) {
  for (var i = 0; i < pending.length; i++) {
    if (pending[i] == val) {
      pending.splice(i, 1);
      completed.push(val);
    }
  }
  display_todo();
}

//function to move element from completed list to pending list
function move2(val) {
  for (var i = 0; i < completed.length; i++) {
    if (completed[i] == val) {
      completed.splice(i, 1);
      pending.push(val);
    }
  }
  display_todo();
}

//function to delete element from pending list
function delete_pending(val) {
  for (var i = 0; i < pending.length; i++) {
    if (pending[i] == val) {
      pending.splice(i, 1);
    }
  }
  display_todo();
}

//function to delete element from completed list
function delete_completed(val) {
  for (var i = 0; i < completed.length; i++) {
    if (completed[i] == val) {
      completed.splice(i, 1);
    }
  }
  display_todo();
}

//function to enable edit feature for elements of pending list
function edit_pending(e) {
  document.getElementById("add-task").style.visibility = "hidden";
  document.getElementById("top").innerHTML +=
    "<button id='update' class='update' onclick='update(this.name)' name='" +
    e.name +
    "'>Update</button>";
  document.getElementById("new-task").value = e.name;
  e.remove();
}

//function to enable edit feature for elements of completed list
function edit_completed(e) {
  document.getElementById("add-task").style.visibility = "hidden";
  document.getElementById("top").innerHTML +=
    "<button id='update' class='update' onclick='update(this.name)'  name='" +
    e.name +
    "'>Update</button>";
  document.getElementById("new-task").value = e.name;
  e.remove();
}

//function to update value of elements of pending or completed list
function update(val) {
  var new_val = document.getElementById("new-task").value;
  for (var i = 0; i < pending.length; i++) {
    if (pending[i] == val) pending[i] = new_val;
  }
  for (var i = 0; i < completed.length; i++) {
    if (completed[i] == val) completed[i] = new_val;
  }
  var x = document.getElementById("update");
  x.remove();
  document.getElementById("add-task").style.visibility = "visible";
  display_todo();
}
