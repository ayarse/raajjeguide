    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/wickedpicker.min.js') }}"></script>
    <script src="{{ asset('assets/leaflet/js/leaflet-src.js') }}"></script>
    <script src="{{ asset('assets/leaflet/js/leaflet.markercluster-src.js') }}"></script>
    <script src="{{ asset('js/custom.js?v=0.1') }}"></script>
    <script src="{{ asset('js/searchMap.js') }}"></script>
    @auth
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAW2KeceKag8PCDqbUrmxQk3OYC7Hxv6JI&"></script>
    <script src="{{ asset('js/locationpicker.jquery.min.js') }}"></script>
    @endauth
    <script src="{{ asset('js/app.js?v=0.6') }}"></script>
    {{-- <script src="{{ asset('js/map.js') }}"></script> --}}
  </body>
</html>