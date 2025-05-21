// Add Product - suppliers

function goToStep(stepNumber) {
    // Hide all steps
    document.querySelectorAll('#multiStepForm .step').forEach((step) => {
      step.style.display = 'none';
    });
  
    // Show current step
    const currentStep = document.querySelector(`#multiStepForm .step-${stepNumber}`);
    if (currentStep) {
      currentStep.style.display = 'flex';
    }
  
    // ✅ Update breadcrumb
    const breadcrumbItems = document.querySelectorAll('.breadcrumb li');
    breadcrumbItems.forEach((item, index) => {
      item.classList.remove('active', 'done');
      if (index + 1 < stepNumber) {
        item.classList.add('done');
      } else if (index + 1 === stepNumber) {
        item.classList.add('active');
      }
});
}

  function setupStepCategorySelector({ data, container, onFinalCategorySelect }) {
    const mainList = container.querySelector("#main-list");
    const subList = container.querySelector("#sub-list");
  
    mainList.innerHTML = '';
    subList.innerHTML = '';
  
    const clearList = (list) => list.innerHTML = '';
  
    Object.entries(data).forEach(([mainKey, subObj]) => {
      const mainItem = document.createElement("li");
      mainItem.textContent = mainKey;
  
      mainItem.addEventListener("click", () => {
        clearList(subList);
  
        Object.entries(subObj).forEach(([subKey, subSubObj]) => {
          const subItem = document.createElement("li");
          subItem.textContent = subKey;
  
          subItem.addEventListener("click", () => {
  
            // If the subSubObj is empty or a string, it's final
            if (!subSubObj || typeof subSubObj === 'string' || Object.keys(subSubObj).length === 0) {
              onFinalCategorySelect(subKey);
              return;
            }
  
            Object.entries(subSubObj).forEach(([finalKey, _]) => {
              const finalItem = document.createElement("li");
              finalItem.textContent = finalKey;
  
              finalItem.addEventListener("click", () => {
                onFinalCategorySelect(finalKey);
              });
            });
          });
  
          subList.appendChild(subItem);
        });
      });
  
      mainList.appendChild(mainItem);
    });
  }
  
  const categoryData = {
    "Fresh Fruits": {},
    "Processed Fruits": {
      "Frozen Fruits": {},
      "Dried Fruits": {},
      "Fruit Pulp & Concentrates": {},
      "Packed Fruits": {}
    },
    "Nuts & Kernels": {
      "Pistachio": {},
      "Almond": {},
      "Walnuts": {},
      "Hazelnuts": {},
      "Date fruit": {},
      "Date products": {},
      "Peanuts": {},
      "Macadamia": {}
    },
    "Seeds and Oil Seeds": {
      "Sunflower oil": {},
      "Palm oil": {},
      "Cooking oil": {},
      "Olive oil": {},
      "Soybean oil": {},
      "Corn oil": {},
      "Rapeseed oil": {},
      "Coconut oil": {},
      "Sesam oil": {},
      "Caster oil": {},
      "Camellia oil": {},
      "Other oil": {}
    },
    "Grains , Cereal & Legume": {
      "Grain & Cereals": {},
      "Legumes": {},
      "Milling Products": {}
    },
    "Vegetables": {
      "Fresh Vegetables": {},
      "Frozen Vegetables": {},
      "Dried Vegetables": {}
    },
    "Herbs, Spices & Seasonings": {
      "Herbs": {},
      "Spices": {},
      "Honey": {}
    },
    "Meat": {
      "Beef": {},
      "Lamb & Mutton": {},
      "Poultry": {},
      "Pork": {},
      "Chicken Meat": {},
      "Chicken Paws": {},
      "Fowl & LiveStock": {},
      "Processed Meats": {},
      "Frozen Meat & Poultry": {},
      "Edible Offals": {}
    },
    "Seafood": {
      "Fish": {},
      "Shellfish": {},
      "Dried seafood": {},
      "Other seafood": {}
    },
    "Dairy & Eggs": {
      "Milk": {},
      "Milk Powder": {},
      "Cream": {},
      "Ice Cream": {},
      "Cheese": {},
      "Butter": {},
      "Yogurt": {},
      "Canned Dairy Products": {},
      "Whey powder": {},
      "Other Dairy products": {},
      "Eggs": {}
    },
    "Baked Goods": {
      "Breads": {},
      "Cakes & Pastries": {},
      "Cookies & Biscuits": {},
      "Tortillas": {}
    },
    "Beverages": {
      "Coffee": {},
      "Tea": {},
      "Juices": {},
      "Sodas & Soft Drinks": {},
      "Alcoholic Beverages": {},
      "Non-alcoholic Beverages": {},
      "Water": {},
      "Plant-based Beverages": {}
    },
    "Packaged Food": {},
    "Snack & Confectionary": {
      "Chips & Crisps": {},
      "Popcorn": {},
      "Pretzels": {},
      "Granola Bars": {},
      "Crackers": {},
      "Trail Mixes": {},
      "Meat Snacks": {},
      "Fruit Snacks": {},
      "Chocolate": {},
      "Candy": {},
      "Chewing Gum": {}
    },
    "Baby Foods": {
      "Cereals & Purees": {},
      "Formula & Milk": {}
    },
    "Pet Foods": {
      "Dog Food": {},
      "Cat Food": {},
      "Bird & Fish Food": {}
    },
    "Supplements & Nutrition": {
      "Protein Powders": {},
      "Vitamins": {},
      "Probiotics": {},
      "Herbal Supplements": {}
    },
    "Other Products": {}
  };
  
  $("#add-product").on("click", function () {
    $("#multiStepForm").slideDown();
    $(".product-content-title").slideUp();
  
    goToStep(1); // Start from step 1
  
    setupStepCategorySelector({
      data: categoryData,
      container: document.getElementById("multiStepForm"),
      onFinalCategorySelect: (category) => {
        console.log("Selected final category:", category);
        goToStep(2); // Automatically go to step 2
      }
    });
  });

