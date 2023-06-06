    var quotes = document.getElementById('quotes');
    var authors = document.getElementById('authors');
    var category = 'happiness'
    $.ajax({
        method: 'GET',
        url: 'https://api.api-ninjas.com/v1/quotes?category=' + category,
        headers: { 'X-Api-Key': 'LEbI951hTBYTtR2O8vyNjg==VLcoZ8JFSeXGmPWb'},
        contentType: 'application/json',
        success: function(result) {
            
            quotes.innerText = result[0].quote;
            authors.innerText = result[0].author;
            
        },
        error: function ajaxError(jqXHR) {
            console.error('Error: ', jqXHR.responseText);
        }
    });