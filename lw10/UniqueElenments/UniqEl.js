document.getElementById('form').addEventListener('submit', function(e) {
    e.preventDefault();     
    
    let data = ['привет', 'привет', 4, 6, 6, 9];
    let buf = [];

    for (let d in data){
        buf.push('' + data[d]);
    }
    console.log('Введёные данные ', buf);


    let result = uniqElem(buf);
    console.log(result);
});

function uniqElem(arr){
    let res = {};
    for (let i in arr){
        let counter = 0
        for (let k in arr){
            console.log(i, k);
            if (arr[i] == arr[k]){
                if (k < i){
                    break;
                } else {
                    counter += 1;
                }
            }
            if (k == arr.length - 1){
                res[arr[i]] = counter;
            }
        }   
    }
    return res
}