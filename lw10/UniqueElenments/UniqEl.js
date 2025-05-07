document.getElementById('form').addEventListener('click', function(e) {
    e.preventDefault();     
    
    let data = ['привет', 'привет', 4, 6, 6, 9, 66];
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