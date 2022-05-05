<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>01-Bootstrap</title>
  <!---Bootstrapset-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <style>
   aside,section {padding: 250px 0px;}
  </style>
</head>
<body>

<div class="container">
  <h1>Bootstrap</h1>
  <div class="row g-2 text-center text-white h2">
    <div class="col-12">
      <header class="bg-secondary p-5">Header</header>
    </div>
    <div class="col-md-8 col-sm-12" >
        <section class="bg-secondary">Section</section>
      </div>
      <div class="col-md-4 col-sm-12 ">
        <aside class="bg-secondary h-100">Aside</aside>
      </div>
    <!--<div class="col-12">
      <footer class="bg-secondary p-5">Footer</footer>
    </div>-->
  </div>
</div>
</body>
</html>