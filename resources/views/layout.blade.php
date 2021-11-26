<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Happy Book Store</title>
</head>
<body>

    <div class="bg-primary text-light text-center py-5">
    <h1>HAPPY BOOK STORE</h1>
    </div>

    <nav class="navbar navbar-expand navbar-light bg-light">
  <div class="container-fluid">
    <div class="mx-auto" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @for ($i = 0; $i < count($categoryData); $i++)
                <li><a class="dropdown-item" href="/categories/{{$categoryData[$i]->id}}">{{$categoryData[$i]->category}}</a></li>
            @endfor
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <div class="container">
        <div class="row">
            @yield('row-section')

            <div class="col-4">
                <div class="bg-warning p-1 fs-2">
                    Category
                </div>
                <table class="table">
                    <tbody>
                        @for ($i = 0; $i < count($categoryData); $i++)
                            <tr>
                                <td><a href="/categories/{{$i+1}}" class="fst-normal text-primary text-decoration-none">{{$categoryData[$i]->category}}</a></td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="bg-primary text-light text-center py-1">
        <p>	&copy; Happy Book Store 2021</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
