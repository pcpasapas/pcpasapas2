<template>
<div>
    <div class="creation">
        <h1>Création de sites internet</h1>
    </div>
</template>

<script>
export default {
    name:'Creation'
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