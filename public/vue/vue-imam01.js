new Vue({
    el : '#app',
    data : {
        nama: "Imam",
        umur: 33,
        message: "Hello Vue.js!",
        todos: [
            {text: 'Pray'},
            {text: 'Learn'},
            {text: 'Fun'}
        ]        
    },
    methods: {
        reverseMessage: function () {
            this.message = this.message.split('').reverse().join('')
        }
    }
})