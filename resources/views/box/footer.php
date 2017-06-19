<div id="niloline" style="background: #561a31;width:100%;height: 2px"></div>
<footer class="page-footer" style="background: white;">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5>About</h5>
                <p class="black-text text-lighten-4">Lorem ipsum dolor sit amet, vel natum iriure iudicabit ut, usu
                    accusamus adolescens at, per cu etiam labitur
                    iudicabit. Quodsi albucius consequuntur et eum,
                    vim no dicant perfecto reformidans. Qui rebum suscipit nominati cu.
                    Vitae noluisse appellantur eos ei, tale denique complectitur eam ut, suavitate maluisset nam ad.</p>
<!--                <h5 class="black-text">Socialize with us</h5>-->
                <ul>
                    <img src="<?= asset('images/social.png')?>" width="120"/>
                    <!--<li><a class="black-text text-lighten-3" href="#!">Contact us</a></li>-->
                    <!--<li><a class="black-text text-lighten-3" href="#!">Our Team</a></li>-->
                    <!--<li><a class="black-text text-lighten-3" href="#!">Ads info</a></li>-->
                    <!--<li><a class="black-text text-lighten-3" href="#!">Terms</a></li>-->
                    <!--<li><a class="black-text text-lighten-3" href="#!">Privacy</a></li>-->
                </ul>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="black-text">Newsletter</h5>
                <ul>
                    <div class="input-field col s12">
                        <form method="post" action="#">
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix" style="font-size: 90%;">Email Address</label>
                            <input type="submit" hidden/>
                        </form>
                    </div>
                    <p><i class="material-icons left">location_on</i>Kathmandu, Nepal</p>
                    <p><i class="material-icons left">ring_volume</i>00977-01-0000000</p>
                    <p><i class="material-icons left">email</i>info@phurkey.com</p>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright black-text">
        <div class="container">
            © 2017 <a href="#" target="_blank">Yakana IT Solutions</a>. All Rights Reserved.
            <a class="black-text text-lighten-4 right" href="#!" style="margin-left: 10px">Contact</a>
            <a class="black-text text-lighten-4 right" href="#!" style="margin-left: 10px">Our Team</a>
            <a class="black-text text-lighten-4 right" href="#!" style="margin-left: 10px">Ads info</a>
            <a class="black-text text-lighten-4 right" href="#!" style="margin-left: 10px">Terms</a>
            <a class="black-text text-lighten-4 right" href="#!" style="margin-left: 10px">Privacy</a>
            <a class="black-text text-lighten-4 right" href="#!" style="margin-left: 10px">Forum</a>

        </div>
    </div>
</footer>
<script type="text/javascript">

    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : '<?= csrf_token(); ?>'}
    });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5914637e64f23d19a89b1b3d/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<!-- auto complete address-->
<script>
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5sNcTWrCpuDoXUOTh5w_cNKtHH_rToN0&libraries=places&callback=initAutocomplete"
        async defer></script>
<!-- end autocomplete address -->
</body>

<script>$(document).ready(function () {
        $(".button-collapse").sideNav();
        $('.modal').modal();
        $('ul.tabs').tabs({
    });
        $('select').material_select();
        $('.materialboxed').materialbox();
        $('.parallax').parallax();
        $('.tooltipped').tooltip({delay: 50});
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 90 // Creates a dropdown of 15 years to control year
        });
        $('.chips-autocomplete').material_chip({
            autocompleteOptions: {
                data: {
                    'Fictional': null,
                    'Geographical': null,
                    'Kids': null,
                    'Lifestyle': null,
                    'Technology': null,
                    'Textbooks': null,
                    'Drama': null,
                    'Biography': null,
                    'Religion': null,
                    'Question Bank': null
                },
                limit: Infinity,
                minLength: 1
            }
        });
    })

</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-99026371-1', 'auto');
    ga('send', 'pageview');

</script>

<script>
    function checkname()
    {
        var name=document.getElementById( "user_name_reg" ).value;

        if(name)
        {
            $.ajax({
                type: 'post',
                url: 'checkdata',
                data: {
                    'user_name':name,
                },
                success: function (response) {
                    $( '#name_status' ).html(response);
                    if(response=="OK")
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
            });
        }
        else
        {
            $( '#name_status' ).html("");
            return false;
        }
    }

    function checkemail()
    {
        var email=document.getElementById( "email_reg" ).value;

        if(email)
        {
            $.ajax({
                type: 'post',
                url: 'checkdata',
                data: {
                    'user_email':email,
                },
                success: function (response) {
                    $( '#email_status' ).html(response);
                    if(response=="OK")
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
            });
        }
        else
        {
            $( '#email_status' ).html("");
            return false;
        }
    }

</script>

</html>