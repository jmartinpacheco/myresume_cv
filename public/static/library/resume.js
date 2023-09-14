function toggle_theme() {
	var toggle = document.getElementById("theme-toggle");

    var storedTheme = localStorage.getItem('theme') || (window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light");
    if (storedTheme)
        document.documentElement.setAttribute('data-theme', storedTheme)

    toggle.onclick = function() {            
        var currentTheme = document.documentElement.getAttribute("data-theme");
        var targetTheme = "light";

        if (currentTheme === "light") {
            targetTheme = "dark";
        }

        document.documentElement.setAttribute('data-theme', targetTheme)
        localStorage.setItem('theme', targetTheme);
    };
}

function initial_profile(){
	$(".tab-jmp").click(function() {
		$('.tab-jmp').removeClass('activeTab');
		$(this).addClass('activeTab');

		var section = $(this).attr('data-section');
		$('.module').addClass('d-none');
		$("." + String(section)).parent().removeClass('d-none');
	});
}