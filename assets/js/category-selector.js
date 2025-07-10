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
    categoryStack.push({ id: parentId, label: label });
    const tree = categoryStack.map(item => item.label).join(' > ');
    jQuery('#selected_category_id').val(parentId);
    jQuery('#category_name').val(tree);
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
  const value = jQuery(this).val();
  clearTimeout(searchTimeout);
  if (value.length >= 3) {
    searchTimeout = setTimeout(() => {
      jQuery.ajax({
        url: ajax_object.ajax_url,
        method: 'POST',
        data: {
          action: 'get_child_categories',
          search: value
        },
        success: function (response) {
          console.log('✅ AJAX Response:', response);
          const data = JSON.parse(response);
          jQuery('#back-button').hide();
          categoryStack = [];
          renderCategories(data.categories, 0, 'Search results');
        }
      });
    }, 300);
  }
});
