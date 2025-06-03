document.getElementById('form').addEventListener('click', function(e) {
    e.preventDefault();     
    
    let input = ['привет', 'привет', 4, 6, 6, 9, 66];
    let buf = [];

    for (let elem in input){
        buf.push('' + input[elem]);
    }
    console.log('Введёные данные ', buf);


    let result = uniqElem(buf);
    console.log(result);
});

function uniqElem(arr) {
    let res = {}
    for (item of arr) {
        if (item in res) {
            res[item] += 1
        } else {
            res[item] = 1
        }
    }
    return res
}
