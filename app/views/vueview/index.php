<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/vue/1.0.28/vue.min.js"> </script>
    
</head>
<body>
    <div id="app">
        {{ nama }} | {{ umur}} Tahun
        <br>
        <p>{{ message }}</p>
        Message : <input v-model="message">
        <ul>
            <li v-for= "todo in todos">
                {{ todo.text }}
            </li>
        </ul>
        <button v-on:click="reverseMessage"> Reverse Message </button>
    </div>
    

    <script src="<?=HOME_PATH?>vue/vue-imam01.js"> </script>
</body>
</html>