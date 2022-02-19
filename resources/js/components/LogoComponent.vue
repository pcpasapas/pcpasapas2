<template>
	<div class="divlogo">
            <img src="/images/PcP.png" class="logo"/>
            <img src="/images/ordinateur.png" class="ordinateur" />
            <p class="titre_texte">Votre PC sur mesure <br> à prix mini </p>
            <p>Mon compte  Mon panier</p>
    </div>


</template>

<script>
export default {
	// name: 'Logo_'
}
</script>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Dosis&family=Licorice&family=Shizuru&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
	:root{
    --bleu: rgb(62, 176, 180);
    --bleufonce : rgb(71, 8, 243);
	}
	p{
    user-select: none;
	}
	body{
    font-family: 'Dosis', sans-serif;
	}
	/* LOGO TITRE */
	.titre{
    text-align: center;
    align-content: center;
    box-shadow: blue 0px 0px 0px 2px inset, rgb(255, 255, 255) 10px -10px 0px -3px, rgb(31, 193, 27) 10px -10px, rgb(255, 255, 255) 20px -20px 0px -3px, rgb(255, 217, 19) 20px -20px, rgb(255, 255, 255) 30px -30px 0px -3px, rgb(255, 156, 85) 30px -30px, rgb(255, 255, 255) 40px -40px 0px -3px, rgb(255, 85, 85) 40px -40px;
    background: conic-gradient(from 45deg, red, orange, yellow, green, blue, purple);
    height: 100px;
    margin-top: 40px;
    margin-right: 40px;
    border-radius: 30px;
    border: 1px solid black;
	}
	.titre_texte{
    font-size: 2rem;
    font-family: "Lobster";
    display: inline-block;
    justify-content: center;
    vertical-align: middle;
    line-height: normal;
    /* grid-column-start: 2; */
    /* grid-row: 1 / span 2; */
    transform: translate(0, -40%);
    z-index: 1;
    margin-top: auto;
    margin-bottom: auto;
	}
    .divlogo{
        display: grid;
        grid-template-columns: 20% 60% 20%;
        grid-template-rows: 100%;
        margin-top: 10px;
        width:100%;
        height: 200px;
        border-radius: 20px;
        /* border: 1px solid black; */
    }
    .logo{

        display: flex;
        border-radius: 40px;
        vertical-align: middle;
        margin-left: 20px;
        height: 80%;
        align-self: center;
        justify-self: center;
        grid-row-start: 1;
        grid-row-end: 2;
    }
    .ordinateur{
        height: 200px;
        width: 40%;
        display: flex;
        grid-column-start: 2;
        position: absolute;
        transform: translateX(-50%);
        justify-self: center;
        z-index: -1;
        grid-row-start: 1;
        grid-row-end: 2;

    }
    .p{

        display:inline-block;
        margin-top: auto;
        margin-bottom: auto;
        vertical-align: middle;
        justify-content: center;
        grid-row-start: 1;
        grid-row-end: 2;
    }
    .panier{
        grid-column: 3;
        grid-row: 2;
    }
</style>