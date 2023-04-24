// Get the height of the article
var articleHeight = document.querySelector('.type-post').clientHeight;

// Update the progress bar as the user scrolls
window.addEventListener("scroll", function() {
  // Get the current scroll position and window height
  var scrollTop = window.pageYOffset;
  var windowHeight = window.innerHeight;

  // Calculate the progress percentage
  var progress = Math.min(scrollTop / (articleHeight - windowHeight), 1);

  // Update the progress bar width
  var progressBar = document.querySelector(".reading-progress");
  progressBar.style.width = progress * 100 + "%";

  // Check if the user has reached the end of the content
  if (scrollTop + windowHeight === articleHeight) {
    progressBar.style.width = "100%";
  }
});
