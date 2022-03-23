$(document).ready(function () {
    var btn_top = $('#btn_top')

    $(window).scroll(function () {
        check_scrolltop()
    })

    btn_top.click(function () {
        backtop()
    })

    function check_scrolltop() {
        if ($(document.body).scrollTop() > 20 || $(document.documentElement).scrollTop() > 20) {
            btn_top.css('display', 'block')
        } else {
            btn_top.css('display', 'none')
        }
    }

    function backtop() {
        $(document.body).scrollTop(0)
        $(document.documentElement).scrollTop(0)
    }
})