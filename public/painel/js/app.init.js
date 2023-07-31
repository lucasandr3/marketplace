$(function () {
    "use strict";

    fetch('/hub/tema')
        .then(res => res.json())
        .then(res => {
            $("#main-wrapper").AdminSettings({
                Theme: res.theme, // this can be true or false ( true means dark and false means light ),
                Layout: 'vertical',
                LogoBg: res.bg_logo, // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                NavbarBg: res.bg_header, // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                SidebarType: 'full', // You can change it full / mini-sidebar / iconbar / overlay
                SidebarColor: res.bg_sidebar, // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                SidebarPosition: true, // it can be true / false ( true means Fixed and false means absolute )
                HeaderPosition: true, // it can be true / false ( true means Fixed and false means absolute )
                BoxedLayout: false, // it can be true / false ( true means Boxed and false means Fluid )
            });
        });
});


function showDescription(description) {
    $('.body-desc').html(description);
    $('#centermodaldesc').show().modal();
}
