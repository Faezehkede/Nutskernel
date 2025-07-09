function openCategoryModal() {
    jQuery('#category-modal').show();
    loadCategories(0); // load root
}

function closeCategoryModal() {
    jQuery('#category-modal').hide();
    jQuery('#category-levels').html('');
}

function loadCategories(parentId) {
    jQuery.ajax({
        url: ajax_object.ajax_url,
        method: 'POST',
        data: {
            action: 'get_child_categories',
            parent_id: parentId
        },
        success: function(response) {
            const data = JSON.parse(response);
            renderCategories(data.categories, parentId);
        }
    });
}

function renderCategories(categories, parentId) {
    if (!categories.length) {
        // No children — this is the selected category
        jQuery('#selected_category_id').val(parentId);
        jQuery('#category_name').val(jQuery('#cat-title-' + parentId).text());
        closeCategoryModal();
        return;
    }

    const levelDiv = jQuery('<div class="category-level"></div>');
    categories.forEach(cat => {
        const catItem = jQuery(`<div class="category-item" id="cat-title-${cat.id}" onclick="loadCategories(${cat.id})">${cat.name}</div>`);
        levelDiv.append(catItem);
    });

    jQuery('#category-levels').append(levelDiv);
}
