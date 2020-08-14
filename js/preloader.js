function preloader(){
	$(() => {

		setInterval(() => {

 let p = $(".preloader");

      p.css("opacity", 0);

       setInterval(
       
       () => p.remove(),
       parseInt(p.css("5")) * 1000
        );

		},2000);
   
	});
}
preloader();
