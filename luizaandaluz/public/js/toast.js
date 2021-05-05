var json_messages;

$.each(json_messages, function(type,message){
    $(document).Toasts('create', {
        title: message['title'],
        class: type,
        autohide: true,
        delay: 1500,
        body: message['text']
    });
})


