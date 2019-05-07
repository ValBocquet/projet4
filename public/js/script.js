function sendMessage(message, state) {
        console.log('test');
        $('body').append('<div class="'+state+' messageRetour"> '+message+' </div>');
            $('.messageRetour').remove().delay(500);
};