$('#searchBtn').on('click', function() {
    var searchQuery = $('#searchInput').val().trim();    

    if (searchQuery !== '') {
        $.ajax({
            url: '/pokemons/search',  
            type: 'GET',
            data: {
                query: searchQuery
            },
            success: function(response) {
                $('.results').html(response);
            },
            error: function(xhr) {
                console.log('Error occurred:', xhr);
                $('.results').html('<p>An error occurred while searching for Pokémon.</p>');
            }
        });
    } else {
        alert('Please enter a Pokémon name to search.');
    }
});

// Enter button submit
$('#searchInput').on('keypress', function(e) {
    if (e.which === 13) {
        $('#searchBtn').click();
    }
});

