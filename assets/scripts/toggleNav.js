$(document).ready(function()
{
    $("#toggle-mobile-nav").click(function()
    {
        console.log($(this).html())
        $("#lateral-nav").attr("class", "lateral_nav_active");
    });
});