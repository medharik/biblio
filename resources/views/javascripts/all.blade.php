<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    Categorie :
    <select name="" id="categories"  onchange="getProduit(this.value)">

        <option value=""></option>
    </select> <button onclick="getProduit(document.getElementById('categories').value)">ok</button>
    <ul id="liste">
        <li></li>
    </ul>
    <script>
        let cats = document.getElementById('categories');
        fetch('https://fakestoreapi.com/products/categories')
            .then(res => res.json())
            .then(json => {

                cats.innerHTML = json.map(e => ` <option value="${e}" >${e}</option>`).join("");
            })


        // let tab1 = [1, 3, 8];
        // let tab2 = tab1.map(e => ` <option value="${e}" >${e}</option>`);
        // console.log(tab2)

        const getProduit = (categorie) => {
            fetch('https://fakestoreapi.com/products/category/'+categorie)
            .then(res => res.json())
            .then(json => {
console.log(json)
                liste.innerHTML = json.map(e => ` <li >${e.title} : ${e.price}€</li>`).join("");
            })
        }


       getProduit("men's clothing");
    </script>
</body>

</html>
