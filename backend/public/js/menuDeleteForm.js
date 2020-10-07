$(document).ready(function (){
    $(".deleteButton").click(function(event){
        event.preventDefault();

        $('.modal-body').text('Etes-vous sûr de vouloir supprimer le plat : ' + event.target.value + " ?");

        $("#deleteModal").modal();

        $("#confirmDelete").click(function(){
            event.target.parentElement.submit()

            $("#deleteModal").modal('hide');
        });
    });
});
