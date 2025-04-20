
	</div><!-- end outercontainer -->
</div><!-- end bodychild -->

        
        <!-- FOOTER -->
        <div id="outerfooter">
            <div class="container">
                <div id="footercontainer" class="twelve columns">
                    <footer id="footer"><a href='index.php'>marinaone-launch.com</a>
                </footer>
                </div>
            </div>
        </div>
        <!-- END FOOTER -->

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-easing-1.3.js"></script>

<!-- jQuery Superfish -->
<script type="text/javascript" src="js/hoverIntent.js"></script> 
<script type="text/javascript" src="js/superfish.js"></script> 
<script type="text/javascript" src="js/supersubs.js"></script>

<!-- jQuery NivoSlider -->
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<!-- Property Slider -->
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>

<script type="text/javascript">
jQuery(window).load(function() {
    jQuery('#propertyimage').flexslider({
	  animation: "slide",
	  directionNav: false,
	  controlNav: "thumbnails"
	});
});

jQuery('#sliderNivo').nivoSlider({
	effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
	animSpeed: 1000, // Slide transition speed
	pauseTime: 6000, // How long each slide will show
	controlNav: true, // 1,2,3... navigation
	directionNav: false, // Next & Prev navigation
	afterLoad: function(){
		jQuery(".nivo-caption").animate({right:"0"}, {easing:"easeOutQuad", duration: 500})
		},
		beforeChange: function(){
		jQuery(".nivo-caption").animate({right:"-300"}, {easing:"easeInQuad", duration: 500})
		},
		afterChange: function(){
		jQuery(".nivo-caption").animate({right:"0"}, {easing:"easeOutQuad", duration: 500})
		}

});
</script>


<!-- jQuery Dropdown Mobile -->
<script type="text/javascript" src="js/tinynav.min.js"></script>

<!-- Custom Script -->
<script type="text/javascript" src="js/custom.js"></script>

<!-- Form Contact Script -->
<script type="text/javascript" src="js/contact.js"></script>

</body>
</html>
