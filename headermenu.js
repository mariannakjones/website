$(document).ready(function() {
    $(`.circle`).click(toggleMenu);

    function toggleMenu(event)
    {
        $(this).toggleClass(`change`);
        if ($(`.overlay`).css(`width`) == `0px`) 
        {
            $(`.overlay`).css(`width`, `100%`);
        }
        else
        {
            $(`.overlay`).css(`width`, `0`);
        }
    }
});