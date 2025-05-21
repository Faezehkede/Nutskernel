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

// Search filter
// searchInput.addEventListener("input", () => {
//   const query = searchInput.value.toLowerCase();
//   listContainer.innerHTML = "";

//   function filter(obj) {
//     const result = {};
//     for (let key in obj) {
//       if (key.toLowerCase().includes(query)) {
//         result[key] = obj[key];
//       } else if (obj[key] && typeof obj[key] === "object") {
//         const sub = filter(obj[key]);
//         if (Object.keys(sub).length > 0) result[key] = sub;
//       }
//     }
//     return result;
//   }

//   const filtered = filter(categories);
//   buildList(filtered, listContainer);
// });

// upload file - verification

document.addEventListener('DOMContentLoaded', () => {
  const fileInput = document.getElementById('fileInput');
  const uploadArea = document.getElementById('uploadArea');
  const submitBtn = document.getElementById('submitBtn');

  if (!fileInput || !uploadArea || !submitBtn) {
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

      submitBtn.disabled = false;
      submitBtn.classList.add('active');
    }
  });
});

// Feedback

const emojis = [
  { icon: '😡', label: 'Angry' },
  { icon: '☹️', label: 'Sad' },
  { icon: '😐', label: 'Average' },
  { icon: '🙂', label: 'Good' },
  { icon: '😄', label: 'Excellent' }
];

const emojiList = document.getElementById('emojiList');
const emojiText = document.getElementById('emojiText');
let selectedIndex = 2; // Default is "Average"

function renderEmojis() {
  emojiList.innerHTML = '';
  emojis.forEach((emoji, index) => {
    const span = document.createElement('span');
    span.className = 'emoji' + (index === selectedIndex ? ' active' : '');
    span.innerText = emoji.icon;
    span.onclick = () => {
      selectedIndex = index;
      emojiText.innerText = emoji.label;
      renderEmojis();
    };
    emojiList.appendChild(span);
  });
}

renderEmojis();

function submitFeedback() {
  const opinion = document.getElementById('opinionBox').value.trim();
  const selectedEmoji = emojis[selectedIndex];

  const feedback = {
    mood: selectedEmoji.label,
    icon: selectedEmoji.icon,
    opinion: opinion
  };

  console.log("Feedback Submitted:", feedback);

  // Here you can send this data to a backend using fetch() or AJAX
  alert("Thank you for your feedback!");
}

