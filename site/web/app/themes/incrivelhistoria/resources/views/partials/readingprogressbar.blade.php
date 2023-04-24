<div class="fixed top-0 left-0 w-full h-2 bg-gray-400">
    <div class="h-full bg-green-500 reading-progress" style="width: 0%; transition: width 0.2s ease-in-out;"></div>
</div>

<script type="text/javascript">
    // Get the height of the article
    var articleHeight = document.querySelector('.type-post').clientHeight;
    
    // Update the progress bar as the user scrolls
    window.addEventListener('scroll', function() {
      // Get the current scroll position and window height
      var scrollTop = window.pageYOffset;
      var windowHeight = window.innerHeight;
    
      // Calculate the progress percentage
      var progress = Math.min(scrollTop / (articleHeight - windowHeight), 1);
    
      // Update the progress bar width
      var progressBar = document.querySelector('.reading-progress');
      progressBar.style.width = progress * 100 + '%';
    
      // Check if the user has reached the end of the content
      if (scrollTop + windowHeight === articleHeight) {
        progressBar.style.width = '100%';
      }
    });
    
</script>