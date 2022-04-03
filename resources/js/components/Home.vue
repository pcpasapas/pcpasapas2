<template>
<div>
    <div class="home">
        
        <!-- <img class="logo" src="../assets/images/PcP.png"/> -->
        <section class="sect1">
            <h3>Votre Pc sur mesure monté au meilleur prix avec des pièces neuves ou d'occasion</h3>
            <img class="image" src="/images/pcgamertitre.jpg">
        </section>
        <section class="sect">
        <h3>Des solutions de dépannage adaptées à votre budget, récupération de données sur disque dur...</h3>
            <img class="image" src="/images/depannage.jpg">
        </section>
        <section class="sect">   
            <h3>Achat et vente de pièces détachées neuves ou d'occasions</h3>
            <img class="image" src="/images/piecesdetachees.png">
        </section>
    </div>
    <img class="imagelivraison" src="/images/livraisonfrance.png">
</div>
</template>

<script>
export default {
    // name:'Home'
}
</script>

<style scoped>
.home{
    display: grid;
    height: auto;

    grid-template-rows: 1fr 1fr 1fr;
}
.sect{
    height: auto;
    display: block;
}
.sect1{
    grid-row: 1;
}
.p{
    display: block;
        border: 1px black solid;

}
.image{
    height: 100px;
}
.logo{
    grid-column-start: 1;
    grid-row-start: 1;
    grid-row-end: 5;
        border: 1px black solid;
    width:100%;
    height: 100%;
    margin-left: 20px;



}
</style>