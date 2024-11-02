
document.getElementById('loadHtml').addEventListener('click', function() { 
    const url = 'index.html'; 

    fetch(url) 
        .then(response => response.text()) 
        .then(html => { 
            document.getElementById('content').innerHTML = html; 
        }) 
        .catch(error => { 
            console.error('Error loading HTML:', error); 
        }); 
}); 
