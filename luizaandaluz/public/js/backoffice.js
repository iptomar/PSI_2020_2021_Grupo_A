var url = window.location.origin;
var datatable;
$(function(){

    $('a.brand-link').css('background-size', 'contain');
    $('a.brand-link').css('background-repeat', 'no-repeat');
    $('a.brand-link').css('background-position','center center');
    $('a.brand-link').css('background-image', 'url("'+url+'/imagem/LOGO-LACC.png'+'")');
    $('a.brand-link').css('height','57px');


    $('#modTable').DataTable( {
        responsive:true,
        order:[[0,'asc']],
        columnDefs:[{"targets":-1,"className":"text-center"}],
        language: {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    });

});

$('.main-sidebar').on('mouseover mouseout',function(event){

    if($('body').hasClass('sidebar-collapse')){
        if($('a.brand-link').parent().width() < 200){
            $('a.brand-link').css('background-image', 'url("'+url+'/imagem/LOGO-LACC.png")');
        }else{
            $('a.brand-link').css('background-image', 'url("'+url+'/imagem/FAVICON-LACC-GRIZ.png")');
        }
    }else{
        if($('a.brand-link').parent().width() > 200){
            $('a.brand-link').css('background-image', 'url("'+url+'/imagem/LOGO-LACC.png")');
        }else{
            $('a.brand-link').css('background-image', 'url("'+url+'/imagem/FAVICON-LACC-GRIZ.png")');
        }
    }

    //console.log($('a.brand-link').parent(),$('a.brand-link').parent().width());
});


function resizedSideBar(){

    if($('a.brand-link').parent().width() < 200){
        $('a.brand-link').css('background-image', 'url("'+url+'/imagem/LOGO-LACC.png")');
    }else{
        $('a.brand-link').css('background-image', 'url("'+url+'/imagem/FAVICON-LACC-GRIZ.png")');
    }
}

function submitForm(element){
    $(element).closest('form').submit();
}
