
alert("Hello! I am an alert box!!");
	$(this).toggleClass("be-dropdown-active");
	$(this).find(".drop-down-list").stop().slideToggle();
});
$(".drop-down-list li").on("click", function(){
	var new_value = $(this).find("a").text();
	$(this).parent().parent().find(".be-dropdown-content").text(new_value);
		return false;
});
