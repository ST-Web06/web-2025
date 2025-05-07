document.getElementById('form').addEventListener('submit', function(e) {
    e.preventDefault();     
    
    let input = document.getElementById('string').value;
    console.log('Введёные данные ', input);

    let result = countVowels(input);
    console.log(result);
});

let vowels = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я'];


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