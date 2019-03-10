$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.collapse.in').toggleClass('in');
        var node = document.createElement("div");                 
        node.className += 'modal-backdrop fade show';
        node.setAttribute("id", "backdrop-overlay");
        document.body.appendChild(node);
    });

    $(document).on('click', '#backdrop-overlay, #dismiss',  function () {
        $('#sidebar').removeClass('active');
        document.getElementById("backdrop-overlay").remove();
    });
});