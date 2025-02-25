<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To do List </title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}"/>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #e3f2fd;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .todo-container {
      background: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    h1 {
      text-align: center;
      color: #0277bd;
      margin-bottom: 20px;
    }

    .add-task {
      display: flex;
      margin-bottom: 20px;
    }

    .add-task input {
      flex: 1;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px 0 0 5px;
      font-size: 14px;
    }

    .add-task button {
      padding: 10px 15px;
      background-color: #0288d1;
      color: white;
      border: none;
      border-radius: 0 5px 5px 0;
      cursor: pointer;
      font-size: 14px;
    }

    .add-task button:hover {
      background-color: #0277bd;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    ul li {
      padding: 10px 15px;
      background: #a9d6e9;
      border-radius: 5px;
      margin-bottom: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    ul li .remove {
      background: #e53935;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      cursor: pointer;
      font-size: 12px;

    }

    /*ul li {
      font-family: Arial, Helvetica, sans-serif;
      font-style: Sans-serif;
    }
    */
    ul li .remove:hover {
      background: #d32f2f;
    }
  </style>
</head>
<body>
  <div class="todo-container">
    <h1>To-Do List</h1>
    <div class="add-task">
      <input type="text" id="task-input" placeholder="Add a new task">
      <button onclick="addTask()" id="clickButton(Add)"><audio id="clickSound(Add)" src="{{ asset('sounds/mouse-click.mp3') }}"></audio>Add</button>
    </div>
    <ul id="task-list">
      <li>
        <a style="text-decoration: none;" href="https://music.youtube.com/playlist?list=PLMolAk97Qvwntzy_3n3bhMWjoqRJ03SVE&si=k8v4PVJHpoDzsayf">
        <b style="color:green;">Setup C++ using MinGW on VSCode</b></a>
        <button class="remove" onclick="removeTask(this)" id="clickButton(Remove)"><audio id="clickSound(Add)" src="{{ asset('sounds/mouse-click.mp3') }}"></audio>Remove</button>
      </li>

      <li>
        <a style="text-decoration: none;" href="https://www.w3schools.com/html/default.asp">
        <b style="color:yellow;">Learn  HTML</b></a>
        <button class="remove" onclick="removeTask(this)"><audio id="clickSound(Remove)" src="{{ asset('sounds/vine_boom.mp3') }}"></audio>Remove</button>
      </li>
      <li>
        <a style="text-decoration: none;" href="https://www.w3schools.com/howto/howto_google_fonts.asp">
        <b style="color:#2889d4;">Learn Fonts</b></a>
        <button class="remove" onclick="removeTask(this)"><audio id="clickSound(Remove)" src="{{ asset('sounds/vine_boom.mp3') }}"></audio>Remove</button>
      </li>
      <li>
        <a style="text-decoration: none;" href="https://www.youtube.com/watch?v=4RhY1JJgLsM&list=PLe30vg_FG4OTxKekbWLABcpstdeCDA4LQ&index=1">
        <b style="color:#2889d4;">Install Git and Bash(Bitfumes)</b></a>
        <button class="remove" onclick="removeTask(this)"><audio id="clickSound(Remove)" src="{{ asset('sounds/vine_boom.mp3') }}"></audio>Remove</button>
      </li>
      <li>
        <a style="text-decoration: none;" href="https://www.youtube.com/watch?v=4RhY1JJgLsM&list=PLe30vg_FG4OTxKekbWLABcpstdeCDA4LQ&index=1">
        <b style="color:#2889d4;">Re learn Git Commands(Bitfumes)</b></a>
        <button class="remove" onclick="removeTask(this)"><audio id="clickSound(Remove)" src="{{ asset('sounds/vine_boom.mp3') }}"></audio>Remove</button>
      </li>
      <li>
        <a style="text-decoration: none;" href="https://roadmap.sh/r?id=677f4a4c70129741a86b6701">
        <b style="color:red;">UPDATE ROADMAP.SH</b></a>
        <button class="remove" onclick="removeTask(this)"><audio id="clickSound(Remove)" src="{{ asset('sounds/vine_boom.mp3') }}"></audio>Remove</button>
      </li>
    </ul>
  </div>

  <script>
    function addTask() {
      const taskInput = document.getElementById('task-input');
      const taskText = taskInput.value.trim();

      if (taskText === '') {
        alert('Please enter a task.');
        return;
      }

      const taskList = document.getElementById('task-list');

      // Create a new list item
      const listItem = document.createElement('li');
      listItem.innerHTML = `
        ${taskText}
        <button class="remove" onclick="removeTask(this)">Remove</button>
      `;

      taskList.appendChild(listItem);
      taskInput.value = ''; // Clear the input field
    }

    function removeTask(button) {
      const listItem = button.parentElement;
      listItem.remove();
    }
  </script>

  {{-- for add button sounds --}}
  <script>
    const button = document.getElementById("clickButton(Add)");
    const audio = document.getElementById("clickSound(Add)");
    button.addEventListener("click", function() {
        audio.play();
    });
  </script>

  {{-- for remove button sounds --}}
  <script>
    const button = document.getElementById("clickButton(Remove)");
    const audio = document.getElementById("clickSound(Remove)");
    button.addEventListener("click", function() {
        audio.play();
    });
  </script>
</body>
</html>
