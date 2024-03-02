<script>

    $(document).ready(function() {
        var maxChars = 350;
        var charCount = $('#charCount');

        $('#excerpts').on('input', function() {
            var currentChars = $(this).val().length;
            var remainingChars = maxChars - currentChars;

            charCount.text(remainingChars);

            if (remainingChars < 0) {
                charCount.addClass('limit-reached');
                // Truncate the text to the maximum allowed characters
                $(this).val($(this).val().substring(0, maxChars));
            } else {
                charCount.removeClass('limit-reached');
            }
        });
    });
</script>
