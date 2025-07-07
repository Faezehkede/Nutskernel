document.addEventListener("DOMContentLoaded", function () {
    const input = document.querySelector("#live-search");
    const resultsBox = document.querySelector("#search-results");
    const loader = document.querySelector("#loader");
  
    let timeout;
  
    input.addEventListener("keyup", function () {
      const query = input.value.trim();
  
      if (query.length < 3) {
        resultsBox.innerHTML = "";
        loader.style.display = "none";
        return;
      }
  
      clearTimeout(timeout);
      timeout = setTimeout(() => {
        loader.style.display = "block";
        fetch(`${my_ajax.ajax_url}?action=ajax_search&s=${encodeURIComponent(query)}`)
          .then((res) => res.json())
          .then((data) => {
            loader.style.display = "none";
  
            if (data.length) {
              let html = "<div class='live-grid'>";
              data.forEach((item) => {
                html += `
                  <div class="live-item">
                    <a href="${item.link}">
                      <img src="${item.image}" alt="${item.title}" />
                      <span>${item.title}</span>
                    </a>
                  </div>`;
              });
              html += "</div>";
              resultsBox.innerHTML = html;
            } else {
              resultsBox.innerHTML = "<p>No results found</p>";
            }
          });
      }, 300);
    });
  });
  