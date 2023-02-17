<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="data:image/png;base64,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" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://www.desarrollolibre.net/public/images/example/codeigniter4/curso/curso-para-dar-los-primeros-pasos-en-codeigniter-4-el-framework-php-del-futuro.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://www.buildwithphp.com/uploads/blog/thumb/how-to-create-codeigniter-3-crud-application-using-mysql-with-example.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        <form>
            <fieldset disabled>
                <legend>Disabled fieldset example</legend>
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Disabled input</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                </div>
                <div class="mb-3">
                <label for="disabledSelect" class="form-label">Disabled select menu</label>
                <select id="disabledSelect" class="form-select">
                    <option>Disabled select</option>
                </select>
                </div>
                <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                    <label class="form-check-label" for="disabledFieldsetCheck">
                    Can't check this
                    </label>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                    <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                    </div>
                    <div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!
                    </div>
                    <div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                    </div>
                    <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                    </div>
                    <div class="alert alert-warning" role="alert">
                    A simple warning alert—check it out!
                    </div>
                    <div class="alert alert-info" role="alert">
                    A simple info alert—check it out!
                    </div>
                    <div class="alert alert-light" role="alert">
                    A simple light alert—check it out!
                    </div>
                    <div class="alert alert-dark" role="alert">
                    A simple dark alert—check it out!
                    </div>

                    <button type="button" class="btn btn-primary position-relative">
  Inbox
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    99+
    <span class="visually-hidden">unread messages</span>
  </span>
</button>
            </fieldset>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>