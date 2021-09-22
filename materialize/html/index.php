<html>
    <meta charset="utf-8" >
    <meta name="author" content="Gabriel.H assis de souza" >
    <meta name="keywords" content="css,html,js,materialize" >
    <meta name="description" content="Projeto-8 = usando framework materialize" >
    <title>Projeto 8</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport"  content="width=device-width ,initial-scale=1 ,maximum-scale=1.0" >
    <link rel="stylesheet" href="../css/style.css" >
    <link rel="stylesheet" href="../css/materialize.min.css">
</html>
<body>
<nav class="orange darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="orange-text  brand-logo">GH</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Contato</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="section  teal darken-4">
      <div class="container sect1">
          <div class="form-container">
              <div class="row">
                  <div class="col s12 center-align">
                       <form action="">
                           <div class="input-field">
                            <input type="text" name="email" placeholder="email" id="first-name" class="validate">
                            <label for="first-name">Insira o email:</label>
                           </div>
                           <div class="input-field">
                           <button class="btn waves-effect teal darken-4" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                           </div>
                       </form> 
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="section">
      <div class="container">
          <div class="row">
              <div class="col s12 m6">
                    <div class="custom-title">
                        <div class=""></div>
                       <h2> Sobre o autor</h2>
                    </div>
                    <p class="flow-text">
                    I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.
                    </p>
              </div><!--custom-title-->
              <div class="col s12 m6">
                    <div class="custom-title">
                        <div class=""></div>
                       <h2> Menssagem do dia</h2>
                    </div>
                    <div class="card deep-purple darken-2">
                        <div class="card-content white-text">
                            <span class="card-title">Lorem ipsum</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#"></a>
                            <a href="#"></a>
                        </div>
                    </div><!--card-->
              </div><!--custom-title-->
          </div><!--row-->
      </div><!--container-->
  </div>

  <div class="section">
      <div class="container">
          <div class="row">

              <div class="custom-title">
                        <div class=""></div>
                       <h2>Lugares incriveis</h2>
                    </div>
              <div class="col m4 s12">
                 <div class="card">
                    <div class="card-image">
                        <img src="../image/paisagem.jpg">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
              </div>

              <div class="col m4 s12">
                 <div class="card">
                    <div class="card-image">
                        <img src="../image/paisagem.jpg">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
              </div>

              <div class="col m4 s12">
                <div class="card">
                    <div class="card-image">
                        <img src="../image/paisagem.jpg">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
              </div>
          </div><!--row-->
      </div><!--container-->
  </div>

  <div class="section">
      <div class="container">
          <div class="row">
              <div class="col m6 s12">
                    <div class="custom-title">
                        <div class=""></div>
                        <h2>Time</h2>
                    </div><!--custom-title-->
                    <ul class="collection">
                        <li class="collection-item avatar">
                        <i class="material-icons circle">account_circle</i>
                        <span class="title">Title</span>
                        <p>First Line <br>
                            Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        <li class="collection-item avatar">
                        <i class="material-icons circle">folder</i>
                        <span class="title">Title</span>
                        <p>First Line <br>
                            Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        <li class="collection-item avatar">
                        <i class="material-icons circle green">insert_chart</i>
                        <span class="title">Title</span>
                        <p>First Line <br>
                            Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        <li class="collection-item avatar">
                        <i class="material-icons circle red">play_arrow</i>
                        <span class="title">Title</span>
                        <p>First Line <br>
                            Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                    </ul>
                </div><!--col-->
                <div class="col m6 s12 ">
                    
                    <ul class="collection off-set">
                        <li class="collection-item avatar">
                        <i class="material-icons circle">account_circle</i>
                        <span class="title">Title</span>
                        <p>First Line <br>
                            Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        <li class="collection-item avatar">
                        <i class="material-icons circle">folder</i>
                        <span class="title">Title</span>
                        <p>First Line <br>
                            Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        <li class="collection-item avatar">
                        <i class="material-icons circle green">insert_chart</i>
                        <span class="title">Title</span>
                        <p>First Line <br>
                            Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        <li class="collection-item avatar">
                        <i class="material-icons circle red">play_arrow</i>
                        <span class="title">Title</span>
                        <p>First Line <br>
                            Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                    </ul>
                </div><!--col-->
          </div><!--row-->
      </div>
  </div>

  <div class="section">
      <div class="container">
         <div class="row">
         <div class="custom-title">
               <div class=""></div>
                   <h2>Entre em contato!</h2>
              </div><!--custom-title-->
             <br/>
             <div class="container" style="max-width:700px" >
              <form class="col s12">
                <div class="row">
                    <div class="input-field col s12 m6">
                    <input  id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s12 m6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Mensagem</label>
                    </div>
                </div>
                <div class="row center-align">
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                    <i class="material-icons right">send</i>
                </button>     
                </div>
            </form>
            </div>   
         </div><!--row-->   
      </div><!--container-->
  </div>


  
  <footer class="page-footer orange darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

    

<script src="../js/jquery.js" ></script>
<script src="../js/materialize.js" ></script>
<script src="../js/func.js" ></script>
</body>