<footer class="footer inverse-wrapper">
    <div class="container inner">
        <div class="row">
            <div class="col-sm-3">
                <div class="widget"> <img src="#"
                        srcset="{{ asset('assets/frontend/images/logo-light.png') }} 1x, {{ asset('assets/frontend/images/logo-light@2x.png') }} 2x"
                        alt="" width="220" height="50" />
                    <div class="divide20"></div>
                    <p>The business network designed to support businesses who are either based in or work in Havering
                        grow, network, learn and connect.</p>
                    <p>© 2021 Havering Means Business. All rights reserved.</a>.</p>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->

            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Popular Blogs</h4>
                    <ul class="blog-list">
                        <li>
                            <div class="meta"><span class="date">02 Dec 2020</span> </div>
                            <p> <a href="course.html">Etiam porta sem malesuada magna mollis euismod ullamcorper
                                    nulla</a> </p>
                        </li>
                        <li>
                            <div class="meta"><span class="date">02 Dec 2020</span> </div>
                            <p> <a href="course.html">Ornare nullam risus non metus auctor fringilla fermentum justo</a>
                            </p>
                        </li>
                    </ul>
                    <!-- /.course-list -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->

            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Get in Touch</h4>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam.</p>
                    <ul class="info">
                        <li><i class="ion-ios-location"></i>
                            <p>Rainham Library, Celtic Farm Rd,<br>
                                Rainham, RM13 9GP<br>
                            </p>
                        </li>
                        <li><i class="ion-android-mail"></i>
                            <p><a href="#" class="email-link">Hello@haveringmeansbusiness.co.uk</a></p>
                        </li>
                        <li><i class="ion-headphone"></i>
                            <p>01708 606 202</p>
                        </li>
                    </ul>
                    <!-- /.info -->

                </div>
                <!-- /.widget -->

            </div>
            <!-- /column -->

            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">About Us</h4>
                    <ul class="list-unstyled">
                        <li> <a href="#">Contact Us</a> </li>
                        <li> <a href="#">Terms of Use</a> </li>
                        <li> <a href="#">Privacy Policy</a> </li>
                    </ul>
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title">Elsewhere</h4>
                    <ul class="social">
                        <li> <a href="#"><i class="ion-social-rss"></i></a> </li>
                        <li> <a href="#"><i class="ion-social-facebook"></i></a> </li>
                        <li> <a href="#"><i class="ion-social-twitter"></i></a> </li>
                    </ul>
                </div>
                <!-- /.widget -->

            </div>
            <!-- /column -->

        </div>
        <!-- /.row -->

    </div>
    <!-- .container -->


</footer>
<!-- /footer -->
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.min.js/') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('assets/frontend/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
<script type="text/javascript"
    src="{{ asset('assets/frontend/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>
<script type="text/javascript"
    src="{{ asset('assets/frontend/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('assets/frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('assets/frontend/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('assets/frontend/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('assets/frontend/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/dropzone.js') }}"></script>
<script src="https://cdn.plyr.io/3.6.3/plyr.polyfilled.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    $(function() {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });

</script>

<script>
    $(document).ready(function() {

        var course_type = $("select.type").children("option:selected").val();
        if (course_type == "premium") {
            $(".price").html("<div class='col-md-6 price'>" +
                "<div class='form-group'>" +
                "<label>Price</label>" +
                "<input class='form-control price-field' type='number' name='price' value='{{ old('price') }}'>" +
                "</div>" +
                @error('price')
                    "<div class='alert alert-danger validate-error'>{{ $message }}</div>" +
                @enderror "</div>");

        }

        $("select.type").change(function() {
            var selectedCountry = $(this).children("option:selected").val();
            if (selectedCountry == "premium") {
                $.ajax({
                    type: "POST",
                    url: "{{ route('checkstatus') }}",
                    data: {
                        '_token': "{{ csrf_token() }}",
                        id: {{Auth::check() ? Auth::user()->id : 'null'}}
                    },
                    success: function(data) {
                        if (data.status == false) {
                            alert(data.message)

                        }
                        if (data.status == true) {
                            $(".price").html("<div class='col-md-6 price'>" +
                                "<div class='form-group'>" +
                                "<label>Price</label>" +
                                "<input class='form-control price-field' type='number' name='price' value='{{ old('price') }}'>" +
                                "</div>" +
                                @error('price')
                                    "<div class='alert alert-danger validate-error'>{{ $message }}</div>" +
                                @enderror "</div>");
                        }
                    }
                }); // submitting the form when user press yes

            } else {
                $(".price").html('');
            }

        });

        //summer note
        $('#summernote').summernote({
            height: 300
        });
        var i = 0;
        $("#addmorelesson").click(function(){
            ++i;
            $(".more_lesson_div").append(

                "<div class='col-md-12'>"+
                    "<div class='form-group'>"+
                        "<label>Lesson Title</label>"+
                       " <input type='text'  required class='form-control' name='addmore["+i+"][lesson_title]' value='{{ old('lession_title') }}'>"+

                   " </div>"+
                "</div>"+
                "<div class='col-md-12'>"+
                    "<div class='form-group'>"+
                        "<label>Lesson Video</label>"+
                        "<input type='file'  required name='addmore["+i+"][lesson]' class='form-control'>"+
                    "</div>"+
                "</div>"

            );
        });

        var video_player = document.getElementById("video_player"),
links = video_player.getElementsByTagName('a');
for (var i=0; i<links.length; i++) {
	links[i].onclick = handler;
}
function handler(e) {
	e.preventDefault();
	videotarget = this.getAttribute("href");
	filename = videotarget.substr(0, videotarget.lastIndexOf('.')) || videotarget;
	video = document.querySelector("#video_player video");
	source = document.querySelectorAll("#video_player video source");
	source[0].src = filename + ".mp4";
	video.load();
	video.play();
}



    });

</script>
<script>
  const player = new Plyr('#player');
</script>

</body>

</html>
