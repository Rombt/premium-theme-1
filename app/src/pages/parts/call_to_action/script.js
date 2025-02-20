document.addEventListener('DOMContentLoaded', function () {
  let modal = document.getElementById('thank-you-modal');
  let closeButton = document.getElementById('close-modal-btn');
  let form = document.getElementById('rmbt-call-to-action-form');

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    let formData = new FormData(form);

    fetch(form.getAttribute('action'), {
      method: 'POST',
      body: formData,
    })
      .then(response => {
        if (!response.ok) {
          throw new Error(`Server error: ${response.status}`);
        }
        return response.json();
      })
      .then(data => {
        if (data.success) {
          form.reset();
          modal.style.display = 'flex';
        } else {
          alert('Error: ' + (data.message || 'Unknown error.'));
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while submitting the form.');
      });
  });

  closeButton.addEventListener('click', function () {
    modal.style.display = 'none';
  });

  window.addEventListener('click', function (event) {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });
});
