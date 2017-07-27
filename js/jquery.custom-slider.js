(function ($) {
    $.fn.customslider = function (options) {

        var sett = {
            width: 465,
            speed: 500,
            delay: 3000,
            current: 1
        };

        return this.each(function () {

            if (options) {
                $.extend(sett, options);
            }
            var obj = $(this);
            var slcount = obj.find("li").length;

            var cont = $('<div class="custom-slider"></div>');
            cont.css("width", sett.width);
            obj.wrap(cont);
            obj.addClass("custom-slider-slides");
            var container = obj.parent();

            var cntrl = $('<div class="custom-slider-controls"></div>').appendTo(container);

            var prev_next = $('<ul class="custom-slider-prev-next"><li class="custom-slider-prev"><a href="#">Prev</a></li><li class="custom-slider-next"><a href="#">Next</a></li></ul>');
            prev_next.appendTo(cntrl);

            var pagn = $('<ul class="custom-slider-paging"></ul>').appendTo(cntrl);

            for (var i = 1; i <= slcount; i++) {
                var pli = $('<li><a href="#">' + i + '</a></li>').appendTo(cntrl.find('.custom-slider-paging'));
                pli.attr("slide", i);
            }

            container.find(".custom-slider-slides img").wrap('<div class="custom-slider-single"></div>');


            container.find('.custom-slider-single').each(function () {
                var ob = $(this);
                var img = ob.find("img");
                $('<div class="custom-slider-details">' + img.attr('alt') + '</div>').appendTo(ob);
                img.attr("alt", "");
            });

            container.find('.custom-slider-single:first').addClass("active").css("opacity",1);
            pagn.find('li:first').addClass("active");



            var ll = 1;
            container.find(".custom-slider-paging a").each(function () {
                var li = $(this);
                li.click(function () {
                    sett.current = li.parent().attr('slide');
                    changeSlide();
                });

                ll++;
            });


            container.find(".custom-slider-next a").click(function () {
                var c = sett.current + 1;
                if (c > slcount) {
                    c = 1;
                }
                sett.current = c;
                changeSlide();
                return false;
            });


            container.find(".custom-slider-prev a").click(function () {
                var c = sett.current - 1;
                if (c < 1) {
                    c = 1;
                }
                sett.current = c;
                changeSlide();
                return false;
            });



            setInterval(function () {
                var c = sett.current + 1;
                if (c > slcount) {
                    c = 1;
                }
                sett.current = c;
                changeSlide();
            }, sett.delay);


            function changeSlide() {
                slind = 1;
                slindd = 1;
                container.find('.custom-slider-single.active').animate({ "opacity": 0 }, sett.speed / 2, "linear", function () {
                    container.find('.custom-slider-single.active').removeClass("active");
                    container.find('.custom-slider-single').each(function () {
                        var cob = $(this);
                        if (sett.current == slind) {
                            cob.addClass('active').animate({ "opacity": 1 }, sett.speed / 2, "linear", function () {
                                
                                container.find('.custom-slider-paging li.active').removeClass("active");

                                container.find('.custom-slider-paging li').each(function () {
                                    var cobb = $(this);
                                    if (sett.current == slindd) {
                                        cobb.addClass('active');
                                    }
                                    slindd++;
                                });

                            });

                        }
                        slind++;
                    });
                });



            }




        });
    };
})(jQuery);