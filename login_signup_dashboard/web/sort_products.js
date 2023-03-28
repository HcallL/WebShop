function sortProducts(sortValue) {
    $.ajax({
        url: 'sort_products.php',
        type: 'POST',
        data: {
            sort_value: sortValue
        },
        success: function(response) {
            $('.product-list').html(response);
        }
    });
}

$('.form-select').on('change', function() {
    var sortValue = $(this).val();
    if (sortValue === 'price_asc') {
        sortProducts(sortValue);
    }
});
