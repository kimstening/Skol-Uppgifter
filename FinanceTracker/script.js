document.getElementById('transaction-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const desc = document.getElementById('desc').value;
    const amount = document.getElementById('amount').value;

    // Create list item
    const li = document.createElement('li');
    li.innerHTML = `${desc}: <strong>$${amount}</strong>`;
    document.getElementById('transaction-list').appendChild(li);

    // Clear form
    document.getElementById('desc').value = '';
    document.getElementById('amount').value = '';

    // Logic: In a real app, use fetch() here to send data to a PHP script
});