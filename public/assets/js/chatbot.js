$(document).ready(function() {
    $('.chat_icon').click(function(event) {
        $('.chat_box').toggleClass('active');
        recognition.stop();
    });
});

$(document).ready(function() {
    $("#send-btn").on("click", function() {
        $value = $("#data").val();
        $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
        $(".form").append($msg);
        $("#data").val('');

        // start ajax code
        $.ajax({
            url: 'message.php',
            type: 'POST',
            data: 'text=' + $value,
            success: function(result) {
                $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-robot"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                $(".form").append($replay);

                $(".form").scrollTop($(".form")[0].scrollHeight);
            }
        });
    });
});

// start function
$("#data").keypress(function(event) {
    if (event.keyCode == 13 || event.which == 13) {
        event.preventDefault();
        $value = $("#data").val();
        $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
        $(".form").append($msg);
        $("#data").val('');

        // start ajax code
        $.ajax({
            url: 'message.php',
            type: 'POST',
            data: 'text=' + $value,
            success: function(result) {
                $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-robot"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                $(".form").append($replay);

                $(".form").scrollTop($(".form")[0].scrollHeight);
            }
        });
    }

});


var SpeechRecognition = window.webkitSpeechRecognition;

var recognition = new SpeechRecognition();

var Textbox = $('#data');
var instructions = $('instructions');

var Content = '';

recognition.continuous = true;

recognition.onresult = function(event) {

    var current = event.resultIndex;

    var transcript = event.results[current][0].transcript;

    Content += transcript;
    Textbox.val(Content);

};

recognition.onstart = function() {
    instructions.text('Voice recognition is ON.');
}

recognition.onspeechend = function() {
    instructions.text('No activity.');
}

recognition.onerror = function(event) {
    if (event.error == 'no-speech') {
        instructions.text('Try again.');
    }
}

$('#start-btn').on('click', function(e) {
    if (Content.length) {
        Content += ' ';
    }
    recognition.start();
});

$("#send-btn").on("click", function() {
    Content = '';
});

$("#data").keypress(function(event) {
    if (event.keyCode == 13 || event.which == 13) {
        event.preventDefault();
        Content = '';
    }

});

Textbox.on('input', function() {
    Content = $(this).val();
})