google.charts.load("current", {
    packages: ["corechart"],
});
google.charts.setOnLoadCallback(drawChart);

const url = "http://127.0.0.1:8000";

const getTop5SellingProducts = async () => {
    await fetch(`${url}/getTop5SellingProducts`, {
        method: "GET",
        mode: "no-cors",
        headers: new Headers({
            Accept: "application/json",
        }),
    })
        .then((response) => response.json())
        .then((json) => {
            let data = Array();

            console.log(json);

            json.forEach((item) => {
                data.push(item.produto);
            });

            console.table(data);

            return data;
        })
        .catch((error) => console.error(error));
};

const getTop5SellingCategories = async () => {
    await fetch(`${url}/getTop5SellingCategories`, {
        method: "GET",
        mode: "no-cors",
        headers: new Headers({
            Accept: "application/json",
        }),
    })
        .then((response) => response.json())
        .then((json) => {
            let data = Array();

            json.forEach((item) => {
                data.push(item);
            });

            console.table(data);

            return data;
        })
        .catch((error) => console.error(error));
};

const getTop5SellingUsers = async () => {
    await fetch(`${url}/getTop5SellingUsers`, {
        method: "GET",
        mode: "no-cors",
        headers: new Headers({
            Accept: "application/json",
        }),
    })
        .then((response) => response.json())
        .then((json) => {
            let data = Array();

            json.forEach((item) => {
                data.push(item);
            });

            console.table(data);

            return data;
        })
        .catch((error) => console.error(error));
};

const getAllPedidos = async () => {
    await fetch(`${url}/getAllPedidos`, {
        method: "GET",
        mode: "no-cors",
        headers: new Headers({
            Accept: "application/json",
        }),
    })
        .then((response) => response.json())
        .then((json) => {
            console.log(json);
        })
        .catch((error) => console.error(error));
};

const getAllUsers = async () => {
    await fetch(`${url}/getAllUsers`, {
        method: "GET",
        mode: "no-cors",
        headers: new Headers({
            Accept: "application/json",
        }),
    })
        .then((response) => response.json())
        .then((json) => {
            console.log(json);
        })
        .catch((error) => console.error(error));
};

const getAllPedidosLastYear = async () => {
    await fetch(`${url}/getAllPedidosLastYear`, {
        method: "GET",
        mode: "no-cors",
        headers: new Headers({
            Accept: "application/json",
        }),
    })
        .then((response) => response.json())
        .then((json) => {
            console.table(json);
        })
        .catch((error) => console.error(error));
};

const getAllPedidosLastMonth = async () => {
    await fetch(`${url}/getAllPedidosLastMonth`, {
        method: "GET",
        mode: "no-cors",
        headers: new Headers({
            Accept: "application/json",
        }),
    })
        .then((response) => response.json())
        .then((json) => {
            console.table(json);
        })
        .catch((error) => console.error(error));
};

const getAllPedidosLastWeek = async () => {
    await fetch(`${url}/getAllPedidosLastWeek`, {
        method: "GET",
        mode: "no-cors",
        headers: new Headers({
            Accept: "application/json",
        }),
    })
        .then((response) => response.json())
        .then((json) => {
            console.table(json);
        })
        .catch((error) => console.error(error));
};

const getAllPedidosLastDay = async () => {
    await fetch(`${url}/getAllPedidosLastDay`, {
        method: "GET",
        mode: "no-cors",
        headers: new Headers({
            Accept: "application/json",
        }),
    })
        .then((response) => response.json())
        .then((json) => {
            console.log(json);
        })
        .catch((error) => console.error(error));
};

function drawChart() {
    const products = getTop5SellingProducts();
    const categories = getTop5SellingCategories();
    const users = getTop5SellingUsers();
    const pedidos = getAllPedidos();
    const clientes = getAllUsers();
    const pedidosLastYear = getAllPedidosLastYear();
    const pedidosLastMonth = getAllPedidosLastMonth();
    const pedidosLastWeek = getAllPedidosLastWeek();
    const pedidosLastDay = getAllPedidosLastDay();

    console.log(products);
    console.log(categories);
}
