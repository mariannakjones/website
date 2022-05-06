$(document).ready(function() {
    $(`.circle`).click(toggleMenu);

    function toggleMenu(event)
    {
        $(this).toggleClass(`change`);
        if ($(this).hasClass(`change`))
        {
            $(`.overlay`).css(`width`, `100%`);
        }
        else
        {
            $(`.overlay`).css(`width`, `0`);
        }
    }
});