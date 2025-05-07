document.getElementById('primeNumber').addEventListener('click', function(e) {
    e.preventDefault();     
    
    let input = document.getElementById('prime').value;

    let data = [12, 13, 23, 42, -13, 44, '123', 'as', {}];

    let intNumbersArray = [];
    
    if (typeof(data) === 'number'){
        intNumbersArray = [data];
    } else {
        intNumbersArray = data;
    }
    console.log(data);

    let result = primeNumbers(intNumbersArray);

    let trueRes = '';
    let falseRes = '';

    for (let i in result) {
        if (result[i] == true){
            trueRes += intNumbersArray[i] + ' ';
        } else if (result[i] == false) {
            falseRes += intNumbersArray[i] + ' ';
        }
    }
    if (trueRes.length === 0){
        trueRes = 'Не найдены ';
    }
    if (falseRes.length === 0){
        falseRes = 'не найдены ';
    }
    console.log("Результат: " + trueRes + "простые числа, " + falseRes + "составные числа");
});

function primeNumbers(numbersArray){
    let result = {};

    for (let num in numbersArray) {

        if (typeof(numbersArray[num]) != 'number'){
            console.log(numbersArray[num], "не является числом");
        } else {

        if (numbersArray[num] === 1 || Math.abs(numbersArray[num]) === 2){
            result[num] = true;
            continue;
        }
        if (numbersArray[num] < 0){
            result[num] = false;
            continue;    
        }
        for (let i = 2; i < Math.abs(numbersArray[num]); i++) {
            if  (Math.abs(numbersArray[num]) % i === 0){
                result[num] = false;
                break;
            } 
        }
        if (result[num] != false) {
            result[num] = true;
        }
    }      
    }
    return result;
}