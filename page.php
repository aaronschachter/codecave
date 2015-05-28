<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<?php
include 'includes/LinkedList.php';
$head = getLinkedList(array('abc', 'def', 'ghi'));
$pages = json_decode(file_get_contents("content.json"), TRUE);
$current_path = ltrim($_SERVER['REQUEST_URI'], '/');
$content = $pages[$current_path];
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
            <a class="navbar-brand" href="about">Lebowski Code</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Code <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <?php foreach ($pages as $path => $link): ?>
                  <?php if ($path === 'about') { continue; } ?>
                  <li><a href="<?php print $path; ?>"><?php print $link['title']; ?></a></li>
                <?php endforeach; ?>
              </ul>
            </li>
              <li><a href="about">About</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

      <div class="container">

        <div class="starter-template">
          <h1><?php print $content['title']; ?></h1>
          <?php if (isset($content['description'])): ?>
            <p class="lead"><?php print $content['description']; ?></p>
          <?php endif; ?>
          <?php if (isset($content['code'])): ?>
            Starter code:
            <pre><?php print $content['code']; ?></pre>
          <?php endif; ?>
        </div>

      <?php if ($current_path != 'about'): include 'editor.php'; endif; ?>

    </div>

  </body>
</html>
