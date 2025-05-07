document.getElementById('primeNumber').addEventListener('click', function(e) {
    e.preventDefault();

    const nums = { a: 1, b: 2, c: 3 };
    let res = mapObject(nums, x => x * 2);
    console.log(res);





});

function mapObject(obj, func){
    let result = {}
    actionFunc = action(func);
    for (let i in obj){

    }
}

function action(func){
    

}