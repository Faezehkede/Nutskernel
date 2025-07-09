let categoryStack = []; // Stack to track navigation levels

function openCategoryModal() {
  categoryStack = [];
  jQuery('#category-modal').show();
  loadCategories(0);
}

function closeCategoryModal() {
  jQuery('#category-modal').hide();
  jQuery('#category-search').val('');
  jQuery('#category-levels').html('');
}

function loadCategories(parentId, label = 'Top Level') {
  jQuery('#category-levels').html('<p class="loading-message">Loading...</p>');

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
    const selectedText = jQuery(`#cat-title-${parentId}`).text() || label;
    jQuery('#selected_category_id').val(parentId);
    jQuery('#category_name').val(selectedText);
    closeCategoryModal();
    return;
  }

  // Save current step to back stack
  categoryStack.push({ id: parentId, label: label });

  const backBtn = jQuery('<div class="back-button">← Back</div>');
  backBtn.click(function () {
    categoryStack.pop(); // Remove current
    const previous = categoryStack.length ? categoryStack[categoryStack.length - 1] : { id: 0, label: 'Top Level' };
    loadCategories(previous.id, previous.label);
  });

  jQuery('#category-levels').append(backBtn);

  const list = jQuery('<div class="category-level"></div>');
  categories.forEach(cat => {
    const item = jQuery(`<div class="category-item" id="cat-title-${cat.id}" data-name="${cat.name.toLowerCase()}">${cat.name}</div>`);
    item.click(() => loadCategories(cat.id, cat.name));
    list.append(item);
  });

  jQuery('#category-levels').append(list);
}

function filterCategories(searchTerm) {
  const term = searchTerm.toLowerCase();
  jQuery('.category-item').each(function () {
    const name = jQuery(this).data('name');
    jQuery(this).toggle(name.includes(term));
  });
}
