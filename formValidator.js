const form = document.getElementById('form');

form.addEventListener('submit', function (e) {
    e.preventDefault();

    const title = document.getElementById('title').value;
    const author = document.getElementById('author').value;
    const content = document.getElementById('content').value;
    

    if (title === '' || author === '' || content === '') {
        alert('Please fill in all fields');
    }
    
});

