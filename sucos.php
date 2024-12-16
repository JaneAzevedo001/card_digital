    <h1>Sucos Naturais</h1>
    <div class="menu">
        <div class="item">
            <img src="imagens/8.png">
            <button onclick="showInfo('goiaba')">Consulte Mais Informações</button>
        </div>
        <div class="item">
            <img src="imagens/7.png">
            <button onclick="showInfo('cupu')">Consulte Mais Informações</button>
        </div>
        <div class="item">
            <img src="imagens/10.png">
            <button onclick="showInfo('graviola')">Consulte Mais Informações</button>
        </div>
        <div class="item">
            <img src="imagens/9.png">
            <button onclick="showInfo('laranja')">Consulte Mais Informações</button>
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
