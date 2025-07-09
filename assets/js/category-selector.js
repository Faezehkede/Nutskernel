function openCategoryModal() {
    jQuery('#category-modal').show();
    jQuery('#category-levels').html(''); // reset
    loadCategories(0); // Load top-level
}

function closeCategoryModal() {
    jQuery('#category-modal').hide();
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
        // No children — final selection
        const selectedText = jQuery(`#cat-title-${parentId}`).text();
        jQuery('#selected_category_id').val(parentId);
        jQuery('#category_name').val(selectedText);
        closeCategoryModal();
        return;
    }

    const level = jQuery('<div class="category-level"></div>');
    categories.forEach(cat => {
        const item = jQuery(`<div class="category-item" id="cat-title-${cat.id}" onclick="loadCategories(${cat.id})">${cat.name}</div>`);
        level.append(item);
    });

    jQuery('#category-levels').append(level);
}
