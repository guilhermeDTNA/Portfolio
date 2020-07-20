//Aumento/Diminuição de fonte

function fonte(e) {

    var elemento = $(".acessibilidade");
    
    var fonte = parseInt(elemento.css('font-size'));
    
    if(e=='a'){
        fonte++;
    }
    else{
        fonte--;
    }
    elemento.css("fontSize", fonte);
    
}


//Validate version 
function ValidaArquivo(file) {

 var tamanhoArquivo = file.files[0].size / 1024 / 1024; // in MB
 var tiposArquivo = ['image/png', 'image/jpeg', 'image/jpg', 'application/pdf'];


 if (tamanhoArquivo > 4) {
    alert('O arquivo excede a 4 MB');

            //Desabilita botão de enviar
            document.getElementById('botao-submit').disabled = true;
            
           // $(file).val(''); //for clearing with Jquery
       } else {
        //document.getElementById('botao-submit').disabled = false;

        var sel_files  = document.getElementById('arquivo').files;
        var file = sel_files[0];
        //var len = sel_files.length;

        for (var i = 0; i < tiposArquivo.length; i++) {

            if (file.type === tiposArquivo[i]) {
                //console.log('Tipo Permitido!');
                i=tiposArquivo.length;
                document.getElementById('botao-submit').disabled = false;
            }

            else if(i===tiposArquivo.length-1){
                alert('Tipo de arquivo não permitido (JPG, PNG, JPEG ou PDF)');
                document.getElementById('botao-submit').disabled = true;
            }
        }
        
        
    }
}
/*
function testefonte(e){
    var elemento = document.getElementsByTagName("p");
    var i;
    var fonte;
    
    for (i=0; i<elemento.lenght; i++){
        
        fonte = parseInt(elemento[i].css('font-size'));
        
        if(e=='a'){
            fonte++;
        }
        else{
            fonte--;
    }
    elemento[i].css("fontSize", fonte);
    elemento[i].style.fontSize = fonte;
}
}
*/
/*Limite de caracteres na mensagem*/
function limite_textarea(valor) {
    quant = 500;
    total = valor.length;
    if(total <= quant) {
        resto = quant - total;
        document.getElementById('cont').innerHTML = resto;
    } else {
        document.getElementById('texto').value = valor.substr(0,quant);
    }
}

//Alto Contraste

(function () {
    var Contrast = {
        storage: 'contrastState',
        cssClass: 'contrast',
        currentState: null,
        check: checkContrast,
        getState: getContrastState,
        setState: setContrastState,
        toogle: toogleContrast,
        updateView: updateViewContrast
    };

    window.toggleContrast = function () { Contrast.toogle(); };

    Contrast.check();

    function checkContrast() {
        this.updateView();
    }

    function getContrastState() {
        return localStorage.getItem(this.storage) === 'true';
    }

    function setContrastState(state) {
        localStorage.setItem(this.storage, '' + state);
        this.currentState = state;
        this.updateView();
    }

    function updateViewContrast() {
        var body = document.body;

        if (this.currentState === null)
            this.currentState = this.getState();

        if (this.currentState)
            body.classList.add(this.cssClass);
        else
            body.classList.remove(this.cssClass);
    }

    function toogleContrast() {
        this.setState(!this.currentState);
    }
})();