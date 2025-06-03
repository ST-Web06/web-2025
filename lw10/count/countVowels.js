document.getElementById('form').addEventListener('submit', function(e) {
    e.preventDefault();     
    
    let input = document.getElementById('string').value;
    let result = countVowels(input.toLowerCase());
    console.log('Введёные данные:', input, ' - ', result.length, ':', result.join(' '));
});
function countVowels (string) {
    let cnt = 0;
    let arr = []
    for (let i of string.split('')){
        
        switch (i) {
            case('а'): arr.push('а'); break
            case('е'): arr.push('е'); break
            case('ё'): arr.push('ё'); break
            case('и'): arr.push('и'); break
            case('о'): arr.push('о'); break
            case('у'): arr.push('у'); break
            case('ы'): arr.push('ы'); break
            case('э'): arr.push('э'); break
            case('ю'): arr.push('ю'); break
            case('я'): arr.push('я'); break    
        }
    }
    return arr;
}