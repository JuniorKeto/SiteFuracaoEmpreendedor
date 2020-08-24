<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Furacão Empreendedor | <?= isset($title) ? $title : "Title"  ?></title>
    <meta charset="utf-8">

    <?= $v->insert("templates/extension/favicon") ?>
    <?= $v->insert("templates/extension/css") ?>
</head>
<body>
  
  <?= $v->insert("templates/components/nav", ["title" => $title]) ?>
  
  <?= $v->section('content') ?>
   
  <?= $v->insert("templates/components/footer") ?>
  
    <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    

  <?= $v->insert("templates/extension/js") ?>
</body>
</html>