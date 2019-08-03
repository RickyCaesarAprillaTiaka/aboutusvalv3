{{-- FloatingButton --}}
<div class="fixed-action-btn">
    <a class="btn-floating btn-large modal-trigger blue dark-3" href="#modal1">
        <i class="large material-icons">account_circle</i>
    </a>
</div>
{{-- Modal --}}
<div id="modal1" class="modal">
    <div class="modal-content">
        <div class="container">
            <h4 class="center">Login</h4>
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <i class="material-icons prefix">account_box</i>
                    <input type="text" name="" id="username" class="validate">
                    <label for="username">Username</label>
                </div>
                <div class="input-field col s12 m12 l12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="password" name="" id="password" class="validate">
                    <label for="password">Password</label>
                </div>
                <div class="divider col s12 m12 l12"></div>
                <div class="input-field col s6 m6 l6">
                    <i>Lupa Password? <a href="#">Klik disini</a></i>
                </div>
                <div class="input-field col s6 m6 l6">
                    <a class="right waves-effect waves-light btn"><i class="right material-icons">input</i>Login</a>

                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="modal-close waves-effect waves-red btn-flat">Batal</a>
    </div>
</div>
{{-- Modal end --}}
{{-- FloatingButton end --}}
<footer class="page-footer blue lighten-3">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">About Us</h5>
                <p class="grey-text text-lighten-4">Halaman ini berisi tentang informasi kami seperti keahlian, hobi
                    dll.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/ricky_tiaka/">Ricky Caesar
                            Aprilla Tiaka</a></li>
                    <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/ricko.tiaka/">Ricko Caesar
                            Aprilla Tiaka</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2019 Copyright Text
        </div>
    </div>
</footer>

</html>
{{-- Asset Javascript --}}
<script type="text/javascript" src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/materialize/dist/js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/aos/dist/aos.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        //AOS
        AOS.init();
        //AOS end
        // Sidenav
        $('.sidenav').sidenav();
        // Sidenav end

        // Scrollspy
        $('.scrollspy').scrollSpy({
            activeClass: 'active'
        });
        // Scrollspy end

        // Parallax
        $('.parallax').parallax();
        // Parallax end

        // Carousel
        $('.carousel').carousel({
            fullWidth: true,
            indicators: true
        });

        // nextslide time Carousel
        setInterval(function () {
            $('.carousel').carousel('next');
        }, 5000);
        // nextslide time Carousel end

        // Carousel end

        // FloatingButton
        $('.fixed-action-btn').floatingActionButton();
        // FloatingButton end

        // Modal
        $('.modal').modal();
        // Modal end
        $('.slider').slider({
            indicators: false,
            duration: 1000
        });
    });

</script>
{{-- Asset Javascript end --}}
