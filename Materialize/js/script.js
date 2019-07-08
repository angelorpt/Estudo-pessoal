json_tags = [
    {tag: 'HTML', image: 'img/programador.jpg'},
    {tag: 'CSS', image: 'img/figura1.jpg'},
    {tag: 'PHP'},
    {tag: 'Materialize'}
]

json_autocomplete = {
    data: {
        'JavaScript': null,
        'jQuery': null,
        'Java': null
    },
    limit: Infinity,
    minLength: 1
}

$(document).ready(function () {
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();


    $('.chips').chips({
        data: json_tags,
        placeholder: 'Disciplinas',
        secondaryPlaceholder: '+Disciplina',
        autocompleteOptions: json_autocomplete
    });

    // Pegandos os dados dos Chips
    $("#btn_salvar").on("click", function(){
        var dados = $('.chips')[0].M_Chips.chipsData;
        alert('Veja o console log');
        console.log(dados);
    });

});