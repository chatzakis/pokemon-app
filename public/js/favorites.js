var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': csrfToken
    }
});

var buttons = $(".favorite-btn");

buttons.each(function(button) {
    var button = $(this);

    button.on("click", function() {
    var pokemonId = button.data('pokemon-id');

    var cardName = "#card-" + pokemonId;
    var card = $(cardName)

    $.ajax({
        url: '/pokemons/' + pokemonId + '/favorite',
        type: 'POST',
        data: {
            _token: csrfToken
        },
        success: function(response) {
            // Update the button text based on the response
            if (response.favorite) {
                button.html('<i class="fa-solid fa-heart"></i> Remove from Favorites');
                card.addClass("in-favorites");
            } else {
                button.html('<i class="fa-regular fa-heart"></i> Add to Favorites');
                card.removeClass("in-favorites");
            }
        },
        error: function(xhr) {
            alert('An error occurred while updating the favorite status.');
        }
    });
    });
});