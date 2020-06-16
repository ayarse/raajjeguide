import Cookies from 'js-cookie';

$(document).ready(function(){

    if($('.cp-map').length) {
        $('.cp-map').locationpicker({
            location: {
                latitude: $("#latitudeBinder").val() ?? 4.1755,
                longitude: $("#longitudeBinder").val() ?? 73.5093
            },
            zoom: 15,
            inputBinding: {
                latitudeInput: $("#latitudeBinder"),
                longitudeInput: $("#longitudeBinder"),
                radiusInput: null,
                locationNameInput: null
            },
        });
    }

    var initialFavorites = Cookies.get('favorites');
    if(initialFavorites != undefined) {
        var favs = initialFavorites.split(',');
        $('.favourite').each(function (item, index) {
            var listingid = $(this).data('listingid');
            if (favs.indexOf(listingid.toString()) !== -1) {
                $(this).addClass('active');
            }
        });
    }


    $('.favourite').on('click', function(e){
        e.preventDefault();
        var favorites = Cookies.get('favorites');
        var listingid = $(this).data("listingid");
        if(!favorites) {
            favorites = '';
        }
        if($(this).hasClass('active')) {
            favs = favorites.split(',');
            favorites = favs.filter((v) => v != listingid).toString(); 
            console.log(favorites);
        } else {
            favorites = favorites + "," + listingid;
        }
        Cookies.set('favorites', favorites);
        $(this).toggleClass('active');
    });

});