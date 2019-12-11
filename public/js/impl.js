addSeccao = false;
sMCount = 0;

function createSeccaoInput() {
    if (!addSeccao) {
        document.getElementById('navbar-nav').innerHTML += "<form id='nomeSeccaoForm' action='../control/SeccaoController.php?op=cad' method='post' name='formcad'>" +
            "<input name='nomeSeccao' id='nomeSeccao' class='form-control rounded-0'" +
            "type='text' value='' required title='Aperte Enter para confirmar' autofocus/>" +
            "</form>";
        addSeccao = true;
        var nomeSeccao = document.getElementById("nomeSeccao");
        nomeSeccao.addEventListener("keyup", function (event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                removeSeccaoInput()
            }
        });
    } else {
        alert("Já há um campo em aberto!")
    }

}

function removeSeccaoInput() {

    if (addSeccao) {
        document.getElementById('nomeSeccaoForm').remove();
        addSeccao = false;
    }
}

function addSocialMedia() {
     
    placeholderURL= "https://www.socialexmplo.com/social.exemplo";
    sMCount++;
    socialURL = "socialURL" + sMCount;

    document.getElementById('descricaoForm').insertAdjacentHTML("afterend", 
        '<div id="' + socialURL + '" class="input-group rounded-0 mb-3">' +
            '<input type="text" class="form-control rounded-0" id="inputSocialURL'+sMCount+'" name="redes[]" placeholder="'+placeholderURL+'" title="Social Midia URL" autofocus required>' +
            '<div class="input-group-append rounded-0">'+
                '<button class="btn btn-secondary rounded-0" type="button" title="Remover Social Midia" onclick="removeSocialInput(\'' + socialURL + '\')" >'+
                    '<i class="fas fa-times fa-1x rounded-0"></i>' +
                '</button>'+
            '</div>'+
        '</div>');

}

function removeSocialInput(idSocial) {

    if (sMCount > 0) {
        document.getElementById(idSocial).remove();
    }
}

function removeSocialInputEd(idSocial) {
    console.log(idSocial);
    document.getElementById(idSocial).remove();
}

$('#document').ready(function(){
    $('#editPerfilModal').on('hidden.bs.modal', function () {
        location.reload();
    });
});