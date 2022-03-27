
$(function () {
    // numbering();
});
function numbering() {
    $("#input_pluralBox").find('.input_plural').each(function (index) {
        $(this).find('.form-control').each(function () {
                var replaceText = $(this).attr('name').replace(/\[\d+\]/, '[' + index + ']');
                $(this).attr('name', replaceText)
            })
        })
}
$(document).on("click", ".add", function () {
    $(this).parent().clone(true).insertAfter($(this).parent());
    // numbering();
});
$(document).on("click", ".del", function () {
    var target = $(this).parent();
    if (target.parent().children().length > 1) {
        target.remove();
        // numbering();
    }
});