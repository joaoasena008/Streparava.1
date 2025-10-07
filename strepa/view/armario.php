

    <?php
     $title = "Armário";
     include '../partials/header.php';
    ?>
     <header class="header">    
        
    <nav class="navbar">
    <div class="container-fluid">
    <a class="navbar-brand" href="">
      <img src="https://cdn.lugc.link/fdff2030-93b1-4aa0-8eb2-c73b4abfe77c/-/preview/265x70/-/format/auto/" alt="Logo STREPARAVA" class="d-inline-block align-text-top">
     
    </a>
  </div>
</nav>
    </header>
    <div class="mb-3">
        <form action="processa.php" method="POST">
            <div class="carousel-item active">
            <img class="d-block w-100" src="">
            </div>
            <h1 >Armário</h1>
            <div class="input">
                <input type="text" name="id" class="form-control"  placeholder="id" required>
                <input type="text" class="form-control" name="id ferramenta" placeholder="turno" required>
                <input type="text"class="form-control"  name="quantidade" placeholder="linha" required>
                <input type="text"class="form-control"  name="data" placeholder="id funcionário" required>
                <input type="text"class="form-control"  name="quantidade mínima" placeholder="quantidade prevista" required>
          
            
            </div>
            <div class="botoes">
                <button type="submit" class="btn btn-danger" id="enviar" >enviar</button>
              
             
            </div>
            
    </div>
    <?php
     include '../partials/footer.php';  
     ?>
     
     