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
        $('.save > a').each(function (item, index) {
            var listingid = $(this).data('listingid');
            if (favs.indexOf(listingid.toString()) !== -1) {
                $(this).find('i').removeClass('far').addClass('fa');
            }
        });
    }


    $('.favourite').on('click', function(e){
        e.preventDefault();
        var listingid = $(this).data("listingid");
        if($(this).hasClass('active')) {
            removeFavorite(listingid);
        } else {
           addFavorite(listingid);
        }
        $(this).toggleClass('active');
    });
    
    $('.save > a').on('click', function (e) {
        e.preventDefault();
        var listingid = $(this).data("listingid");
        if ($(this).find('i').hasClass("fa")) {
            removeFavorite(listingid);
            $(this).find('i').removeClass("fa").addClass("far");
        } else {
            addFavorite(listingid);
            $(this).find('i').removeClass("far").addClass("fa");
        }
    });

    function loadFavorites() {
        $.get('/api/favorites', function (data) {
            var html = '';     
            for (let item of data) {
                html += `<li class="list-group-item">
                <a href="tel:${item['phone']}">${item['title']}</a>
                <p><a href="tel:${item['phone']}"><i class="fa fa-phone"></i> ${item['phone']}</a></p>
                </li>`;
            }
            html = '<ul class="list-group">' + html + '</ul>';
            if (data.length < 1) {
                html = 'No favorites yet. Heart something! ';
            }    
            $("#favoriteParent").html(html);
        });
    }

    function addFavorite(id) {
        var favorites = Cookies.get('favorites');
        if (!favorites) {
            favorites = '';
        }
        favorites = favorites + "," + id;
        Cookies.set('favorites', favorites, { path: '/' });
        loadFavorites();
    }

    function removeFavorite(id) {
        var favorites = Cookies.get('favorites');
        if (!favorites) {
            favorites = '';
        }
        favs = favorites.split(',');
        favorites = favs.filter((v) => v != id).toString(); 
        Cookies.set('favorites', favorites, {path: '/'});
        loadFavorites();
    }



    loadFavorites();


});

