var url = window.location.origin;
var datatable;
var lengthMenu,zeroRecords, info, infoEmpty, infoFiltered, next, previous,search;
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
            "lengthMenu": lengthMenu,
            "zeroRecords": zeroRecords,
            "info": info,
            "infoEmpty": infoEmpty,
            "infoFiltered": infoFiltered,
            "paginate":{
                    "next":next,
                    "previous":previous
            },
            "search":search

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

$('a.btn-add').on('click',function(){
    var action = $(this).data('action');

    $.ajax({
        method:'GET',
        url:action,
        headers:{
            'Content-Type': 'application/*',
            'Accept': 'application/*',
        },
        success: function(data){
            $('#modalInfo').show;
            $('#modalInfo').find('.modal-dialog').addClass('modal-md').find('.modal-content').html(data);
        }
    });
});

$('td a.btn-edit').on('click',function(){

    var action = $(this).closest('tr').data('action');
    var modalSize = action.includes('interation') ? 'modal-xl' : 'modal-md';
    $.ajax({
        method:'GET',
        url:action,
        headers:{
            'Content-Type': 'application/*',
            'Accept': 'application/*',
        },
        success: function(data){
            $('#modalInfo').modal('toggle').find('.modal-dialog').addClass(modalSize).find('.modal-content').html(data);
        }
    });
});

function toast(messages){
    $.each(messages, function(type,message){
        $(document).Toasts('create', {
            title: message['title'],
            class: type,
            autohide: true,
            delay: 1500,
            body: message['text']
        });
    });
}
