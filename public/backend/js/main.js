$(document).ready(function () {
    // tích hợp ckeditor vào textarea
    // CKEDITOR.replace('category-description');
    CKEDITOR.replace( 'category-description', {
        filebrowserBrowseUrl: 'assets/ckfinder/ckfinder.html',
        filebrowserUploadUrl: 'assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    } );
});
$(document).ready(function () {

    $('.menu').niceScroll({
        cursorcolor: '#999999', // Changing the scrollbar color
        cursorwidth: 4, // Changing the scrollbar width
        cursorborder: 'none', // Rempving the scrollbar border
    });

    // when opening the sidebar
    $('.nav-icon').on('click', function () {
        // open sidebar
        $('.menu').toggleClass('open');
    });

    // if dismiss or overlay was clicked
    $('#dismiss').on('click', function () {
        $('#sidenav').removeClass('open');
    });
});
// var main = document.querySelector(".main");
// var sidebar = document.querySelector(".sidebar");
// var menutoggle = document.querySelector("#menu-toggle");
// menutoggle.addEventListener("click", function(e) {
//     menutoggle.classList.toggle("active");
//     main.classList.toggle("active");
//     sidebar.classList.toggle("active");
//
//     if (sidebar.classList.contains("active")) {
//         menutoggle.querySelector("i").classList.remove("fa-bars");
//     } else {
//         menutoggle.querySelector("i").classList.add("fa-bars");
//     }
// });
