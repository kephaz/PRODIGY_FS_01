<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/dash-bd.css') }}">
    <script src="{{ url('css/app.js')}}"></script>
  </head>
  <body>
    <div class="container">
        <header>
          
            <div class="login"> <i class="fa-solid fa-power-off"></i> &nbsp;  <span><a href="logout" class="">Logout</a></span> </div>
            <div class="title"> <h1>Welcome   to your dashboard</h1></div>
           
        </header><hr>
        <div class="allContent">
            <aside>
                <nav>
                    <ul class="sectionlinks" onclick="openSection(event,'statistics')"><i class="fa-solid fa-chart-simple"></i> &nbsp; <span>Statistics</span> </ul>
                    <ul class="sectionlinks" onclick="openSection(event,'claims')"><i class="fa-solid fa-flag"></i> &nbsp; <span>claims</span> </ul>
                </nav>
            </aside>
            <aside id="statistics" class="sectioncontent">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'users')">users</button>
                    <button class="tablinks" onclick="openCity(event, 'jobs')">Latest News</button>
                    <button class="tablinks" onclick="openCity(event, 'progress')">Posts</button>
                </div>
                
                
                <div id="users" class="tabcontent">
                    <div class="cardContainer">
                        <div class="card"><i class="fa-solid fa-users"></i> <div><span>265</span><br> Users</div></div>
                        <div class="card"><i class="fa-solid fa-city"></i> <div><span>20</span><br> Reply</div></div>
                        <div class="card"><i class="fa-solid fa-user"></i> <div><span>100</span><br> Posts</div></div>
                    </div>
                    <br><br>
                    <div class="container">
                      <div class="row">
                          <div class="col-md-4 col-md-offset-4 " style="margin-top:20px">
                              <h4>Profile</h4> <hr>
                              <table class="table">
                                  <thead>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Action</th>
                                  </thead>
                                  <tbody>
                                      <tr>{{$data->name}}</tr>
                                      <tr>{{$data->email}}</tr>
                                      {{-- <tr><a href="logout" class="">Logout</a></tr> --}}
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                  
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                    
                </div>
    
                </div>
            </aside>
        </div>
    </div>
  </body>
  </html>
  <!-- Asaaju Olalekan-->
  
  