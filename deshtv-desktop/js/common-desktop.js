$(document).ready(function(){
		/* DARKTHEME */
            var src = $('.main-logo-img').attr("src");
            var srcicon = $('.darkmode-svg-icon').attr("src");
            $('.darkmode-svg-icon').click(function() {
                var logosrc1 = $('.main-logo-img').attr("src");
                var logosrc2 = "logo.svg";
                var logosrc3 = "dark-logo.svg";
                if (logosrc1.indexOf(logosrc2) != -1) {
                    $('.main-logo-img').attr("src", src.replace("logo.svg", "dark-logo.svg"));
                }
                if (logosrc1.indexOf(logosrc3) != -1) {
                    $('.main-logo-img').attr("src", src.replace("dark-logo.svg", "logo.svg"));
                }
                var logosrcicon1 = $('.darkmode-svg-icon').attr("src");
                var logosrcicon2 = "fa-moon.svg";
                var logosrcicon3 = "fa-sun.svg";
                if (logosrcicon1.indexOf(logosrcicon2) != -1) {
                    $('.darkmode-svg-icon').attr("src", srcicon.replace("fa-moon.svg", "fa-sun.svg"));
                }
                if (logosrcicon1.indexOf(logosrcicon3) != -1) {
                    $('.darkmode-svg-icon').attr("src", srcicon.replace("fa-sun.svg", "fa-moon.svg"));
                }
            });
            const btn = document.querySelector(".darkmode-svg-icon");
            const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
            const currentTheme = localStorage.getItem("theme");
            if (currentTheme == "dark") {
                document.body.classList.toggle("dark-theme");
                $('.main-logo-img').attr("src", src.replace("logo.svg", "dark-logo.svg"));
                $('.darkmode-svg-icon').attr("src", srcicon.replace("fa-moon.svg", "fa-sun.svg"));
            } else if (currentTheme == "light") {
                document.body.classList.toggle("light-theme");
            }
            btn.addEventListener("click", function() {
                if (prefersDarkScheme.matches) {
                    document.body.classList.toggle("light-theme");
                    var theme = document.body.classList.contains("light-theme") ?
                        "light" :
                        "dark";
                } else {
                    document.body.classList.toggle("dark-theme");
                    var theme = document.body.classList.contains("dark-theme") ?
                        "dark" :
                        "light";
                }
                localStorage.setItem("theme", theme);
            });
            /* //DARKTHEME */
		// $(".dark-mode-button").click(function(){
		// 	var src = $(this).attr('src');
		// 	var newsrc = (src=='images/svg/fa-moon.svg') ? 'images/svg/fa-sun.svg' : 'images/svg/fa-moon.svg';
		// 	$(this).attr('src', newsrc );
		// });
		$(".header-search-button").click(function(){
			$(".header-search-box").animate({
				width: "toggle"
			});
		});
	});