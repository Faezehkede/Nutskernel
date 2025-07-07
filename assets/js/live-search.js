document.addEventListener("DOMContentLoaded", function () {
    const input = document.querySelector("#live-search");
    const resultsBox = document.querySelector("#search-results");
  
    let timeout;
  
    input.addEventListener("keyup", function () {
      const query = input.value.trim();
  
      if (query.length < 3) {
        resultsBox.innerHTML = "";
        return;
      }
  
      clearTimeout(timeout);
      timeout = setTimeout(() => {
        fetch(`${my_ajax.ajax_url}?action=ajax_search&s=${encodeURIComponent(query)}`)
          .then((res) => res.json())
          .then((data) => {
            let html = "";
            if (data.length) {
              html = "<ul class='live-results'>";
              data.forEach((item) => {
                html += `<li><a href="${item.link}">${item.title}</a></li>`;
              });
              html += "</ul>";
            } else {
              html = "<p>No results found</p>";
            }
            resultsBox.innerHTML = html;
          });
      }, 300); // debounce
    });
  });
  