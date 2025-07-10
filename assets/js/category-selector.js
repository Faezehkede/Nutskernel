let categoryStack = [];

function openCategoryModal() {
  categoryStack = [];
  jQuery('#category-modal').show();
  jQuery('#category-search').val('');
  jQuery('#back-button').hide();
  loadCategories(0);
}

function closeCategoryModal() {
  jQuery('#category-modal').hide();
  jQuery('#category-search').val('');
  jQuery('#category-levels').html('');
}

function loadCategories(parentId, label = 'Top Level') {
  console.log('⏳ Requesting categories for parent_id:', parentId);
  jQuery('#category-levels').html('<p class="loading-message">Loading...</p>');
  jQuery('#back-button').toggle(categoryStack.length > 0);

  jQuery.ajax({
    url: ajax_object.ajax_url,
    method: 'POST',
    data: {
      action: 'get_child_categories',
      parent_id: parentId
    },
    success: function (response) {
      const data = JSON.parse(response);
      renderCategories(data.categories, parentId, label);
    }
  });
}

function renderCategories(categories, parentId, label) {
  jQuery('#category-levels').empty();

  if (!categories.length) {
    // Push the final selected category
    categoryStack.push({ id: parentId, label: label });
  
    // Remove unwanted levels (Top Level, Search Results)
    const cleanStack = categoryStack.filter(item =>
      item.label !== 'Top Level' && item.label !== 'Search results'
    );
  
    // Create the breadcrumb text
    const tree = cleanStack.map(item => item.label).join(' > ');
  
    // Set the selected category ID and name (breadcrumb) to the inputs
    jQuery('#selected_category_id').val(parentId);
    jQuery('#category_name').val(tree);
  
    // Close the modal
    closeCategoryModal();
    return;
  }

  categoryStack.push({ id: parentId, label: label });

  categories.forEach(cat => {
    const item = jQuery(`<div class="category-item ${cat.has_children ? 'parent' : ''}" id="cat-title-${cat.id}" data-name="${cat.name.toLowerCase()}">${cat.name}</div>`);
    item.click(() => loadCategories(cat.id, cat.name));
    jQuery('#category-levels').append(item);
  });
}

function goBack() {
  categoryStack.pop(); // remove current
  const previous = categoryStack.length ? categoryStack[categoryStack.length - 1] : { id: 0, label: 'Top Level' };
  categoryStack.pop(); // pop again to replace with refreshed
  loadCategories(previous.id, previous.label);
}

let searchTimeout = null;
jQuery('#category-search').on('input', function () {
  const value = jQuery(this).val().trim();

  clearTimeout(searchTimeout);

  if (value.length === 0) {
    // ⏪ Reset to top-level
    categoryStack = [];
    jQuery('#back-button').hide();
    loadCategories(0);
    return;
  }

  if (value.length >= 3) {
    jQuery('#loading-indicator').show(); // show dots
    searchTimeout = setTimeout(() => {
      jQuery.ajax({
        url: ajax_object.ajax_url,
        method: 'POST',
        data: {
          action: 'get_child_categories',
          search: value
        },
        success: function (response) {
          const data = JSON.parse(response);
          jQuery('#loading-indicator').hide(); // hide dots
          jQuery('#back-button').hide();
          categoryStack = [];
          renderCategories(data.categories, 0, 'Search results');
        },
        error: function () {
          jQuery('#loading-indicator').hide();
        }
      });
    }, 300);
  }
});

