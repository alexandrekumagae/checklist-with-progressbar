<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checklist with progress bar</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>My Checklist with Progress Bar</h1>
    <?php if (@$_REQUEST['item'] == '') { ?>
  
    <form action="index.php" method="POST" id="form">
      <label for="item1"><input type="checkbox" name="item[]" id="item1" class="check">Item 1</label>
      <label for="item2"><input type="checkbox" name="item[]" id="item2" class="check">Item 2</label>
      <label for="item3"><input type="checkbox" name="item[]" id="item3" class="check">Item 3</label>
      <label for="item4"><input type="checkbox" name="item[]" id="item4" class="check">Item 4</label>
      <label for="item5"><input type="checkbox" name="item[]" id="item5" class="check">Item 5</label>
      <button type="submit">Enviar</button>
    </form>
  
    <div class="progress-bar-container">
      <span id="qtdItems">0</span> de 5 preenchidos
      <div class="progress-bar" id="progress-bar">
        <div id="bar"></div>
      </div>
    </div>
  
    <?php } 
      else {
        print_r(@$_REQUEST['item']);
      }
    ?>
  </div>

  <script src="script.js"></script>
</body>
</html>