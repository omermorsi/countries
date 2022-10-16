<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <title>dunyamiz</title>
  <style media="screen">

    td{
      vertical-align: middle
    }

    img{
      width: 100px
    }

    .title{
      text-align: center;
      padding: 15px
    }

  </style>

</head>
<body>

  <h1 class="title bg-dark text-white">Bizim Dünyamız!</h1>

  <div class="container">

    <!-- Seach box -->
    <div class="row mt-4 mb-4 d-flex align-items-center">
      <p class="col-3 text-success vertical-alin m-0">Buraya bir başkenti yazın --&gt</p>
      <input type="text" id="cap" onkeyup="searchCon()" class="form-controller col-9">
    </div>

    <!-- The table of countries -->
    <table class="table table-striped">
      <thead>
        <tr>
        <th>Ülke</th>
        <th>Başkent</th>
        <th>Kıta</th>
        <th>Bayrak</th>
      </tr>
      </thead>
      <tbody id="tab"></tbody>
    </table>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
  <script src="../assets/js/app.js"></script>
</body>
</html>
