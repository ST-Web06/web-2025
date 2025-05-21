document.getElementById('event').addEventListener('click', function(e) {
    e.preventDefault();
   
    const numbers = [2, 5, 8, 10, 3, 23];

    const res = numbers.map(x => x * 3).filter(num => num > 10);
    console.log(res);
});