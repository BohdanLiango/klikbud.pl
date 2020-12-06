{{--<!-- JAVASCRIPT  FILES ========================================= -->--}}
<script type="text/javascript" src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
{{--<!-- JQUERY.MIN JS -->--}}
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
{{--<!-- BOOTSTRAP.MIN JS -->--}}
<script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
{{--<!-- FORM JS -->--}}
<script type="text/javascript" src="{{ asset('js/jquery.bootstrap-touchspin.min.js') }}"></script>
{{--<!-- FORM JS -->--}}
<script type="text/javascript" src="{{ asset('js/magnific-popup.min.js') }}"></script>
{{--<!-- MAGNIFIC-POPUP JS -->--}}
<script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
{{--<!-- WAYPOINTS JS -->--}}
<script type="text/javascript" src="{{ asset('js/counterup.min.js') }}"></script>
{{--<!-- COUNTERUP JS -->--}}
<script type="text/javascript" src="{{ asset('js/waypoints-sticky.min.js') }}"></script>
{{--<!-- COUNTERUP JS -->--}}
<script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
{{--<!-- MASONRY  -->--}}
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
{{--<!-- OWL  SLIDER  -->--}}
<script type="text/javascript" src="{{ asset('js/stellar.min.js') }}"></script>
{{--<!-- PARALLAX BG IMAGE   -->--}}
<script type="text/javascript" src="{{ asset('js/scrolla.min.js') }}"></script>
{{--<!-- ON SCROLL CONTENT ANIMTE   -->--}}
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
{{--<!-- CUSTOM FUCTIONS  -->--}}
<script type="text/javascript" src="{{ asset('js/shortcode.js') }}"></script>
{{--<!-- SHORTCODE FUCTIONS  -->--}}
{{--<!-- REVOLUTION JS FILES -->--}}
<script type="text/javascript" src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
{{--<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->--}}
<script type="text/javascript" src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
{{--<!-- REVOLUTION SLIDER SCRIPT FILES -->--}}
{{--    <script type="text/javascript" src="{{ asset('assets/js/rev-script-1.js') }}"></script>--}}
<script>
    var tpj = jQuery;

    var revapi1077;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_1077_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1077_1");
        } else {
            revapi1077 = tpj("#rev_slider_1077_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "{{ asset('plugins/revolution/revolution/js/') }}",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: true,
                        //hide_under:960,
                        style: "zeus",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "right",
                        v_align: "bottom",
                        h_offset: 80,
                        v_offset: 50,
                        space: 5,
                        tmp: ''
                    }
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [868, 768, 960, 720],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55],
                    type: "mouse",
                    disable_onmobile: "on"
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0px",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
            var newCall = new Object(),
                cslide;

            newCall.callback = function() {
                var proc = revapi1077.revgetparallaxproc(),
                    fade = 1 + proc,
                    scale = 1 + (Math.abs(proc) / 10);

                punchgs.TweenLite.set(revapi1077.find('.slotholder, .rs-background-video-layer'), {
                    opacity: fade,
                    scale: scale
                });
            }
            newCall.inmodule = "parallax";
            newCall.atposition = "start";

            revapi1077.bind("revolution.slide.onloaded", function(e) {
                revapi1077.revaddcallback(newCall);
            });
        }
    });
    <!-- REVOLUTION SLIDER FUNCTION FOR HOME PAGE STYLE 1 END  ===== -->
</script>
