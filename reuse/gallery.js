var dir = "../assets/screenshots/";
var fileextension = ".png";
$.ajax({
    url: dir,
    success: function (data) {
        //Lsit all png file names in the page
        $(data).find("a:contains(" + fileextension + ")").each(function () {
            var filename = this.href.replace(window.location.host, "").replace("http:///", "");
            document.write('\
            	<div class="col-md-4" style="padding-top: 30px;">\
					<a href="' + dir + filename'">\
						<img src="' + dir + filename'" style="height:250px;width:auto" class="center">\
					</a>\
				</div>\
			');
        });
    }
});