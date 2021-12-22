$(document).ready(function(){
    $('.editUser').on('click', function(){
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        console.log(data);

        $('#name').val(data[1]);
        $('#desc').val(data[3]);
        $('#qty').val(data[4]);
        $('#price').val(data[5]);

    });

});