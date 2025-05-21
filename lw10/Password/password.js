    document.getElementById('event').addEventListener('click', function(e) {
    e.preventDefault();

    let password = getPassword(10);
    console.log(password.join(''));
});
const specialChars = '!@#$%^&*()_+-=[]{}|;:,.<>?';

function notRepeating(obj, n){
    let randInd;
    do {
        randInd = Math.floor(Math.random() * n);
    } while (obj.includes(randInd));
    
    return randInd;
}

function getPassword(n){
    let resArr = [];
    let caseNum = -1;
    let individVal = 6;
    if (n < 6){
        individVal = n
    }
    for(let i = 0; i < n; i++){
        resArr[i] = randomSymb(caseNum);
    }

    let randIndArr = [];
    for (let i = 0; i < individVal; i++) {
        randIndArr[i] = notRepeating(randIndArr, n);
    }

    for (let i = 0; i < individVal; i++) {
        resArr[randIndArr[i]] = randomSymb(i);
    }
    return resArr;
}

function randomSymb(i){
    if (i === -1){
        i = Math.floor(Math.random() * 6);
    }
    switch (i){
        case 0: return String.fromCharCode(Math.floor(Math.random() * 32) + 1040); // Русская большая буква
        case 1: return String.fromCharCode(Math.floor(Math.random() * 10) + 48); // Цифры
        case 2: return specialChars[(Math.floor(Math.random() * specialChars.length))]; // Спец. символы
        case 3: return String.fromCharCode(Math.floor(Math.random() * 32) + 1072); // Русская маленькая буква
        case 4: return String.fromCharCode(Math.floor(Math.random() * 26) + 65); // Английская большая буква
        case 5: return String.fromCharCode(Math.floor(Math.random() * 26) + 97); // Английская маленькая буква
    }
    
}
