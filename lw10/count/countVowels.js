document.getElementById('form').addEventListener('submit', function(e) {
    e.preventDefault();     
    
    let input = document.getElementById('string').value;
    let result = countVowels(input);
    console.log('Введёные данные:', input, ' - ', result);
});
function countVowels (string) {
    let cnt = 0;
    for (let i of string.split('')){
        switch (i) {
            case('а'):
            case('е'):
            case('ё'):
            case('и'):
            case('о'):
            case('у'):
            case('ы'):
            case('э'):
            case('ю'):
            case('я'):
                cnt += 1;
        }
    }
    return cnt
}