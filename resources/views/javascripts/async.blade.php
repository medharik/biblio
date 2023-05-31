<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>javscript asynchrone</title>
</head>

<body>
    Ref Produit : <input type="text" name="produit" id="produit">
    <button onclick="recuperer()">Ok</button>
            <div id="resultat">
            <h1 id="titre"></h1>
            <h2 id="prix"></h2>
            <img id="tof" src="" width="200" alt="">
            </div>

    <script>
        function recuperer() {
            let titre=document.getElementById('titre');
            let prix=document.getElementById('prix');
            let produit=document.getElementById('produit');
            let tof=document.getElementById('tof');
            console.log('debut');
// envoyer une requete au serveur pour recuperer une reponse ( produit ) promise
let reponse1=fetch('https://fakestoreapi.com/products/'+produit.value).then(rep=>rep.json()).then(d=>{
//object detructuring
    const {title,price,image}=d;



    titre.innerHTML=title
prix.innerHTML=price+"€"
tof.src=image


});
// console.log('reponse 1 ok',reponse1);
// convertir la reponse en json depuis la precedente  reponse
//afficher les doonnees de ce produits (mnt en json) dans la page web
            console.log('fin');


        }
           // fonction nommee
        function ajouter1(a, b) {
            return a + b;
        }
        //arrow function
        const ajouter2 = (a, b) => {
            return a + b;
        }
        const ajouter3 = (a, b) => a + b;



        let somme = ajouter1(3, 7);
        let somme2 = ajouter2(3, 7);
        let somme3 = ajouter3(1, 2);
        console.log(somme, somme2, somme3);

    </script>

</body>

</html>
