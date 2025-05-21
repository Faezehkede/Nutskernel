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
  const header = document.getElementById("category-list-header");
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
  