    <h1>Peixes Regionais</h1>
    <div class="menu">
        <div class="item">
            <img src="imagens/15.png">
            <button onclick="showInfo('jaraqui')">Consulte Mais Informações</button>
        </div>
        <div class="item">
            <img src="imagens/13.png">
            <button onclick="showInfo('bodo')">Consulte Mais Informações</button>
        </div>
        <div class="item">
            <img src="imagens/14.png">
            <button onclick="showInfo('pacu')">Consulte Mais Informações</button>
        </div>
        <div class="item">
            <img src="imagens/16.png">
            <button onclick="showInfo('tambaqui')">Consulte Mais Informações</button>
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

