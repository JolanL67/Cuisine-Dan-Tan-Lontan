$(document).ready(function (){
    $(".deleteButton").click(function(event){

        event.preventDefault();

        let trElement = event.target.closest('tr');

        let itemName = trElement.querySelector('.itemName').textContent;

        $('.modal-body').text('Etes-vous sûr de vouloir supprimer le plat : ' + itemName + " ?");

        $("#deleteModal").modal();

        $("#confirmDelete").click(function(){

            let formElement = event.target.closest('form');

            formElement.submit();

            $("#myModal").modal('hide');
        });
    });
});
