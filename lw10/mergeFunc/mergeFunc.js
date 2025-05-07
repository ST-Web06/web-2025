document.getElementById('mergeFunc').addEventListener('click', function(e) {
    e.preventDefault();

    let result = mergeFunc({ a: 1, b: 2 }, { b: 3, c: 4 });
    console.log(result); 
});

function mergeFunc(obj1, obj2) {
    let resObj = {};
    for (let key in obj1) {
        resObj[key] = obj1[key];
    }
    
    for (let key in obj2) {
        resObj[key] = obj2[key];
    }
    
    return resObj;
}