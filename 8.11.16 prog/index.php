  <?php
    require_once 'function.php';
    $route = $_GET['route'];
  //$route - тот адрес,что ввел пользователь
    $mas = getArticle($route);
    //print_r($mas);
  ?>
  <?php require_once 'header.php'; ?>
          <div class="wrap">
              <div class="main">
                  <article>
                      <header>
                      <?php echo '<img src="'.$mas['img'].'">';?>
                          <h1><?php echo $mas['title']; ?></h1>
                      </header>
                            <?php echo $mas['post']; ?>
                  </article>
              </div>
<?php require_once 'sidebar.php'; ?>           
              <div class="clearfix"></div>

              <div class="nav-box" style="background: url(images/panda.jpg); background-size:cover">
                  <a href="#">
                      <div class="nav-box-text">
                          Это пример текста блока ссылки на статью
                      </div>
                  </a>
              </div>
              <div class="nav-box" style="background: url(images/panda.jpg); background-size:cover">
                  <a href="#">
                      <div class="nav-box-text">
                          Это пример текста блока ссылки на статью
                      </div>
                  </a>
              </div>
              <div class="nav-box" style="background: url(images/panda.jpg); background-size:cover">
                  <a href="#">
                      <div class="nav-box-text">
                          Это пример текста блока ссылки на статью
                      </div>
                  </a>
              </div>
              <div class="nav-box" style="background: url(images/panda.jpg); background-size:cover">
                  <a href="#">
                      <div class="nav-box-text">
                          Это пример текста блока ссылки на статью
                      </div>
                  </a>
              </div>
              <div class="nav-box" style="background: url(images/panda.jpg); background-size:cover">
                  <a href="#">
                      <div class="nav-box-text">
                          Это пример текста блока ссылки на статью
                      </div>
                  </a>
              </div>

              <div class="clearfix"></div>
          </div>
      </div>
<?php require_once 'footer.php'; ?>
