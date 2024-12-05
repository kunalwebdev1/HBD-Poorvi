
document.getElementById('playGame').addEventListener('click', () => {
    document.getElementById('gameModal').style.display = 'flex';
});

document.getElementById('confirmPromise').addEventListener('click', () => {
    alert('Thank you for promising! ❤️');
    document.getElementById('gameModal').style.display = 'none';
});
