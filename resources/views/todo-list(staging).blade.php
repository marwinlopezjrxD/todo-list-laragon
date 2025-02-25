<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To do List</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}"/>
  @vite('resources/css/styles.css')
</head>
<body>
  <div class="todo-container">
    <h1>To-Do List</h1>
    <div class="add-task">
      <input type="text" id="task-input" placeholder="Add a new task">
      <button onclick="addTask()">Add</button>
    </div>
    <ul id="task-list">
      <li>
        <a style="text-decoration: none;" href="https://music.youtube.com/playlist?list=PLMolAk97Qvwntzy_3n3bhMWjoqRJ03SVE&si=k8v4PVJHpoDzsayf">
        <b style="color:green;">Setup C++ using MinGW on VSCode</b></a>
        <button class="remove" onclick="removeTask(this)">Remove</button>
      </li>
      <li>
        <a style="text-decoration: none;" href="https://www.w3schools.com/html/default.asp">
        <b style="color:yellow;">Learn HTML</b></a>
        <button class="remove" onclick="removeTask(this)">Remove</button>
      </li>
      <li>
        <a style="text-decoration: none;" href="https://www.w3schools.com/howto/howto_google_fonts.asp">
        <b style="color:#2889d4;">Learn Fonts</b></a>
        <button class="remove" onclick="removeTask(this)">Remove</button>
      </li>
      <li>
        <a style="text-decoration: none;" href="https://www.youtube.com/watch?v=4RhY1JJgLsM&list=PLe30vg_FG4OTxKekbWLABcpstdeCDA4LQ&index=1">
        <b style="color:#2889d4;">Install Git and Bash(Bitfumes)</b></a>
        <button class="remove" onclick="removeTask(this)">Remove</button>
      </li>
      <li>
        <a style="text-decoration: none;" href="https://www.youtube.com/watch?v=4RhY1JJgLsM&list=PLe30vg_FG4OTxKekbWLABcpstdeCDA4LQ&index=1">
        <b style="color:#2889d4;">Re learn Git Commands(Bitfumes)</b></a>
        <button class="remove" onclick="removeTask(this)">Remove</button>
      </li>
      <li>
        <a style="text-decoration: none;" href="https://roadmap.sh/r?id=677f4a4c70129741a86b6701">
        <b style="color:red;">UPDATE ROADMAP.SH</b></a>
        <button class="remove" onclick="removeTask(this)">Remove</button>
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
      const listItem = document.createElement('li');
      listItem.innerHTML = `
        ${taskText}
        <button class="remove" onclick="removeTask(this)">Remove</button>
      `;

      taskList.appendChild(listItem);
      taskInput.value = ''; // Clear the input field

      // Play Add sound
      const addAudio = new Audio("{{ asset('sounds/mouse-click.mp3') }}");
      addAudio.play();
    }

    function removeTask(button) {
      const listItem = button.parentElement;
      listItem.remove();

      // Play Remove sound
      const removeAudio = new Audio("{{ asset('sounds/vine_boom.mp3') }}");
      removeAudio.play();
    }
  </script>
</body>
</html>
