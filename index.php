<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S. KAMYLLA</title>
    <link rel="stylesheet" href="estiloMenu.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>           
          <a class="logo" href="#">S. KAMYLLA</a>          
          <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
          <ul class="nav-list">
            <li><a href="?page=salgados">Salgados</a></li>
            <li><a href="?page=sucos" onclick="loadContent('sucos')">Sucos Naturais</a></li>
            <li><a href="?page=peixes" onclick="loadContent('peixes')">Peixes Regionais</a></li>
          </ul>
        </nav>
      </header>
    
<main id="main-content"> 


    <h1>Salgados</h1>
    <div class="menu">
        <div class="item">
            <img src="imagens/2.png">
            <button onclick="showInfo('pasteis')">Consulte Mais Informações</button>
        </div>
        <div class="item">
            <img src="imagens/6.png">
            <button onclick="showInfo('paes')">Consulte Mais Informações</button>
        </div>
        <div class="item">
            <img src="imagens/1.png">
            <button onclick="showInfo('coxinhas')">Consulte Mais Informações</button>
        </div>
        <div class="item">
            <img src="imagens/5.png">
            <button onclick="showInfo('tapiocas')">Consulte Mais Informações</button>
        </div>
    </div>
    <div class="menu">
        <div class="item">
            <img src="imagens/3.png">
            <button onclick="showInfo('bolo1')">Consulte Mais Informações</button>
        </div>
        <div class="item">
            <img src="imagens/4.png">
            <button onclick="showInfo('bolo2')">Consulte Mais Informações</button>
        </div>
        <div class="item">
            <img src="imagens/11.png">
            <button onclick="showInfo('mingau')">Consulte Mais Informações</button>
        </div>
        <div class="item">
            <img src="imagens/12.png">
            <button onclick="showInfo('banana')">Consulte Mais Informações</button>
        </div>
    </div>
    <div class="pix">
        <p>Chave Pix</p>
        <p>Soraia Garcia Gomes</p>
        <p>
            <img width="200px" height="200px" src="imagens/pix.png">
        </p>
    </div>

    <div id="infoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">X</span>
            <div id="infoContent"></div>
        </div>
    </div>
</main>

<script>
        function showInfo(item) {
            let infoContent = document.getElementById('infoContent');
            switch(item) {
                case 'pasteis':
                    infoContent.innerHTML = '<h2>Pastéis</h2> <p>Recheio: Queijo e Carne</p><p>Ingredientes: Farinha de trigo, ovos, fermento em pó e leite morno</p> <p>Preço unitário: R$ 5,00</p>';
                    break;
                case 'paes':
                    infoContent.innerHTML = '<h2>Pães</h2><p>Recheio: Queijo, Tucumã, Banana</p><p>Preço unitário: R$ 7,00</p>';
                    break;
                case 'coxinhas':
                    infoContent.innerHTML = '<h2>Coxinha</h2><p>Recheio: Frango desfiado</p><p>Ingredientes: Farinha de trigo, caldo de galinha, margarina e leite</p><p>Preço unitário: R$ 3,00</p>';
                    break;
                case 'tapiocas':
                    infoContent.innerHTML = '<h2>Tapiocas</h2><p>Recheio: Queijo, Tucumã, Banana</p><p>Ingredientes: Tapioca, manteiga, sal</p><p>Preço unitário: R$ 7,00</p>';
                    break;
                case 'bolo1':
                    infoContent.innerHTML = '<h2>Bolo</h2><p>Sabor: Macaxeira</p><p>Ingredientes: Maxeira ralada, açúcar, ovos, coco e margarina</p><p>Preço: R$ 4,00</p>';
                    break;
                case 'bolo2':
                    infoContent.innerHTML = '<h2>Bolo</h2><p>Sabor: Milho</p><p>Ingredientes: Milho ralado, óleo/margarina, leite, ovos, açúcar, fermento em pó</p><p>Preço: R$ 4,00</p>';
                    break;
                case 'mingau':
                    infoContent.innerHTML = '<h2>Mingau</h2><p>Sabor: Munguzá</p><p>Ingredientes: milho branco para canjica, leite de coco, açúcar, cravo, coco ralado, leite em pó, sal</p><p>Preço unitário: R$ 4,00</p>';
                    break;
                case 'banana':
                    infoContent.innerHTML = '<h2>Banana</h2><p>Ingredientes: Banana amarela frita</p><p>Preço: R$ 4,00</p>';
                    break;

                    // sucos
                case 'goiaba':
                    infoContent.innerHTML = '<h2>Suco</h2> <p>Sabor: Goiaba</p><p>Ingredientes: Polpa de goiaba, açúcar</p><p>Preço: R$ 3,00</p>';
                    break;
                case 'cupu':
                    infoContent.innerHTML = '<h2>Suco</h2><p>Sabor: Cupuaçu</p><p>Ingredientes: Polpa de cupuaçu, açúcar</p><p>Preço: R$ 3,00</p>';
                    break;
                case 'graviola':
                    infoContent.innerHTML = '<h2>Suco</h2><p>Sabor: Graviola </p><p>Ingredientes: Polpa de graviola, açúcar</p><p>Preço: R$ 3,00</p>';
                    break;
                case 'laranja':
                    infoContent.innerHTML = '<h2>Suco</h2><p>Sabor: Laranja</p><p>Ingredientes: Polpa de laranja, açúcar</p><p>Preço: R$ 3,00</p>';
                    break;  
                    
                    // peixes
                case 'jaraqui':
                    infoContent.innerHTML = '<h2>Jaraqui(frito)</h2><p>Preço: R$ </p>';
                    break;
                case 'bodo':
                    infoContent.innerHTML = '<h2>Bodó(assado/cozido)</h2<p>Preço: R$ </p>';
                    break;
                case 'pacu':
                    infoContent.innerHTML = '<h2>Pacu(assado/frito)</h2><p>Preço: R$ </p>';
                    break;
                case 'tambaqui':
                    infoContent.innerHTML = '<h2>Tambaqui(assado)</h2><p>Preço: R$ </p>';
                    break;   

            }
            document.getElementById('infoModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('infoModal').style.display = 'none';
        }

</script>

<script> function loadContent(page) { 
    event.preventDefault(); 
    var xhr = new XMLHttpRequest(); 
    xhr.open('GET', page + '.php', true); 
    xhr.onreadystatechange = function() { 
        if (xhr.readyState == 4 && xhr.status == 200) { 
            document.getElementById('main-content').innerHTML = xhr.responseText; 
        } 
    }; 
    xhr.send(); 
    } 
    </script>

</body>
</html>

