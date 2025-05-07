document.getElementById('test').addEventListener('submit', function(e) {
    e.preventDefault();     
    
    input = document.getElementById('testing').value;
    console.log('Введёные данные ', typeof(input));
});