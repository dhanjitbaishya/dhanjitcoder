function loadPage(page) {
  const content = document.getElementById('content');
  fetch(page + '.html')
    .then(response => response.text())
    .then(html => {
      content.innerHTML = html;
    })
    .catch(error => console.log('Error loading page:', error));
}


  content.innerHTML = pageContent;
}