<html>
 <head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="{{asset('cssfile/custom.css')}}" rel="stylesheet">

 </head>
  <body>
   
    <div class="header">
           @section('header')

         <!--nav header start-->     
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="user">User List</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="log">Login</a>
                            </li>
                          
                            <li class="nav-item">
                            <a class="nav-link active " href="create" tabindex="-1" aria-disabled="true">Create Account</a>
                            </li>
                            </ul>
                            <form class="d-flex">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                      </div>
                </div>
            </nav>

             <!--nav header end--> 

           @show
     </div>

          <div class="container">
                <div class="content">
                      @section('content')
                      @show
                </div>
           </div>
                <div class="footer">
                      @section('footer')
                      <h1>Footer Part<h1>
                      @show

                </div>
          


  </body>
</html>