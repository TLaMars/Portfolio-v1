$(document).ready(function () {
    //Every javascript for DarkMode
    var darkmode = document.cookie;
    if(darkmode == 'darkmode=true')
    {
        goDark();
        $('#goDark').css("display", "none");
        $('img#open').css("filter", "invert(83%)");
    } 
    else {
        $('#goLight').css("display", "none");
    }

    $('#goDark').click(function () {
        document.cookie = "darkmode=true";
        $('img#open').css("filter", "invert(83%)");
        $('#goDark').css("display", "none");
        $('#goLight').css("display", "block");
        goDark();

        //Homepage comp
        $('#svgCompHome').load('images/comphonedark.svg');
        //Errorpage comp errorComphone
        $('#errorComphone').load('images/404comphonedark.svg');
    });

    $('#goLight').click(function () {
        document.cookie = "darkmode=null";
        $('img#open').css("filter", "invert(0%)");
        $('#goLight').css("display", "none");
        $('#goDark').css("display", "block");
        goLight();

        //Homepage comp
        $('#svgCompHome').load('images/comphonewhite.svg');
        //Errorpage comp
        $('#errorComphone').load('images/404comphone.svg');
    });

    var tl = new TimelineMax();
    tl.staggerFrom('#Home_CompPhone > g #Rectangle', 0.3, { scaleX: 0 }, -0.2)
        .from('#Home_CompPhone > g #loading', 0.5, { scaleY: 0, transformOrigin: "left", ease: Power2.easeOut })
        .from('#Home_CompPhone > g #phone', 0.5, { scaleY: 0, transformOrigin: "top", ease: Power2.easeOut })
        .staggerFrom('#Home_CompPhone > g #Rectangle2', 0.3, { scaleX: 0 }, -0.5)

    $("img#open").click(function () {
        $("ul#nav").addClass("active");
    });
    $("img#close").click(function () {
        $("ul#nav").removeClass("active");
    });
});

    function goDark() {
        document.documentElement.style.setProperty('--primary',         'rgb(33, 90, 247)');
        document.documentElement.style.setProperty('--secondary',       'rgb(33, 66, 252)');
        document.documentElement.style.setProperty('--third',           'rgb(0, 167, 255)');
        document.documentElement.style.setProperty('--errorPrimary',    '#FF3636');
        document.documentElement.style.setProperty('--errorSecondary',  '#FF6C00');
        document.documentElement.style.setProperty('--errorThird',      '#FFB100');
        document.documentElement.style.setProperty('--white',           '#2C2C2C');
        document.documentElement.style.setProperty('--darkgray',        '#fff');
        document.documentElement.style.setProperty('--lightgray',       '#4D4D4D');
    }

    function goLight() {
        document.documentElement.style.setProperty('--primary',         'rgb(0, 167, 255)');
        document.documentElement.style.setProperty('--secondary',       'rgb(54, 85, 255)');
        document.documentElement.style.setProperty('--third',           'rgb(166, 255, 203)');
        document.documentElement.style.setProperty('--errorPrimary',    '#FF3636');
        document.documentElement.style.setProperty('--errorSecondary',  '#FF6C00');
        document.documentElement.style.setProperty('--errorThird',      '#FFB100');
        document.documentElement.style.setProperty('--white',           '#fff');
        document.documentElement.style.setProperty('--darkgray',        '#2C2C2C');
        document.documentElement.style.setProperty('--lightgray',       '#4D4D4D');
}

