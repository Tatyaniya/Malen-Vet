$( function() {

    // Scroll

    $(".nav__link").click( function(e) {
        e.preventDefault();
        console.log(e.currentTarget);
		elementClick = $(e.currentTarget).attr("href");
		destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination}, 800);
    });

    $(".up").click( function(e) {
        e.preventDefault();
		elementClick = $(e.currentTarget).attr("href");
		destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 800);
    });

    $(".for-arrow__link").click( function(e) {
        e.preventDefault();
		elementClick = $(e.currentTarget).attr("href");
		destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 800);
    });

    // humburger

    $('.humburger').click(function(){
        $( ".menu__vizible" ).animate({
            display: "flex",
            height: "toggle"
          }, 500, function() {
          });
    });

    $('.about__link').click(function(){
        $( ".about__more" ).animate({
            display: "block",
            height: "toggle"
        }, 300, function() {
        });
        setTimeout(function () {
            $( ".about__link" ).toggleClass('about__link--sv');
        }, 250);
    });

    new InstagramFeed({
        'username': 'malenvet_clinik',
        'container': document.getElementById("instagram-gallery-box"),
        'display_profile': false,
        'display_biography': true,
        'display_gallery': true,
        'styling': false,
        'items': 12,
        'margin': 0
    });

});