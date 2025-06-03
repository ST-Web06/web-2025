document.getElementById('event').addEventListener('click', function(e) {
    e.preventDefault();

    const nums = { a: 4, b: 2, c: 3 };
    let res = mapObject(nums, x => x * 2);
    console.log(res);
});

function mapObject(obj, callback) {
    const result = {};
    
    for (const key in obj) {
      result[key] = callback(obj[key]);
    }
    
    return result;
}