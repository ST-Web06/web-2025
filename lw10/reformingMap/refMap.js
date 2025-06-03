document.getElementById('form').addEventListener('click', function(e) {
    e.preventDefault();

    const users = [
        { id: 1, name: "Alice" },
        { id: 2, name: "Bob" },
        { id: 3, name: "Charlie" }
    ];

    const res = users.map(users => users.name);
    console.log(res);
});

