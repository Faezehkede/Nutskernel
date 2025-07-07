document.addEventListener("DOMContentLoaded", function () {
    const input = document.querySelector("#live-search");
    const resultsBox = document.querySelector("#search-results");
    const loader = document.querySelector("#loader");
  
    let timeout;
  
    input.addEventListener("keyup", function () {
      const query = input.value.trim();
  
      // Hide box if input is too short
      if (query.length < 3) {
        resultsBox.innerHTML = "";
        resultsBox.style.display = "none";
        loader.style.display = "none";
        return;
      }
  
      clearTimeout(timeout);
      timeout = setTimeout(() => {
        loader.style.display = "block";
        resultsBox.style.display = "block"; // show it while loading
  
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
              resultsBox.style.display = "block"; // show with results
            } else {
              resultsBox.innerHTML = "<p>No results found</p>";
              resultsBox.style.display = "block"; // still show "no results"
            }
          })
          .catch(() => {
            loader.style.display = "none";
            resultsBox.innerHTML = "<p>Something went wrong.</p>";
            resultsBox.style.display = "block";
          });
      }, 300);
    });
  });
  