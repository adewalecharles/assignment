<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
  
  .back_button{
      text-decoration: none;
      float: left;
      font-size: 20px;
      color: black;
  }
  </style>
  <body>
  <a class="back_button" href="dashboard.php">Back</a>
  <div class="container">
    <div class="row">
            <div id="editor" style="height: 500px; width: 500px">
                <h1>Hello, world!</h1>
            </div>
        <div id="show" ></div>
    </div>
    <div class="form-group">
      <label for="">Select Editor Type </label>
      <select onchange="changeType()" class="form-control" name="" id="type">
        <option value="html"> HTML </option>
        <option value="javascript"> JAVASCRIPT </option>
      </select>
    </div>

    <button onclick="compileCode()" class="btn btn-primary">
            Compile <span class="badge badge-primary"></span>
    </button>

    <button onclick="clearText()" class="btn btn-info">
        Clear
    </button>
  </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.5/ace.js"></script>
    
    <script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/html");

    function changeType() {
       let selected_type =  document.getElementById('type').value

       if (selected_type !== undefined) {
           editor.session.setMode(`ace/mode/${selected_type}`);
       }
    }

    function compileCode () {

        clearText()

        let type = document.getElementById("type").value;

        if (type == "javascript")  {
          compileJs();
          return;
        }


        const div = document.createElement('div');

        div.id = 'editing';

        div.innerHTML = editor.getValue()

        document.getElementById("show").appendChild(div)


        
    }

    function compileJs () {
      var head = document.getElementsByTagName('head')[0];
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.charset = 'utf-8';
      script.id = 'testing';
      script.defer = true;
      script.async = true;  
      script.text = [editor.getValue()].join('');
      head.appendChild(script);
    }

    function clearText () {
        let element = document.getElementById("editing");
        if (element){
            element.parentNode.removeChild(element);
        }
    }
    </script>
  </body>
</html>