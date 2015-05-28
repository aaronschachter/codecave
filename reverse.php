<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<?php
include 'includes/LinkedList.php';
$head = getLinkedList(array('abc', 'def', 'ghi'));
?>
</head>
<html>
  <body>
    <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Lebowski Code</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

      <div class="container">

        <div class="starter-template">
          <h1>Reverse a linked list</h1>
          <p class="lead">Write a function to reverse a linked list.</p>
          <pre>

            $head = getLinkedList(array('abc', 'def', 'ghi'));
            printLinkedList($head);
          </pre>
        </div>

      <?php include 'editor.php'; ?>

    </div>

  </body>
</html>
