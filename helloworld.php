<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<?php include 'includes/LinkedList.php'; ?>
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
        </div>

        <?php if (array_key_exists('content', $_POST)): ?>
          <pre><?php print eval($_POST['content']); ?></pre>
        <?php endif; ?>

        <form action="" method="post" role="form">
          <div class="form-group">
            <textarea name="content" class="form-control" rows="10">
            <?php print trim($_POST['content']); ?>
            </textarea>
          </div>
          <div>
            <button type="submit" class="btn btn-default">Execute PHP</button>
          </div>
        </form>

    </div>

  </body>
</html>