// upload photo - new product

  document.addEventListener('DOMContentLoaded', () => {
    const fileInput = document.getElementById('photoInput');
    const uploadArea = document.getElementById('photouploadArea');
  
    if (!fileInput || !uploadArea ) {
      console.warn("One or more required elements are missing in the DOM.");
      return;
    }
  
    fileInput.addEventListener('change', () => {
      const file = fileInput.files[0];
  
      if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function(e) {
          uploadArea.innerHTML = `<img src="${e.target.result}" alt="Uploaded Image" class="preview-img" />`;
        };
        reader.readAsDataURL(file);
      }
    });
  });
  
//   final step - detail

$(document).ready(function () {
    // Show/hide description and delete on selection
    $(document).on('change', '.detail-select', function () {
      const $item = $(this).closest('.detail-item');
      if ($(this).val() && $(this).val() !== 'Select an item') {
        $item.find('.text-input-wrapper').slideDown();
        $item.find('.remove-button').fadeIn();
        $item.find('textarea').attr('placeholder', `Describe your product ${$(this).val()}.`);
      } else {
        $item.find('.text-input-wrapper').slideUp();
        $item.find('.remove-button').fadeOut();
      }
    });
  
    // Add new detail-item
    $('#add-detail').on('click', function () {
      const newItem = $('#detail-template .detail-item').clone();
      $('#detail-container').append(newItem);
    });
  
    // Remove detail-item
    $(document).on('click', '.remove-button', function () {
      $(this).closest('.detail-item').remove();
    });
});

// Message sidebar tabs

const tabMessages = document.getElementById('tab-messages');
  const tabBuyers = document.getElementById('tab-buyers');
  const contentMessages = document.getElementById('content-messages');
  const contentBuyers = document.getElementById('content-buyers');

tabMessages.addEventListener('click', () => {
  tabMessages.classList.add('active');
  tabBuyers.classList.remove('active');
  contentMessages.classList.add('active');
  contentBuyers.classList.remove('active');
});

tabBuyers.addEventListener('click', () => {
  tabBuyers.classList.add('active');
  tabMessages.classList.remove('active');
  contentBuyers.classList.add('active');
  contentMessages.classList.remove('active');
});

// Sorting in newRFQ

$(document).ready(function () {
  // Store original index
  $("#rfq-list .rfq-item").each(function (index) {
    $(this).attr("data-original-index", index);
  });

  // Sorting handler
  $("#sort-select").on("change", function () {
    var sortBy = $(this).val();
    var $items = $("#rfq-list .rfq-item");

    var sorted = $items.get().sort(function (a, b) {
      if (sortBy === "newest") {
        return new Date($(b).data("date")) - new Date($(a).data("date"));
      } else {
        return $(a).data("original-index") - $(b).data("original-index");
      }
    });

    $("#rfq-list").empty().append(sorted);
  });

});

// Floating Button

$(document).ready(function () {
  // Toggle the modal on button click
  $('.support-bot-button-wrapper .fixed-action').on('click', function () {
    $('.support-bot-modal-wrapper').fadeToggle(); // Toggle show/hide
  });
});

// Tab and Live chat

  // Tab switching
  $('.faq-tab').click(function () {
    var selected = $(this).data('tab');
    $('.faq-tab').removeClass('active');
    $(this).addClass('active');
    $('.faq-sections > div').removeClass('active');
    $('#' + selected).addClass('active');
  });

  // Live chat button click
  $('.live-chat-btn').click(function () {
    $('.faq-wrapper').hide();
    $('.chat-box').show();
  });

  // Back arrow to return to FAQs
  $('.back-arrow').click(function () {
    $('.chat-box').hide();
    $('.faq-wrapper').show();
  });

  // Answer Dropsown

  $(document).ready(function () {
    $('.faq-answer').hide(); // Hide all answers initially
  
    $('.faq-question').click(function () {
      const $answer = $(this).next('.faq-answer');
  
      // Optional: close other answers
      $('.faq-answer').not($answer).slideUp();
      
      $answer.slideToggle(); // Toggle this answer
    });
  
    // Tab switching logic (if you use tabs)
    $('.faq-tab').click(function () {
      $('.faq-tab').removeClass('active');
      $(this).addClass('active');
  
      const target = $(this).data('target');
      $('.faq-tab-content').hide();
      $('#' + target).show();
    });
  
    // Show first tab by default
    $('.faq-tab:first').click();
  });