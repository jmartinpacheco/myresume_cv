var _json_data;

function toggle_theme() {
    var storedTheme = localStorage.getItem('theme') || (window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light");
    if (storedTheme)
        document.documentElement.setAttribute('data-theme', storedTheme)

    $("#theme-toggle").click(function() {            
        var currentTheme = document.documentElement.getAttribute("data-theme");
        var targetTheme = "light";

        if (currentTheme === "light") {
            targetTheme = "dark";
        }

        document.documentElement.setAttribute('data-theme', targetTheme)
        localStorage.setItem('theme', targetTheme);
    });
}

function toggle_language() {
    var storedLang = localStorage.getItem('lang') || "es";
    if (storedLang)
        document.documentElement.setAttribute('data-lang', storedLang)

    $("#language-toggle").click(function() {           
        var currentLang = document.documentElement.getAttribute("data-lang");
        var targetLang = "es";
        $('#language-es').removeClass('d-none');
        $('#language-en').addClass('d-none');

        if (currentLang === "es") {
            targetLang = "en";
            $('#language-en').removeClass('d-none');
            $('#language-es').addClass('d-none');
        }

        on_reset_lang(targetLang);
        document.documentElement.setAttribute('data-lang', targetLang)
        localStorage.setItem('lang', targetLang);
    });
}

function initial_profile(){
    _json_data = JSON.parse(profile.replace(/&quot;/g,'"'));
    console.info(_json_data);

	$(".tab-jmp").click(function() {
		$('.tab-jmp').removeClass('activeTab');
		$(this).addClass('activeTab');

		var section = $(this).attr('data-section');
		$('.module').addClass('d-none');
		$("." + String(section)).parent().removeClass('d-none');
	});
}

function on_reset_lang(targetLang){
    //description
    $('.bio').text(_json_data[targetLang].description);

    //tabs
    $(".tab-jmp").each(function() {
        var tab = $(this);
        if(tab.is('#detail'))
            tab.text(targetLang == "es" ? "Detalle" : "Detail");

        if(tab.is('#project'))
            tab.text(targetLang == "es" ? "Proyectos" : "Projects");
    });

    //info
    $('.jobs').find('.featuredContentBlock').addClass('d-none');
    $('.jobs').find('.ftDescription').addClass('d-none');
    $('.jobs').find("." + String(targetLang)).removeClass('d-none');

    $('.overview').find('.featuredContentBlock').addClass('d-none');
    $('.overview').find('.ftDescription').addClass('d-none');
    $('.overview').find("." + String(targetLang)).removeClass('d-none');
}