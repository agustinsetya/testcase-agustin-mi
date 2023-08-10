$(document).ready(function() {
    $('#transform-form').submit(function(e) {
        e.preventDefault();

        var transforms = $('#transforms').val();
        var text = $('#text').val();

        $.ajax({
            type: 'POST',
            url: 'Transform/transformText',
            data: {
                transforms: transforms,
                text: text
            },
            success: function(result) {
                $('#transformed-text').text(result.transformed_text);
            }
        });
    });
});