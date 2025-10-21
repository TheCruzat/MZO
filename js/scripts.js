// once the document is loaded...
document.addEventListener("DOMContentLoaded", (event) => {

  // layout pieces
  const body = document.querySelector('body'),
        mobileBtn = document.querySelector('#mobile-menu');

  // mobile toggle function
  function toggleMobile() {
    if(body.classList.contains('mobile-open')) {
      body.classList.remove('mobile-open')
    } else {
      body.classList.add('mobile-open');
    }
  }

  // mobile button click event
  mobileBtn.addEventListener('click', function() {
    toggleMobile();
  });
});
