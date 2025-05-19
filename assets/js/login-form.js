
  function validateForm() {
    const filled = $('input[name="firstName"]').val() &&
                   $('input[name="lastName"]').val() &&
                   $('input[name="company"]').val() &&
                   $('input[name="phone"]').val() &&
                   $('input[name="role"]:checked').val();

    if (filled) {
      $('.submit-btn').addClass('active').prop('disabled', false);
    } else {
      $('.submit-btn').removeClass('active').prop('disabled', true);
    }
  }

  $(document).ready(function () {
    $('input, select').on('input change', validateForm);

    $('#accountForm').submit(function (e) {
      e.preventDefault();
      alert("Account Created!");
      // You can redirect or save data here
    });
  });

  $(document).ready(function() {
    // When the country code is changed
    $('#countryCode').change(function() {
      // Get the selected option and its data-code
      var countryCode = $(this).find(':selected').data('code');
      
      // Set the value of the phone input to the country code + any existing phone number
      var currentPhone = $('#phone').val().replace(/\D/g, ''); // Remove any non-digit characters from the current input
      if (currentPhone.startsWith(countryCode.replace('+', ''))) {
        $('#phone').val(countryCode + currentPhone.slice(countryCode.length));
      } else {
        $('#phone').val(countryCode); // Set to the new country code if the number doesn't match
      }
    });

    // Trigger change event on page load to set the initial value
    $('#countryCode').trigger('change');
  });

  $(document).ready(function() {
    // When the submit button is clicked
    $('#submitRole').click(function() {
      // Get the selected role
      var selectedRole = $("input[name='role']:checked").val();

      if (selectedRole) {
        // Redirect based on the selected role
        if (selectedRole === 'supplier') {
          window.location.href = 'supplier-dashboard.html';  // Supplier dashboard URL
        } else if (selectedRole === 'buyer') {
          window.location.href = 'buyer-dashboard.html';  // Buyer dashboard URL
        }
      } else {
        alert('Please select a role');
      }
    });
  });


// account

// tabs
const links = document.querySelectorAll('.tab-link');
const panels = document.querySelectorAll('.tab-panel');

links.forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault(); // Prevent jumping to top

    const tabId = link.dataset.tab;

    // Remove active classes
    links.forEach(l => l.classList.remove('active'));
    panels.forEach(p => p.classList.remove('active'));

    // Add active classes
    link.classList.add('active');
    document.getElementById(tabId).classList.add('active');
  });
});

// category

const data = {
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

const mainList = document.getElementById("main-list");
const subList = document.getElementById("sub-list");
const form = document.getElementById("form");
const header = document.getElementById("category-list-header"); // ← new line
const backButton = document.getElementById("back-button");

Object.entries(data).forEach(([key, sub]) => {
  const li = document.createElement("li");
  li.textContent = key;
  li.classList.add("main-category");
  if (Object.keys(sub).length > 0) li.classList.add("has-sub");

  li.addEventListener("click", (e) => {
    e.stopPropagation();

    document.querySelectorAll(".main-category").forEach(el => el.classList.remove("active"));
    document.querySelectorAll(".sub-categories li").forEach(el => el.classList.remove("active"));
    li.classList.add("active");

    subList.innerHTML = '';
    form.style.display = 'none';
    header.style.display = 'flex'; // ← keep header always visible

    if (Object.keys(sub).length > 0) {
      for (let subKey in sub) {
        const subItem = document.createElement("li");
        subItem.textContent = subKey;
        subItem.addEventListener("click", (e) => {
          e.stopPropagation();

          document.querySelectorAll(".sub-categories li").forEach(el => el.classList.remove("active"));
          subItem.classList.add("active");

          // Hide all but header + form
          mainList.style.display = 'none';
          subList.style.display = 'none';
          header.style.display = 'none'; // ← make sure header is still shown
          form.style.display = 'block';
        });
        subList.appendChild(subItem);
      }
      subList.style.display = 'block';
      mainList.style.display = 'block';
    } else {
      subList.style.display = 'none';
      mainList.style.display = 'none';
      header.style.display = 'flex'; // ← keep header
      form.style.display = 'block';
    }
  });

  mainList.appendChild(li);
});

// // Hide on outside click
// document.addEventListener("click", () => {
//   subList.style.display = 'none';
//   form.style.display = 'none';
//   mainList.style.display = 'block';
//   header.style.display = 'flex'; // ← reset header
//   document.querySelectorAll(".main-category, .sub-categories li").forEach(el => el.classList.remove("active"));
// });



backButton.addEventListener("click", (e) => {
  e.preventDefault();
  form.style.display = 'none';
  mainList.style.display = 'block';
  subList.style.display = 'block';
  header.style.display = 'flex';

  // Optionally clear form
  form.querySelector("input").value = "";
  form.querySelector("textarea").value = "";

  // Remove active classes
  document.querySelectorAll(".main-category, .sub-categories li").forEach(el => el.classList.remove("active"));
});


// Search filter
searchInput.addEventListener("input", () => {
  const query = searchInput.value.toLowerCase();
  listContainer.innerHTML = "";

  function filter(obj) {
    const result = {};
    for (let key in obj) {
      if (key.toLowerCase().includes(query)) {
        result[key] = obj[key];
      } else if (obj[key] && typeof obj[key] === "object") {
        const sub = filter(obj[key]);
        if (Object.keys(sub).length > 0) result[key] = sub;
      }
    }
    return result;
  }

  const filtered = filter(categories);
  buildList(filtered, listContainer);
});